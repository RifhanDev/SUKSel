<!-- JAVASCRIPT -->
<script src="{{ URL::asset('build/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ URL::asset('build/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('build/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{ URL::asset('build/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ URL::asset('build/libs/node-waves/waves.min.js')}}"></script>

<!-- Datatable Js -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<!-- Datatable Css-->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css">

    <!-- Datatable Responsive Css-->
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">

<script>
    $(document).ready(function() {
        $('table[data-get-url]').each(function () {
            var $table = $(this);
            var url = $table.data('get-url');
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            var sort = $table.data('table-sort') || 'id';
            var order = $table.data('table-order') || 'asc';

            function fetchTableData(sort, order) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'X-CSRF-Token': csrfToken
                    },
                    data: { sort: sort, order: order },
                    dataType: 'json',
                    success: function (response) {
                        if (response.csrf_token) {
                            $('meta[name="csrf-token"]').attr('content', response.csrf_token);
                            csrfToken = response.csrf_token;
                        }
                        
                        $table.find('tbody').html(response.tableRows);
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching table data:', error);
                    }
                });
            }

            // Initial fetch
            fetchTableData(sort, order);

            // Sorting function
            $table.find('th.sortable').on('click', function () {
                var newSort = $(this).data('column');
                var currentOrder = $table.data('table-order') === 'asc' ? 'desc' : 'asc';

                $table.data('table-sort', newSort);
                $table.data('table-order', currentOrder);

                fetchTableData(newSort, currentOrder);
            });
        });
        // $('table[data-get-url]').each(function () {
        //     var $table = $(this);
        //     var url = $table.data('get-url');
        //     var csrfToken = $('meta[name="csrf-token"]').attr('content');

        //     var sort = $table.data('table-sort') || 'id';
        //     var order = $table.data('table-order') || 'asc';

        //     function fetchTableData(sort, order) {
        //         $.ajax({
        //             url: url,
        //             type: 'GET',
        //             headers: {
        //                 'Content-Type': 'application/x-www-form-urlencoded',
        //                 'X-CSRF-Token': csrfToken
        //             },
        //             data: { sort: sort, order: order },
        //             dataType: 'json',
        //             success: function (response) {
        //                 var tableBody = '';

        //                 $.each(response.data, function (index, row) {
        //                     tableBody += '<tr>';
        //                     $table.find('thead th').each(function () {
        //                         var columnName = $(this).data('column');
        //                         if (columnName) {
        //                             tableBody += '<td>' + (row[columnName] || '') + '</td>';
        //                         }
        //                     });
        //                     tableBody += '</tr>';
        //                 });

        //                 $table.find('tbody').html(tableBody);
        //             },
        //             error: function (xhr, status, error) {
        //                 console.error('Error fetching table data:', error);
        //             }
        //         });
        //     }

        //     // Initial fetch
        //     fetchTableData(sort, order);

        //     // Sorting function
        //     $table.find('th.sortable').on('click', function () {
        //         var newSort = $(this).data('column');
        //         var currentOrder = $table.data('table-order') === 'asc' ? 'desc' : 'asc';

        //         $table.data('table-sort', newSort);
        //         $table.data('table-order', currentOrder);

        //         fetchTableData(newSort, currentOrder);
        //     });
        // });
        
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
@yield('script')

<!-- App js -->
<script src="{{ URL::asset('build/js/app.js')}}"></script>

@yield('script-bottom')