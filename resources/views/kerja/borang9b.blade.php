@extends('layouts.master')

@section('title', 'Borang 9b')

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

    <div class="section-header">BORANG 9b - PENGALAMAN KERJA DALAM LIMA (5) TAHUN LEPAS
    </div>
    <div class="container-fluid mt-4">
        <h5 class="fw-bold text-center">PENGALAMAN KERJA DALAM LIMA (5) TAHUN LEPAS<br> (KERJA SEBANDING)</h5>

        <div class="table-responsive mt-4">

            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th colspan="4">No. Ruj. Petender</th>
                    </tr>
                    <tr class="text-center">
                        <th rowspan="2">Bil.</th>
                        <th rowspan="2">Senarai Kerja Yang Disiapkan</th>
                        <th>Nilai Kerja (RM)</th>
                        <th>Pelarasan Nilai Kerja (RM)</th>
                    </tr>
                    <tr class="text-center">
                        <th>(a)</th>
                        <th>(b) = (a x 0.5)</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $rows = [
                            [],
                            [],
                            [],
                            []
                        ]
                    @endphp

                    @foreach($rows as $item)
                        <tr">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                    @endforeach

                        <tr class="text-end">
                            <td colspan="3" class="fw-bold">JUMLAH</td>
                            <td></td>
                        </tr>
                </tbody>
            </table>


        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <button class="btn btn-success m-1">Tambah</button>
            </div>
        </div>
    </div>

@endsection