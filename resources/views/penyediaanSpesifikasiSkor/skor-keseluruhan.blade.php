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
        .card-title-grey {
            background: #D9D9D9;
            padding: 5px 15px;
        }
        hr {
            border:1px solid #E9EBEC;
        }
    </style>

    <div class="row">
        <div class="col-4">
            <div class="row">
                <div class="col-5 text-center">
                    <b>No. Sebut Harga / Tender</b>
                </div>
                <div class="col-7 text-center">
                    QT21000000000023741
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-2 text-center">
                    <b>PTJ</b>
                </div>
                <div class="col-10 text-center">
                BAHAGIAN PENTADBIRAN - CAWANGAN KEWANGAN - KEMENTERIAN KEWANGAN
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-3 text-end">
                    <b>Status</b>
                </div>
                <div class="col-9 text-center">
                Menunggu Penyerahan Sebut Harga / Tender
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- MENGIKUT PAKEJ - BAGI SEMUA SPESIFIKASI ITEM -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <h4 class="card-title card-title-grey">MENGIKUT PAKEJ - BAGI SEMUA SPESIFIKASI ITEM</h4>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-1"></div>
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="text-end">Penilaian Teknikal (%) <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-2">
                                <input type="number" name="" id="" value="70" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-md-1"></div>
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="text-end">Penilaian Kewangan (%) <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-2">
                                <input type="number" name="" id="" value="30" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-md-1"></div>
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="text-end">Jumlah (%) <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-2">
                                <input type="number" name="" id="" value="100" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-md-1"></div>
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="text-end">Tahap Lulus Keseluruhan (%) <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-2">
                                <input type="number" name="" id="" value="60" class="form-control">
                            </div>
                        </div>
                    <!-- MENGIKUT PAKEJ - BAGI SEMUA SPESIFIKASI ITEM -->
                     
                    <!-- SKEMA PEMARKAHAN PENGGUNA -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <h4 class="card-title card-title-grey">MENGIKUT ITEM</h4>
                            </div>
                        </div>
                        <div class="row mb-3 mx-3">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Harga Item</th>
                                        <th>Elemen Lain</th>
                                        <th>Skor (%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Penilaian Teknikal (%)</td>
                                        <td><input type="number" name="" id="" value="15" class="form-control text-center"></td>
                                        <td><input type="number" name="" id="" value="55" class="form-control text-center"></td>
                                        <td class="text-center">100</td>
                                    </tr>
                                    <tr>
                                        <td>Penilaian Kewangan (%)</td>
                                        <td><input type="number" name="" id="" value="1" class="form-control text-center"></td>
                                        <td><input type="number" name="" id="" value="29" class="form-control text-center"></td>
                                        <td class="text-center">30</td>
                                    </tr>
                                    <tr>
                                        <td class="text-end" colspan="3">Jumlah Skor</td>
                                        <td>100</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="text-end">Tahap Lulus Keseluruhan (%) <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-2">
                                <input type="number" name="" id="" value="60" class="form-control">
                            </div>
                        </div>
                    <!-- SKEMA PEMARKAHAN PENGGUNA -->

                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <a href="{{ route('team.create') }}" class="btn-md-sm btn btn-primary mx-1">Simpan</a>
                            <a href="{{ route('team.create') }}" class="btn-md-sm btn btn-success mx-1">Laporan</a>
                            <a href="{{ route('team.create') }}" class="btn-md-sm btn btn-success mx-1">Hantar Pemakluman</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection