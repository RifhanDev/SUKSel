@extends('layouts.master')

@section('title', 'Senarai Dokumen Tender')

@section('css')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .section-header {
            background-color: #6c7080;
            color: white;
            padding: 8px 16px;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .table thead th {
            background-color: #3e5a9a;
            color: white;
            font-weight: 600;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }

        .btn-icon {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 0.9rem;
        }

        .btn-download-all {
            float: right;
        }
    </style>
@endsection

@section('content')
    <div class="container mt-4">
        <h6 class="section-header">SENARAI DOKUMEN TENDER</h6>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead>
                    <tr>
                        <th>Tender / Sebut Harga</th>
                        <th style="width: 140px;">Muat Turun</th>
                        <th style="width: 140px;">Muat Naik</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $documents = [
                            'Kenyataan Tawaran Pembekal',
                            'Sampel Surat Akuan Pembida',
                            'Delivery/Service Address',
                            'Syarat-syarat Am/Arahan/Syarat-syarat Khas/Terma Kontrak',
                            'Spesifikasi',
                            'Senarai Semak untuk Pematuhan Teknikal',
                            'Senarai Semak untuk Pematuhan Kewangan',
                            'Sampel Surat Setuju Terima',
                            'HARGA INDIKATIF',
                        ];
                    @endphp

                    @foreach($documents as $doc)
                        <tr>
                            <td>{{ $doc }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-outline-primary btn-icon" title="Muat Turun {{ $doc }}">
                                    <i class="bi bi-download"></i> Download
                                </button>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-outline-secondary btn-icon" title="Muat Naik {{ $doc }}">
                                    <i class="bi bi-upload"></i> Upload
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


            {{-- Button below table, aligned right --}}
            <div class="mt-3 text-end">
                <button type="button" class="btn btn-success btn-download-all">MUAT TURUN SEMUA</button>
            </div>
        </div>
        <br>

    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection