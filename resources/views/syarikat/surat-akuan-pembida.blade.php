@extends('layouts.master')

@section('title', 'Surat Akuan Pembida')

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

        .content-box {
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 15px;
            font-size: 14px;
            overflow-y: scroll;
            white-space: normal;
            font-family: Arial, sans-serif;
        }

        .checkbox-label {
            font-weight: 600;
        }

        .btn-group-custom {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumb / Path -->
        <div class="breadcrumb-path">
            PENYEDIAAN KERTAS CADANGAN &gt; SURAT AKUAN PEMBIDA
        </div>
        <!-- Header info -->
        <div class="header-info d-flex flex-wrap gap-3">
            <div><b>No. Cadangan</b> PN250000000254198</div>
            <div><b>Status</b> Menunggu Penyediaan Cadangan</div>
            <div><b>Tarikh Hantar</b></div>
            <div><b>Tarikh Tutup</b> 16/04/2025</div>
            <div><b>Tempoh Berbaki</b> <span class="red-text">37 Hari 39 Minit</span></div>
        </div>
    </div>
    <!-- Content box with scroll -->
    <div class="container mt-3">

        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <p>
                        Pekeliling Perbendaharaan Malaysia<br>
                        No. Sebut Harga/Tender : <a href="#">QT240000000025740</a>
                    </p>
                    <h5 class="text-center fw-bold">
                        SURAT AKUAN PEMBIDA<br>
                        TENDER PERKHIDMATAN PENGURUSAN KESELAMATAN SIBER SECARA TERURUS DI<br>
                        KEMENTERIAN PENDIDIKAN TINGGI (KPT)<br>
                        QT240000000025740
                    </h5>
                    <p class="text-start"><br>
                        Saya, ____________, No. Kad Pengenalan ____________, yang mewakili ____________, nombor Pendaftaran
                        <a href="#">357-022562828</a> dengan ini mengisytiharkan bahawa saya atau mana-mana orang yang
                        mewakili syarikat ini:<br>
                        
                    </p>
                    <p>
                        1. Tidak akan menawarkan, menjanjikan atau memberikan apa-apa suapan kepada mana-mana orang dalam
                        mana-mana Kementerian/Agensi atau mana-mana orang lain, sebagai suapan untuk dipilih dalam
                        mana-mana perolehan; dan<br>
                        
                    </p>
                    <p>
                        2. Tidak akan melakukan atau terlibat dengan tipuan bida dalam mana-mana perolehan<br>
                        
                    </p>
                    <p>
                        Bersama ini dilampirkan Surat Perwakilan Kuasa bagi saya mewakili syarikat seperti tercatat di atas
                        untuk membuat pengisytiharan ini.
                    </p>
                </div>
            </div>
        </div>

        <!-- Checkbox -->
        <div class="row mt-3">
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="agreeCheck" />
                    <label class="form-check-label checkbox-label" for="agreeCheck">
                        Saya telah membaca dan bersetuju dengan terma-terma Surat Akuan Pembida
                    </label>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-end gap-2">
                <button type="button" class="btn btn-success">Laporan</button>
                <button type="submit" class="btn btn-primary">Hantar</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection