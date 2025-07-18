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

        .custom-tab-size .nav-link {
            padding: 12px 80px;
            /* Increase padding */

        }

        .table thead th {
            background-color: #3e5a9a;
            color: white;
            font-weight: 600;
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
                                    <button type="button" id="maklumat-spek-tab" class="nav-link rounded-pill"
                                        data-progressbar="custom-progress-bar" data-bs-toggle="pill"
                                        data-bs-target="#maklumat-spek"
                                        data-title="@lang('translation.program-information')" role="tab"
                                        aria-controls="maklumat-spek" aria-selected="false">2</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button type="button" id="kod-bidang-tab" class="nav-link rounded-pill"
                                        data-progressbar="custom-progress-bar" data-bs-toggle="pill"
                                        data-bs-target="#kod-bidang" data-title="@lang('translation.program-information')"
                                        role="tab" aria-controls="kod-bidang" aria-selected="false">3</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content" id="application-content">
                        <div class="tab-pane fade show active" id="makluman-umum" role="tabpanel"
                            aria-labelledby="makluman-umum-tab">

                            <div class="row mt-4 justify-content-center">
                                <div class="col-12">
                                    <h4 class="card-title card-title-grey">CIPTA PROJEK UNTUK PEMBELIAN TERUS</h4>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-11">
                                    <div class="row">
                                        {{-- Default Form - Cipta Tender --}}
                                        <div id="ciptaTenderForm">
                                            <!-- Kategori Jenis Perolehan -->
                                            <!-- Tajuk Perolehan -->
                                            <!-- Tajuk Perolehan -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="" class="">Tajuk Perolehan <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <textarea
                                                            class="form-control text-success">BEKALAN BARANGAN PERSEKOLAHAN</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Disediakan Untuk PTJ -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="" class="">Disediakan Untuk PTJ <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="input-group">
                                                            <select class="form-control">
                                                                <option selected>BAHAGIAN PENTADBIRAN - CAWANGAN KEWANGAN -
                                                                    KEMENTERIAN KEWANGAN</option>
                                                            </select>
                                                            <span class="input-group-text"><i
                                                                    class="bx bx-search-alt"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- No. Rujukan Fail -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="" class="">No. Rujukan Fail <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input class="form-control text-success" type="text"
                                                            value="SH/DF/TRG">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Harga Indikatif Jangkaan -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="" class="">Harga Indikatif Jabatan <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input class="form-control" type="number"
                                                            placeholder="Contoh: 100000">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tarikh Buka dan Tutup -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="">Tarikh Buka</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input class="form-control" type="date" value="2021-09-17">
                                                    </div>

                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="">Tarikh Tutup</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input class="form-control" type="date" value="2021-10-17">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Zon / Lokasi -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="">Zon / Lokasi</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="zonLokasi"
                                                                id="zonYa">
                                                            <label class="form-check-label" for="zonYa">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="zonLokasi"
                                                                id="zonTidak" checked>
                                                            <label class="form-check-label" for="zonTidak">Tidak</label>
                                                        </div>
                                                    </div>
                                                    <!-- Sumber Peruntukan -->
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="">Sumber Peruntukan <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="sumberPeruntukan" id="pembangunan" checked>
                                                            <label class="form-check-label"
                                                                for="pembangunan">Pembangunan</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="sumberPeruntukan" id="mengurus">
                                                            <label class="form-check-label" for="mengurus">Mengurus</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Lokaliti Liputan -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="">Lokaliti Liputan</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select class="form-control">
                                                            <option value="">Sila Pilih</option>
                                                        </select>
                                                    </div>
                                                    <!-- Terbuka Kepada -->
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="">Terbuka Kepada <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="terbukaKepada" id="bumiputra">
                                                            <label class="form-check-label"
                                                                for="bumiputra">Bumiputra</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="terbukaKepada" id="semua" checked>
                                                            <label class="form-check-label" for="semua">Semua</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Kategori Perolehan -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="">Kategori Perolehan <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select class="form-control">
                                                            <option selected>ICT</option>
                                                            <option value="Perkhidmatan">Perkhidmatan</option>
                                                            <option value="Bekalan">Bekalan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="maklumat-spek" role="tabpanel" aria-labelledby="maklumat-spek-tab">
                            <div class="row mt-4 justify-content-center">
                                <div class="col-12">
                                    <h4 class="card-title card-title-grey">MAKLUMAT SPESIFIKASI KAJIAN</h4>
                                </div>
                            </div>

                            <div class="row mt-3 justify-content-center">
                                <div class="col-11">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center align-middle mt-2">
                                            <thead class="table-primary text-white">
                                                <tr class="text-center">
                                                    <th style="width: 5%;">Bil.</th>
                                                    <th style="width: 45%;">Item</th>
                                                    <th style="width: 20%;">Kuantiti</th>
                                                    <th style="width: 20%;">Tindakan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td class="text-start">Contoh Item</td>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="#" class="text-primary me-2"><i
                                                                class="bx bx-edit-alt"></i></a>
                                                        <a href="#" class="text-danger"><i class="bx bx-trash"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="text-end mt-3">
                                        <button class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#modalTambahSpesifikasi">
                                            Tambah
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="modalTambahSpesifikasi" tabindex="-1"
                                aria-labelledby="modalTambahSpesifikasiLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light">
                                            <h5 class="modal-title" id="modalTambahSpesifikasiLabel">Cipta Spesifikasi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Tutup"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3 row align-items-center">
                                                    <label for="namaItem" class="col-sm-4 col-form-label">Nama Item <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="namaItem"
                                                            placeholder="Contoh: Monitor">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row align-items-center">
                                                    <label for="kuantiti" class="col-sm-4 col-form-label">Kuantiti <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="number" class="form-control" id="kuantiti"
                                                            placeholder="Contoh: 10">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row align-items-center">
                                                    <label for="sst" class="col-sm-4 col-form-label">SST <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-sm-4">
                                                        <select class="form-select" id="sst">
                                                            <option selected>Ya/Tidak</option>
                                                            <option value="Ya">Ya</option>
                                                            <option value="Tidak">Tidak</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer justify-content-end">
                                            <button type="button" class="btn btn-success"
                                                data-bs-dismiss="modal">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="kod-bidang" role="tabpanel" aria-labelledby="kod-bidang-tab">
                            <div class="row mt-4 justify-content-center">
                                <div class="col-12">
                                    <h4 class="card-title card-title-grey">KOD BIDANG</h4>
                                </div>
                            </div>
                            <div class="container mt-5">
                                <!-- Kod Bidang MOF Section -->
                                <div class="row mb-4 align-items-center">
                                    <div class="col-md-2 text-end">
                                        <label>Kod Bidang MOF</label>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-select">
                                            <option selected>Atau</option>
                                            <option value="Dan">Dan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Masukkan kod bidang MOF">
                                    </div>
                                    <div class="col-md-2 text-start mt-2 mt-md-0">
                                        <button class="btn btn-primary w-100">Tambah</button>
                                    </div>
                                </div>

                                <!-- Connector Dropdown -->
                                <div class="row mb-4 justify-content-center">
                                    <div class="col-md-4">
                                        <select class="form-select text-center">
                                            <option selected>Dan</option>
                                            <option>Atau</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Gred CIDB Section -->
                                <div class="row mb-4 align-items-center">
                                    <div class="col-md-2 text-end">
                                        <label>Gred CIDB</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select">
                                            <option selected>Sila Pilih Gred</option>
                                            <option value="G1">G1</option>
                                            <option value="G2">G2</option>
                                            <option value="G3">G3</option>
                                            <option value="G4">G4</option>
                                            <option value="G5">G5</option>
                                            <option value="G6">G6</option>
                                            <option value="G7">G7</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Bidang Pengkhususan CIDB Section -->
                                <div class="row mb-4 align-items-center">
                                    <div class="col-md-2 text-end">
                                        <label>Bidang Pengkhususan CIDB</label>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-select">
                                            <option selected>Atau</option>
                                            <option value="Dan">Dan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control"
                                            placeholder="Masukkan bidang pengkhususan CIDB">
                                    </div>
                                    <div class="col-md-2 text-start mt-2 mt-md-0">
                                        <button class="btn btn-primary w-100">Tambah</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>





@endsection