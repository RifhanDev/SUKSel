@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                Pengurusan Peranan

				<div class="row">
					<div class="col-sm-4">
						<div class="card bg-primary">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="card-link">Card link</a>
								<a href="#" class="card-link">Another link</a>
							</div>
						</div>
					</div>
				</div>

            </div>
        </div>
    </div>

@push('scripts')
<script>
	
</script>
@endpush
@endsection