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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.head-css')
    
    <!-- Dynamic CSS files -->
    @if (isset($data['assets']['css']))
        @foreach ($data['assets']['css'] as $cssFile)
            <link rel="stylesheet" href="{{ URL::asset($cssFile) }}">
        @endforeach
    @endif
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
    @include('layouts.vendor-scripts')

    <!-- Dynamic JS files -->
    @if (isset($data['assets']['js']))
        @foreach ($data['assets']['js'] as $jsFile)
            <script src="{{ URL::asset($jsFile) }}"></script>
        @endforeach
    @endif
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="custom.js"></script>
    <script>
        $(document).ready(function() {

            $(document).on('click', '.btn-action', function(e) {
                e.preventDefault();
                
                // console.log($(this).data('action'));
                // console.log($(this).attr('href'));
                
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
                    // Swal.fire({
                    //     title: "Submit your Github username",
                    //     input: "text",
                    //     inputAttributes: {
                    //         autocapitalize: "off"
                    //     },
                    //     showCancelButton: true,
                    //     confirmButtonText: "Look up",
                    //     showLoaderOnConfirm: true,
                    //     preConfirm: async (login) => {
                    //         try {
                    //             const githubUrl = `https://api.github.com/users/${login}`;
                    //             const response = await fetch(githubUrl);
                    //             if (!response.ok) {
                    //                 return Swal.showValidationMessage(`${JSON.stringify(await response.json())}`);
                    //             }
                    //             return response.json();
                    //         } catch (error) {
                    //             Swal.showValidationMessage(`Request failed: ${error}`);
                    //         }
                    //     },
                    //     allowOutsideClick: () => !Swal.isLoading()
                    //     }).then((result) => {
                    //     if (result.isConfirmed) {
                    //         Swal.fire({
                    //             title: `${result.value.login}'s avatar`,
                    //             imageUrl: result.value.avatar_url
                    //         });
                    //     }
                    // });
                }
            });
        });
    </script>
</body>

</html>
