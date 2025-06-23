@extends('layouts.master')

@section('title', 'Harga Tawaran')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* Additional custom styling if needed */
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

        .content-box {
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            padding: 20px;
            font-size: 14px;
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

        .text-red {
            color: #d9534f;
            font-weight: 600;
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

        <!-- Perakuan Section -->
        <div class="row">
            <div class="col-12">
                <div class="accordion" id="perakuanAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingPerakuan">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePerakuan" aria-expanded="false" aria-controls="collapsePerakuan">
                                PERAKUAN
                            </button>
                        </h2>
                        <div id="collapsePerakuan" class="accordion-collapse collapse" aria-labelledby="headingPerakuan"
                            data-bs-parent="#perakuanAccordion">
                            <div class="accordion-body content-box">
                                <p>
                                    Saya menurunkan tandatangan di bawah ini bersetuju menerima serta mematuhi dan terikat
                                    dengan semua syarat-syarat kontrak dan spesifikasinya kepada alatan yang ada di dalam
                                    jadual tender dan juga bersetuju di atas harga yang ditawarkan sebagai asas perkiraan
                                    bagi pembayaran kepada alatan yang dibekalkan yang mana telah dipesan oleh
                                    <strong>PENGURUSAN AM</strong>.
                                </p>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" id="agreeCheck" />
                                    <label class="form-check-label checkbox-label" for="agreeCheck">
                                        Saya telah membaca dan bersetuju dengan segala kenyataan/maklumat/syarat/arahan dan
                                        lain - lain yang berkaitan
                                    </label>
                                </div>

                                <div class="btn-group-custom">
                                    <button type="button" class="btn btn-success">Laporan</button>
                                    <button type="submit" class="btn btn-primary">Hantar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection