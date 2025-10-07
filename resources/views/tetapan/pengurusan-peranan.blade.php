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
					@foreach ($roles as $roles)
						<div class="col-lg-3 col-sm-4 fadein-top">
							<div class="card popup-btn" style="background-color:#DCDCDC">
								<div class="card-body">
									<div class="row">
										<div class="col-sm-4">
											<center>
												<i class="fa fa-user" style="font-size:40px"></i>
											</center>
										</div>
										<div class="col-sm-8">
											<h5 class="card-title">{{ $roles->name }}</h5>
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
	
</script>
@endpush
@endsection