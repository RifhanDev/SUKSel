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

class JawatanKuasaController extends Controller
{
    protected $class_name;

    public function __construct(Team $teamModel)
    {
        $this->class_name = 'JawatanKuasaController';
        $this->folder = 'jawatanKuasa';
    }

    public function getIndex()
    {
        try {
            // ### Code here ###
            $data = [];

            // For non-AJAX HTTP requests
            return view($this->folder.'.index', compact('data'));

        } catch (\Throwable $th) {
            Log::error($this->class_name.'->'.__FUNCTION__.' 
                | Line : '.$th->getLine().' 
                | Message : '.$th->getMessage().' 
                | File : '.$th->getFile());

            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
            
            /*
                200 - Success
                201 - Created
                202 - Accepted
                204 - No Content
                
                400 - Bad Request
                401 - Unauthorized
                403 - Forbidden
                404 - Not Found
                405 - Method Not Allowed
                409 - Conflict
                
                500 - Internal Server Error
                502 - Bad Gateway
                503 - Service Unavailable
            */
        }
    }

    public function getList($tender)
    {
        try {
            // ### Code here ###
            $data = [];

            // For non-AJAX HTTP requests
            return view($this->folder.'.list', compact('data'));

        } catch (\Throwable $th) {
            Log::error($this->class_name.'->'.__FUNCTION__.' 
                | Line : '.$th->getLine().' 
                | Message : '.$th->getMessage().' 
                | File : '.$th->getFile());

            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
            
            /*
                200 - Success
                201 - Created
                202 - Accepted
                204 - No Content
                
                400 - Bad Request
                401 - Unauthorized
                403 - Forbidden
                404 - Not Found
                405 - Method Not Allowed
                409 - Conflict
                
                500 - Internal Server Error
                502 - Bad Gateway
                503 - Service Unavailable
            */
        }
    }

    public function function_template()
    {
        if ($request->ajax() && $request->isMethod('get')) {

            try {
                // ### Code here ###
                $data = [];

                // For non-AJAX HTTP requests
                return view('teams.index', compact('data'));
                
                // For AJAX call
                return response()->json([
                    'status' => 'success', 
                    'message' => 'Project created successfully!'
                    ], 200);

            } catch (\Throwable $th) {
                Log::error($this->class_name.'->'.__FUNCTION__.' 
                    | Line : '.$th->getLine().' 
                    | Message : '.$th->getMessage().' 
                    | File : '.$th->getFile());

                return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
                
                /*
                    200 - Success
                    201 - Created
                    202 - Accepted
                    204 - No Content
                    
                    400 - Bad Request
                    401 - Unauthorized
                    403 - Forbidden
                    404 - Not Found
                    405 - Method Not Allowed
                    409 - Conflict
                    
                    500 - Internal Server Error
                    502 - Bad Gateway
                    503 - Service Unavailable
                */
            }
        }
    }

    public function table_template()
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
                // foreach ($teams as $team) {
                //     $tableData[] = [
                //         'id'            => $i++,
                //         'name'          => '<a href="/team/team_members/' . $team->name . '">' . $team->name . '</a>',
                //         'personal_team' => $team->user_id,
                //         'created_at'    => $team->created_at,
                //         'action'        => '<button class="btn btn-sm btn-primary">Edit</button>'
                //     ];
                // }
        
                return response()->json([
                    'tableRows' => $tableRows,
                    // 'data'      => $tableData,
                    'pagination'=> [
                        'current_page'  => $teams->currentPage(),
                        'last_page'     => $teams->lastPage(),
                        'per_page'      => $teams->perPage(),
                        'total'         => $teams->total(),
                    ],
                    'status' => 'success', 
                    'message' => 'Project created successfully!'
                    ], 200);

            } catch (\Throwable $th) {
                Log::error($this->class_name.'->'.__FUNCTION__.' 
                    | Line : '.$th->getLine().' 
                    | Message : '.$th->getMessage().' 
                    | File : '.$th->getFile());

                return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
                
                /*
                    200 - Success
                    201 - Created
                    202 - Accepted
                    204 - No Content
                    
                    400 - Bad Request
                    401 - Unauthorized
                    403 - Forbidden
                    404 - Not Found
                    405 - Method Not Allowed
                    409 - Conflict
                    
                    500 - Internal Server Error
                    502 - Bad Gateway
                    503 - Service Unavailable
                */
            }
        }
    }
}
