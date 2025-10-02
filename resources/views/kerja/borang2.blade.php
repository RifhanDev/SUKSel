@extends('layouts.master')

@section('title', 'Pemilihan Syarikat')

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

    <div class="section-header">BORANG 2 - ANALISA KECUKUPAN DOKUMEN</div>
    <div class="container-fluid mt-4">

        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Dokumen</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row">
                        <td>Lembaran Imbangan</td>
                        <td class="text-center">
                            <button class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#modalPapar">Papar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <br>
    <h5 class="fw-bold">RUMUSAN</h5>
    <div class="section-header">KEPUTUSAN PENILAIAN ANALISA KESEMPURNAAN TENDER</div>

    <div class="container-fluid mt-4">

        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Bil</th>
                        <th>Keputusan</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row text-center">
                        <td>1/2</td>
                        <td>Cukup</td>
                        <td>XXX</td>
                    </tr>
                    <tr class="table-row text-center">
                        <td>2/2</td>
                        <td>Cukup</td>
                        <td>XXX</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Bilangan Pembekal -->
        <div class="row mt-3 align-items-center">
            <div class="col-auto fw-bold">Bilangan Pembekal</div>
            <div class="col-auto">
                <input type="number" class="form-control" value="2" style="width: 80px;">
            </div>
        </div>

        <!-- Confirmation Checkbox -->
        <div class="form-check mt-3">
            <input class="form-check-input" type="checkbox" id="confirmationCheckbox">
            <label class="form-check-label" for="confirmationCheckbox">
                Saya mengesahkan petender diatas layak untuk penilaian peringkat seterusnya.
            </label>
        </div>

    </div>

    <div class="row mb-3 px-3">
        <div class="col-md-12 d-flex justify-content-end">
            <button class="btn btn-success">Simpan</button>
        </div>
    </div>


    <div class="modal fade" id="modalPapar" tabindex="-1" aria-labelledby="modalPaparLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="section-header">NAMA DOKUMEN</h6>
                    <div class="row mb-4">
                        <div class="col-12">
                            LEMBARAN IMBANGAN
                        </div>
                    </div>

                    <h6 class="section-header">SENARAI PEMBEKAL</h6>
                    <p class="card-title-desc text-primary fst-italic">
                        Klik butang Semak untuk meneruskan penilaian pematuhan
                    </p>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100"
                                data-table-sort="id" data-table-order="asc" data-page="1">
                                <thead>
                                    <tr class="text-center">
                                        <th>Bil</th>
                                        <th>Dokumen</th>
                                        <th>Dikemukakan</th>
                                        <th>Diaudit</th>
                                        <th>Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>1/2</td>
                                        <td>Lembaran Imbangan</td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Ya / Tidak</option>
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Ya / Tidak</option>
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                            </select>
                                        </td>
                                        <td><textarea name="" id=""></textarea></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>1/2</td>
                                        <td>Lembaran Imbangan</td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Ya / Tidak</option>
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Ya / Tidak</option>
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                            </select>
                                        </td>
                                        <td><textarea name="" id=""></textarea></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-success m-1">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('tbody tr[data-href]')
                .forEach(row => {
                    row.style.cursor = 'pointer';
                    row.addEventListener('click', () => {
                        window.location.href = row.dataset.href;
                    });
                });
        });
    </script>


@endsection