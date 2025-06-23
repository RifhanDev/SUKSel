@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection


@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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
                                <li class="nav-item" role="peringkat-pematuhan-cadangan-kewangan">
                                    <button type="button" id="pematuhan-tab" class="nav-link rounded-pill active"
                                        data-progressbar="custom-progress-bar" data-bs-toggle="pill"
                                        data-bs-target="#pematuhan"
                                        data-title="@lang('translation.application-information')" role="tab"
                                        aria-controls="pematuhan" aria-selected="true">1</button>
                                </li>
                                <li class="nav-item" role="penyata-bulanan-bank">
                                    <button type="button" id="penyata-tab" class="nav-link rounded-pill"
                                        data-progressbar="custom-progress-bar" data-bs-toggle="pill"
                                        data-bs-target="#penyata" data-title="@lang('translation.program-information')"
                                        role="tab" aria-controls="penyata" aria-selected="false">2</button>
                                </li>
                                <li class="nav-item" role="pematuhan-spek-kewangan">
                                    <button type="button" id="pematuhan1-tab" class="nav-link rounded-pill"
                                        data-progressbar="custom-progress-bar" data-bs-toggle="pill"
                                        data-bs-target="#pematuhan1" data-title="@lang('translation.program-information')"
                                        role="tab" aria-controls="pematuhan1" aria-selected="false">3</button>
                                </li>
                                <li class="nav-item" role="penyediaan-laporan">
                                    <button type="button" id="laporan-tab" class="nav-link rounded-pill"
                                        data-progressbar="custom-progress-bar" data-bs-toggle="pill"
                                        data-bs-target="#laporan" data-title="@lang('translation.program-information')"
                                        role="tab" aria-controls="laporan" aria-selected="false">4</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content px-3" id="application-content">

                        <!-- Outer Tab 1 Content -->
                        <div class="tab-pane fade show active" id="pematuhan" role="tabpanel"
                            aria-labelledby="pematuhan-tab">

                            <!-- Inner tabs for outer tab 1 -->
                            <ul class="nav nav-pills custom-tab-size mb-3" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#teknikal-1" role="tab"
                                        aria-selected="true">Teknikal</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#rumusan-1" role="tab"
                                        aria-selected="false">Rumusan</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="teknikal-1" role="tabpanel">
                                    <!-- Content for Teknikal of progress 1 -->
                                    <h4 class="card-title card-title-grey">PEMATUHAN CADANGAN KEWANGAN</h4>
                                    <p class="card-title-desc text-primary fst-italic">Klik butang Semak untuk meneruskan
                                        penilaian</p>
                                    <table class="table table-bordered dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Tajuk / Dokumen</th>
                                                <th class="text-center">Mekanisma</th>
                                                <th class="text-center">Status Penilaian</th>
                                                <th class="text-center">Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="">Perkhidmatan Penilaian Forensik Ke atas Sistem XXXX</td>
                                                <td class="">Spesifikasi</td>
                                                <td class="">Selesai</td>
                                                <td class="text-center">
                                                    <button class="btn btn-success" data-bs-toggle="modal"
                                                        data-bs-target="#modalPematuhanCadanganKewangan">Papar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="">Surat Pengesahan Prinsipal yang lengkap ditandatangani</td>
                                                <td class="">Petender Muat Naik</td>
                                                <td class="">Selesai</td>
                                                <td class="text-center">
                                                    <button class="btn btn-success">Papar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="">Senarai Kakitangan Teknikal dan Carta Organisasi Pasukan Projek
                                                </td>
                                                <td class="">Petender Muat Naik</td>
                                                <td class="">Selesai</td>
                                                <td class="text-center">
                                                    <button class="btn btn-success">Papar</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row mb-3 px-3">
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button class="btn btn-primary">Seterusnya</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="rumusan-1" role="tabpanel" aria-labelledby="rumusan-tab">
                                    <div class="container-fluid mt-3">
                                        <!-- SECTION 1: Pembekal Melepasi -->
                                        <div class="row">
                                            <div class="col-12 bg-light p-2 fw-bold">
                                                SENARAI PEMBEKAL YANG MELEPASI PENILAIAN PEMATUHAN DOKUMENTASI
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-bordered mt-2">
                                                    <thead class="table-primary text-center text-white">
                                                        <tr>
                                                            <th>Bil</th>
                                                            <th>Ulasan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1/2</td>
                                                            <td class="text-center">XXX</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2/2</td>
                                                            <td class="text-center">XXX</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Bilangan Pembekal + Checkbox -->
                                        <div class="row my-3 align-items-center">
                                            <div class="col-md-2 text-end fw-bold">Bilangan Pembekal</div>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control text-center" value="2" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="confirmLayak">
                                                    <label class="form-check-label" for="confirmLayak">
                                                        Saya mengesahkan petender diatas layak untuk penilaian peringkat
                                                        seterusnya.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- SECTION 2: Pembekal Tidak Melepasi -->
                                        <div class="row">
                                            <div class="col-12 bg-light p-2 fw-bold">
                                                SENARAI PEMBEKAL TIDAK MELEPASI PENILAIAN PEMATUHAN DOKUMENTASI
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-bordered mt-2">
                                                    <thead class="table-primary text-center text-white">
                                                        <tr>
                                                            <th>Bil</th>
                                                            <th>Ulasan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center" colspan="2">Tiada rekod dijumpai</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Bilangan Pembekal Tidak Melepasi -->
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-md-2 text-end fw-bold">Bilangan Pembekal</div>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control text-center" value="0" readonly>
                                            </div>
                                        </div>

                                        <!-- Action Button -->
                                        <div class="row mb-3">
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <button class="btn btn-primary">Seterusnya</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Outer Tab 2 Content -->
                        <div class="tab-pane fade" id="penyata" role="tabpanel" aria-labelledby="penyata-tab">

                            <!-- Inner tabs for outer tab 2 -->
                            <ul class="nav nav-pills custom-tab-size mb-3" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#teknikal-2" role="tab"
                                        aria-selected="true">Teknikal</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#rumusan-2" role="tab"
                                        aria-selected="false">Rumusan</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="teknikal-2" role="tabpanel"
                                    aria-labelledby="teknikal-2-tab">
                                    <!-- Content for Teknikal of progress 2 -->
                                    <h4 class="card-title card-title-grey">PENYATA BULANAN BANK</h4>
                                    <p class="card-title-desc text-primary fst-italic">Klik butang Menilai untuk meneruskan
                                        penilaian</p>
                                    <table class="table table-bordered dt-responsive nowrap w-100">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>Tajuk / Dokumen</th>
                                                <th>Mekanisma</th>
                                                <th>Status Penilaian</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Penyata Bank Terkini (3 bulan terakhir) Syarikat</td>
                                                <td>Borang Atas Talian</td>
                                                <td>Selesai</td>
                                                <td class="text-center">
                                                    <button class="btn btn-success" data-bs-toggle="modal"
                                                        data-bs-target="#modalPenyataBank">Papar</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row mb-3 px-3">
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button class="btn btn-primary">Seterusnya</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="rumusan-2" role="tabpanel" aria-labelledby="rumusan-2-tab">
                                    <div class="container-fluid mt-3">
                                        <!-- SECTION 1: Pembekal Melepasi -->
                                        <div class="row">
                                            <div class="col-12 bg-light p-2 fw-bold">
                                                SENARAI PEMBEKAL YANG MELEPASI PENILAIAN PENYATA BULANAN BANK
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-bordered mt-2">
                                                    <thead class="table-primary text-center text-white">
                                                        <tr>
                                                            <th>Bil</th>
                                                            <th>Ulasan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1/2</td>
                                                            <td class="text-center">xxxx</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2/2</td>
                                                            <td class="text-center">xxxx</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Bilangan Pembekal + Checkbox -->

                                        <div class="row my-3 align-items-center">
                                            <div class="col-md-2 text-end fw-bold">Bilangan Pembekal</div>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control text-center" value="2" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="confirmLayak">
                                                    <label class="form-check-label" for="confirmLayak">
                                                        Saya mengesahkan petender diatas layak untuk dinilai oleh
                                                        Jawatankuasa Kewangan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- SECTION 2: Pembekal Tidak Melepasi -->
                                        <div class="row">
                                            <div class="col-12 bg-light p-2 fw-bold">
                                                SENARAI PEMBEKAL TIDAK MELEPASI PENILAIAN PENYATA BULANAN BANK
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-bordered mt-2">
                                                    <thead class="table-primary text-center text-white">
                                                        <tr>
                                                            <th>Bil</th>
                                                            <th>Jumlah Skor</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">Tiada rekod dijumpai</td>
                                                            <td class="text-center">Tiada rekod dijumpai</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Bilangan Pembekal Tidak Melepasi -->
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-md-2 text-end fw-bold">Bilangan Pembekal</div>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control text-center" value="0" readonly>
                                            </div>
                                        </div>

                                        <!-- Action Button -->
                                        <div class="row mb-3">
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <button class="btn btn-primary">Seterusnya</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Outer Tab 3 Content -->
                        <div class="tab-pane fade" id="pematuhan1" role="tabpanel" aria-labelledby="pematuhan1-tab">

                            <!-- Inner tabs for outer tab 3 -->
                            <ul class="nav nav-pills custom-tab-size mb-3" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#teknikal-3" role="tab"
                                        aria-selected="true">Teknikal</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#rumusan-3" role="tab"
                                        aria-selected="false">Rumusan</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="teknikal-3" role="tabpanel"
                                    aria-labelledby="teknikal-3-tab">
                                    <!-- Content for Teknikal of progress 3 -->
                                    <h4 class="card-title card-title-grey">CADANGAN KEWANGAN</h4>
                                    <p class="card-title-desc text-primary fst-italic">Klik butang Menilai untuk meneruskan
                                        penilaian</p>
                                    <table class="table table-bordered dt-responsive nowrap w-100">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>Tajuk / Dokumen</th>
                                                <th>Mekanisma</th>
                                                <th>Status Penilaian</th>
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Penyata Bank Terkini (3 bulan terakhir) Syarikat</td>
                                                <td>Spesifikasi</td>
                                                <td>Selesai</td>
                                                <td class="text-center">
                                                    <button class="btn btn-success" data-bs-toggle="modal"
                                                        data-bs-target="#modalPenilaianCadangan">Papar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Maklumat Profil Petender</td>
                                                <td>Borang Atas Talian</td>
                                                <td>Selesai</td>
                                                <td class="text-center">
                                                    <button class="btn btn-success">Papar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Salinan Sijil Pendaftaran dengan Kementerian Kewangan</td>
                                                <td>Petender Muat Naik</td>
                                                <td>Selesai</td>
                                                <td class="text-center">
                                                    <button class="btn btn-success">Papar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Surat Akuan Pembida</td>
                                                <td>PTJ Muat Naik</td>
                                                <td>Selesai</td>
                                                <td class="text-center">
                                                    <button class="btn btn-success">Papar</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row mb-3 px-3">
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button class="btn btn-primary">Seterusnya</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="rumusan-3" role="tabpanel" aria-labelledby="rumusan-3-tab">
                                    <div class="container-fluid mt-3">
                                        <!-- SECTION 1: Pembekal Melepasi -->
                                        <div class="row">
                                            <div class="col-12 bg-light p-2 fw-bold">
                                                SENARAI PEMBEKAL YANG MELEPASI PENILAIAN PENYATA BULANAN BANK
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-bordered mt-2">
                                                    <thead class="table-primary text-center text-white">
                                                        <tr>
                                                            <th>Bil</th>
                                                            <th>Ulasan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1/2</td>
                                                            <td class="text-center">xxxx</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2/2</td>
                                                            <td class="text-center">xxxx</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Bilangan Pembekal + Checkbox -->

                                        <div class="row my-3 align-items-center">
                                            <div class="col-md-2 text-end fw-bold">Bilangan Pembekal</div>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control text-center" value="2" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="confirmLayak">
                                                    <label class="form-check-label" for="confirmLayak">
                                                        Saya mengesahkan petender diatas layak untuk dinilai oleh
                                                        Jawatankuasa Kewangan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- SECTION 2: Pembekal Tidak Melepasi -->
                                        <div class="row">
                                            <div class="col-12 bg-light p-2 fw-bold">
                                                SENARAI PEMBEKAL TIDAK MELEPASI PENILAIAN PENYATA BULANAN BANK
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-bordered mt-2">
                                                    <thead class="table-primary text-center text-white">
                                                        <tr>
                                                            <th>Bil</th>
                                                            <th>Jumlah Skor</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">Tiada rekod dijumpai</td>
                                                            <td class="text-center">Tiada rekod dijumpai</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Bilangan Pembekal Tidak Melepasi -->
                                        <div class="row mb-4 align-items-center">
                                            <div class="col-md-2 text-end fw-bold">Bilangan Pembekal</div>
                                            <div class="col-md-1">
                                                <input type="text" class="form-control text-center" value="0" readonly>
                                            </div>
                                        </div>

                                        <!-- Action Button -->
                                        <div class="row mb-3">
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <button class="btn btn-primary">Seterusnya</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Outer Tab 4 Content -->
                        <div class="tab-pane fade" id="laporan" role="tabpanel" aria-labelledby="laporan-tab">
                            <!-- Add inner tabs if needed, or direct content -->
                            <!-- Penilaian Peringkat Pertama -->
                            <h5 class="fw-bold mt-3">PENILAIAN PERINGKAT PERTAMA:</h5>

                            <div class="mb-3 mt-2">
                                <div class="card-title card-title-grey">SENARAI PEMBEKAL YANG MELEPASI PENILAIAN PEMATUHAN
                                    DOKUMENTASI</div>
                                <table class="table table-bordered text-center align-middle mt-2">
                                    <thead class="table-primary text-white">
                                        <tr>
                                            <th>BIL</th>
                                            <th>ULASAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1/2</td>
                                            <td>XXX</td>
                                        </tr>
                                        <tr>
                                            <td>2/2</td>
                                            <td>XXX</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="mb-3">
                                <div class="card-title card-title-grey">SENARAI PEMBEKAL TIDAK MELEPASI PENILAIAN PEMATUHAN
                                    DOKUMENTASI</div>
                                <table class="table table-bordered text-center align-middle mt-2">
                                    <thead class="table-primary text-white">
                                        <tr>
                                            <th>BIL</th>
                                            <th>ULASAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2">Tiada rekod dijumpai</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <textarea class="form-control mt-2"
                                    rows="2">Sehubungan dengan itu, JPT bersetuju untuk mengambil xx penyebut harga iaitu XX untuk ke Penilaian Peringkat Kedua</textarea>
                            </div>

                            <!-- Penilaian Peringkat Kedua -->
                            <h5 class="fw-bold mt-4">PENILAIAN PERINGKAT KEDUA:</h5>

                            <div class="mb-3 mt-2">
                                <div class="card-title card-title-grey">SENARAI PEMBEKAL YANG MELEPASI PENILAIAN PENYATA
                                    BULANAN BANK
                                </div>
                                <table class="table table-bordered text-center align-middle mt-2">
                                    <thead class="table-primary text-white">
                                        <tr>
                                            <th>BIL</th>
                                            <th>ULASAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1/2</td>
                                            <td>XXX</td>
                                        </tr>
                                        <tr>
                                            <td>2/2</td>
                                            <td>XXX</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="mb-3">
                                <div class="card-title card-title-grey">SENARAI PEMBEKAL YANG TIDAK MELEPASI PENILAIAN
                                    PENYATA BULANAN BANK
                                </div>
                                <table class="table table-bordered text-center align-middle mt-2">
                                    <thead class="table-primary text-white">
                                        <tr>
                                            <th>BIL</th>
                                            <th>JUMLAH SKOR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2">Tiada rekod dijumpai</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <textarea class="form-control mt-2"
                                    rows="2">Sehubungan dengan itu, JPT bersetuju untuk mengambil xx penyebut harga iaitu XX untuk ke Peringkat Pengesyoran.</textarea>
                            </div>

                            <!-- Penilaian Peringkat Ketiga -->
                            <h5 class="fw-bold mt-4">PENILAIAN PERINGKAT KETIGA:</h5>

                            <div class="mb-3 mt-2">
                                <div class="card-title card-title-grey">SENARAI PEMBEKAL YANG MELEPASI PENILAIAN KEWANGAN
                                </div>
                                <table class="table table-bordered text-center align-middle mt-2">
                                    <thead class="table-primary text-white">
                                        <tr>
                                            <th>KEDUDUKAN</th>
                                            <th>BIL</th>
                                            <th>JUMLAH SKOR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2/2</td>
                                            <td>96.87</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>1/2</td>
                                            <td>91.74</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row mt-2">
                                    <div class="col-md-4 d-flex align-items-center fw-bold">Penetapan Pemanda Aras Tahap
                                        Lulus (%)</div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control text-center" value="70">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="card-title card-title-grey">SENARAI PEMBEKAL TIDAK MELEPASI PENILAIAN
                                    KEWANGAN</div>
                                <table class="table table-bordered text-center align-middle mt-2">
                                    <thead class="table-primary text-white">
                                        <tr>
                                            <th>BIL</th>
                                            <th>ULASAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2">Tiada rekod dijumpai</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <textarea class="form-control mt-2"
                                    rows="2">Sehubungan dengan itu, JPT bersetuju untuk mengambil xx penyebut harga iaitu XX untuk ke Penilaian Peringkat Kedua</textarea>
                            </div>
                            <div class="mb-3">

                                <!-- Pengesyoran -->
                                <div class="card-title card-title-grey">PENGESYORAN</div>
                                <textarea class="form-control mb-3" rows="2">Dengan ini, JPT mengesyorkan XX (bil) untuk melaksanakan (NAMA PROJEK) untuk dibawa ke mesyuarat Jawatankuasa Sebut Harga PSUK berdasarkan justifikasi seperti berikut:
                                                                    </textarea>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-success">Tambah</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="modalPematuhanCadanganKewangan" tabindex="-1" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="modalLabel">SEMAKAN PEMATUHAN DOKUMEN KEWANGAN
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <p><strong>Tajuk/Dokumen:</strong> Perkhidmatan Penilaian Forensik Keatas
                        Sistem
                        XXXX
                    </p>
                    <!-- Title / Document -->
                    <div class="mb-3">
                        <h4 class="card-title card-title-grey">SENARAI PEMBEKAL</h4>
                    </div>

                    <!-- Senarai Pembekal Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th style="width: 15%;">Bil</th>
                                    <th style="width: 45%;">Dokumen</th>
                                    <th style="width: 20%;">Status Pematuhan</th>
                                    <th style="width: 20%;">Catatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>
                                        <i class="bi bi-file-earmark-pdf-fill text-primary me-2"></i>
                                        Perkhidmatan Penilaian Forensik Keatas Sistem XXXX.pdf
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label="Status Pematuhan">
                                            <option selected>Mematuhi / Tidak Mematuhi</option>
                                            <option value="mematuhi">Mematuhi</option>
                                            <option value="tidak_mematuhi">Tidak Mematuhi
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Catatan">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>
                                        <i class="bi bi-file-earmark-pdf-fill text-primary me-2"></i>
                                        Perkhidmatan Penilaian Forensik Keatas Sistem XXXX
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label="Status Pematuhan">
                                            <option selected>Mematuhi / Tidak Mematuhi</option>
                                            <option value="mematuhi">Mematuhi</option>
                                            <option value="tidak_mematuhi">Tidak Mematuhi
                                            </option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Catatan">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalPenyataBank" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="modalLabel">PENILAIAN CADANGAN KEWANGAN
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <p><strong>Tajuk/Dokumen:</strong> Penyata Bank Terkini (3 Bulan Terakhir) Syarikat
                    </p>
                    <!-- Title / Document -->
                    <div class="mb-3">
                        <h4 class="card-title card-title-grey">SENARAI PEMBEKAL</h4>
                    </div>

                    <!-- Senarai Pembekal Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th style="width: 15%;">Bil</th>
                                    <th style="width: 45%;">Jumlah Skor</th>
                                    <th style="width: 20%;">Status Penilaian</th>
                                    <th style="width: 20%;">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1/2</td>
                                    <td class="text-center">10</td>
                                    <td class="text-center">Selesai</td>
                                    <td class="text-center">
                                        <button class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#modalPenyataBank1">Papar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2/2</td>
                                    <td class="text-center">10</td>
                                    <td class="text-center">Selesai</td>
                                    <td class="text-center">
                                        <button class="btn btn-success">Papar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalPenyataBank1" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <!-- Title / Document -->
                    <div class="mb-3">
                        <h4 class="card-title card-title-grey">DOKUMEN SEMAK SILANG</h4>
                    </div>

                    <!-- Senarai Pembekal Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th style="width: 70%;">Tajuk/Dokumen</th>
                                    <th style="width: 30%;">Dokumen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kunci kira-kira Tahunan (Nota untuk syarikat ROC, ini mestilah salinan yang
                                        telah diaudit)</td>
                                    <td class="text-center">
                                        <button class="btn btn-success">Papar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pengesahan dari institusi kewangan untuk tiga bulan penyata bank</td>
                                    <td class="text-center">
                                        <button class="btn btn-success">Papar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Title / Document -->
                    <div class="mb-3">
                        <h4 class="card-title card-title-grey">PENYATA BANK</h4>
                    </div>
                    <!-- Penyata Bank -->
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th style="width: 30%;">Bulan</th>
                                    <th style="width: 70%;">Amaun (RM)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">10</td>
                                    <td class="text-center">
                                        500,000.00
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">10</td>
                                    <td class="text-center">
                                        300,000.00
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">10</td>
                                    <td class="text-center">
                                        200,000.00
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>Jumlah Amaun (RM)</label>
                            <input type="text" class="form-control" value="1,000,000.00" readonly>
                        </div>
                        <div class="col-md-4">
                            <label>Purata (RM)</label>
                            <input type="text" class="form-control" value="333,333.33" readonly>
                        </div>
                        <div class="col-md-4">
                            <label>Skor Automatik</label>
                            <input type="text" class="form-control" value="10" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <h4 class="card-title card-title-grey">SKOR PURATA PENYATA BANK(RM)</h4>
                    </div>

                    <!-- skor Purata Penyata Bank -->
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th style="width: 40%;">Dari</th>
                                    <th style="width: 40%;">Hingga</th>
                                    <th style="width: 20%;">Skor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">0</td>
                                    <td class="text-center">
                                        10064.99
                                    </td>
                                    <td class="text-center">0</td>
                                </tr>
                                <tr>
                                    <td class="text-center">10065</td>
                                    <td class="text-center">
                                        -
                                    </td>
                                    <td class="text-center">10</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Status Kelayakan</label>
                            <select class="form-select">
                                <option selected>Layak / Tidak Layak</option>
                                <option>Layak</option>
                                <option>Tidak Layak</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Catatan</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>



                    <button type="button" id="btnSimpanSenarai" class="btn btn-success"
                        data-bs-dismiss="modal">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalPenilaianCadangan" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <!-- Title / Document -->
                    <div class="mb-3">
                        <h4 class="card-title card-title-grey">PENILAIAN CADANGAN KEWANGAN</h4>
                    </div>

                    <!-- Senarai Pembekal Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th style="width: 70%;">Tajuk/Dokumen</th>
                                    <th style="width: 30%;">Dokumen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Perkhidmatan Penilaian Forensik Keatas Sistem XXXX</td>
                                    <td class="text-center">
                                        <button class="btn btn-success">Papar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pengesahan dari institusi kewangan untuk tiga bulan penyata bank</td>
                                    <td class="text-center">
                                        <button class="btn btn-success">Papar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Title / Document -->
                    <div class="mb-3">
                        <h4 class="card-title card-title-grey">SENARAI PEMBEKAL</h4>
                    </div>
                    <!-- SENARAI PEMBEKAL -->
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th style="width: 10%;">Bulan</th>
                                    <th style="width: 10%;">Status Bumiputra</th>
                                    <th style="width: 15%;">Harga Tawaran(RM)</th>
                                    <th style="width: 10%;">Pakej(Skor)</th>
                                    <th style="width: 15%;">Perbezaan Harga(RM)</th>
                                    <th style="width: 10%;">Perbezaan(%)</th>
                                    <th style="width: 10%;">Keutamaan Bumiputra(%)</th>
                                    <th style="width: 20%;">Tindakan</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1/2</td>
                                    <td class="text-center">Bukan</td>
                                    <td class="text-center">330,00.00</td>
                                    <td class="text-center">60</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        <button class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#modalPenilaianCadangan1">Papar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2/2</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">360,00.00</td>
                                    <td class="text-center">60</td>
                                    <td class="text-center">30,000.00</td>
                                    <td class="text-center">9.09</td>
                                    <td class="text-center">10</td>
                                    <td class="text-center">
                                        <button class="btn btn-success">Papar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mb-3">
                        <h4 class="card-title card-title-grey">SKEMA SKOR</h4>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>Jumlah Harga Indikatif Sebenar (RM)</label>
                            <input type="text" class="form-control" value="335,500.00" readonly>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th style="width: 20%;">Harga Tawaran (RM)</th>
                                    <th style="width: 10%;">Dari Varian(%)</th>
                                    <th style="width: 10%;">Hingga Varian(%)</th>
                                    <th style="width: 15%;">Dari Varian(%)</th>
                                    <th style="width: 15%;">Hingga Varian(%)</th>
                                    <th style="width: 10%;">Skor di Bawah Varian</th>
                                    <th style="width: 10%;">Skor dalam Varian</th>
                                    <th style="width: 10%;">Skor melebihi Varian</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MENGIKUT PAKEJ - BAGI SEMUA SPESIFIKASI ITEM</td>
                                    <td class="text-center">70</td>
                                    <td class="text-center">25</td>
                                    <td class="text-center">100,650.00</td>
                                    <td class="text-center">419,375.00</td>
                                    <td class="text-center">25</td>
                                    <td class="text-center">60</td>
                                    <td class="text-center">25</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" id="btnSimpanSenarai" class="btn btn-success"
                        data-bs-dismiss="modal">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('btnSimpanSenarai').addEventListener('click', function () {
            const modal = bootstrap.Modal.getInstance(document.getElementById('modalPenyataBank1'));
            if (modal) {
                modal.hide();
            }

            document.getElementById('modalPenyataBank1').addEventListener('hidden.bs.modal', function cleanupHandler() {
                // Clean up lingering backdrops just in case (only one line needed)
                document.querySelectorAll('.modal-backdrop').forEach(backdrop => backdrop.remove());
                document.body.classList.remove('modal-open');
                document.body.style = '';

                // Remove this event listener to prevent multiple triggers
                document.getElementById('modalPenyataBank1').removeEventListener('hidden.bs.modal', cleanupHandler);
            });
        });
    </script>



@endsection