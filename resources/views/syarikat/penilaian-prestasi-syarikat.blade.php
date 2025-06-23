@extends('layouts.master')

@section('title', 'Penilaian Prestasi Syarikat')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .section-header {
            background-color: #d6d6d6;
            font-weight: bold;
            padding: 8px;
        }

        .header-bg {
            background-color: #4054a0;
            color: white;
            text-align: center;
            vertical-align: middle;
        }

        .label-title {
            font-size: 20px;
            font-weight: 600;
            color: #444;
        }

        .no-record {
            font-weight: 500;
            padding: 12px;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .table thead th {
            background-color: #3e5a9a;
            color: white;
            font-weight: 600;
        }
    </style>
@endsection

@section('content')
<h6>DOKUMEN TENDER</h6>

<div class="section-header">PENILAIAN PRESTASI SYARIKAT</div>
    <div class="container mt-4">

        <div class="border p-4 bg-white">
            <div class="label-title mb-4">BORANG PENILAIAN SYARIKAT / PEMBEKAL / PERKHIDMATAN</div>

            <div class="mb-2" style="font-size: 18px; font-weight: 500; color: #444;">SENARAI PRESTASI SYARIKAT</div>

            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="header-bg">
                        <tr>
                            <th style="width: 80px;">Bil.</th>
                            <th style="width: 150px;">Tarikh</th>
                            <th>Penilai</th>
                            <th>Keseluruhan Markah</th>
                            <th style="width: 120px;">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" class="no-record text-start">Tiada rekod penilaian</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection