@extends('layouts.master')

@section('title', 'Penyediaan Dokumen Tender / Tawaran')

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

    <div class="section-header">SENARAI DOKUMEN TENDER YANG PERLU DIMUAT NAIK OLEH PEMILIK PROJEK</div>
    <div class="container-fluid mt-4">


        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Bil</th>
                        <th>Nama Dokumen</th>
                        <th>Tindakan oleh Petender</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>DOKUMEN BQ</td>
                        <td>
                            <select name="tindakan-petender" class="form-select form-select-sm">
                                <option value="1">Kunci Masuk</option>
                                <option value="2">Muat Naik</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-center">2</td>
                        <td>LEMBARAN IMBANGAN</td>
                        <td>
                            <select name="tindakan-petender" class="form-select form-select-sm">
                                <option value="1">Kunci Masuk</option>
                                <option value="2">Muat Naik</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="text-center">3</td>
                        <td>PENYATA BULANAN / AKAUN BANK</td>
                        <td>
                            <select name="tindakan-petender" class="form-select form-select-sm">
                                <option value="1">Kunci Masuk</option>
                                <option value="2">Muat Naik</option>
                            </select>
                        </td>
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