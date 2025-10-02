<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> STOS | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ URL::asset('build/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/css/icons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/css/app.min.css') }}">
    <!-- <script src="{{ URL::asset('build/js/plugin.js') }}"></script> -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/libs/spectrum-colorpicker2/spectrum.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/libs/@chenfengyuan/datepicker/datepicker.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

</head>

@section('body')
    <body data-sidebar="dark" data-layout-mode="light">
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('layouts.right-sidebar')
    <!-- /Right-bar -->

    <!-- JAVASCRIPT -->

    <script src="{{ URL::asset('build/libs/jquery/jquery.min.js')}}"></script>
    
    <script src="{{ URL::asset('build/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ URL::asset('build/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ URL::asset('build/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ URL::asset('build/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ URL::asset('build/js/pages/dashboard.init.js')}}"></script>
    <script src="{{ URL::asset('build/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        $(document).ready(function() {

            $(document).on('click', '.btn-action', function(e) {
                e.preventDefault();
                
                let action = $(this).data('action');
                let href = $(this).attr('href');

                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                if (action === 'delete') {
                    Swal.fire({
                        title: 'Are you sure you want to delete this item?',
                        text: 'This action cannot be undone!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'Cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Proceed with AJAX request for deleting
                            // const url = '/project/' + projectId + '/delete'; // Make sure to replace with actual project ID and URL
                            const url = href; // Make sure to replace with actual project ID and URL

                            // Example using fetch for AJAX
                            fetch(url, {
                                method: action,
                                headers: {
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                    'X-CSRF-TOKEN': csrfToken
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    // Show success message
                                    Swal.fire(
                                        'Deleted!',
                                        'Your project has been deleted.',
                                        'success'
                                    );
                                    // Optionally, refresh the page or update the table to remove the deleted project
                                } else {
                                    // Handle the error response
                                    Swal.fire(
                                        'Error!',
                                        'There was a problem deleting the project.',
                                        'error'
                                    );
                                }
                            })
                            .catch(error => {
                                Swal.fire(
                                    'Error!',
                                    `An error occurred: ${error.message}`,
                                    'error'
                                );
                            });
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
