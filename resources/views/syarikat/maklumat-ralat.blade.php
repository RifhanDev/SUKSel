@extends('layouts.master')

@section('title', 'Senarai Dokumen Tender')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .table thead th {
            background-color: #3e5a9a;
            color: white;
            font-weight: 600;
        }

        .btn-selengkapnya {
            background-color: #3c478e;
            color: white;
            font-size: 0.85rem;
            padding: 5px 15px;
        }


        .section-header {
            background-color: #d6d6d6;
            font-weight: 600;
            padding: 6px 12px;
            margin-bottom: 10px;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
    </style>
@endsection

@section('content')
    <div class="container mt-4">
        <h5 class="mb-3">Dokumen Tender</h5>

        <div class="section-header">
            MAKLUMAT RALAT
        </div>

        <div class="table-responsive">
            <table class="table table-bordered align-middle text-nowrap custom-table">
                <thead class="text-center">
                    <tr>
                        <th style="width: 140px;">Tarikh</th>
                        <th>Tajuk</th>
                        <th style="width: 120px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">05/07/2024</td>
                        <td>RALAT DOKUMEN</td>
                        <td class="text-center">
                            <button class="btn btn-primary">Selanjutnya</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">09/07/2024</td>
                        <td>RALAT DOKUMEN</td>
                        <td class="text-center">
                            <button class="btn btn-primary">Selanjutnya</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection