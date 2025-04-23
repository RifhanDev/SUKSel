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
            border:1px solid #E9EBEC;
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
            .select2-search__field::-webkit-input-placeholder, .select2-search__field::placeholder {font-family: "Poppins", sans-serif;}
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
                    margin-right:10px;
                }
                .program-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:290px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:280px;
                    margin-right:100px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:200px;
                    margin-right:110px;
                }
                .endorsement-name {
                    display: flex;
                    justify-content: flex-end;
                    align-items: center;
                    width: 100%; 
                    height: 40px;
                }
                .btn-add-supplier-position{
                    top: 74px;    
                }
                .btn-edit-supplier-position{
                    top: 30px;   
                }
            }
            @media screen and (max-width: 2300px) {
                .agency-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-right:10px;
                }
                .program-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:260px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:250px;
                    margin-right:100px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:160px;
                    margin-right:110px;
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
                    margin-right:10px;
                }
                .program-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:200px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:200px;
                    margin-right:100px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:150px;
                    margin-right:110px;
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
                    margin-right:10px;
                }
                .program-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:190px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:190px;
                    margin-right:120px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:100px;
                    margin-right:100px;
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
                    margin-right:10px;
                }
                .program-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:180px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:190px;
                    margin-right:120px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:100px;
                    margin-right:100px;
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
                    margin-right:10px;
                }
                .program-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:160px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:180px;
                    margin-right:110px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:90px;
                    margin-right:100px;
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
                    margin-right:10px;
                }
                .program-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:130px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:170px;
                    margin-right:110px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:90px;
                    margin-right:100px;
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
                    margin-right:10px;
                }
                .program-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:120px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:180px;
                    margin-right:110px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:90px;
                    margin-right:100px;
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
                    margin-right:10px;
                }
                .program-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:100px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:180px;
                    margin-right:110px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:90px;
                    margin-right:100px;
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
                    margin-right:10px;
                }
                .program-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:90px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:160px;
                    margin-right:110px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:80px;
                    margin-right:110px;
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
                    margin-right:10px;
                }
                .program-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:60px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:140px;
                    margin-right:70px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:90px;
                    margin-right:100px;
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
                    margin-right:10px;
                }
                .program-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:40px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:90px;
                    margin-right:50px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:80px;
                    margin-right:70px;
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
                    margin-right:10px;
                }
                .program-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:30px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:60px;
                    margin-right:50px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:70px;
                    margin-right:70px;
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
                    margin-left:30px;
                    font-size: 11px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:50px;
                    margin-right:40px;
                    font-size: 11px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:60px;
                    margin-right:50px;
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
                    margin-left:30px;
                    font-size: 11px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:70px;
                    margin-right:30px;
                    font-size: 11px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:70px;
                    margin-right:50px;
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
                    margin-left:20px;
                    font-size: 11px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:70px;
                    margin-right:30px;
                    font-size: 11px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:70px;
                    margin-right:50px;
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
                    margin-left:30px;
                    font-size: 11px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:40px;
                    margin-right:30px;
                    font-size: 11px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:40px;
                    margin-right:50px;
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
                    margin-left:20px;
                    font-size: 10px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:10px;
                    margin-right:10px;
                    font-size: 10px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:10px;
                    margin-right:20px;
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
                    margin-left:20px;
                    font-size: 10px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:30px;
                    margin-right:10px;
                    font-size: 10px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:40px;
                    margin-right:20px;
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
                    margin-left:20px;
                    font-size: 9px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:30px;
                    margin-right:10px;
                    font-size: 9px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:40px;
                    margin-right:20px;
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
                    margin-left:20px;
                    font-size: 9px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:30px;
                    margin-right:10px;
                    font-size: 9px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:40px;
                    margin-right:20px;
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
                    margin-left:20px;
                    font-size: 9px;
                }
                .expenses-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:30px;
                    margin-right:10px;
                    font-size: 9px;
                }
                .attachment-name {
                    display: flex;
                    width: 100%; 
                    height: 40px;
                    margin-left:40px;
                    margin-right:20px;
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
                height:255px;
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
                            <div class="mb-3">Penyediaan Maklumat Tender</div>
                        </div>
                    </div>
                    <div class="row mt-4 justify-content-center">
                        <div class="col-12">
                            <h4 class="card-title card-title-grey">MAKLUMAT UMUM</h4>
                            <p class="card-title-desc text-primary fst-italic">
                                Untuk perkhidmatan yang memerlukan bayaran secara progresif, sila pilih Jenis Pemenuhan sebagai Bermasa (Bila Perlu)
                            </p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-11">
                            <div class="row">
                                <!-- Kaedah Perolehan -->
                                    <div class="col-md-6 my-2">
                                        <div class="row">
                                            <div class="col-md-4 d-flex justify-content-end">
                                                <label for="" class="">Kaedah Perolehan</label>
                                            </div>
                                            <div class="col-md-4">
                                                <select disabled class="form-control" name="" >
                                                    <option value="">Tender</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Kaedah Perolehan --> 
                                <!-- Empty column -->
                                    <div class="col-md-1 my-2">
                                    </div>
                                <!-- Empty column -->             
                                <!-- Kategori Jenis Perolehan -->
                                    <div class="col-md-5 my-2">
                                        <div class="row">
                                            <div class="col-md-5 d-flex justify-content-end">
                                                <label for="" class="">Kategori Jenis Perolehan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <select disabled class="form-control" name="" >
                                                    <option value="">Perkhidmatan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Kategori Jenis Perolehan -->
                                <!-- Item Panel -->
                                    <div class="col-md-12 my-2">
                                        <div class="row">
                                            <div class="col-md-2 d-flex justify-content-end">
                                                <label for="" class="">Item Panel <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="itemPanel" id="itemPanel1" disabled>
                                                    <label class="form-check-label" for="itemPanel1">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="itemPanel" id="itemPanel2" checked disabled>
                                                    <label class="form-check-label" for="itemPanel2">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Item Panel -->
                                <!-- Tajuk Perolehan -->
                                    <div class="col-md-12 my-2">
                                        <div class="row">
                                            <div class="col-md-2 d-flex justify-content-end">
                                                <label for="" class="">Tajuk Perolehan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="" disabled>TENDER PERKHIIDMATAN DIGITAL FORENSIK KE ATAS ALIRAN PROSES SISTEM XXXX</textarea>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Tajuk Perolehan -->
                                <!-- Disediakan Untuk PTJ -->
                                    <div class="col-md-12 my-2">
                                        <div class="row">
                                            <div class="col-md-2 d-flex justify-content-end">
                                                <label for="" class="">Disediakan Untuk PTJ <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="input-group">
                                                    <select class="form-control" name="" disabled>
                                                        <option value="">BAHAGIAN PENTADBIRAN - CAWANNGAN KEWANGAN - KEMENTERIAN KEWANGAN</option>
                                                    </select>
                                                    <span class="input-group-text"><i class="bx bx-search-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Disediakan Untuk PTJ -->
                                <!-- No. Rujukan Fail -->
                                    <div class="col-md-12 my-2">
                                        <div class="row">
                                            <div class="col-md-2 d-flex justify-content-end">
                                                <label for="" class="">No. Rujukan Fail <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" disabled>
                                            </div>
                                        </div>
                                    </div>
                                <!-- No. Rujukan Fail -->
                                <!-- Tarikh Dicipta -->
                                    <div class="col-md-12 my-2">
                                        <div class="row">
                                            <div class="col-md-2 d-flex justify-content-end">
                                                <label for="" class="">Tarikh Dicipta</label>
                                            </div>
                                            <div class="col-md-2">
                                                <input class="form-control" value="" type="date" disabled>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Tarikh Dicipta -->
                                <!-- Jumlah Harga Indikatif Jangkaan (RM) -->
                                    <div class="col-md-4 my-2">
                                        <div class="row">
                                            <div class="col-md-6 text-end">
                                                <label for="" class="">Jumlah Harga Indikatif Jangkaan (RM) <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-5">
                                                <input class="form-control" type="text" value="450,000.00" disabled>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Jumlah Harga Indikatif Jangkaan (RM) -->
                                <!-- Anggaran Jabatan -->
                                    <div class="col-md-3 my-2">
                                        <div class="row">
                                            <div class="col-md-4 text-end">
                                                <label for="" class="">Anggaran Jabatan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" value="450,000.00" disabled >
                                            </div>
                                        </div>
                                    </div>
                                <!-- Anggaran Jabatan -->
                                <!-- Sumber Peruntukan -->
                                    <div class="col-md-5 my-2">
                                        <div class="row">
                                            <div class="col-md-5 text-end">
                                                <label for="" class="">Sumber Peruntukan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sumberPeruntukan" id="sumberPeruntukan1" disabled checked>
                                                    <label class="form-check-label" for="sumberPeruntukan1">
                                                        Pembangunan
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sumberPeruntukan" id="sumberPeruntukan2" disabled>
                                                    <label class="form-check-label" for="sumberPeruntukan2">
                                                        Mengurus
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Sumber Peruntukan -->
                                <!-- Jenis Sebut Harga / Tender -->
                                    <div class="col-md-6 my-2">
                                        <div class="row">
                                            <div class="col-md-4 text-end">
                                                <label for="" class="">Jenis Sebut Harga / Tender <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenisSebutHargaTender" id="jenisSebutHargaTender1" disabled checked>
                                                    <label class="form-check-label" for="jenisSebutHargaTender1">
                                                        Terbuka
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>            
                                <!-- Jenis Sebut Harga / Tender -->
                                <!-- Empty column -->
                                    <div class="col-md-1 my-2">
                                    </div>
                                <!-- Empty column -->
                                <!-- Terbuka Kepada -->
                                    <div class="col-md-5 my-2">
                                        <div class="row">
                                            <div class="col-md-5 text-end">
                                                <label for="" class="">Terbuka Kepada <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="terbukaKepada" id="terbukaKepada1" disabled>
                                                    <label class="form-check-label" for="terbukaKepada1">
                                                        Bumiputra
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="terbukaKepada" id="terbukaKepada2" disabled checked>
                                                    <label class="form-check-label" for="terbukaKepada2">
                                                        Semua
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Terbuka Kepada -->
                                <!-- Zon / Lokasi -->
                                    <div class="col-md-5 my-2">
                                        <div class="row">
                                            <div class="col-md-5 text-end">
                                                <label for="" class="">Zon / Lokasi</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check form-check-inline">
                                                    <input disabled class="form-check-input" type="radio" name="zonLokasi" id="zonLokasi1">
                                                    <label class="form-check-label" for="zonLokasi1">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input disabled class="form-check-input" type="radio" name="zonLokasi" id="zonLokasi2" checked>
                                                    <label class="form-check-label" for="zonLokasi2">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Zon / Lokasi -->
                                <!-- Empty column -->
                                    <div class="col-md-2 my-2">
                                    </div>
                                <!-- Empty column -->
                                <!-- Taklimat Tender / Lawatan Tapak -->
                                    <div class="col-md-5 my-2">
                                        <div class="row">
                                            <div class="col-md-5 text-end ">
                                                <label for="" class="">Taklimat Tender / Lawatan Tapak&nbsp;<span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check form-check-inline">
                                                    <input disabled class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked>
                                                    <label class="form-check-label" for="formRadios1">
                                                        Ada
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input disabled class="form-check-input" type="radio" name="formRadios" id="formRadios2">
                                                    <label class="form-check-label" for="formRadios2">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Taklimat Tender / Lawatan Tapak -->
                                <!-- Lokaliti Penilaian -->
                                    <div class="col-md-6 my-2">
                                        <div class="row">
                                            <div class="col-md-4 d-flex justify-content-end">
                                                <label for="" class="">Lokaliti Penilaian</label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-control" name="" >
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Lokaliti Penilaian -->
                                <!-- Empty column -->
                                    <div class="col-md-6 my-2">
                                    </div>
                                <!-- Empty column -->
                                <!-- Kaedah Penilaian -->
                                    <div class="col-md-6 my-2">
                                        <div class="row">
                                            <div class="col-md-4 text-end">
                                                <label for="" class="">Kaedah Penilaian</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check form-check-inline">
                                                    <input disabled class="form-check-input" type="radio" name="kaedahPenilaian" id="kaedahPenilaian1">
                                                    <label class="form-check-label" for="kaedahPenilaian1">
                                                        1 Peringkat
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input disabled class="form-check-input" type="radio" name="kaedahPenilaian" id="kaedahPenilaian2" checked>
                                                    <label class="form-check-label" for="kaedahPenilaian2">
                                                        2 Peringkat
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Kaedah Penilaian -->
                                <!-- Empty column -->
                                    <div class="col-md-1 my-2">
                                    </div>
                                <!-- Empty column -->
                                <!-- Kategori Perolehan -->
                                    <div class="col-md-5 my-2">
                                        <div class="row">
                                            <div class="col-md-5 d-flex justify-content-end">
                                                <label for="" class="">Kategori Perolehan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="" disabled>
                                                    <option value="">ICT</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Kategori Perolehan -->
                                <!-- Jenis Kontrak -->
                                    <div class="col-md-6 my-2">
                                        <div class="row">
                                            <div class="col-md-4 d-flex justify-content-end">
                                                <label for="" class="">Jenis Kontrak <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-control" name="" disabled>
                                                    <option value="">Kementerian</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Jenis Kontrak -->
                                <!-- Empty column -->
                                    <div class="col-md-1 my-2">
                                    </div>
                                <!-- Empty column -->
                                <!-- No. Kontrak Sedia Ada (Jika Ada) -->
                                    <div class="col-md-5 my-2">
                                        <div class="row">
                                            <div class="col-md-5 d-flex justify-content-end">
                                                <label for="" class="">No. Kontrak Sedia Ada (Jika Ada)</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input disabled class="form-control" type="text" name="" >
                                            </div>
                                        </div>
                                    </div>
                                <!-- No. Kontrak Sedia Ada (Jika Ada) -->
                                <!-- Jenis Pemenuhan -->
                                    <div class="col-md-6 my-2">
                                        <div class="row">
                                            <div class="col-md-4 d-flex justify-content-end">
                                                <label for="" class="">Jenis Pemenuhan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-control" name="" disabled>
                                                    <option value="">Bermasa (Bila Perlu)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Jenis Pemenuhan -->
                                <!-- Empty column -->
                                    <div class="col-md-1 my-2">
                                    </div>
                                <!-- Empty column -->
                                <!-- Tempoh Kontrak / Penyiapan (Bulan) -->
                                    <div class="col-md-5 my-2">
                                        <div class="row">
                                            <div class="col-md-5 d-flex justify-content-end">
                                                <label for="" class="">Tempoh Kontrak / Penyiapan (Bulan)</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input disabled class="form-control" type="number" name="" >
                                            </div>
                                        </div>
                                    </div>
                                <!-- Tempoh Kontrak / Penyiapan (Bulan) -->
                                <!-- Kelulusan Spesifikasi Daripada Kementerian -->
                                    <div class="col-md-6 my-2">
                                        <div class="row">
                                            <div class="col-md-4 text-end">
                                                <label for="" class="">Kelulusan Spesifikasi Daripada Kementerian <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check form-check-inline">
                                                    <input disabled class="form-check-input" type="radio" name="kelulusanSpesifikasiDaripadaKementerian" id="kelulusanSpesifikasiDaripadaKementerian1">
                                                    <label class="form-check-label" for="kelulusanSpesifikasiDaripadaKementerian1">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input disabled class="form-check-input" type="radio" name="kelulusanSpesifikasiDaripadaKementerian" id="kelulusanSpesifikasiDaripadaKementerian2" checked>
                                                    <label class="form-check-label" for="kelulusanSpesifikasiDaripadaKementerian2">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>            
                                <!-- Kelulusan Spesifikasi Daripada Kementerian -->  
                                <!-- Empty column -->
                                    <div class="col-md-1 my-2">
                                    </div>
                                <!-- Empty column -->                 
                                <!-- Penghantaran Fizikal -->
                                    <div class="col-md-5 my-2">
                                        <div class="row">
                                            <div class="col-md-5 text-end">
                                                <label for="" class="">Penghantaran Fizikal <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check form-check-inline">
                                                    <input disabled class="form-check-input" type="radio" name="penghantaranFizikal" id="penghantaranFizikal1" checked>
                                                    <label class="form-check-label" for="penghantaranFizikal1">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input disabled class="form-check-input" type="radio" name="penghantaranFizikal" id="penghantaranFizikal2">
                                                    <label class="form-check-label" for="penghantaranFizikal2">
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
                    <div class="row mt-4 justify-content-center">
                        <div class="col-12">
                            <h4 class="card-title card-title-grey">KOD BIDANG</h4>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-11">
                            <div class="row">
                                <div class="col-2 text-end">
                                    <b>Kod Bidang MOF</b>
                                </div>
                                <div class="col-2">
                                    <select disabled class="form-control" name="" >
                                        <option value="">Atau</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <input disabled class="form-control" type="text" name="" value="(340601) PERKHIDMATAN PERUNDING BUKAN FIZIKAL > INFORMASI DAN TEKNOLOGI MAKLUMAT (ICT) > KAJIAN TELEKOMUNIKASI">
                                </div>
                            </div>

                            <hr>
                            
                            <div class="row my-2">
                                <div class="col-3"></div>
                                <div class="col-8">
                                    <select disabled name=""  class="form-control">
                                        <option value="">Dan</option>
                                    </select>
                                </div>
                            </div>

                            <hr>
                            
                            <div class="row my-2">
                                <div class="col-1"></div>
                                <div class="col-2 text-end"><b>Gred CIDB</b></div>
                                <div class="col-8">
                                    <select disabled class="form-control" name="" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-2 text-end">
                                    <b>Bidang Pengkhususan CIDB</b>
                                </div>
                                <div class="col-2">
                                    <select disabled class="form-control" name="" >
                                        <option value="">Atau</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <input disabled class="form-control" type="text" name="" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="left"></div>
                            <div class="right">
                                <a href="#" class="btn-md-sm btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#kuiriTender">Kuiri</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    
    <div class="modal fade" id="kuiriTender" tabindex="-1" aria-labelledby="kuiriTenderLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="card-title card-title-grey mb-3" id="kuiriTenderLabel">CATATAN</h5>
                    <div class="row d-flex justify-content-center my-2">
                        <div class="col-10">
                            <textarea name="" id="" class="form-control" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-success m-1">OK</button>
                            <button class="btn btn-danger m-1">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection