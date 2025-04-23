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
                    <!-- Penetapan Skor -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">Penyediaan Spesifikasi & Skor</div>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4 class="card-title card-title-grey">PENETAPAN SKOR</h4>
                            <p class="card-title-desc text-primary fst-italic">
                                Sila lengkapkan skor bagi senarai semak yang masih belum mempunyai skor.
                            </p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            Wajaran Elemen Penilaian <span class="text-danger">*</span>
                        </div>
                        <div class="col-md-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked>
                                <label class="form-check-label" for="formRadios1">
                                    Ya
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios2">
                                <label class="form-check-label" for="formRadios2">
                                    Tidak
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 mx-3">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                            data-table-sort="id"
                            data-table-order="asc"
                            data-page="1">
                            <thead>
                                <tr>
                                    <th>Tajuk / Dokumen</th>
                                    <th style="width: 20%">Skor Maksima <span class="text-danger">*</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Perkhidmatan Penilaian Forensik Keatas Sistem XXXX</td>
                                    <td class="text-center">21</td>
                                </tr>
                                <tr>
                                    <td>Surat Pengesahan Prinsipal yang lengkap ditandatangani</td>
                                    <td class="text-center">10</td>
                                </tr>
                                <tr>
                                    <td>Senarai Kakitangan Teknikal dan Carta Organisasi Pasukan Projek</td>
                                    <td><input type="number" name="" id="" value="15" class="form-control text-center"></td>
                                </tr>
                                <tr>
                                    <td>Salinan Resume dan Sijil Teknikal Kakitangan syarikat</td>
                                    <td><input type="number" name="" id="" value="15" class="form-control text-center"></td>
                                </tr>
                                <tr>
                                    <td>Cadangan Carta Perbatuan Projek (Gantt Chart) bagi tempoh 3 tahun kontrak</td>
                                    <td><input type="number" name="" id="" value="15" class="form-control text-center"></td>
                                </tr>
                                <tr>
                                    <td>Cadangan pelan pelaksanaan projek</td>
                                    <td><input type="number" name="" id="" value="60" class="form-control text-center"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row mb-3">
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="">Jumlah Skor <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-2">
                                <input type="number" name="" id="" value="121" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- Penetapan Skor -->
                    
                    <!-- PENETAPAN PENANDA ARAS TAHAP LULUS -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <h4 class="card-title card-title-grey">PENETAPAN PENANDA ARAS TAHAP LULUS (%)</h4>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="">Penilaian Teknikal <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-2">
                                <input type="number" name="" id="" class="form-control">
                            </div>
                        </div>
                    <!-- PENETAPAN PENANDA ARAS TAHAP LULUS -->
                     
                    <!-- SKEMA PEMARKAHAN PENGGUNA -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <h4 class="card-title card-title-grey">SKEMA PEMARKAHAN PENGGUNA</h4>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="">Dokumen Sokongan</label>
                            </div>
                            <div class="col-md-10">
                                <a href="javascript: void(0);">Skema Pemarkahan Senarai Semakan Teknikal Digital Forensik.docx</a>
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