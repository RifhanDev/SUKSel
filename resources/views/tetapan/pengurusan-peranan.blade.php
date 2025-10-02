@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                Pengurusan Peranan

                <table id="test_table" class="table table-bordered table-small-font table-striped table-hover dt-responsive auto-reload" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center" rowspan="2">Bil</th>
                            <th class="text-center" rowspan="2">No.Rujukan Dokumen</th>
                            <th class="text-center" colspan="4">Maklumat Tuntutan</th>
                            <th class="text-center" rowspan="2"></th>
                        </tr>
                        <tr>
                            <th class="text-center">Jenis Insiden</th>
                            <th class="text-center">Tarikh Dokumen</th>
                            <th class="text-center">Tarikh Insiden</th>
                            <th class="text-center">Kos (RM)</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script>

        var test_table = $('#test_table').DataTable({
			"dom": '<"row"<"col-sm-6 container-left"l><"col-sm-6 container-right text-right"f>><"row"<"col-sm-12"t>><"row"<"row dt-layout-row"<"dt-layout-cell dt-layout-start col-sm-5"i><"dt-layout-cell dt-layout-end col-sm-7"p>>>',
			"responsive": false,
			"processing": false,
			"serverSide": true,
			"searching": false,
			"initComplete": function() {
				$searchInput = $('<input type="text" class="form-control"></input>')
					.bind('keyup', function(e){
						$('#test_table_form').find('input[name^=search]').val($(this).val());
						if (e.which == 13){
							test_table_proc(0);
						}
				})

				$searchButton = $('<button class="btn btn-sm btn-default" title="Cari"></button>')
                .html('<i class="fa fa-search"></i>')
                .click(function() {
                    test_table_proc(0);
                })

				$('#test_table_wrapper .container-right').append('<div class="form-group form-group-sm"><div class="input-group input-group-sm"><span class="input-group-btn"></span></div></div>');
				$('#test_table_wrapper div.input-group').prepend($searchInput);
				$('#test_table_wrapper span.input-group-btn').append($searchButton);
			},
			"ajax": $.fn.dataTable.pipeline({
				"url": "#target_file#",
				"method": 'POST',
				"data": function(d) {
				   var frm_data = $('#test_table_form').serializeArray();
				   $.each(frm_data, function(key, val) {
					 d[val.name] = val.value;
				   });
				}
			}),
			"aoColumnDefs": 
			[
				{
					"aTargets": [0],
					"sClass": "text-center",
					render: function (data, type, row, meta) {
						return meta.row + meta.settings._iDisplayStart + 1;
					}
				}, 
				{
					"aTargets": [ 5 ],
					"sClass": "text-right",
					"mRender": function ( data, type, row ) {
                        var dt = '';
                        
                        if(data !== '')
                        {
                            dt = $.fn.dataTable.render.number(',', '.', 2).display(data);
                        }

						return dt;
					}
				},
				{
					"aTargets": [ 3,4 ],
					"sClass": "text-center",
					"mRender": function ( data, type, row ) {
                        var dt = '';

                        if(data !== '')
                        {
                            dt = moment(data).format("DD/MM/YYYY");
                        }

						return dt;
					}
				},
				{
					"aTargets": [6],
					"sClass": "text-center",
					"mRender": function (data, type, row) {
                        var dt = '';

                        if(row[0] !== '')
                        {
                            dt = '<button type="button" class="smActionBtn smActionBtn-info hvr-pop" title="Maklumat Insurans" onclick="#table_id#_proc(1,'+row[0]+');"><i class="fa fa-info"></i></button>';
                        }

						return dt;
					}
				}
			]
		});

    </script>

@endsection