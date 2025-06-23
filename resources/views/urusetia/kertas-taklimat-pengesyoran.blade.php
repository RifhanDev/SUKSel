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

                    <div class="tab-content px-3" id="application-content">
                        <ul class="nav nav-pills custom-tab-size mb-3" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" data-bs-toggle="tab" href="#kertas-taklimat" role="tab"
                                    aria-selected="true">Penyediaan Kertas Taklimat</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-bs-toggle="tab" href="#item" role="tab"
                                    aria-selected="false">Item</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kertas-taklimat" role="tabpanel">
                                <!-- Content for Teknikal of progress 1 -->
                                <h4 class="card-title card-title-grey">SEKSYEN LAPORAN</h4>
                                <p class="card-title-desc text-primary fst-italic">1. Kunci Masuk bagi kedudukan Pakej dan
                                    Item</p>
                                <p class="card-title-desc text-primary fst-italic">2. Klik di ruangan Tindakan untuk mengisi
                                    Kertas Taklimat</p>
                                <table class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <input type="checkbox" id="checkAll">
                                            </th>
                                            <th class="text-center">Kandungan</th>
                                            <th class="text-center">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="checkItem">
                                            </td>
                                            <td class="">Laporan Jawatankuasa Pembuka</td>
                                            <td class="">
                                                <a href="#">Muat Turun</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="checkItem">
                                            </td>
                                            <td class="">Laporan Jawatankuasa Teknikal</td>
                                            <td class="">
                                                <a href="#">Muat Turun</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="checkItem">
                                            </td>
                                            <td class="">Laporan Jawatankuasa Kewangan</td>
                                            <td class="">
                                                <a href="#">Muat Turun</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="checkItem">
                                            </td>
                                            <td class="">Kertas Taklimat (Perakuan Jabatan)</td>
                                            <td class="">
                                                <a href="#">Muat Turun</a>
                                                <a href="#">Muat Naik</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="checkItem">
                                            </td>
                                            <td class="">Ringkasan Kertas Taklimat (Wajib untuk tender)</td>
                                            <td class="">
                                                <a href="#">Muat Turun</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row mb-3 px-3">
                                    <div class="d-flex justify-content-end gap-2">
                                        <button class="btn btn-success">Muat Turun Semua</button>
                                        <button class="btn btn-primary">Tambah</button>
                                        <button class="btn btn-danger">Hapus</button>
                                    </div>
                                </div>
                                <h4 class="card-title card-title-grey">CATATAN</h4>
                                <div class="mb-3">
                                    <textarea class="form-control" name="remarks" id="remarks" rows="4"
                                        placeholder="Masukkan catatan di sini..."></textarea>
                                </div>
                                <div class="row mb-3 px-3">
                                    <div class="d-flex justify-content-end gap-2">
                                        <button class="btn btn-success">Simpan</button>
                                        <button class="btn btn-primary">Hantar</button>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="item" role="tabpanel" aria-labelledby="item">
                                {{-- Content for Item --}}
                                <h4 class="card-title card-title-grey">SENARAI ITEM</h4>
                                <p class="card-title-desc text-primary fst-italic">Sila klik pada item untuk melihat
                                    senarai pembekal</p>
                                <!-- Table for Items -->
                                <table class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <input type="checkbox" id="checkAll">
                                            </th>
                                            <th class="text-center">Item</th>
                                            <th class="text-center">Jenis Item</th>
                                            <th class="text-center">Unit Ukuran</th>
                                            <th class="text-center">Jenis Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" class="checkItem">
                                            </td>
                                            <td class="item-clickable text-primary" style="cursor: pointer;">
                                                Tender Perkhidmatan Penilaian Forensik Keatas Sistem XXXX
                                            </td>
                                            <td class="">Perkhidmatan</td>
                                            <td class="">Activity Unit</td>
                                            <td class="">Biasa Standard</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <!-- Hidden SENARAI PEMBEKAL section -->
                                <div id="senaraiPembekalSection" style="display: none;">
                                    <br>
                                    <h4 class="card-title card-title-grey">SENARAI PEMBEKAL</h4><br>
                                    <table class="table table-bordered text-center align-middle">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Bil</th>
                                                <th rowspan="2">Status Bumiputra</th>
                                                <th rowspan="2">Harga Tawaran (RM)</th>
                                                <th rowspan="2">Skor Teknikal</th>
                                                <th colspan="2">Kedudukan Penilaian</th>
                                                <th rowspan="2">Status Pendaftaran MOF</th>
                                                <th colspan="2">Maklumat Tambahan</th>
                                                <th rowspan="2">Kedudukan oleh Urusetia</th>
                                                <th rowspan="2">Catatan Urusetia</th>
                                            </tr>
                                            <tr>
                                                <th>Teknikal</th>
                                                <th>Kewangan</th>
                                                <th>Tindakan Disiplin Diambil</th>
                                                <th>Lembaga Pengarah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2/2</td>
                                                <td>Ya</td>
                                                <td>360,000.00</td>
                                                <td>96.43</td>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>Aktif</td>
                                                <td></td>
                                                <td>
                                                    <button class="btn btn-light">
                                                        <i class="bi bi-file-earmark-text"></i>
                                                        <!-- Or use Font Awesome: <i class="fa fa-file"></i> -->
                                                    </button>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center" value="2">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1/2</td>
                                                <td>Tidak</td>
                                                <td>330,000.00</td>
                                                <td>94.53</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>Aktif</td>
                                                <td></td>
                                                <td>
                                                    <button class="btn btn-light">
                                                        <i class="bi bi-file-earmark-text"></i>
                                                    </button>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-center" value="1">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <h4 class="card-title card-title-grey">CATATAN</h4><br>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="remarks" id="remarks" rows="4"
                                            placeholder="Masukkan catatan di sini..."></textarea>
                                    </div>
                                    <div class="row mb-3 px-3">
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-success">Simpan</button>
                                            <button class="btn btn-primary">Hantar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const itemCell = document.querySelector('.item-clickable');
                    const pembekalSection = document.getElementById('senaraiPembekalSection');

                    itemCell.addEventListener('click', function () {
                        pembekalSection.style.display = 'block';
                        pembekalSection.scrollIntoView({ behavior: 'smooth' });
                    });
                });
            </script>

        </div>
@endsection