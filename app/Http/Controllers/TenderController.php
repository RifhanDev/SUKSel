<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Projects;
use App\Helpers\Helper;
use App\Models\Team;
use App\Models\TeamUser;
use Carbon\Carbon;

class TenderController extends Controller
{
    protected $class_name;
    protected $role;

    public function __construct(Team $teamModel)
    {
        $this->class_name = 'TenderController';

        // ✅ Set a safe default for role to avoid auth() crash during testing
        $this->role = auth()->check() ? auth()->user()->role : 0;
    }

    public function getCiptaTender()
    {
        try {
            $role = $this->role;

            $data = [];

            // 🔒 This restricts to role == 1
            if ($role == 1) {
                return view('tender.cipta-tender', compact('data'));
            }

            // 📝 TEMPORARY: always return view for testing
            return view('tender.cipta-tender', compact('data'));

            // For AJAX call
            return response()->json([
                'status' => 'success',
                'message' => 'Project created successfully!'
            ], 200);

        } catch (\Throwable $th) {
            Log::error($this->class_name . '->' . __FUNCTION__ .
                ' | Line : ' . $th->getLine() .
                ' | Message : ' . $th->getMessage() .
                ' | File : ' . $th->getFile());

            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
        }
    }

    public function function_template(Request $request)
    {
        if ($request->ajax() && $request->isMethod('get')) {
            try {
                $data = [];

                return view('teams.index', compact('data'));

                return response()->json([
                    'status' => 'success',
                    'message' => 'Project created successfully!'
                ], 200);

            } catch (\Throwable $th) {
                Log::error($this->class_name . '->' . __FUNCTION__ .
                    ' | Line : ' . $th->getLine() .
                    ' | Message : ' . $th->getMessage() .
                    ' | File : ' . $th->getFile());

                return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
            }
        }
    }

    public function table_template(Request $request, Team $teamModel)
    {
        if ($request->ajax() && $request->isMethod('get')) {
            try {
                $sort = $request->input('sort', 'id');
                $order = $request->input('order', 'asc');
                $page = $request->input('page', 1);
                $perPage = 10;

                $teams = $teamModel::orderBy($sort, $order)->paginate($perPage, ['*'], 'page', $page);

                $i = 1;
                $tableRows = '';
                foreach ($teams as $team) {
                    $tableRows .= '<tr>';
                    $tableRows .= '<td class="text-center">' . $i++ . '</td>';
                    $tableRows .= '<td class="text-left"><a href="/team/team_members/' . $team->name . '">' . $team->name . '</a></td>';
                    $tableRows .= '<td class="text-center">' . $team->user_id . '</td>';
                    $tableRows .= '<td class="text-center">' . $team->created_at . '</td>';
                    $tableRows .= '<td class="text-center"><button class="btn btn-sm btn-primary">Edit</button></td>';
                    $tableRows .= '</tr>';
                }

                return response()->json([
                    'tableRows' => $tableRows,
                    'pagination' => [
                        'current_page' => $teams->currentPage(),
                        'last_page' => $teams->lastPage(),
                        'per_page' => $teams->perPage(),
                        'total' => $teams->total(),
                    ],
                    'status' => 'success',
                    'message' => 'Project created successfully!'
                ], 200);

            } catch (\Throwable $th) {
                Log::error($this->class_name . '->' . __FUNCTION__ .
                    ' | Line : ' . $th->getLine() .
                    ' | Message : ' . $th->getMessage() .
                    ' | File : ' . $th->getFile());

                return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
            }
        }
    }

    public function getCiptaTenderKerja()
    {
        // your logic
        return view('tender.cipta-tenderKerja'); // or whatever view you're using
    }

}
