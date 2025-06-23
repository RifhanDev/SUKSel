@extends('layouts.master')

@section('title', 'Cadangan Teknikal')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        th, td {
            vertical-align: middle !important;
        }
        .table thead th {
            background-color: #3e5a9a;
            color: white;
            font-weight: 600;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
    </style>
@endsection

@section('content')
<div class="container mt-4 mb-5">
    <h5 class="fw-bold mb-3">PENYEDIAAN KERTAS CADANGAN > CADANGAN TEKNIKAL > SPESIFIKASI</h5>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                    <tr>
                        <th class="text-center" style="min-width: 250px;">Item</th>
                        <th rowspan="2" class="text-center">Unit Ukuran</th>
                        <th rowspan="2" class="text-center">Kekerapan / Unit Ukuran</th>
                        <th colspan="2" class="text-center">Bil. Unit Ukuran</th>
                        <th rowspan="2" class="text-center">Kuantiti</th>
                        <th rowspan="2" class="text-center">Maklumbalas</th>
                        <th rowspan="2" class="text-center">Catatan</th>
                    </tr>
                    <tr>
                        <th class="text-center">Spesifikasi</th>
                        <th class="text-center">sehari</th>
                        <th class="text-center">sebulan</th>
                    </tr>
             </thead>

            <tbody>
                <tr class="table-secondary">
                        <td> 
                            <strong>PENYEDIAAN DAN PENGAKTIFAN PLATFORM KESELAMATAN</strong><br>
                        </td>
                        <td>unit</td>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>

                @foreach ([
                    '1. Petender mestilah menyediakan platform perkhidmatan yang terlihat seperti yang disenaraikan di bawah:',
                    '1.1 Endpoint XDR seperti di LAMPIRAN A1',
                    '1.2 Network DR seperti di LAMPIRAN A2',
                    '1.3 Attack Surface Risk Management (ASRM) seperti di LAMPIRAN A3',
                    '1.4 Threat Intelligence seperti di LAMPIRAN A4'
                ] as $item)
                <tr>
                    <td>{{ $item }}</td>
                    <td colspan="4"></td>
                    <td></td>
                    <td>
                        <select class="form-select">
                            <option selected>- Pilih Satu -</option>
                            <option>Disediakan</option>
                            <option>Tidak Disediakan</option>
                        </select>
                    </td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                @endforeach
                <tr>
                    <td>2. Kos pengaktifan platform yang dicadangkan petender adalah secara tahunan dan tidak melebihi 60% daripada jumlah keseluruhan kos tahunan</td>
                    <td colspan="4"></td>
                    <td></td>
                    <td>
                        <select class="form-select">
                            <option selected>- Pilih Satu -</option>
                            <option>Setuju</option>
                            <option>Tidak Setuju</option>
                        </select>
                    </td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr class="table-secondary">
                    <td><strong>PERKHIDMATAN PENGURUSAN KESELAMATAN</strong></td>
                    <td>months</td>
                    <td>36</td>
                    <td></td>
                    <td></td>
                    <td>1</td>
                    <td></td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>1. Petender mestilah menyediakan perkhidmatan bagi tempoh 36 bulan dan kos adalah</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <select class="form-select">
                            <option selected>- Pilih Satu -</option>
                            <option>Setuju</option>
                            <option>Tidak Setuju</option>
                        </select>
                    </td>
                    <td><input type="text" class="form-control"></td>
                </tr>

@endsection
