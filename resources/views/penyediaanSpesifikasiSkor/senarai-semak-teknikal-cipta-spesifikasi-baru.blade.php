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
                                <input type="text" name="" id="" value="Teknikal" class="form-control">
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
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="">Wajaran Spesifikasi</label>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="wajaranSpesifikasi2" id="wajaranSpesifikasi21">
                                    <label class="form-check-label" for="wajaranSpesifikasi21">
                                        Mengikut Keutamaan
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="wajaranSpesifikasi2" id="wajaranSpesifikasi2" checked>
                                    <label class="form-check-label" for="jenisBarang2">
                                        Secara Terus
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
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="">Penghantaran Fizikal</label>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="wajaranSpesifikasi2" id="wajaranSpesifikasi21">
                                    <label class="form-check-label" for="wajaranSpesifikasi21">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="wajaranSpesifikasi2" id="wajaranSpesifikasi2" checked>
                                    <label class="form-check-label" for="jenisBarang2">
                                        Tidak
                                    </label>
                                </div>
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
                                        <th class="text-center align-middle" rowspan="2">Unit Ukuran <span class="text-danger">*</span></th>
                                        <th class="text-center align-middle" rowspan="2">Kekerapan / Unit Ukuran <span class="text-danger">*</span></th>
                                        <th class="text-center align-middle" rowspan="2">Bil. Unit Ukuran Sehari <span class="text-danger">*</span></th>
                                        <th class="text-center align-middle" rowspan="2">Bil. Unit Ukuran Sebulan <span class="text-danger">*</span></th>
                                        <th class="text-center align-middle" rowspan="2">Kuantiti <span class="text-danger">*</span></th>
                                        <th class="text-center align-middle" rowspan="2">Penetapan Skor <span class="text-danger">*</span></th>
                                        <th class="text-center align-middle" rowspan="2">Tindakan <span class="text-danger">*</span></th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Spesifikasi <span class="text-danger">*</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 30%"><input class="form-control" type="text" name="" value="PERKHIDMATAN DIGITAL FORENSIK KE ATAS ALIRAN PROSES SISTEM XXXX" id=""></td>
                                        <td>
                                            <select class="form-control" name="" id="">
                                                <option value="">AU - Activity UOM</option>
                                            </select>
                                        </td>
                                        <td><input class="form-control text-center" type="number" name="" value="1" id=""></td>
                                        <td></td>
                                        <td></td>
                                        <td><input class="form-control text-center" type="number" name="" value="1" id=""></td>
                                        <td></td>
                                        <td class="d-flex justify-content-center">
                                            <button class="btn btn-success m-1">Tambah Spesifikasi</button>
                                            <button class="btn btn-danger m-1">Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row mb-5">
                            <div class="col-12 d-flex justify-content-end">
                                <a href="javascript: void(0)" class="btn-md-sm btn btn-success mx-1">Tambah Item</a>
                            </div>
                        </div>
                    <!-- Penetapan Skor -->
                    
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <a href="javascript: void(0)" class="btn-md-sm btn btn-primary mx-1">Simpan</a>
                            <a href="javascript: void(0)" class="btn-md-sm btn btn-success mx-1">Selesai</a>
                            <a href="javascript: void(0)" class="btn-md-sm btn btn-danger mx-1">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Cipta Spesifikasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="card-title card-title-grey">CARI</h4>
                        
                    <div class="mx-3">
                        <div class="row my-4">
                            <div class="col-md-4 text-end">
                                Klon Spesifikasi Daripada <span class="text-danger">*</span>
                            </div>
                            <div class="col-md-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klonSpesifikasi" id="klonSpesifikasi1" checked>
                                    <label class="form-check-label" for="klonSpesifikasi1">
                                        Templat Standard / Kosong
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klonSpesifikasi" id="klonSpesifikasi2">
                                    <label class="form-check-label" for="klonSpesifikasi2">
                                        Sebut Harga / Tender Yang Lepas
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="col-4 text-end">Jenis Item</div>
                            <div class="col-4">
                                <select name="" id="" class="form-control">
                                    <option value="">Bekalan</option>
                                    <option value="">Perkhidmatan</option>
                                </select>
                            </div>
                        </div>
                            
                        <div class="row my-4">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-success mx-1" data-bs-dismiss="modal">Cari</button>
                                <button type="button" class="btn btn-success mx-1">Set Semula</button>
                            </div>
                        </div>
                    </div>
                    
                    <h4 class="card-title card-title-grey">TEMPLAT</h4>

                    <div class="mx-3">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                            data-table-sort="id"
                            data-table-order="asc"
                            data-page="1">
                            <thead>
                                <tr>
                                    <th class="text-center">Tajuk / Dokumen</th>
                                    <th class="text-center">Skor Maksima</th>
                                    <th class="text-center">Jenis Item</th>
                                    <th class="text-center">Dicipta Oleh</th>
                                    <th class="text-center">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5">Tiada rekod dijumpai</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
@endsection