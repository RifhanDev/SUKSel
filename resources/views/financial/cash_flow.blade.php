@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-10">
                            <h4 class="card-title">Financial Cash Flow</h4>
                            <p class="card-title-desc">
                                {{-- The Buttons extension for DataTables
                                provides a common set of options, API methods and styling to display
                                buttons on a page that will interact with a DataTable. The core library
                                provides the based framework upon which plug-ins can built. --}}
                            </p>
                        </div>
                        {{-- <div class="col-2 d-flex justify-content-end">
                            <a href="{{ route('team.create') }}" class="btn-md-sm btn btn-success d-flex align-items-center">New Team</a>
                        </div> --}}
                    </div>
                    <!-- data-order="asc" -->
                    {{-- <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100 " 
                        data-get-url="{{ route('team.indexTableData') }}" 
                        data-table-sort="id"
                        data-table-order="asc"
                        data-page="1">
                        <thead>
                            <tr>
                                <th data-column="id" class="sortable">#</th>
                                <th data-column="name" class="sortable">Team Name</th>
                                <th data-column="personal_team" class="sortable text-center">Owner</th>
                                <th data-column="created_at" class="sortable text-center">Created At</th>
                                <th data-column="action" class="sortable text-center">Action</th>
                            </tr>
                        </thead>
                    </table> --}}
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection