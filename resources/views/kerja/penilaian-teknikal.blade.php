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
                        <th>No. Tender / Sebut Harga</th>
                        <th>Tajuk Perolehan</th>
                        <th>Tarikh</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row text-center" data-href="{{ route('penilaian-teknikal-content') }}">
                        <td>QT210000000023741</td>
                        <td>KERJA-KERJA MENAIK TARAF SUNGAI BATU DAN KAWASAN SEKITAR SELANGOR DARUL EHSAN</td>
                        <td>3/3/2024</td>
                        <td></td>
                    </tr>
                    <tr class="table-row text-center">
                        <td>QT210000000023740</td>
                        <td>TAJUK PEROLEHAN 1</td>
                        <td>2/2/2024</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
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