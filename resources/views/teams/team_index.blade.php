@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Team List</h4>
                    <p class="card-title-desc">
                    </p>

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Team Member</th>
                                <th>Role</th>
                                <th class="">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($data['team_members'] as $member)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td><a href="#">{{ $member->name }}</a></td>
                                    <td>{{ $member->role }}</td>
                                    <td class="#">{{ $member->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection