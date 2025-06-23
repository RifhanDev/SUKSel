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

        .accordion-button {
            background-color: #e0e0e0 !important;
            /* your desired static bg color */
            color: #000 !important;
            /* optional: text color */
            box-shadow: none !important;
            /* remove default focus shadow */
        }

        .accordion-button:not(.collapsed) {
            background-color: #e0e0e0 !important;
            /* same as static color */
            color: #000 !important;
            box-shadow: none !important;
        }

        .accordion-button:focus {
            box-shadow: none !important;
        }
    </style>

@endsection

@section('content')

    <div class="container-fluid">
        <!-- Breadcrumb / Path -->
        <div class="breadcrumb-path">
            PENYEDIAAN KERTAS CADANGAN &gt; Maklumat Umum
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
    <div class="container mt-4">

        <div class="accordion" id="suratAduanAccordion">
            <!-- Maklumat Pembekal -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingPembekal">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsePembekal" aria-expanded="false" aria-controls="collapsePembekal">
                        Maklumat Pembekal
                    </button>
                </h2>
                <div id="collapsePembekal" class="accordion-collapse collapse show" aria-labelledby="headingPembekal"
                    data-bs-parent="#suratAduanAccordion">
                    <div class="accordion-body ">
                        <form>
                            <div class="row mb-3 align-items-center">
                                <label for="mofNumber" class="col-sm-2 col-form-label fw-semibold">No. MOF</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly class="form-control" id="mofNumber" value="357-02256288">
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <label for="companyName" class="col-sm-2 col-form-label fw-semibold">Nama Syarikat</label>
                                <div class="col-sm-6">
                                    <input type="text" readonly class="form-control" id="companyName"
                                        value="RIFHAN TEKNOLOGI SDN BHD">
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <label for="phoneNumber" class="col-sm-2 col-form-label fw-semibold">No. Telefon</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly class="form-control" id="phoneNumber" value="+603-21061900">
                                </div>
                            </div>
                            <div class="row mb-0 align-items-center">
                                <label for="email" class="col-sm-2 col-form-label fw-semibold">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" readonly class="form-control" id="email" value="adilah@rifhan.com">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Sebut Harga / Tender Penerangan -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTender">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTender" aria-expanded="false" aria-controls="collapseTender">
                        Sebut Harga / Tender Penerangan
                    </button>
                </h2>
                <div id="collapseTender" class="accordion-collapse collapse" aria-labelledby="headingTender"
                    data-bs-parent="#suratAduanAccordion">
                    <div class="accordion-body bg-light">
                        <!-- Content can be placed here -->
                        <p>Content for Sebut Harga / Tender Penerangan goes here.</p>
                    </div>
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