<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Helpers\Helper;
use App\Models\TeamUser;
use App\Models\Team;
use Carbon\Carbon;

class TeamsController extends Controller
{
    protected $class_name;

    public function __construct(Team $teamModel)
    {
        $this->class_name = 'TeamsController';
    }

    public function index(Team $teamModel)
    {
        try {
            $data['teams'] = $teamModel::all();

            $data['assets'] = [
                'css' => [
                    'build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
                    'build/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css',
                    'build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css',
                ],
                'js' => [
                    'build/libs/datatables.net/js/jquery.dataTables.min.js',                    // Required datatable js
                    'build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js',            // Buttons examples

                    'build/libs/datatables.net-buttons/js/dataTables.buttons.min.js',           // Button
                    'build/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js',       // Button design
                    // 'build/libs/datatables.net-buttons/js/buttons.print.min.js',
                    'build/libs/datatables.net-buttons/js/buttons.html5.min.js',                // Copy/Excel Button
                    'build/libs/jszip/jszip.min.js',                                            // Excel Export Func
                    'build/libs/datatables.net-buttons/js/buttons.colVis.min.js',               // Column Visibility 
                    // 'build/libs/pdfmakebuild/pdfmake.min.js',
                    // 'build/libs/pdfmakebuild/vfs_fonts.js',

                    'build/libs/datatables.net-responsive/js/dataTables.responsive.min.js',     // Responsive examples
                    'build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js', // Responsive examples
                    'build/js/pages/datatables.init.js',                                        // Datatable init js
                ]
            ];

            return view('teams.index', compact('data'));

        } catch (\Throwable $th) {
            Log::error($this->class_name.'->'.__FUNCTION__.' 
                | Line : '.$th->getLine().' 
                | Message : '.$th->getMessage().' 
                | File : '.$th->getFile());

            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
            
        }
    }
    
    public function indexTableData(Request $request, Team $teamModel)
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
                    $editUrl = route('team.edit', ["team_name"=>$team->team_name]);

                    $tableRows .= '<tr>';
                    $tableRows .= '<td class="text-center">' . $i++ . '</td>';
                    $tableRows .= '<td class="text-left"><a href="/team/team_members/' . $team->team_name . '">' . $team->team_name . '</a></td>';
                    $tableRows .= '<td class="text-center">' . $team->user_id . '</td>';
                    $tableRows .= '<td class="text-center">' . $team->created_at . '</td>';
                    $tableRows .= '<td class="text-center"><a href="' . $editUrl . '" class="btn btn-sm btn-primary">Edit</a></td>';
                    $tableRows .= '</tr>';
                }
        
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

    public function create(Request $request)
    {
        if ($request->isMethod('get')) {
            try {
                // ### Code here ###
                $data = [];

                // For non-AJAX HTTP requests
                return view('teams.create', compact('data'));
                
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

    public function edit(Request $request, $team_name)
    {
        if ($request->isMethod('get')) {
            try {
                // ### Code here ###
                $data = [];

                // For non-AJAX HTTP requests
                return view('teams.edit', compact('data'));
                
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

    public function team_members(Team $teamModel, TeamUser $teamUserModel, $name)
    {
        try {
            $data['team'] = $teamModel->getTeam($name);

            $data['team_members'] = $teamUserModel->getTeamMembers($data['team']->id);

            return view('teams.team_index', compact('data'));

        } catch (\Throwable $th) {
            Log::error($this->class_name.'->'.__FUNCTION__.' 
                | Line : '.$th->getLine().' 
                | Message : '.$th->getMessage().' 
                | File : '.$th->getFile());

        }
    }
}
