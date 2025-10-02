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
                        <div id="custom-progress-bar" class="progress-nav mb-4 p-2">
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <ul class="nav nav-pills progress-bar-tab custom-nav" role="tablist">
                                <li class="nav-item" role="peringkat-pematuhan-kewangan">
                                    <button type="button" id="peringkat-pematuhan-kewangan-tab"
                                        class="nav-link rounded-pill active" data-progressbar="custom-progress-bar"
                                        data-bs-toggle="pill" data-bs-target="#peringkat-pematuhan-kewangan"
                                        data-title="@lang('translation.application-information')" role="tab"
                                        aria-controls="peringkat-pematuhan-kewangan" aria-selected="true">1</button>
                                </li>
                                <li class="nav-item" role="rumusan">
                                    <button type="button" id="rumusan-tab" class="nav-link rounded-pill"
                                        data-progressbar="custom-progress-bar" data-bs-toggle="pill"
                                        data-bs-target="#rumusan" data-title="@lang('translation.program-information')"
                                        role="tab" aria-controls="kod-bidang" aria-selected="false">2</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-content px-3" id="application-content">
                    <div class="tab-pane fade show active" id="peringkat-pematuhan-kewangan" role="tabpanel"
                        aria-labelledby="peringkat-pematuhan-kewangan-tab">
                        <div class="row mt-4 justify-content-center">
                            <div class="col-12">
                                <h4 class="card-title card-title-grey">PEMATUHAN CADANGAN TEKNIKAL</h4>
                                <p class="card-title-desc text-primary fst-italic">
                                    Klik butang Semak untuk meneruskan penilaian pematuhan
                                </p>
                            </div>
                        </div>
                        <div class="row my-2 px-3">
                            <div class="col-12">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100"
                                    data-table-sort="id" data-table-order="asc" data-page="1">
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
                                            <td class="">Menunggu Penyerahan</td>
                                            <td class="text-center">
                                                <button class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#modalSemakanKetepatanDokumenTeknikal">Semak</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">Surat Pengesahan Prinsipal yang lengkap ditandatangani</td>
                                            <td class="">Petender Muat Naik</td>
                                            <td class="">Menunggu Penyerahan</td>
                                            <td class="text-center">
                                                <button class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#modalSemakanKetepatanDokumenTeknikal">Semak</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">Senarai Kakitangan Teknikal dan Carta Organisasi Pasukan Projek
                                            </td>
                                            <td class="">Petender Muat Naik</td>
                                            <td class="">Menunggu Penyerahan</td>
                                            <td class="text-center">
                                                <button class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#modalSemakanKetepatanDokumenTeknikal">Semak</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mb-3 px-3">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button class="btn btn-primary">Seterusnya</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="rumusan" role="tabpanel" aria-labelledby="rumusan">
                        <div class="row mt-4 justify-content-center">
                            <div class="col-12">
                                <h4 class="card-title card-title-grey">SENARAI PEMBEKAL LAYAK UNTUK DINILAI</h4>
                            </div>
                        </div>
                        <div class="row my-2 px-3">
                            <div class="col-12">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100"
                                    data-table-sort="id" data-table-order="asc" data-page="1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Bil</th>
                                            <th class="text-center">Nama Syarikat</th>
                                            <th class="text-center">Taraf Bumiputera (Ya/Tidak)</th>
                                            <th class="text-center">Harga Tawaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1/2</td>
                                            <td class="text-center">Syarikat A</td>
                                            <td class="text-center">
                                                <select name="" id="" class="form-control text-center">
                                                    <option value=""></option>
                                                </select>
                                            </td>
                                            <td class="text-center"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2/2</td>
                                            <td class="text-center">Syarikat B</td>
                                            <td class="text-center">
                                                <select name="" id="" class="form-control text-center">
                                                    <option value=""></option>
                                                </select>
                                            </td>
                                            <td class="text-center"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row my-2 px-3">
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="">Bilangan Pembekal</label>
                            </div>
                            <div class="col-md-1">
                                <input type="number" value="2" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="row my-2 px-3">
                            <div class="col-md-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked>
                                    <label class="form-check-label" for="formRadios1">
                                        Saya mengesahkan petender perlu melalui proses Cut-Off
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2 px-3">
                            <div class="col-md-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked>
                                    <label class="form-check-label" for="formRadios1">
                                        Saya mengesahkan semua petender telah disemak dan layak untuk dinilai
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-center">
                            <div class="col-12">
                                <h4 class="card-title card-title-grey">SENARAI PEMBEKAL TIDAK LAYAK UNTUK DINILAI</h4>
                            </div>
                        </div>
                        <div class="row my-2 px-3">
                            <div class="col-12">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100"
                                    data-table-sort="id" data-table-order="asc" data-page="1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Bil</th>
                                            <th class="text-center">Nama Syarikat</th>
                                            <th class="text-center">Harga Tawaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" colspan="3">Tiada rekod dijumpai</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row my-2 px-3">
                            <div class="col-md-2 d-flex justify-content-end">
                                <label for="" class="">Bilangan Pembekal</label>
                            </div>
                            <div class="col-md-1">
                                <input type="number" value="0" name="" id="" class="form-control">
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="col-12 d-flex justify-content-between">
                                <div class="left"></div>
                                <div class="right">
                                    <button class="btn btn-success">Laporan</button>
                                    <button class="btn btn-primary">Hantar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="modalSemakanKetepatanDokumenTeknikal" tabindex="-1"
        aria-labelledby="modalSemakanKetepatanDokumenTeknikalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="card-title card-title-grey">SEMAKAN KETEPATAN DOKUMEN TEKNIKAL</h4>
                    <div class="row mb-4">
                        <div class="col-12">
                            <b>Tajuk / Dokumen : </b>Perkhidmatan Penilaian Forensik Keatas Sistem XXXX
                        </div>
                    </div>

                    <h4 class="card-title card-title-grey">SENARAI PEMBEKAL</h4>
                    <p class="card-title-desc text-primary fst-italic">
                        Klik butang Semak untuk meneruskan penilaian pematuhan
                    </p>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100"
                                data-table-sort="id" data-table-order="asc" data-page="1">
                                <thead>
                                    <tr>
                                        <th>Kod Pembekal</th>
                                        <th>Dokumen</th>
                                        <th>Status Penyerahan</th>
                                        <th>Status Pematuhan</th>
                                        <th>Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Perkhidmatan Penilaian Forensik Keatas Sistem xxxx.pdf</td>
                                        <td>Hantar</td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Ada / Tiada</option>
                                                <option value="">Ada</option>
                                                <option value="">Tiada</option>
                                            </select>
                                        </td>
                                        <td><textarea name="" id=""></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Perkhidmatan Penilaian Forensik Keatas Sistem xxxx.pdf</td>
                                        <td>Hantar</td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Ada / Tiada</option>
                                                <option value="">Ada</option>
                                                <option value="">Tiada</option>
                                            </select>
                                        </td>
                                        <td><textarea name="" id=""></textarea></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-success m-1">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSemakanKetepatanDokumenKewangan" tabindex="-1"
        aria-labelledby="modalSemakanKetepatanDokumenKewanganLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="card-title card-title-grey">SEMAKAN KETEPATAN DOKUMENT KEWANGAN</h4>
                    <div class="row mb-4">
                        <div class="col-12">
                            <b>Tajuk / Dokumen : </b>Perkhidmatan Penilaian Forensik Keatas Sistem XXXX
                        </div>
                    </div>

                    <h4 class="card-title card-title-grey">SENARAI PEMBEKAL</h4>
                    <p class="card-title-desc text-primary fst-italic">
                        Klik butang Semak untuk meneruskan penilaian pematuhan
                    </p>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100"
                                data-table-sort="id" data-table-order="asc" data-page="1">
                                <thead>
                                    <tr>
                                        <th>Kod Pembekal</th>
                                        <th>Dokumen</th>
                                        <th>Status Penyerahan</th>
                                        <th>Status Pematuhan</th>
                                        <th>Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Salinan Sijil Pendaftaran dengan Kementerian Kewangan.pdf</td>
                                        <td>Hantar</td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Ada / Tiada</option>
                                            </select>
                                        </td>
                                        <td><textarea name="" id=""></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Salinan Sijil Pendaftaran dengan Kementerian Kewangan.pdf</td>
                                        <td>Hantar</td>
                                        <td>
                                            <select name="" id="" class="form-control">
                                                <option value="">Ada / Tiada</option>
                                            </select>
                                        </td>
                                        <td><textarea name="" id=""></textarea></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-success m-1">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection