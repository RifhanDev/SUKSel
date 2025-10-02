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


        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th>No. Tender / Sebut Harga</th>
                        <th>Tajuk Perolehan</th>
                        <th>Nama Syarikat</th>
                        <th>Harga Termasuk (SST)</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row text-center" data-href="keputusan-syarikat-content">
                        <td>QT210000000023741</td>
                        <td>BEKALAN BARANGAN PERSEKOLAHAN</td>
                        <td>Z & Z PROJECT MANAGEMENT SDN BHD</td>
                        <td>410,400.00</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-success me-1">Terima</button>
                            <button type="button" class="btn btn-sm btn-danger">Tolak</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-end mt-3">
            <button class="btn btn-secondary">
                Surat Setuju Terima
            </button>
        </div>

    </div>

    <script>
        // make any <tr data-href> act like a link
        document.querySelectorAll('tbody tr[data-href]')
            .forEach(row => {
                row.style.cursor = 'pointer';
                row.addEventListener('click', () => {
                    window.location.href = row.dataset.href;
                });
            });

    </script>

@endsection