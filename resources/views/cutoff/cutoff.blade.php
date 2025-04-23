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
                    <div class="row mt-4 justify-content-center">
                        <div class="col-12">
                            <h4 class="card-title card-title-grey">PENENTUAN HARGA CUT OFF</h4>
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col-7 d-flex justify-content-center">
                            <div class="row">
                                <div class="col-12">
                                    <b>Tender Prices Distribution Curve</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <b>*Graph Here*</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <b>Price Classification: % of Mean</b>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th class="text-center" colspan="2">Frequency Distribution</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center w-50">Bin</th>
                                        <th class="text-center w-50">Frequency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Less</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>-90%</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>-70%</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>-50%</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>-30%</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>-10%</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>10%</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>30%</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>50%</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>70%</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>90%</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>More</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="row my-2">
                        <div class="col-6">
                            <table class="table table-bordered" >
                                <tbody>
                                    <tr>
                                        <td>Anggaran Jambatan, (AJ)</td>
                                        <td>$ 892,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>PC & Prov. Sums (PCP)</td>
                                        <td>$ -</td>
                                    </tr>
                                    <tr>
                                        <td>Builder's Work in AJ (Bwaj)</td>
                                        <td>$ 892,000.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <div class="card-title px-3">
                                Penentuan dan Pengasingan Harga "Freak"
                            </div>
                            <hr>
                            <div class="card-body">
                                Sesuatu harga tender dianggap "freak" dan secara automatik tidak diambil kira sekiranya tahap 'significance'nya (Alfa) kurang daripada 0.01, iaitu Z-score nya melebihi +2.33 atau kurang dari -2.33.
                            </div>
                        </div>
                    </div>
                    
                    <div class="row my-2">
                        <div class="col-6">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th class="text-center w-50">Statistical Attribute</th>
                                        <th class="text-center w-50">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>No. of Tender Analysed (NT)</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>Mean of BW (Mean)</td>
                                        <td>$ 826,077.78</td>
                                    </tr>
                                    <tr>
                                        <td>Overall Mean</td>
                                        <td>$ 826,077.78</td>
                                    </tr>
                                    <tr>
                                        <td>Standard Deviation (SD)</td>
                                        <td>$ 117,505.36</td>
                                    </tr>
                                    <tr>
                                        <td>Coefficient of Variation (CV)</td>
                                        <td>0.1422</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th class="text-center" colspan="2">Penentuan Harga Cutoff</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bilangan Tender melebihi 10 iaitu Nt > 10</td>
                                        <td class="text-center" style="vertical-align: middle;">OK</td>
                                    </tr>
                                    <tr>
                                        <td>Nilai 'Cut-off' :<br> Mean -X% Mean<br>or Mean - Stdev<br>(yang mana lebih tinggi)</td>
                                        <td class="text-center" style="vertical-align: middle;">$ 685,644.56<br>$ 708,572.41</td>
                                    </tr>
                                    <tr>
                                        <td>Cut-off Bagi 'Builder's Works sahaja (tanpa PCP)<br>Cut-off Bagi Tender (termasuk PCP)</td>
                                        <td class="text-center" style="vertical-align: middle;">$ 685,644.56<br>$ 708,572.41</td>
                                    </tr>
                                    <tr>
                                        <td>Haraa CUT-OFF (rounded down) YANG DITETAPKAN</td>
                                        <td class="text-center" style="vertical-align: middle;">$ 708,000.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="vertical-align: middle;">Bil</th>
                                        <th class="text-center" style="vertical-align: middle;">RUJ.<br>TEN.</th>
                                        <th class="text-center" style="vertical-align: middle;">TEND. PRICE @</th>
                                        <th class="text-center" style="vertical-align: middle;">BW of Tender</th>
                                        <th class="text-center" style="vertical-align: middle;">Z-score</th>
                                        <th class="text-center" style="vertical-align: middle;">%BWAJ</th>
                                        <th class="text-center" style="vertical-align: middle;">%BWAM</th>
                                        <th class="text-center" style="vertical-align: middle;">Pilih <input type="checkbox" name="" id="" class="form-check-input"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>AJ</td>
                                        <td>$ 892,000.00</td>
                                        <td>$ 892,000.00</td>
                                        <td>0.56</td>
                                        <td>0.00%</td>
                                        <td>7.98%</td>
                                        <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1/16</td>
                                        <td>$ 970,000.00</td>
                                        <td>$ 970,000.00</td>
                                        <td>1.22</td>
                                        <td>8.74%</td>
                                        <td>17.42%</td>
                                        <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2/16</td>
                                        <td>$ 870,000.00</td>
                                        <td>$ 870,000.00</td>
                                        <td>0.37</td>
                                        <td>-2.47%</td>
                                        <td>5.32%</td>
                                        <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>3/16</td>
                                        <td>$ 710,000.00</td>
                                        <td>$ 710,000.00</td>
                                        <td>-0.99</td>
                                        <td>-20.40%</td>
                                        <td>-14.05%</td>
                                        <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>4/16</td>
                                        <td>$ 7,399,000.00</td>
                                        <td>FREAK</td>
                                        <td>55.94</td>
                                        <td>729.48%</td>
                                        <td></td>
                                        <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5/16</td>
                                        <td>$ 300,010.00</td>
                                        <td>FREAK</td>
                                        <td>-4.48</td>
                                        <td>-66.37%</td>
                                        <td></td>
                                        <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>6/16</td>
                                        <td>$ 1,001,000.00</td>
                                        <td>$ 1,001,000.00</td>
                                        <td>1.49</td>
                                        <td>12.22%</td>
                                        <td>21.18%</td>
                                        <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>7/16</td>
                                        <td>$ 790,000.00</td>
                                        <td>$ 790,000.00</td>
                                        <td>-0.31</td>
                                        <td>-11.43%</td>
                                        <td>-4.37%</td>
                                        <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>8/16</td>
                                        <td>$ 810,900.00</td>
                                        <td>$ 810,900.00</td>
                                        <td>-0.13</td>
                                        <td>-9.09%</td>
                                        <td>-1.84%</td>
                                        <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="row my-2">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="left"></div>
                            <div class="right">
                                <button class="btn btn-success mx-1">Laporan</button>
                                <button class="btn btn-success mx-1">Simpan</button>
                                <button class="btn btn-primary mx-1">Hantar</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
