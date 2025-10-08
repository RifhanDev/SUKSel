@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
					<h4 class="card-title">PENGURUSAN MENU</h4>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="float-end">
							<button class="btn btn-primary w-100"><i class="fa fa-plus"></i> Daftar Menu</button>
						</div>
					</div>
				</div>
                @foreach ($menus as $menu)
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="card popup-btn" style="background-color:#DCDCDC">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $menu->title }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (!empty($menu->children))
                        @foreach ($menu->children as $child)
                            <div class="row" style="margin-left:100px">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="card popup-btn" style="background-color:#FFEFD5">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $child->title }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (!empty($child->children))
                                @foreach ($child->children as $grandchild)
                                    <div class="row" style="margin-left:200px">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                            <div class="card popup-btn" style="background-color:#FFF8DC">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $grandchild->title }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@push('scripts')
<script>
	
</script>
@endpush
@endsection