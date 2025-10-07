@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                Pengurusan Peranan

                <table id="test_table" class="table table-bordered table-small-font table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:5%">Bil</th>
                            <th class="text-center">Nama Peranan</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

@push('scripts')
<script>
	var test_table = $('#test_table').DataTable({
		"dom": '<"row"<"col-sm-6 container-right text-right"f>>' +
			'<"row"<"col-sm-12"t>>' +
			'<"row"<"col-sm-5"i><"col-sm-7"p>>',
		"responsive": false,
		"processing": true,
		"serverSide": false, 
		"searching": false,

		"ajax": {
			"url": "{{ route('pengurusan-peranan.data') }}", 
			"type": "POST",
			"dataSrc": "data", 
			"data": function (d) {
				d._token = '{{ csrf_token() }}'; 
			}
		},

		"columns": [
			{ "data": "id", "className": "text-center" },
			{ "data": "name" },
			{ "data": "description" },
			{
				"data": null,
				"className": "text-center",
				"render": function (data, type, row) {
					return '<button class="btn btn-info btn-sm" onclick="alert(\'ID: ' + row.id + '\')"><i class="fa fa-info"></i></button>';
				}
			}
		]
	});
</script>
@endpush
@endsection