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

        .select2-container--default .select2-selection--single .select2-selection__choice__display {
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

    <div class="row">
        <div class="col-4">
            <div class="row">
                <div class="col-5 text-center">
                    <b>No. Sebut Harga / Tender</b>
                </div>
                <div class="col-7 text-center text-success">
                    Belum Dijana
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-2 text-center">
                    <b>PTJ</b>
                </div>
                <div class="col-10 text-center">
                    BAHAGIAN PENTADBIRAN - CAWANGAN KEWANGAN - KEMENTERIAN KEWANGAN
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-3 text-end">
                    <b>Status</b>
                </div>
                <div class="col-9 text-center">
                    Menunggu Penyerahan Sebut Harga / Tender
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">Cipta Tender</div>
                        </div>
                        <hr>
                        <div id="custom-progress-bar" class="progress-nav mb-4 p-2">
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <ul class="nav nav-pills progress-bar-tab custom-nav" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button type="button" id="makluman-umum-tab" class="nav-link rounded-pill active"
                                        data-progressbar="custom-progress-bar" data-bs-toggle="pill"
                                        data-bs-target="#makluman-umum"
                                        data-title="@lang('translation.application-information')" role="tab"
                                        aria-controls="makluman-umum" aria-selected="true">1</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button type="button" id="kod-bidang-tab" class="nav-link rounded-pill"
                                        data-progressbar="custom-progress-bar" data-bs-toggle="pill"
                                        data-bs-target="#kod-bidang" data-title="@lang('translation.program-information')"
                                        role="tab" aria-controls="kod-bidang" aria-selected="false">2</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content" id="application-content">
                        <div class="tab-pane fade show active" id="agency" role="tabpanel"
                            aria-labelledby="makluman-umum-tab">
                            <div class="row mt-4 justify-content-center">
                                <div class="col-12">
                                    <h4 class="card-title card-title-grey">MAKLUMAT UMUM</h4>
                                    <p class="card-title-desc text-primary fst-italic">
                                        Untuk perkhidmatan yang memerlukan bayaran secara progresif, sila pilih Jenis
                                        Pemenuhan sebagai Bermasa (Bila Perlu)
                                    </p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-11">
                                    <div class="row mb-4">
                                        <!-- Kaedah Perolehan -->
                                        <div class="col-md-12 my-2">
                                            <div class="row mb-4">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">Kaedah Perolehan</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="form-control" name="">
                                                        <option value="">Tender</option>
                                                        <option value="">Sebut Harga</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 text-end">
                                                    <label for="" class="">Kategori Jenis Perolehan <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-control" name="">
                                                        <option value="">Perkhidmatan</option>
                                                        <option value="">Bekalan</option>
                                                        <option value="">Kerja</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Kaedah Perolehan -->



                                        <!-- Tajuk Perolehan -->
                                        <div class="col-md-12 my-2">
                                            <div class="row mb-4">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">Tajuk Perolehan <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tajuk Perolehan -->
                                        <!-- Disediakan Untuk PTJ -->
                                        <div class="col-md-12 my-2">
                                            <div class="row mb-4">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">Disediakan Untuk PTJ <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="input-group">
                                                        <select class="form-control" name="">
                                                            <option value="">BAHAGIAN PENTADBIRAN - CAWANNGAN KEWANGAN -
                                                                KEMENTERIAN KEWANGAN</option>
                                                        </select>
                                                        <span class="input-group-text"><i
                                                                class="bx bx-search-alt"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Disediakan Untuk PTJ -->
                                        <!-- No. Rujukan Fail -->
                                        <div class="col-md-12 my-2">
                                            <div class="row">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">No. Rujukan Fail <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- No. Rujukan Fail -->
                                        <!-- No. Tender/Sebut Harga -->
                                        <div class="col-md-12 my-2">
                                            <div class="row">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">No. Tender/Sebut Harga <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- No. Tender/Sebut Harga -->
                                        <!-- Tarikh Dicipta -->
                                        <div class="col-md-12 my-2">
                                            <div class="row ">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">Tarikh Dicipta</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input class="form-control" type="date">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tarikh Dicipta -->
                                        <!-- Harga Indikatif Jabatan (RM) -->
                                        <div class="col-md-12 my-2">
                                            <div class="row ">
                                                <div class="col-md-2 text-end">
                                                    <label class="">Harga Indikatif Jabatan (RM) <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                                <div class="col-md-4 text-end">
                                                    <label class="">Sumber Peruntukan <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="formRadios"
                                                            id="formRadios1" checked>
                                                        <label class="form-check-label"
                                                            for="formRadios1">Pembangunan</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="formRadios"
                                                            id="formRadios2">
                                                        <label class="form-check-label" for="formRadios2">Mengurus</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="formRadios"
                                                            id="formRadios3">
                                                        <label class="form-check-label" for="formRadios3">Lain-Lain</label>
                                                    </div>
                                                    <!-- Textbox for "Lain-Lain", hidden initially -->
                                                    <div id="lainLainInput" class="mt-2" style="display: none;">
                                                        <input type="text" class="form-control" placeholder="Sila nyatakan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Harga Indikatif Jabatan (RM) -->
                                        <!-- Anggaran Jabatan -->
                                        <div class="col-md-12 my-2">
                                            <div class="row ">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">Anggaran Jabatan (RM) <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Anggaran Jabatan -->

                                        <!-- Jenis Sebut Harga / Tender -->
                                        <div class="col-md-12 my-2">
                                            <div class="row">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class=""> Jenis Tender/Sebut Harga <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="form-control" name="">
                                                        <option value="">Konvensional</option>
                                                        <option value="">Reka & Bina</option>
                                                        <option value="">Terhad</option>
                                                    </select>


                                                </div>
                                                <div class="col-md-4 text-end">
                                                    <label for="" class="">Terbuka Kepada <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="terbukaKepada"
                                                            id="terbukaKepada1">
                                                        <label class="form-check-label" for="terbukaKepada1">
                                                            Bumiputra
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="terbukaKepada"
                                                            id="terbukaKepada2" checked>
                                                        <label class="form-check-label" for="terbukaKepada2">
                                                            Semua
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Jenis Sebut Harga / Tender -->

                                            <!-- Zon / Lokasi -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 text-end">
                                                        <label for="" class="">Zon / Lokasi</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="zonLokasi"
                                                                id="zonLokasi1">
                                                            <label class="form-check-label" for="zonLokasi1">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="zonLokasi"
                                                                id="zonLokasi2" checked>
                                                            <label class="form-check-label" for="zonLokasi2">
                                                                Tidak
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4 text-end ">
                                                        <label for="" class="">Taklimat Tender / Lawatan Tapak&nbsp;<span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="taklimat"
                                                                id="ada" checked>
                                                            <label class="form-check-label" for="ada">
                                                                Ada
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="taklimat"
                                                                id="tidak">
                                                            <label class="form-check-label" for="tidak">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Zon / Lokasi -->

                                            
                                            <!-- Lokaliti Penilaian -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 text-end">
                                                        <label for="" class="">Lokaliti Liputan</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <select class="form-control" name="">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 text-end">
                                                        <label for="" class="">Skop Kerja <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <select class="form-control" name="">
                                                            <option value="">Bangunan</option>
                                                            <option value="">Kejuruteraan Awam</option>
                                                            <option value="">Mekanikal & Elektrikal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Lokaliti Penilaian -->


                                            <!-- Jenis Pemenuhan -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 text-end">
                                                        <label class="">Jenis Pemenuhan <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <select class="form-control" name="">
                                                            <option value="">Bermasa (Bila Perlu)</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 text-end">
                                                        <label class="">Tempoh Siap Maksima</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <input class="form-control" type="number" name="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <select class="form-control" name="">
                                                            <option value="bulan">Bulan</option>
                                                            <option value="minggu">Minggu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Jenis Pemenuhan -->
                                           
                                            <!-- Penghantaran Fizikal -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 text-end">
                                                        <label for="" class="">Jawatan Spesifikasi&nbsp;<span 
                                                            class="text-danger">*</span></span></label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="jawatanSpek"
                                                                id="ya">
                                                            <label class="form-check-label" for="ya">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="jawatanSpek"
                                                                id="tidak" checked>
                                                            <label class="form-check-label" for="tidak">
                                                                Tidak
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4 text-end ">
                                                        <label for="" class="">Penghantaran Fizikal&nbsp;<span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="penghantaranFizikal"
                                                                id="ya" checked>
                                                            <label class="form-check-label" for="ya">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="penghantaranFizikal"
                                                                id="tidak">
                                                            <label class="form-check-label" for="tidak">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Penghantaran Fizikal -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="left"></div>
                                        <div class="right">
                                            <button class="btn-md-sm btn btn-success ">Simpan</button>
                                            <button type="button" class="btn btn-primary ms-auto" data-step="step1"
                                                data-currenttab="application-content" data-nexttab="kod-bidang-tab">
                                                Seterusnya
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kod-bidang" role="tabpanel" aria-labelledby="kod-bidang-tab">
                                <div class="row mt-4 justify-content-center">
                                    <div class="col-12">
                                        <h4 class="card-title card-title-grey">KOD BIDANG</h4>
                                        <p class="card-title-desc text-primary fst-italic">
                                            Syarikat Selangor Sahaja atau Syarikat Selangor dan Lain-lain Negeri <span
                                                class="text-danger">wajib</span> di isi.
                                        </p>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-11">
                                        <div class="row my-2">
                                            <div class="col-2 text-end">
                                                <b>Kod Bidang MOF</b>
                                            </div>
                                            <div class="col-2">
                                                <select class="form-control" name="">
                                                    <option value="">Atau</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="text" name="">
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-2"></div>
                                            <div class="col-2">
                                                <button class="btn btn-primary">Tambah</button>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row my-2">
                                            <div class="col-3"></div>
                                            <div class="col-8">
                                                <select name="" class="form-control">
                                                    <option value="">Dan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row my-2">
                                            <div class="col-1"></div>
                                            <div class="col-2 text-end"><b>Gred CIDB</b></div>
                                            <div class="col-8">
                                                <select class="form-control" name="">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-2 text-end">
                                                <b>Bidang Pengkhususan CIDB</b>
                                            </div>
                                            <div class="col-2">
                                                <select class="form-control" name="">
                                                    <option value="">Atau</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="text" name="">
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-2"></div>
                                            <div class="col-2">
                                                <button class="btn btn-primary">Tambah</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="left">
                                            <a href="{{ route('team.create') }}"
                                                class="btn-md-sm btn btn-info mx-1">Sebelumnya</a>
                                        </div>
                                        <div class="right">
                                            <a href="{{ route('team.create') }}"
                                                class="btn-md-sm btn btn-success mx-1">Simpan</a>
                                            <a href="{{ route('team.create') }}"
                                                class="btn-md-sm btn btn-primary mx-1">Hantar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <script>
            // Show/hide textbox when "Lain-Lain" is selected
            document.querySelectorAll('input[name="formRadios"]').forEach((elem) => {
                elem.addEventListener("change", function () {
                    const lainLainInput = document.getElementById("lainLainInput");
                    if (document.getElementById("formRadios3").checked) {
                        lainLainInput.style.display = "block";
                    } else {
                        lainLainInput.style.display = "none";
                    }
                });
            });
        </script>
@endsection