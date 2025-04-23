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
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">Penyediaan Maklumat Tender</div>
                        </div>
                        <hr>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <h4 class="card-title card-title-grey">PELANTIKAN JAWATANKUASA</h4>
                            <p class="card-title-desc text-primary fst-italic">
                                Keahlian hendaklah terdiri daripada sekurang-kurangnya seorang (1) Pengerusi dari kalangan pegawai Kumpulan Pengurusan dan Profesional atau setaraf, dua (2) orang ahli dan seorang (1) Setiausaha.
                            </p>
                        </div>
                    </div>
                    
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Jawatankuasa Spesifikasi</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Jawatankuasa Pembuka</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#messages-1" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Jawatankuasa Penilaian Teknikal</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#settings-1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                <span class="d-none d-sm-block">Jawatankuasa Penilaian Kewangan</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home-1" role="tabpanel">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-get-url="{{ route('team.indexTableData') }}" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th data-column="id" class="sortable text-center"></th>
                                        <th data-column="kad_pengenalan" class="sortable text-center">No. Kad Pengenalan</th>
                                        <th data-column="nama" class="sortable text-center">Nama</th>
                                        <th data-column="jawatan" class="sortable text-center">Jawatan</th>
                                        <th data-column="email" class="sortable text-center">Email</th>
                                        <th data-column="gred" class="sortable text-center">Gred</th>
                                        <th data-column="pp" class="sortable text-center">P&P</th>
                                        <th data-column="peranan" class="sortable text-center">Peranan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                        <td class="text-center">100002480022</td>
                                        <td class="">Ali Bin Abu</td>
                                        <td class="">KETUA PENOLONG SETIAUSAGA KANAN</td>
                                        <td class="text-center">training@commercedc.com.my</td>
                                        <td class="text-center">G52</td>
                                        <td class="text-center">Ya</td>
                                        <td class="text-center">
                                            <select class="form-control" name="" id="">
                                                <option value="">Pengerusi</option>
                                                <option value="">Setiausaha</option>
                                                <option value="">Ahli</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                        <td class="text-center">100002480024</td>
                                        <td class="">Abu Bin Ali</td>
                                        <td class="">PENOLONG SETIAUSAHA</td>
                                        <td class="text-center">training@commercedc.com.my</td>
                                        <td class="text-center">G41</td>
                                        <td class="text-center">Tidak</td>
                                        <td class="text-center">
                                            <select class="form-control" name="" id="">
                                                <option value="">Pengerusi</option>
                                                <option value="" selected>Setiausaha</option>
                                                <option value="">Ahli</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                        <td class="text-center">100002480023</td>
                                        <td class="">Muhammad Bin Kamil</td>
                                        <td class="">PENOLONG SETIAUSAHA</td>
                                        <td class="text-center">training@commercedc.com.my</td>
                                        <td class="text-center">G41</td>
                                        <td class="text-center">Tidak</td>
                                        <td class="text-center">
                                            <select class="form-control" name="" id="">
                                                <option value="">Pengerusi</option>
                                                <option value="">Setiausaha</option>
                                                <option value="" selected>Ahli</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="profile-1" role="tabpanel">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-get-url="{{ route('team.indexTableData') }}" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th data-column="id" class="sortable text-center"></th>
                                        <th data-column="kad_pengenalan" class="sortable text-center">No. Kad Pengenalan</th>
                                        <th data-column="nama" class="sortable text-center">Nama</th>
                                        <th data-column="jawatan" class="sortable text-center">Jawatan</th>
                                        <th data-column="email" class="sortable text-center">Email</th>
                                        <th data-column="gred" class="sortable text-center">Gred</th>
                                        <th data-column="pp" class="sortable text-center">P&P</th>
                                        <th data-column="peranan" class="sortable text-center">Peranan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                        <td class="text-center">100002480022</td>
                                        <td class="">Ali Bin Abu</td>
                                        <td class="">KETUA PENOLONG SETIAUSAGA KANAN</td>
                                        <td class="text-center">training@commercedc.com.my</td>
                                        <td class="text-center">G52</td>
                                        <td class="text-center">Ya</td>
                                        <td class="text-center">
                                            <select class="form-control" name="" id="">
                                                <option value="">Pengerusi</option>
                                                <option value="">Setiausaha</option>
                                                <option value="">Ahli</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                        <td class="text-center">100002480024</td>
                                        <td class="">Abu Bin Ali</td>
                                        <td class="">PENOLONG SETIAUSAHA</td>
                                        <td class="text-center">training@commercedc.com.my</td>
                                        <td class="text-center">G41</td>
                                        <td class="text-center">Tidak</td>
                                        <td class="text-center">
                                            <select class="form-control" name="" id="">
                                                <option value="">Pengerusi</option>
                                                <option value="" selected>Setiausaha</option>
                                                <option value="">Ahli</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                        <td class="text-center">100002480023</td>
                                        <td class="">Muhammad Bin Kamil</td>
                                        <td class="">PENOLONG SETIAUSAHA</td>
                                        <td class="text-center">training@commercedc.com.my</td>
                                        <td class="text-center">G41</td>
                                        <td class="text-center">Tidak</td>
                                        <td class="text-center">
                                            <select class="form-control" name="" id="">
                                                <option value="">Pengerusi</option>
                                                <option value="">Setiausaha</option>
                                                <option value="" selected>Ahli</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="messages-1" role="tabpanel">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-get-url="{{ route('team.indexTableData') }}" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th data-column="id" class="sortable text-center"></th>
                                        <th data-column="kad_pengenalan" class="sortable text-center">No. Kad Pengenalan</th>
                                        <th data-column="nama" class="sortable text-center">Nama</th>
                                        <th data-column="jawatan" class="sortable text-center">Jawatan</th>
                                        <th data-column="email" class="sortable text-center">Email</th>
                                        <th data-column="gred" class="sortable text-center">Gred</th>
                                        <th data-column="pp" class="sortable text-center">P&P</th>
                                        <th data-column="peranan" class="sortable text-center">Peranan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                        <td class="text-center">100002480022</td>
                                        <td class="">Ali Bin Abu</td>
                                        <td class="">KETUA PENOLONG SETIAUSAGA KANAN</td>
                                        <td class="text-center">training@commercedc.com.my</td>
                                        <td class="text-center">G52</td>
                                        <td class="text-center">Ya</td>
                                        <td class="text-center">
                                            <select class="form-control" name="" id="">
                                                <option value="">Pengerusi</option>
                                                <option value="">Setiausaha</option>
                                                <option value="">Ahli</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                        <td class="text-center">100002480024</td>
                                        <td class="">Abu Bin Ali</td>
                                        <td class="">PENOLONG SETIAUSAHA</td>
                                        <td class="text-center">training@commercedc.com.my</td>
                                        <td class="text-center">G41</td>
                                        <td class="text-center">Tidak</td>
                                        <td class="text-center">
                                            <select class="form-control" name="" id="">
                                                <option value="">Pengerusi</option>
                                                <option value="" selected>Setiausaha</option>
                                                <option value="">Ahli</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                        <td class="text-center">100002480023</td>
                                        <td class="">Muhammad Bin Kamil</td>
                                        <td class="">PENOLONG SETIAUSAHA</td>
                                        <td class="text-center">training@commercedc.com.my</td>
                                        <td class="text-center">G41</td>
                                        <td class="text-center">Tidak</td>
                                        <td class="text-center">
                                            <select class="form-control" name="" id="">
                                                <option value="">Pengerusi</option>
                                                <option value="">Setiausaha</option>
                                                <option value="" selected>Ahli</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="settings-1" role="tabpanel">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-get-url="{{ route('team.indexTableData') }}" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th data-column="id" class="sortable text-center"></th>
                                        <th data-column="kad_pengenalan" class="sortable text-center">No. Kad Pengenalan</th>
                                        <th data-column="nama" class="sortable text-center">Nama</th>
                                        <th data-column="jawatan" class="sortable text-center">Jawatan</th>
                                        <th data-column="email" class="sortable text-center">Email</th>
                                        <th data-column="gred" class="sortable text-center">Gred</th>
                                        <th data-column="pp" class="sortable text-center">P&P</th>
                                        <th data-column="peranan" class="sortable text-center">Peranan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                        <td class="text-center">100002480022</td>
                                        <td class="">Ali Bin Abu</td>
                                        <td class="">KETUA PENOLONG SETIAUSAGA KANAN</td>
                                        <td class="text-center">training@commercedc.com.my</td>
                                        <td class="text-center">G52</td>
                                        <td class="text-center">Ya</td>
                                        <td class="text-center">
                                            <select class="form-control" name="" id="">
                                                <option value="">Pengerusi</option>
                                                <option value="">Setiausaha</option>
                                                <option value="">Ahli</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                        <td class="text-center">100002480024</td>
                                        <td class="">Abu Bin Ali</td>
                                        <td class="">PENOLONG SETIAUSAHA</td>
                                        <td class="text-center">training@commercedc.com.my</td>
                                        <td class="text-center">G41</td>
                                        <td class="text-center">Tidak</td>
                                        <td class="text-center">
                                            <select class="form-control" name="" id="">
                                                <option value="">Pengerusi</option>
                                                <option value="" selected>Setiausaha</option>
                                                <option value="">Ahli</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                        <td class="text-center">100002480023</td>
                                        <td class="">Muhammad Bin Kamil</td>
                                        <td class="">PENOLONG SETIAUSAHA</td>
                                        <td class="text-center">training@commercedc.com.my</td>
                                        <td class="text-center">G41</td>
                                        <td class="text-center">Tidak</td>
                                        <td class="text-center">
                                            <select class="form-control" name="" id="">
                                                <option value="">Pengerusi</option>
                                                <option value="">Setiausaha</option>
                                                <option value="" selected>Ahli</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <a href="{{ route('team.create') }}" class="btn-md-sm btn btn-success mx-1">Tambah</a>
                            <a href="{{ route('team.create') }}" class="btn-md-sm btn btn-danger mx-1">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-12">
                            <h4 class="card-title card-title-grey">Catatan</h4>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label for="" class="">Catatan</label>
                        </div>
                        <div class="col-md-3">
                            <textarea class="form-control" name="" id=""></textarea>
                        </div>
                        <div class="col-md-2 d-flex justify-content-end">
                            <label for="" class="">Dokumen Sokongan</label>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-success">Muat Naik</button>
                        </div>
                    </div>
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