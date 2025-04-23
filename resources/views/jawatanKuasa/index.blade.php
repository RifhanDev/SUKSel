@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection

@section('content')
    <style>
        #datatable-buttons th {
            background-color: #405393 !important; 
            color: white !important;
            border: 1px solid #848484;
        }
        .btn-primary {
            background: #405189;
        }
    </style>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-10">
                            <h4 class="card-title">SENARAI TENDER</h4>
                            <p class="card-title-desc">
                                <!-- The Buttons extension for DataTables
                                provides a common set of options, API methods and styling to display
                                buttons on a page that will interact with a DataTable. The core library
                                provides the based framework upon which plug-ins can built. -->
                            </p>
                        </div>
                    </div>
                    
                    <div class="row my-2">
                        <!-- No. Tender Dropdown -->
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 my-1">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle w-100 d-flex justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class=""><span class="bx bx-search-alt me-2"></span> No. tender</div>
                                    <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>

                        <!-- Tajuk Perolehan Dropdown -->
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 my-1">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle w-100 d-flex justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class=""><span class="bx bx-search-alt me-2"></span> Tajuk Perolehan</div>
                                    <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>

                        <!-- Status Dropdown -->
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2 my-1">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle w-100 d-flex justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class=""><span class="bx bx-search-alt me-2"></span> Status</div>
                                    <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>

                        <!-- Tarikh Dropdown -->
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2 my-1">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle w-100 d-flex justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class=""><span class="bx bx-search-alt me-2"></span> Tarikh</div>
                                    <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>

                        <!-- Tapis Button -->
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2 my-1 d-flex align-items-end">
                            <button class="btn btn-primary w-100">Tapis</button>
                        </div>
                    </div>


                    <div class="row my-2">
                        <div class="col-12">
                            <!-- data-order="asc" -->
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-get-url="{{ route('team.indexTableData') }}" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th data-column="id" class="sortable text-center">No. Tender/Sebut Harga</th>
                                        <th data-column="tajuk" class="sortable text-center">Tajuk Perolehan</th>
                                        <th data-column="tarikh" class="sortable text-center">Tarikh</th>
                                        <th data-column="status" class="sortable text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>QT21000000000023741</td>
                                        <td><a href="{{ route('getList', ['tender' => \App\Helpers\Helper::spaceToHyphen('TENDER PERKHIDMATAN DIGITAL FORENSIK KE ATAS ALIRAN PROSES SISTEM XXXX')]) }}">TENDER PERKHIDMATAN DIGITAL FORENSIK KE ATAS ALIRAN PROSES SISTEM XXXX</a></td>
                                        <td>3/3/2024</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>QT21000000000023740</td>
                                        <td><a href="{{ route('getList', ['tender' => \App\Helpers\Helper::spaceToHyphen('TAJUK PEROLEHAN 1')]) }}">TAJUK PEROLEHAN 1</a></td>
                                        <td>2/2/2024</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection