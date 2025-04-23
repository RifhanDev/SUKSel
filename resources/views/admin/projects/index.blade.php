
@section('title') @lang('translation.Dashboards') @endsection


@section('css')
    <link href="{{ asset('build/skote/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('build/skote/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('build/skote/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('build/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('build/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ URL::asset('build/libs/spectrum-colorpicker2/spectrum.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('build/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ URL::asset('build/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@chenfengyuan/datepicker/datepicker.min.css') }}">
@endsection


<style>
    .swal2-container {
        z-index: 1061; /* Adjust this value as needed */
    }
    .datepicker {
        z-index: 1060 !important; /* Ensure it appears above the modal */
    }
</style>

<div class="row mb-4">
    <div class="col-lg-12">
        <div class="d-flex align-items-center">
            <img src="{{URL::asset('build/images/users/avatar-1.jpg')}}" alt="" class="avatar-sm rounded">
            <div class="ms-3 flex-grow-1">
                <h5 class="mb-2 card-title">Hello, Henry Franklin</h5>
                <p class="text-muted mb-0">Ready to jump back in?</p>
            </div>
            <div>
                <a href="javascript:void(0);" class="btn btn-primary"><i class="bx bx-plus align-middle"></i> Add New Jobs</a>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-lg-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-muted fw-medium">Job View</p>
                        <h4 class="mb-0">14,487</h4>
                    </div>

                    <div class="flex-shrink-0 align-self-center">
                        <div data-colors='["--bs-success", "--bs-transparent"]' dir="ltr" id="eathereum_sparkline_charts"></div>
                    </div>
                </div>
            </div>
            <div class="card-body border-top py-3">
                <p class="mb-0"> <span class="badge badge-soft-success me-1"><i class="bx bx-trending-up align-bottom me-1"></i> 18.89%</span> Increase last month</p>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-lg-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-muted fw-medium">New Application</p>
                        <h4 class="mb-0">7,402</h4>
                    </div>

                    <div class="flex-shrink-0 align-self-center">
                        <div data-colors='["--bs-success", "--bs-transparent"]' dir="ltr" id="new_application_charts"></div>
                    </div>
                </div>
            </div>
            <div class="card-body border-top py-3">
                <p class="mb-0"> <span class="badge badge-soft-success me-1"><i class="bx bx-trending-up align-bottom me-1"></i> 24.07%</span> Increase last month</p>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-lg-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-muted fw-medium">Total Approved</p>
                        <h4 class="mb-0">12,487</h4>
                    </div>

                    <div class="flex-shrink-0 align-self-center">
                        <div data-colors='["--bs-success", "--bs-transparent"]' dir="ltr" id="total_approved_charts"></div>
                    </div>
                </div>
            </div>
            <div class="card-body border-top py-3">
                <p class="mb-0"> <span class="badge badge-soft-success me-1"><i class="bx bx-trending-up align-bottom me-1"></i> 8.41%</span> Increase last month</p>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-lg-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-muted fw-medium">Total Rejected</p>
                        <h4 class="mb-0">12,487</h4>
                    </div>

                    <div class="flex-shrink-0 align-self-center">
                        <div data-colors='["--bs-danger", "--bs-transparent"]' dir="ltr" id="total_rejected_charts"></div>
                    </div>
                </div>
            </div>
            <div class="card-body border-top py-3">
                <p class="mb-0"> <span class="badge badge-soft-danger me-1"><i class="bx bx-trending-down align-bottom me-1"></i> 20.63%</span> Decrease last month</p>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <!-- <div class="card-body border-bottom">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0 card-title flex-grow-1">Project Lists</h5>
                    <div class="flex-shrink-0">
                        <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light addtask-btn" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" data-id="#complete-task"><i class="mdi mdi-plus me-1"></i> Add New Project</a>
                        <a href="#!" class="btn btn-light"><i class="mdi mdi-refresh"></i></a>
                        <div class="dropdown d-inline-block">
                            <button type="menu" class="btn btn-success" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="mdi mdi-dots-vertical"></i></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="card-body border-bottom">
                <div class="row g-3">
                    <div class="col-xxl-4 col-lg-6">
                        <input type="search" class="form-control" id="searchTableList" placeholder="Search for ...">
                    </div>
                    <div class="col-xxl-2 col-lg-6">
                        <select class="form-select" id="idStatus" aria-label="Default select example">
                            <option value="all">Status</option>
                            <option value="Active">Active</option>
                            <option value="New">New</option>
                            <option value="Close">Close</option>
                        </select>
                    </div>
                    <div class="col-xxl-2 col-lg-4">
                        <select class="form-select" id="idType" aria-label="Default select example">
                            <option value="all">Select Type</option>
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                        </select>
                    </div>
                    <div class="col-xxl-2 col-lg-4">
                        <div id="datepicker1">
                            <input type="text" class="form-control" placeholder="Select date"
                                data-date-format="dd M, yyyy" data-date-container='#datepicker1'
                                data-date-autoclose="true" data-provide="datepicker">
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-4">
                        <button type="button" class="btn btn-soft-secondary w-100" onclick="filterData();"><i
                                class="mdi mdi-filter-outline align-middle"></i> Filter</button>
                    </div>
                </div>
            </div> -->
            <div class="card-body">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <h4 class="card-title mb-4">Projects</h4>
                        <div class="flex-shrink-0">
                            <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light addtask-btn" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" data-id="#complete-task"><i class="mdi mdi-plus me-1"></i> Add New Project</a>
                            <a href="#!" class="btn btn-light"><i class="mdi mdi-refresh"></i></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0" id="projectsTable" data-url="/project/index/project-data">
                        <thead class="table-light">
                            <tr>
                                <th data-field="project_name">Project Name</th>
                                <th data-field="status">Status</th>
                                <th data-field="start_date">Start Date</th>
                                <th data-field="end_date">End Date</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-5">Activity</h4>
                <ul class="verti-timeline list-unstyled">
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">22 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Responded to need “Volunteer Activities
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">17 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Everyone realizes why a new common language would be desirable... <a href="javascript: void(0);">Read more</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list active">
                        <div class="event-timeline-dot">
                            <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">15 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Joined the group “Boardsmanship Forum”
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">12 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    Responded to need “In-Kind Opportunity”
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="text-center mt-4"><a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<!-- Add New Project Modal -->
<div id="modalForm" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0 add-task-title">Add New Project</h5>
                <h5 class="modal-title mt-0 update-task-title" style="display: none;">Update Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body placeholder-glow">
                <form action="{{ url('/admin/project/add-project') }}" class="form" id="NewtaskForm" role="form">
                    <div class="form-group mb-3">
                        <label for="taskname" class="col-form-label">Project Name<span
                                class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <input id="taskname" name="taskname" type="text" class="form-control validate"
                                placeholder="Enter Task Name..." required autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-form-label">Status<span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <select class="form-select validate" name="status" id="TaskStatus" required autocomplete="off">
                                <option value="" selected>Choose..</option>
                                <option value="New">New</option>
                                <option value="Ongoing">On-going</option>
                                <option value="Complete">Complete</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="col-form-label">Start Date<span class="text-danger">*</span></label>
                        <div class="input-group" id="datepicker1">
                            <input type="text" class="form-control datepicker" name="startdate" placeholder="dd M, yyyy"
                                data-date-format="dd M, yyyy" data-date-container='#datepicker1'
                                data-provide="datepicker" autocomplete="off">
                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                        </div><!-- input-group -->
                    </div>

                    <div class="form-group mb-4">
                        <label class="col-form-label">End Date<span class="text-danger">*</span></label>
                        <div id="datepicker1">
                            <input type="text" class="form-control datepicker" name="enddate" placeholder="Select end date"
                                data-date-format="d M, yyyy" data-date-container='#datepicker1'
                                data-date-autoclose="true" data-provide="datepicker" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="taskbudget" class="col-form-label">Budget<span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <input id="taskbudget" name="taskbudget" type="number"
                                placeholder="Enter Task Budget..." class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Create Task</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Add New Project Modal -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('table[data-url]').each(function() {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var $table = $(this);
            var url = $table.data('url'); 
            
            $.ajax({
                url: url,
                type: 'GET',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-CSRF-Token': csrfToken // Add CSRF token here
                },
                dataType: 'json',
                success: function(response) {
                    // Generate HTML for the table body
                    var tbodyHtml = '';
                    $.each(response.data, function(index, row) {
                        tbodyHtml += '<tr>';
                        $.each($('#projectsTable').find('thead th').map(function() {
                            return $(this).data('field'); // Use data-field attribute if available
                        }).get(), function(i, header) {
                            tbodyHtml += '<td>' + (row[header] || '') + '</td>';
                        });
                        tbodyHtml += '<td>' + row['action'] + '</td>'; // Add the actions column
                        tbodyHtml += '</tr>';
                    });

                    // Replace the table body with the generated HTML
                    $('#projectsTable').find('tbody').html(tbodyHtml);
                },
                error: function(xhr, status, error) {
                }
            });
        });
        
        $('.form').on('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            var $form = $(this);
            var $submitButton = $form.find('button[type="submit"]');
            $submitButton.addClass('disabled placeholder w-25').prop('disabled', true);

            // Add class to all input elements within the form
            $form.find(':input').addClass('disabled placeholder col-12');

            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var formData = $(this).serialize();
            var actionUrl = $(this).attr('action');

            $.ajax({
                url: actionUrl,
                type: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-CSRF-Token': csrfToken // Add CSRF token here
                },
                data: formData,
                dataType: 'json',
                success: function(response) {
                    // Display success alert
                    Swal.fire({
                        title: 'Success!',
                        text: response.message,
                        icon: 'success',
                        timer: 2000,
                        timerProgressBar: true,
                        confirmButtonColor: "#556ee6",
                        didOpen: () => {
                            Swal.showLoading(); // Show loading spinner
                        },
                        willClose: () => {
                            // Optional: You can perform actions when the alert is about to close
                        }
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            $('#modalForm').modal('hide');
                            $form.find(':input').removeClass('disabled placeholder col-12');
                            $submitButton.removeClass('disabled placeholder col-4').addClass('btn-primary').prop('disabled', false);
                            
                            // Reload all DataTables
                            dataTables.forEach(function(table) {
                                table.ajax.reload(null, false); // Reload the data, keep the current pagination
                            });
                        }
                    });

                    // Re-enable and reset the submit button
                    $submitButton.removeClass('disabled placeholder col-4').addClass('btn-primary').prop('disabled', false);
                },
                error: function(xhr, status, error) {
                    // Display error alert
                    Swal.fire({
                        title: 'Error!',
                        text: 'Something went wrong. Please try again.',
                        icon: 'error',
                        timer: 2000,
                        timerProgressBar: true,
                        confirmButtonColor: "#556ee6",
                        didOpen: () => {
                            Swal.showLoading(); // Show loading spinner
                        },
                        willClose: () => {
                            // Optional: You can perform actions when the alert is about to close
                        }
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            $form.find(':input').removeClass('disabled placeholder col-12');
                            $submitButton.removeClass('disabled placeholder col-4').addClass('btn-primary').prop('disabled', false);
                        }
                    });
                }
            });
        });
    });
</script>

@section('script')
<script src="{{ URL::asset('js/project_index.js') }}"></script>

<!-- apexcharts -->
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>

<!-- bootstrap-datepicker js -->
<script src="{{ URL::asset('build/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ URL::asset('build/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ URL::asset('build/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

@endsection
