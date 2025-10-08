@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
					<h4 class="card-title">PENGURUSAN PERANAN</h4>
				</div>

				<div class="row">
					<div class="col-12">
						<div class=" float-end">
							<button class="btn btn-primary w-100"><i class="fa fa-plus"></i> Daftar Peranan</button>
						</div>
					</div>
				</div>
				<div class="row mt-3">
					@foreach ($roles as $role)
						<div class="col-lg-3 col-sm-4 fadein-top">
							<div class="card popup-btn" style="background-color:#DCDCDC" onclick="testDialog(1,{{ $role->id }});">
								<div class="card-body">
									<div class="row">
										<div class="col-sm-4">
											<center>
												<i class="fa fa-user" style="font-size:40px"></i>
											</center>
										</div>
										<div class="col-sm-8">
											<h5 class="card-title">{{ $role->name }}</h5>
											<h6 class="card-subtitle mb-2 text-muted"><i>Kemaskini Akses</i></h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					
				</div>

            </div>
        </div>
    </div>

@push('scripts')
<script>

	testDialog = function(p1, p2)
	{
		if (p1 == '1')
		{
			let param = $.param({
				id: p2
			});

			var title  = 'Kemaskini Akses';
			var target = '/tetapan/pengurusan-peranan-form?' + param;
		}

		BootstrapDialog.show({
			size: BootstrapDialog.SIZE_WIDE,
			type: BootstrapDialog.TYPE_DEFAULT,
			title: title,
			cssClass: 'application-info',
			message: $('<div></div>').load(target, function() {
				$(this).find('script').each(function() {
					$.globalEval($(this).text());
				});
			}),
			closable: false,
			closeByBackdrop: false,
			closeByKeyboard: false,
			buttons: [{
				label: 'Tutup',
				action: function(dialogRef) {
					dialogRef.close();
				}
			}]
		});
	}

	
</script>
@endpush
@endsection