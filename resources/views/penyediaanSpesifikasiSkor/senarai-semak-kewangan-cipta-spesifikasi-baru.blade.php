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
                                <h4 class="card-title card-title-grey">TEMPLAT SPESIFIKASI</h4>
                                <p class="card-title-desc text-primary fst-italic">
                                    1. Sila klik untuk Garis Panduan Item dan Spesifikasi.<br>
                                    2. Sila klik pautan UOM untuk carian nama unit ukuran sebagai panduan. Nama unit ukursan yang dikehendaki perlu dikunci masuk di ruang medan Unit Ukuran dan pilih dari senarai 'autocomplete' yang dipaparkan<br>
                                </p>
                            </div>
                        </div>
                        <div class="row mb-3 mx-3">
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="">Tajuk Dokumen</label>
                            </div>
                            <div class="col-md-7">
                                <textarea name="" class="form-control" id="">PERKHIDMATAN DIGITAL FORENSIK KE ATAS ALIRAN PROSES SISTEM XXXX</textarea>
                            </div>
                        </div>
                        <div class="row mb-3 mx-3">
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="">Jenis Item</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="" id="" value="Perkhidmatan" class="form-control">
                            </div>
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="">Jenis Spesifikasi</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="" id="" value="Kewangan" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3 mx-3">
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="">Jenis Barang</label>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenisBarang" id="jenisBarang1" checked>
                                    <label class="form-check-label" for="jenisBarang1">
                                        Tempatan
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenisBarang" id="jenisBarang2">
                                    <label class="form-check-label" for="jenisBarang2">
                                        Import
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 mx-3">
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="">Status</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="" id="" value="Menunggu Penyerahan" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h4 class="card-title card-title-grey">SPESIFIKASI</h4>
                                <p class="card-title-desc text-primary fst-italic">
                                    Klik "ikon pensil" untuk penetapan skor.<br>
                                </p>
                            </div>
                        </div>
                        <div class="row mb-3 mx-3">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th class="text-center align-middle">Item <span class="text-danger">*</span></th>
                                        <th class="text-center align-middle">Unit Ukuran <span class="text-danger">*</span></th>
                                        <th class="text-center align-middle">Kekerapan / Unit Ukuran <span class="text-danger">*</span></th>
                                        <th class="text-center align-middle">Bil. Unit Ukuran Sehari <span class="text-danger">*</span></th>
                                        <th class="text-center align-middle">Bil. Unit Ukuran Sebulan <span class="text-danger">*</span></th>
                                        <th class="text-center align-middle">Kuantiti <span class="text-danger">*</span></th>
                                        <th class="text-center align-middle">Harga Indikatif Seunit</th>
                                        <th class="text-center align-middle">Amaun yang Ditawarkan Setahun</th>
                                        <th class="text-center align-middle">Jumlah Harga Indikatif Item (RM) <span class="text-danger">*</span></th>
                                        <th class="text-center align-middle">Jumlah Harga <span class="text-danger">*</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 30%"><input class="form-control" type="text" name="" value="PERKHIDMATAN DIGITAL FORENSIK KE ATAS ALIRAN PROSES SISTEM XXXX" id=""></td>
                                        <td>
                                            <select class="form-control" name="" id="">
                                                <option value="">Activity Unit</option>
                                            </select>
                                        </td>
                                        <td>1</td>
                                        <td></td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input class="form-control text-center" type="text" name="" value="335,500.00" id=""></td>
                                        <td><input class="form-control text-center" type="text" name="" value="" id=""></td>
                                        <td><input class="form-control text-center" type="text" name="" value="335,500.00" id=""></td>
                                        <td><input class="form-control text-center" type="text" name="" value="" id=""></td>
                                    </tr>
                                    <tr>
                                        <td class="text-end" colspan="7"><b>Jumlah Besar (RM)</b></td>
                                        <td></td>
                                        <td>335,500.00</td>
                                        <td><input type="text" name="" id="" class="form-control"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <!-- Penetapan Skor -->
                    
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="left">
                                <a href="{{ route('senarai-semak-kewangan') }}" class="btn-md-sm btn btn-info mx-1">Kembali</a>
                            </div>
                            <div class="right">
                                <a href="javascript: void(0)" class="btn-md-sm btn btn-success mx-1">Cetak</a>
                                <a href="javascript: void(0)" class="btn-md-sm btn btn-success mx-1">Simpan</a>
                                <a href="javascript: void(0)" class="btn-md-sm btn btn-primary mx-1">Selesai</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection