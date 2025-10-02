@extends('layouts.master')

@section('title', 'Borang 6')

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

    <div class="section-header" style="text-transform: uppercase;">Borang 6
    </div>
    <div class="container-fluid mt-4">
            <h5 class="fw-bold text-center">SENARAI PETENDER YANG LULUS PENILAIAN PERINGKAT PERTAMA MENGIKUT TURUTAN HARGA TENDER</h5>

        <div class="table-responsive mt-4">
            <h6 class="fw-bold">Kriteria Kesempurnaan Tender:</h6>

            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Bilangan</th>
                        <th>Rujukan Petender</th>
                        <th>Harta Tender Asal (RM)</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $rows = [
                            ['1', '45/53', '4,438,243.50'],
                            ['2', '27/53', '4,798,852.00']
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

        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <button class="btn btn-success m-1">Simpan</button>
            </div>
        </div>
    </div>

@endsection