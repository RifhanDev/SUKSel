<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Projects;
use App\Helpers\Helper;
use Carbon\Carbon;

class ProjectsController extends Controller
{
    protected $class_name;

    public function __construct()
    {
        $this->class_name = 'ProjectsController';
    }

    public function index()
    {
        try {
            $data['project'] = Projects::all();

            $data['assets'] = [
                'css' => [
                    'build/css/bootstrap.min.css',
                    'build/css/icons.min.css',
                    'build/css/app.min.css',
                    'build/libs/select2/css/select2.min.css',
                    'build/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css',
                    'build/libs/spectrum-colorpicker2/spectrum.min.css',
                    'build/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
                    'build/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css',
                    'build/libs/@chenfengyuan/datepicker/datepicker.min.css',
                    'https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css',
                ],
                'js' => [
                    'build/libs/apexcharts/apexcharts.min.js',
                    'build/js/pages/dashboard.init.js',
                    'build/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
                    'build/libs/datatables.net/js/jquery.dataTables.min.js',
                    'build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                    'build/libs/datatables.net-responsive/js/dataTables.responsive.min.js',
                    'build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js',
                    'https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js',
                ]
            ];
            return view('projects.index', compact('data'));

        } catch (\Throwable $th) {
            Log::error($this->class_name.'->'.__FUNCTION__.' 
                | Line : '.$th->getLine().' 
                | Message : '.$th->getMessage().' 
                | File : '.$th->getFile());

        }
    }

    public function getProjectsData(Request $request, Projects $projectsModel)
    {
        if ($request->ajax() && $request->isMethod('get')) {

            try {
                $sort = $request->input('sort', 'id');
                $order = $request->input('order', 'asc');
                $page = $request->input('page', 1);
                $perPage = 10;

                $projects = $projectsModel->orderBy($sort, $order)->paginate($perPage, ['*'], 'page', $page);

                $i = 1;
                $tableRows = '';
                foreach ($projects as $project) {
                    $tableRows .= '<tr>';
                    // $tableRows .= '<td class="text-left"><a href="' . url("/project/{$project->project_name}/edit") . '">'.$project->project_name.'</a></td>';
                    $tableRows .= '<td class="text-left"><a href="' . route('project.overview', ['project_name' => Helper::spaceToHyphen($project->project_name)]) . '">' . $project->project_name . '</a></td>';
                    $tableRows .= '<td class="text-center">'.$project->status.'</td>';
                    $tableRows .= '<td class="text-center">'.$project->start_date.'</td>';
                    $tableRows .= '<td class="text-center">'.$project->end_date.'</td>';
                    $tableRows .= '<td class="text-center">'
                        // . '<a href="' . url("/project/{$project->project_name}/edit") . '" class="btn btn-primary btn-sm">Edit</a>'
                        . '<a href="' . url("/project/".Helper::spaceToHyphen($project->project_name)."/edit") . '" class="btn btn-primary btn-sm">Edit</a>'
                        . '<a href="' . url("/project/" . urlencode(Helper::encryptData($project->id)) . "/delete") . '" class="btn btn-danger btn-sm btn-action" data-action="delete" style="margin-left: 2px">Delete</a>'
                        . '</td>';
                    $tableRows .= '</tr>';
                }
        
                return response()->json([
                    'tableRows' => $tableRows,
                    'csrf_token' => csrf_token(),
                    'pagination'=> [
                        'current_page'  => $projects->currentPage(),
                        'last_page'     => $projects->lastPage(),
                        'per_page'      => $projects->perPage(),
                        'total'         => $projects->total(),
                    ],
                    'status' => 'success', 
                    'message' => 'Project data'
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

        // $projects = Projects::all();
        // $data = [];
    
        // $data = $projects->map(function($project) {
        //     $name_link = Helper::spaceToHyphen($project->project_name);
            
        //     return [
        //         'project_name' => '<div class="">'
        //         . '<a href="' . url("/project/overview/$name_link") . '" class="">' . $project->project_name . '</a>'
        //         . '</div>',
        //         'status' => $project->status, 
        //         'start_date' => Carbon::parse($project->start_date)->format('d-m-Y'),
        //         'end_date' => $project->end_date ? Carbon::parse($project->end_date)->format('d-m-Y') : 'N/A',
        //         'action' => '<div class="text-center">'
        //             .'<a href="'.url("/projects/{$project->id}/edit").'" class="btn btn-primary btn-sm btn-action" data-action="edit">Edit</a>'
        //             .'<a href="'.url("/projects/{$project->id}/delete").'" class="btn btn-danger btn-sm btn-action" data-action="delete" style="margin-left: 2px">Delete</a>'
        //             .'</div>'
        //     ];
        // });

        // return response()->json(['data' => $data]);
    }

    public function edit($project_name)
    {
        $project_name = Helper::hyphenToSpace($project_name);

        try {
            $data['project'] = Projects::where('project_name', $project_name)->first();
            if (!$data['project']) {

            }

            $data['assets'] = [
                'css' => [
                    'build/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css',
                    'build/libs/dropzone/dropzone.css',
                ],
                'js' => [
                    'build/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
                    'build/libs/dropzone/dropzone-min.js',
                    'build/js/pages/project-create.init.js',
                ]
            ];

            return view('projects.edit', compact('data'));

        } catch (\Throwable $th) {
            Log::error($this->class_name.'->'.__FUNCTION__.' 
                | Line : '.$th->getLine().' 
                | Message : '.$th->getMessage().' 
                | File : '.$th->getFile());

        }
    }

    public function delete($encryptedId)
    {
        $decryptedId = Helper::decryptData($encryptedId);

        $project = Projects::find($decryptedId);

        if ($project) {
            $project->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Project not found.']);
    }

    public function tasks($id = 1)
    {
        try {
            $data = [];
            $projectsModel = new \App\Models\Projects();
            $projectTasksModel = new \App\Models\ProjectTasks();

            $data['project'] = $projectsModel->find($id)->first();
            $data['project_tasks'] = $projectTasksModel->where('fk_project_id', $data['project']->id)->get()->groupBy('status')->toArray();

            return view('admin.projects.tasks-kanban', compact('data'));

        } catch (\Throwable $th) {
            Log::error('Error | Project creation failed. | '.$this->class_name.'->'.__FUNCTION__.' | Line : '.$th->getLine().' | Message : '.$th->getMessage().' | File : '.$th->getFile());

        }
    }

    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'taskname'      => 'required|string|max:255',
                'status'        => 'required|string|max:255',
                'startdate'     => 'required|date_format:"d M, Y"',
                'enddate'       => 'required|date_format:"d M, Y"',
                'taskbudget'    => 'required|numeric'
            ]);

            $startDate = \Carbon\Carbon::createFromFormat('d M, Y', $validatedData['startdate'])->format('Y-m-d');
            $endDate = \Carbon\Carbon::createFromFormat('d M, Y', $validatedData['enddate'])->format('Y-m-d');

            $project = Projects::create([
                'project_name'  => $validatedData['taskname'],
                'status'        => $validatedData['status'],
                'start_date'    => $startDate, 
                'end_date'      => $endDate, 
                // 'end_date'      => $endDate, 
                // 'taskbudget' => $validatedData['taskbudget']
            ]);
    
            return response()->json(['status' => 'success', 'message' => 'Project created successfully!'], 201);
    
        } catch (\Throwable $th) {
            Log::error('Error | Project creation failed. | '.$this->class_name.'->'.__FUNCTION__.' | Line : '.$th->getLine().' | Message : '.$th->getMessage().' | File : '.$th->getFile());
    
            return response()->json([
                    'status' => 'error', 
                    'message' => 'Project creation failed. Please try again.'
                ], 500);

        }

    }

    public function getKanban(Request $request, Projects $projectsModel)
    {
        $data = [];
        
        $data['assets'] = [
            'css' => [
                'build/libs/dragula/dragula.min.css',
            ],
            'js' => [
                'build/libs/dragula/dragula.min.js',
                'build/libs/jquery-validation/jquery.validate.min.js',
                'build/js/pages/task-kanban.init.js',
                'build/js/pages/task-form.init.js',
            ]
        ];

        return view('admin.projects.tasks-kanban2', compact('data'));
    }

    public function overview(Request $request, Projects $projectsModel, $name)
    {
        $data = [];
        $projectTasksModel = new \App\Models\ProjectTasks();
        $project_name = Helper::hyphenToSpace($name);

        $data['project'] = $projectsModel->where('project_name', $project_name)->first();

        $data['assets'] = [
            'css' => [
                // 'build/libs/owl.carousel/assets/owl.carousel.min.css',
                // 'build/libs/owl.carousel/assets/owl.theme.default.min.css',
            ],
            'js' => [
                // 'build/libs/owl.carousel/owl.carousel.min.js',
                // 'build/js/pages/auth-2-carousel.init.js',
            ]
        ];

        return view('admin.projects.overview', compact('data'));
    }
}
