@extends('layouts.master')

@section('title', 'Pemilihan Syarikat')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />

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

    <div class="section-header">SENARAI PROJEK UNTUK PEMBELIAN TERUS</div>
    <div class="container-fluid mt-4">

        <div class="row mt-3">
            <div class="col-md-3">
                <select class="form-select" aria-label="No. Tender">
                    <option selected>No.Tender</option>
                    <option value="1"></option>
                    <option value="2"></option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select" aria-label="Tajuk Perolehan">
                    <option selected>Tajuk Perolehan</option>
                    <option value="1">Projek Naik Taraf Sistem</option>
                    <option value="2">Pembekalan ICT</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-select" aria-label="Tarikh">
                    <option selected>Tarikh</option>
                    <option value="1">20 Mei 2025</option>
                    <option value="2">21 Mei 2025</option>
                </select>
            </div>
        </div>

        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Bil</th>
                        <th>ROC Syarikat (Hanya Syarikat yang Berdaftar Sahaja)</th>
                        <th>Lokasi</th>
                        <th>No IC</th>
                        <th>Nama Individu</th>
                        <th>Hadir</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row text-center">
                        <td>1</td>
                        <td>XXX - Nama Syarikat A</td>
                        <td></td>
                        <td>980405089035</td>
                        <td>ALI BIN ABU</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="checkbox" value="1">
                                    <label class="form-check-label" for="checkbox"></label>
                                </div>
                            </div>
                        </td>

                        <td class="text-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#tindakanModal" title="Tindakan">
                                <i class="bi bi-pencil-square fs-5"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container-fluid mt-4">
            <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-success me-2">
                    Tambah Kehadiran
                </button>
            </div>
            <div class="container-fluid mt-4">
                <div class="d-flex justify-content-end gap-2">
                    <button type="button" class="btn btn-info">
                        Laporan
                    </button>
                    <button type="button" class="btn btn-success">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>



    <!-- Tindakan Modal -->
    <div class="modal fade" id="tindakanModal" tabindex="-1" aria-labelledby="tindakanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="tindakanModalLabel">Pengesahan Kehadiran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">

                    <div class="text-end" style="font-size:0.9rem; color:#6c757d;">
                        dd/mm/yyyy
                    </div>
                    <br>
                    {{-- Table --}}
                    <table class="table table-bordered text-center mb-3">
                        <thead class="table-primary align-middle">
                            <tr>
                                <th>
                                    ROC Syarikat<br>
                                    <small>(Hanya syarikat yang berdaftar sahaja)</small>
                                </th>
                                <th>No IC</th>
                                <th>Nama Individu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" value="XXX - Nama Syarikat A" readonly>
                                </td>
                                <td>
                                    <input type="text" class="form-control" value="984356089032" readonly>
                                </td>
                                <td>
                                    <input type="text" class="form-control" value="ALI BIN ABU" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    {{-- Note --}}
                    <p class="small">
                        Nota: Nama ejen dan penama hendaklah dinyatakan di sijil CIDB dan MoF.
                    </p>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-success" onclick="/* your save logic here */">
                        Simpan
                    </button>
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