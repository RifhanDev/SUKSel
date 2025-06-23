@extends('layouts.master')

@section('title', 'Cadangan Teknikal')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* Custom styles based on screenshot */
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

        tbody tr td {
            vertical-align: middle;
        }

        tbody tr td.text-center {
            text-align: center;
        }

        .action-btn {
            min-width: 80px;
        }

        .btn-sedia {
            background-color: #3fb298 !important;
            color: white !important;
        }

        .btn-sedia:hover {
            background-color: #368b82 !important;
            color: white !important;
        }

        .btn-footer {
            min-width: 100px !important;
            font-weight: 600 !important;
            border-radius: 4px !important;
        }

        .btn-laporan {
            background-color: #3fb298 !important;
            color: white !important;
            border: none !important;
            margin-right: 10px !important;
        }

        .btn-laporan:hover {
            background-color: #368b82 !important;
            color: white !important;
        }

        .btn-hantar {
            background-color: #3f3f79 !important;
            color: white !important;
            border: none !important;
        }

        .btn-hantar:hover {
            background-color: #2e2e56 !important;
            color: white !important;
        }

        .table td,
        .table th {
            padding: 10px !important;
        }
        
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumb / Path -->
        <div class="breadcrumb-path">
            PENYEDIAAN KERTAS CADANGAN &gt; CADANGAN KEWANGAN
        </div>
        <!-- Header info -->
        <div class="header-info d-flex flex-wrap gap-3">
            <div><b>No. Cadangan</b> PN250000000254198</div>
            <div><b>Status</b> Menunggu Penyediaan Cadangan</div>
            <div><b>Tarikh Hantar</b></div>
            <div><b>Tarikh Tutup</b> 16/04/2025</div>
            <div><b>Tempoh Berbaki</b> <span class="red-text">37 Hari 39 Minit</span></div>
        </div>

        <br>
        <h6 class="mb-3">CADANGAN KEWANGAN</h6>

        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th style="width: 40px;"></th>
                        <th>Perihal</th>
                        <th>Arahan</th>
                        <th style="width: 110px;">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"><input type="checkbox" /></td>
                        <td>PERKHIDMATAN PENGURUSAN KESELAMATAN SIBER SECARA TERURUS DI KEMENTERIAN PENDIDIKAN TINGGI (KPT)
                        </td>
                        <td>Klik “Sedia” untuk menyediakan cadangan</td>
                        <td class="text-center">
                            <a href="{{ url('cadangan-kewangan-harga_tawaran') }}"
                                class="btn btn-sedia action-btn">Sedia</a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Maklumat Pembekal</td>
                        <td>Klik “Lihat” untuk melihat maklumat dijana daripada modul Pengurusan Pembekal</td>
                        <td class="text-center"><button class="btn btn-sedia action-btn">Sedia</button></td>
                    </tr>
                    <tr>
                        <td class="text-center"><input type="checkbox" /></td>
                        <td>Penyata bank untuk tiga bulan</td>
                        <td>Klik “Sedia” untuk menyediakan cadangan</td>
                        <td class="text-center"><button class="btn btn-sedia action-btn">Sedia</button></td>
                    </tr>
                    <tr>
                        <td class="text-center"><input type="checkbox" /></td>
                        <td>Pengesahan dari Institusi Kewangan untuk tiga bulan Penyata Bank</td>
                        <td>Klik ikon lampir untuk muat naik dokumen berkaitan</td>
                        <td class="text-center">
                            <div class="upload-container">
                                <i class="bi bi-upload table-icon"></i>
                                <button class="btn btn-md btn-primary">Upload</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><input type="checkbox" /></td>
                        <td>Aset dan Liabiliti (Dari Kunci Kira-kira)</td>
                        <td>Klik “Sedia” untuk menyediakan cadangan</td>
                        <td class="text-center"><button class="btn btn-sedia action-btn">Sedia</button></td>
                    </tr>
                    <tr>
                        <td class="text-center"><input type="checkbox" /></td>
                        <td>Kunci Kira-Kira Tahunan (Nota – Untuk syarikat ROC, ini mestilah salinan yang telah diaudit)
                        </td>
                        <td>
                            Sila klik untuk muatnaik dokumen sokongan. Sekiranya tiada maklumat Kemudahan Kredit, muatnaik
                            dokumen tidak diperlukan.
                        </td>
                        <td class="text-center">
                            <div class="upload-container">
                                <i class="bi bi-upload table-icon"></i>
                                <button class="btn btn-md btn-primary">Upload</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><input type="checkbox" /></td>
                        <td>Kemudahan Kredit (Overdraf, Pinjaman Bank)</td>
                        <td>Klik “Sedia” untuk menyediakan cadangan</td>
                        <td class="text-center"><button class="btn btn-sedia btn-md action-btn">Sedia</button></td>
                    </tr>
                    <tr>
                        <td class="text-center"><input type="checkbox" /></td>
                        <td>Pengesahan dari Institusi Kewangan ke atas jumlah yang telah dibayar</td>
                        <td>Klik ikon lampir untuk muat naik dokumen sokongan Kemudahan Kredit, jika ada</td>
                        <td class="text-center">
                            <div class="upload-container">
                                <i class="bi bi-upload table-icon"></i>
                                <button class="btn btn-md btn-primary">Upload</button>
                            </div>
                        </td>
                    </tr>
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