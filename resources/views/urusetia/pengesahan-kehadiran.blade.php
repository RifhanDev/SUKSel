@extends('layouts.master')

@section('title', 'Pengesahan Kehadiran')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        .breadcrumb-path {
            background-color: #e6e6e6;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .header-info {
            background-color: #e6e6e6;
            padding: 10px 15px;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .header-info b {
            font-weight: 700;
        }

        .header-info span.red-text {
            color: #c40000;
        }

        .table thead th {
            background-color: #3e5a9a;
            color: white;
            font-weight: 600;
        }

        .section-header {
            background-color: #d6d6d6;
            font-weight: bold;
            padding: 10px;
        }
    </style>
@endsection




@section('content')

    <div class="section-header">PENGESAHAN KEHADIRAN LAWATAN TAPAK</div>
    <div class="container-fluid mt-4">

        <div class="row mt-3">
            <div class="col-md-3">
                <select class="form-select" aria-label="Tarikh">
                    <option selected>Tarikh</option>
                    <option value="1">20 Mei 2025</option>
                    <option value="2">21 Mei 2025</option>
                </select>
            </div>
            <div class="col-md-5">
                <select class="form-select" aria-label="Tajuk Perolehan">
                    <option selected>Tajuk Perolehan</option>
                    <option value="1">Projek Naik Taraf Sistem</option>
                    <option value="2">Pembekalan ICT</option>
                </select>
            </div>
        </div>

        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th>No IC</th>
                        <th>Nama Individu</th>
                        <th>ROC Syarikat<br><small>(Hanya syarikat yang berdaftar sahaja)</small></th>
                        <th>Hadir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>980405089035</td>
                        <td>ALI BIN ABU</td>
                        <td></td>
                        <td class="text-center">
                            <input type="checkbox" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td>940306089037</td>
                        <td>SULAIMAN BIN HALIM</td>
                        <td></td>
                        <td class="text-center">
                            <input type="checkbox" class="form-check-input">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-3 text-end">
        <!-- Button trigger modal -->
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah</button>
    </div>

        <div class="mt-4 d-flex justify-content-end gap-2">
            <button class="btn btn-info">Laporan</button>
            <button class="btn btn-success">Simpan</button>
        </div>
    </div>

    <!-- MODAL TAMBAH -->
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="fw-bold mb-3">Pengesahan Kehadiran</h5>

                    <table class="table table-bordered">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>No IC</th>
                                <th>Nama Individu</th>
                                <th>ROC Syarikat<br><small>(Hanya syarikat yang berdaftar sahaja)</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-control" value="984356089032" /></td>
                                <td><input type="text" class="form-control" value="ALI BIN ABU" /></td>
                                <td><input type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" /></td>
                                <td><input type="text" class="form-control" /></td>
                                <td><input type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" /></td>
                                <td><input type="text" class="form-control" /></td>
                                <td><input type="text" class="form-control" /></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-muted small mt-2">Nota: Nama ejen dan penama hendaklah dinyatakan di sijil CIDB dan
                        MoF.</div>

                    <div class="text-end mt-3">
                        <button class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection