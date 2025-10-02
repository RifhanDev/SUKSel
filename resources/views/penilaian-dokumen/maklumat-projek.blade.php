@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection


@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
@endsection


@section('content')
    <style>
        #datatable-buttons th {
            background-color: #405393 !important;
            color: white !important;
            border: 1px solid #848484;
        }

        .btn-primary {
            background: #405189;
        }

        .card-title-grey {
            background: #D9D9D9;
            padding: 5px 15px;
        }

        hr {
            border: 1px solid #E9EBEC;
        }

        /* test */
        .select2-container--default .select2-selection--single {
            background-color: white !important;
            border: 1px solid #aaa !important;
            border-radius: 4px !important;
            cursor: text !important;
            padding-top: 5px !important;
            padding-bottom: 5px !important;
            padding-left: 8px !important;
            position: relative !important;
        }

        .select2-container .select2-selection--single {
            box-sizing: border-box !important;
            cursor: pointer !important;
            display: block !important;
            min-height: 37.5px !important;
            user-select: none !important;
            -webkit-user-select: none !important;
        }

        .select2-search__field::-webkit-input-placeholder,
        .select2-search__field::placeholder {
            font-family: "Poppins", sans-serif;
        }

        .select2-container--default .select2-selection--single .select2-selection__choice {
            /* background-color: #405189 !important; */
            /* border-color: #405189 !important; */
            background-color: white !important;
            border-color: #black !important;
        }

        .select2-container--default .select2-selection--single .select2-selection_choice_display {
            cursor: default;
            padding-left: 2px;
            padding-right: 5px;
            color: black;
        }

        .attachment {
            cursor: pointer;
            min-height: 90px;
            border: 2px dashed var(--vz-border-color);
            background: var(--vz-secondary-bg);
            border-radius: 6px;
        }

        .attachment .attachment-message {
            text-align: center;
            font-size: 24px;
            width: 100%;
            margin: 1em 0;
        }

        .attachment-preview {
            border: var(--vz-border-width) var(--vz-border-style) var(--vz-border-color) !important;
            border-radius: var(--vz-border-radius) !important;
        }

        .dropzone {
            width: auto;
            height: 150px;
            min-height: 0px !important;
        }

        @media screen and (max-width: 3000px) {
            .agency-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-right: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 290px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 280px;
                margin-right: 100px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 200px;
                margin-right: 110px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                width: 100%;
                height: 40px;
            }

            .btn-add-supplier-position {
                top: 74px;
            }

            .btn-edit-supplier-position {
                top: 30px;
            }
        }

        @media screen and (max-width: 2300px) {
            .agency-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-right: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 260px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 250px;
                margin-right: 100px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 160px;
                margin-right: 110px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                width: 100%;
                height: 40px;
            }
        }

        @media screen and (max-width: 2200px) {
            .agency-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-right: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 200px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 200px;
                margin-right: 100px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 150px;
                margin-right: 110px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                width: 100%;
                height: 40px;
            }
        }

        @media screen and (max-width: 2000px) {
            .agency-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-right: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 190px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 190px;
                margin-right: 120px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 100px;
                margin-right: 100px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                width: 100%;
                height: 40px;
            }
        }

        @media screen and (max-width: 1870px) {
            .agency-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-right: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 180px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 190px;
                margin-right: 120px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 100px;
                margin-right: 100px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                width: 100%;
                height: 40px;
            }
        }

        @media screen and (max-width: 1800px) {
            .agency-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-right: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 160px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 180px;
                margin-right: 110px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 90px;
                margin-right: 100px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                width: 100%;
                height: 40px;
            }
        }

        @media screen and (max-width: 1700px) {
            .agency-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-right: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 130px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 170px;
                margin-right: 110px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 90px;
                margin-right: 100px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                width: 100%;
                height: 40px;
            }
        }

        @media screen and (max-width: 1660px) {
            .agency-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-right: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 120px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 180px;
                margin-right: 110px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 90px;
                margin-right: 100px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                width: 100%;
                height: 40px;
            }
        }

        @media screen and (max-width: 1590px) {
            .agency-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-right: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 100px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 180px;
                margin-right: 110px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 90px;
                margin-right: 100px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                width: 100%;
                height: 40px;
            }
        }

        @media screen and (max-width: 1520px) {
            .agency-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-right: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 90px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 160px;
                margin-right: 110px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 80px;
                margin-right: 110px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                width: 100%;
                height: 40px;
            }
        }

        @media screen and (max-width: 1440px) {
            .agency-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-right: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 60px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 140px;
                margin-right: 70px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 90px;
                margin-right: 100px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                width: 100%;
                height: 40px;
            }
        }

        @media screen and (max-width: 1350px) {
            .agency-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-right: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 40px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 90px;
                margin-right: 50px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 80px;
                margin-right: 70px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                width: 100%;
                height: 40px;
            }
        }

        @media screen and (max-width: 1240px) {
            .agency-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-right: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 30px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 60px;
                margin-right: 50px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 70px;
                margin-right: 70px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                width: 100%;
                height: 40px;
            }
        }

        @media screen and (max-width: 1150px) {
            .agency-name {
                display: flex;
                max-width: 200px;
                height: 40px;
                margin-right: 5px;
                font-size: 11px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 30px;
                font-size: 11px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 50px;
                margin-right: 40px;
                font-size: 11px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 60px;
                margin-right: 50px;
                font-size: 11px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                height: 40px;
                font-size: 11px;
            }
        }

        @media screen and (max-width: 1040px) {
            .agency-name {
                display: flex;
                max-width: 200px;
                height: 40px;
                margin-right: 5px;
                font-size: 11px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 30px;
                font-size: 11px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 70px;
                margin-right: 30px;
                font-size: 11px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 70px;
                margin-right: 50px;
                font-size: 11px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                height: 40px;
                font-size: 11px;
            }
        }

        @media screen and (max-width: 950px) {
            .agency-name {
                display: flex;
                max-width: 200px;
                height: 40px;
                margin-right: 5px;
                font-size: 11px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 20px;
                font-size: 11px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 70px;
                margin-right: 30px;
                font-size: 11px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 70px;
                margin-right: 50px;
                font-size: 11px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                height: 40px;
                font-size: 11px;
            }
        }

        @media screen and (max-width: 860px) {
            .agency-name {
                display: flex;
                max-width: 200px;
                height: 40px;
                margin-right: 5px;
                font-size: 11px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 30px;
                font-size: 11px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 40px;
                margin-right: 30px;
                font-size: 11px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 40px;
                margin-right: 50px;
                font-size: 11px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                height: 40px;
                font-size: 11px;
            }
        }

        @media screen and (max-width: 786px) {
            .agency-name {
                display: flex;
                max-width: 200px;
                height: 40px;
                font-size: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 20px;
                font-size: 10px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 10px;
                margin-right: 10px;
                font-size: 10px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 10px;
                margin-right: 20px;
                font-size: 10px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                height: 40px;
                font-size: 10px;
            }
        }

        @media screen and (max-width: 765px) {
            .agency-name {
                display: flex;
                max-width: 200px;
                height: 40px;
                font-size: 10px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 20px;
                font-size: 10px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 30px;
                margin-right: 10px;
                font-size: 10px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 40px;
                margin-right: 20px;
                font-size: 10px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                height: 40px;
                font-size: 10px;
            }
        }

        @media screen and (max-width: 680px) {
            .agency-name {
                display: flex;
                max-width: 200px;
                height: 40px;
                font-size: 9px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 20px;
                font-size: 9px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 30px;
                margin-right: 10px;
                font-size: 9px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 40px;
                margin-right: 20px;
                font-size: 9px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                height: 40px;
                font-size: 9px;
            }
        }

        @media screen and (max-width: 630px) {
            .agency-name {
                display: flex;
                max-width: 200px;
                height: 40px;
                font-size: 9px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 20px;
                font-size: 9px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 30px;
                margin-right: 10px;
                font-size: 9px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 40px;
                margin-right: 20px;
                font-size: 9px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                height: 40px;
                font-size: 9px;
            }
        }

        @media screen and (max-width: 600px) {
            .agency-name {
                display: flex;
                max-width: 200px;
                height: 40px;
                font-size: 9px;
            }

            .program-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 20px;
                font-size: 9px;
            }

            .expenses-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 30px;
                margin-right: 10px;
                font-size: 9px;
            }

            .attachment-name {
                display: flex;
                width: 100%;
                height: 40px;
                margin-left: 40px;
                margin-right: 20px;
                font-size: 9px;
            }

            .endorsement-name {
                display: flex;
                justify-content: flex-end;
                height: 40px;
                font-size: 9px;
            }
        }

        @media screen and (max-width: 440px) {
            .agency-name {
                display: none;
            }

            .program-name {
                display: none;
            }

            .expenses-name {
                display: none;
            }

            .attachment-name {
                display: none;
            }

            .endorsement-name {
                display: none;
            }
        }

        @media screen and (max-width: 400px) {
            .agency-name {
                display: none;
            }

            .program-name {
                display: none;
            }

            .expenses-name {
                display: none;
            }

            .attachment-name {
                display: none;
            }

            .endorsement-name {
                display: none;
            }
        }

        @media screen and (max-width: 370px) {
            .agency-name {
                display: none;
            }

            .program-name {
                display: none;
            }

            .expenses-name {
                display: none;
            }

            .attachment-name {
                display: none;
            }

            .endorsement-name {
                display: none;
            }
        }

        #expenses-table tbody td:nth-child(2) {
            margin-top: 20px;
            height: 255px;
            display: block;
            max-height: 400px;
            overflow-y: auto;
        }

        .dt-center {
            text-align: center;
            vertical-align: middle;
        }

        /* test */
    </style>

    <!-- TAB CONTENT -->
    <div class="tab-content">
        <!-- Step 1 -->
        <div class="tab-pane fade show active" id="step1" role="tabpanel">
            <div class="card-body">
                <h6 class="bg-light p-2 fw-bold">CIPTA PROJEK UNTUK PEMBELIAN TERUS</h6>

                <div class="container mt-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="fw-bold text-uppercase mb-3">Borang 1 - Analisa Kesempurnaan Tender</h5>
                            <div class="alert alert-secondary fw-semibold" role="alert">
                                TENDER UNTUK: KERJA-KERJA MENAIKTARAF SUNGAI BATU DARI KAWASAN SEKITAR, MUKIM BATU, DAERAH GOMBAK (FASA 2), SELANGOR DARUL EHSAN
                            </div>

                            <h6 class="fw-bold">Kriteria Kesempurnaan Tender:</h6>
                                <div class="table-responsive mt-3">
    <table class="table table-bordered">
        <thead class="text-white" style="background-color: #35478C;">
            <tr>
                <th>Kriteria - Kriteria</th>
                <th style="width: 150px;">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <!-- Static Table Rows -->
            <tr>
                <td>Borang Tender Ditandatangani</td>
                <td>
                    <button type="button" class="btn btn-sm btn-info text-white" data-bs-toggle="modal" data-bs-target="#criteriaModal1">
                        Papar
                    </button>
                </td>
            </tr>
            <tr>
                <td>Penandatangan Diberi Kuasa?</td>
                <td>
                    <button type="button" class="btn btn-sm btn-info text-white" data-bs-toggle="modal" data-bs-target="#criteriaModal2">
                        Papar
                    </button>
                </td>
            </tr>
            <tr>
                <td>Harga Tender / Tempoh Tercatat di Borang Tender</td>
                <td>
                    <button type="button" class="btn btn-sm btn-info text-white" data-bs-toggle="modal" data-bs-target="#criteriaModal3">
                        Papar
                    </button>
                </td>
            </tr>
            <tr>
                <td>Pendaftaran Masih Sah Semasa Tutup Tender</td>
                <td>
                    <button type="button" class="btn btn-sm btn-info text-white" data-bs-toggle="modal" data-bs-target="#criteriaModal4">
                        Papar
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mengembalikan Kesemua Dokumen Asas Tender</td>
                <td>
                    <button type="button" class="btn btn-sm btn-info text-white" data-bs-toggle="modal" data-bs-target="#criteriaModal5">
                        Papar
                    </button>
                </td>
            </tr>
            <tr>
                <td>Tempoh Tidak Melebihi Tempoh Siap Maksimum</td>
                <td>
                    <button type="button" class="btn btn-sm btn-info text-white" data-bs-toggle="modal" data-bs-target="#criteriaModal6">
                        Papar
                    </button>
                </td>
            </tr>
            <tr>
                <td>Surat Akuan Pembida Ditandatangani (Integrity Pact)</td>
                <td>
                    <button type="button" class="btn btn-sm btn-info text-white" data-bs-toggle="modal" data-bs-target="#criteriaModal7">
                        Papar
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Modals -->
<div class="modal fade" id="criteriaModal1" tabindex="-1" aria-labelledby="criteriaModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-body">

        <!-- JENIS KRITERIA -->
        <div class="mb-3 border p-3 bg-light">
          <strong>JENIS KRITERIA</strong>
          <div class="mt-2">Borang Tender Ditandatangani</div>
        </div>

        <!-- SENARAI PEMBEKAL -->
        <div class="mb-3 border p-3 bg-light">
          <strong>SENARAI PEMBEKAL</strong>
          <div class="mt-1 text-primary small">
            Klik butang Semak untuk meneruskan penilaian pematuhan
          </div>
        </div>

        <!-- Table -->
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="table-primary text-center align-middle">
              <tr>
                <th style="width:5%;">Bil</th>
                <th style="width:30%;">Dokumen</th>
                <th style="width:25%;">Status Kesempurnaan</th>
                <th style="width:40%;">Catatan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center align-middle">1/2</td>
                <td class="d-flex align-items-center">
                  <img src="https://cdn-icons-png.flaticon.com/512/2991/2991108.png" alt="icon" width="24" class="me-2">
                  <span>Dokumen</span>
                </td>
                <td>
                  <select class="form-select">
                    <option selected>Sempurna / Tidak</option>
                    <option value="1">Sempurna</option>
                    <option value="0">Tidak</option>
                  </select>
                </td>
                <td>
                  <input type="text" class="form-control" placeholder="">
                </td>
              </tr>
              <tr>
                <td class="text-center align-middle">2/2</td>
                <td class="d-flex align-items-center">
                  <img src="https://cdn-icons-png.flaticon.com/512/2991/2991108.png" alt="icon" width="24" class="me-2">
                  <span>Dokumen</span>
                </td>
                <td>
                  <select class="form-select">
                    <option selected>Sempurna / Tidak</option>
                    <option value="1">Sempurna</option>
                    <option value="0">Tidak</option>
                  </select>
                </td>
                <td>
                  <input type="text" class="form-control" placeholder="">
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Simpan Button -->
        <div class="text-center mt-4">
          <button type="button" class="btn btn-success px-4">Simpan</button>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- Repeat the Modal Structure for Each Row -->
<div class="modal fade" id="criteriaModal2" tabindex="-1" aria-labelledby="criteriaModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="criteriaModalLabel2">Maklumat untuk Penandatangan Diberi Kuasa?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="information2" class="form-label">Maklumat</label>
                        <textarea class="form-control" id="information2" rows="4" placeholder="Masukkan maklumat di sini..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Repeat the Modal Structure for Other Criteria -->
<div class="modal fade" id="criteriaModal3" tabindex="-1" aria-labelledby="criteriaModalLabel3" aria-hidden="true">
    <!-- Modal Content -->
</div>
<div class="modal fade" id="criteriaModal4" tabindex="-1" aria-labelledby="criteriaModalLabel4" aria-hidden="true">
    <!-- Modal Content -->
</div>
<div class="modal fade" id="criteriaModal5" tabindex="-1" aria-labelledby="criteriaModalLabel5" aria-hidden="true">
    <!-- Modal Content -->
</div>
<div class="modal fade" id="criteriaModal6" tabindex="-1" aria-labelledby="criteriaModalLabel6" aria-hidden="true">
    <!-- Modal Content -->
</div>
<div class="modal fade" id="criteriaModal7" tabindex="-1" aria-labelledby="criteriaModalLabel7" aria-hidden="true">
    <!-- Modal Content -->
</div>

                        </div>
                    </div>
                </div>

                <!-- Add the Rumusan section below -->
                <h6 class="fw-bold mt-4">Rumusan:</h6>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead class="text-white" style="background-color: #35478C;">
                            <tr>
                                <th>Bil</th>
                                <th>Keputusan</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1/2</td>
                                <td>Sempurna</td>
                                <td>XXX</td>
                            </tr>
                            <tr>
                                <td>2/2</td>
                                <td>Sempurna</td>
                                <td>XXX</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    <label for="bilanganPembekal" class="form-label">Bilangan Pembekal</label>
                    <input type="number" class="form-control" id="bilanganPembekal" value="2" readonly>
                </div>

                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="" id="confirmationCheckbox">
                    <label class="form-check-label" for="confirmationCheckbox">
                        Saya mengesahkan petender diatas layak untuk penilaian peringkat seterusnya.
                    </label>
                </div>
            </div>
        </div>
    </div>
@endsection