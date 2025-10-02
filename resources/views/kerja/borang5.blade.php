@extends('layouts.master')

@section('title', 'Borang 5 - Jadual Keputusan Penilaian Peringkat Pertama')

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

    <div class="section-header" style="text-transform: uppercase;">Borang 5 - Jadual Keputusan Penilaian Peringkat Pertama
    </div>
    <div class="container-fluid mt-4">

        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Kriteria - kriteria</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $rows = [
                            'Kesempurnaan Tender (Borang 1)',
                            'Kecukupan Dokumen (Borang 2)',
                            'Kecukupan Modal (Borang 3)',
                            'Prestasi Kerja Semasa (Borang 4)'
                        ];
                    @endphp

                    @foreach($rows as $row)
                        <tr>
                            <td>{{ $row }}</td>
                            <td class="text-center">
                                <button class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#modalPapar">Papar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    
    <br>
    <h5 class="fw-bold">RUMUSAN</h5>
    <div class="section-header">KEPUTUSAN PENILAIAN PERINGKAT PERTAMA</div>

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
                    @php
                        $rows = [
                            ['1/2', 'Sempurna', 'xxx'],
                            ['2/2', 'Sempurna', 'xxx']
                        ]
                    @endphp

                    @foreach($rows as $item)
                        <tr class="text-center">
                            <td>{{ $item[0] }}</td>
                            <td>{{ $item[1] }}</td>
                            <td>{{ $item[2] }}</td>
                        </tr>
                    @endforeach
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
                    <h6 class="section-header">JENIS KRITERIA</h6>
                    <div class="row mb-4">
                        <div class="col-12">
                            Borang Tender Dintandatangani
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
                                        <th>Status Kesempurnaan</th>
                                        <th>Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>1</td>
                                        <td>Kesempurnaan Tender (Borang 1)</td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Sempurna</option>
                                                <option value="">Sempurna</option>
                                                <option value="">Tiada Borang GA</option>
                                                <option value="">Tidak Sempurna</option>
                                                <option value="">Tiada Kerja Semasa</option>
                                            </select>
                                        </td>
                                        <td><textarea name="" id=""></textarea></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>2</td>
                                        <td>Salinan Sijil Pendaftaran dengan Kementerian Kewangan.pdf</td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Sempurna</option>
                                                <option value="">Sempurna</option>
                                                <option value="">Tiada Borang GA</option>
                                                <option value="">Tidak Sempurna</option>
                                                <option value="">Tiada Kerja Semasa</option>
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