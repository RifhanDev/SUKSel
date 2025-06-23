@extends('layouts.master')

@section('title', 'Cadangan Teknikal')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .section-header {
            background-color: #d6d6d6;
            font-weight: bold;
            padding: 10px;
        }

        .header-bg {
            background-color: #4054a0;
            color: white;
            text-align: center;
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

        .btn-sedia {
            background-color: #29cc8b !important;
            color: white;
            font-weight: 500;
        }

        .btn-laporan {
            background-color: #3fb298 !important;
            color: white !important;
        }

        .btn-laporan:hover {
            background-color: #368b82 !important;
            color: white !important;
        }

        .btn-hantar {
            background-color: #3f3f79 !important;
            color: white !important;
        }

        .btn-hantar:hover {
            background-color: #2e2e56 !important;
            color: white !important;
        }

        .table-icon {
            color: #19a7ce;
        }

        .countdown {
            color: red;
            font-weight: 600;
        }

        .nowrap {
            white-space: nowrap;
        }
    </style>
@endsection

@section('content')
    <div class="section-header">PENYEDIAAN KERTAS CADANGAN > CADANGAN TEKNIKAL</div>

    <div class="border p-3 bg-white mb-3">
        <div class="row mb-2">
            <div class="col-md-3"><strong>No. Cadangan</strong> PN250000000254198</div>
            <div class="col-md-3"><strong>Status</strong> Menunggu Penyediaan Cadangan</div>
            <div class="col-md-3"><strong>Tarikh Hantar</strong></div>
            <div class="col-md-3"><strong>Tarikh Tutup</strong> 16/04/2025</div>
        </div>
        <div><strong>Tempoh Berbaki</strong> <span class="countdown">37 Hari 39 Minit</span></div>
    </div>

    <div class="section-header">CADANGAN TEKNIKAL</div>

    <div class="container mt-4">


        @php
            $lampiran = [
                [
                    'PERKHIDMATAN PENGURUSAN KESELAMATAN SIBER SECARA TERURUS DI KEMENTERIAN PENDIDIKAN TINGGI (KPT)',
                    'Klik “Sedia” untuk menyediakan cadangan',
                    'sedia'
                ],
                ['LAMPIRAN A1 – ENDPOINT XDR', 'Kunci masuk maklumat ke dalam fail dan muat naik', 'upload', 'LAMPIRAN A1 – ENDPOINT XDR.xlsx'],
                ['LAMPIRAN A2 – NETWORK SECURITY', 'Kunci masuk maklumat ke dalam fail dan muat naik', 'upload', 'LAMPIRAN A2 – NETWORK_SECURITY.xlsx'],
                ['LAMPIRAN A3 – ASRM', 'Kunci masuk maklumat ke dalam fail dan muat naik', 'upload', 'LAMPIRAN A3 – ASRM.xlsx'],
                ['LAMPIRAN A4 – THREAT INTELLIGENCE', 'Kunci masuk maklumat ke dalam fail dan muat naik', 'upload', 'LAMPIRAN A4 – THREAT INTELLIGENCE.xlsx'],
                ['LAMPIRAN B1 – SKOP KERJA UMUM', 'Kunci masuk maklumat ke dalam fail dan muat naik', 'upload', 'LAMPIRAN B1 – SKOP KERJA UMUM.xlsx'],
                ['LAMPIRAN B2 – SOCaaS', 'Kunci masuk maklumat ke dalam fail dan muat naik', 'upload', 'LAMPIRAN B2 – SOCaaS.xlsx'],
                ['LAMPIRAN B3 – INSIDENT RESPONSE & BREACH MANAGEMENT', 'Kunci masuk maklumat ke dalam fail dan muat naik', 'upload', 'LAMPIRAN B3 – INSIDENT RESPONSE & BREACH MANAGEMENT.xlsx'],
                ['LAMPIRAN C – SENARAI PERKAKASAN DAN PERISIAN', 'Klik pautan untuk muat turun/lihat fail', 'download', 'LAMPIRAN C – SENARAI PERKAKASAN_DAN_PERISIAN.docx']
            ];
        @endphp

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="header-bg">
                    <tr class="text-center">
                        <th style="width: 50px;"></th>
                        <th>Perihal</th>
                        <th>Arahan</th>
                        <th style="width: 250px;">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lampiran as $index => $item)
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" />
                            </td>
                            <td>{!! $item[0] !!}</td>
                            <td>{!! $item[1] !!}</td>
                            <td class="text-center">
                                @if ($item[2] === 'sedia')
                                    <a href="{{ url('cadangan-teknikal-spek') }}" class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-sedia w-50 text-white">Sedia</button>
                                    </a>
                                @elseif ($item[2] === 'upload')
                                    <div class="d-flex flex-column gap-2">
                                        <i class="bi bi-upload table-icon"></i>
                                        <a href="#" class="d-block mb-2">{{ $item[3] }}</a>
                                        <button class="btn btn-sm btn-primary">Upload</button>
                                    </div>
                                @elseif ($item[2] === 'download')
                                    <a href="#" class="btn btn-sm btn-outline-secondary">
                                        {{ $item[3] }}
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <div class="d-flex justify-content-end mt-4 gap-2">
            <button class="btn btn-laporan px-4">Laporan</button>
            <button class="btn btn-hantar px-4">Hantar</button>
        </div>
        <br>
    </div>
@endsection