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
                            <h4 class="card-title card-title-grey">SENARAI CADANGAN PEMBEKAL</h4>
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col-3 text-end">Pemilihan Berdasarkan <span class="text-danger">*</span></div>
                        <div class="col-2"><input type="text" name="" value="Item"  class="form-control"></div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3 text-end">Kaedah Memuktamadkan Pembekal <span class="text-danger">*</span></div>
                        <div class="col-2"><input type="text" name="" value="Pemilihan Terus"  class="form-control"></div>
                    </div>

                    <div class="row my-2">
                        <div class="col-12">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 60%">Pembekal</th>
                                        <th class="text-center">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>OPHL HOLDING SDN. BHD.</td>
                                        <td class="text-center">
                                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#sediaSuratSetujuTerima">Sedia Surat Setuju Terima</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col-12">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th class="text-center">No. LOI/LOA</th>
                                        <th class="text-center">Jenis</th>
                                        <th class="text-center">Item</th>
                                        <th class="text-center">Status <span class="text-danger">*</span></th>
                                        <th class="text-center">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>OPHL HOLDING SDN. BHD.</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="left"></div>
                            <div class="right">
                                <button class="btn btn-success mx-1">Simpan</button>
                                <button class="btn btn-primary mx-1">Hantar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="sediaSuratSetujuTerima" tabindex="-1" aria-labelledby="sediaSuratSetujuTerimaLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sediaSuratSetujuTerimaLabel">Senarai Semak Standard</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- SENARAI CADANGAN PEMBEKAL -->
                        <div class="row mt-4 justify-content-center">
                            <div class="col-12">
                                <h4 class="card-title card-title-grey">SENARAI CADANGAN PEMBEKAL</h4>
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-md-3 d-flex justify-content-end">
                                <label for="" class="">Pembekal</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" value="OPHL HOLDING SDN BHD" name=""  class="form-control">
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-md-3 d-flex justify-content-end">
                                <label for="" class="">No. MOF</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" value="357-02070106" name=""  class="form-control">
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-md-3 d-flex justify-content-end">
                                <label for="" class="">No Pendaftaran CBP</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" value="T/B" name=""  class="form-control">
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-md-3 d-flex justify-content-end">
                                <label for="" class="">Tarikh Kuatkuasa Pendatftaran CBP</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" value="T/B" name=""  class="form-control">
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-md-3 d-flex justify-content-end">
                                <label for="" class="">Tarikh Pengishtiharaan di EP</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" value="T/B" name=""  class="form-control">
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-md-3 d-flex justify-content-end">
                                <label for="" class="">Cawangan <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-3">
                                <select name=""  class="form-control">
                                    <option value="">HQ</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-md-3 d-flex justify-content-end">
                                <label for="" class="">Alamat</label>
                            </div>
                            <div class="col-md-3">
                                <textarea name=""  rows="4" class="form-control">TAMAN KAJANG SENTRAL, SELANGOR<br>DARUL EHSAN, ULU LANGAT,<br>SELANGOR</textarea>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <label for="" class="">No Telefon</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" value="03-9876543" name=""  class="form-control">
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <label for="" class="">No Faks</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" value="03-9876543" name=""  class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <label for="" class="">No Telefon Bimbit</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" value="" name=""  class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-md-3 d-flex justify-content-end">
                                <label for="" class="">Pegawai untuk dihubungi</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" value="RAHMAN BIN ABDUL RAHIM" name=""  class="form-control">
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <label for="" class="">Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" value="trainingserver@mail.com" name=""  class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- SENARAI CADANGAN PEMBEKAL -->
                    

                    <!-- MAKLUMAT SURAT SETUJU TERIMA -->
                        <div class="row mt-4 justify-content-center">
                            <div class="col-12">
                                <h4 class="card-title card-title-grey">MAKLUMAT SURAT SETUJU TERIMA</h4>
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-3 text-end">No Dokumen</div>
                            <div class="col-2"><input type="text" name="" value="QT21000000000023741"  class="form-control"></div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-3 text-end">Tajuk Surat Setuju Terima</div>
                            <div class="col-2">
                                <textarea name=""  class="form-control">TENDER PERKHIDMATAN PENILAIAN FORENSIK KEATAS SISTEM XXXX</textarea>
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-3 text-end">Kaedah Perolehan</div>
                            <div class="col-3">
                                <input type="text" name="" value="Tender"  class="form-control">
                            </div>
                            <div class="col-3 text-end">Jenis Sebut Harga / Tender</div>
                            <div class="col-3">
                                <input type="text" name="" value="Terbuka"  class="form-control">
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-3 text-end">Kaedah Jenis Perolehan</div>
                            <div class="col-3">
                                <input type="text" name="" value="Perkhidmatan"  class="form-control">
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-3 text-end">No. Rujukan Fail</div>
                            <div class="col-2">
                                <input type="text" name="" value="SF/DH/TRG"  class="form-control">
                            </div>
                            <div class="col-1">
                                <input type="number" name="" value="012"  class="form-control">
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-3 text-end">Harga Cawangan Tawaran (RM)</div>
                            <div class="col-3">
                                <input type="text" name="" value="360,000.00"  class="form-control">
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-3 text-end">Cukai Jualan/Cukai Perkhidmatan (RM)</div>
                            <div class="col-3">
                                <input type="text" name="" value=""  class="form-control">
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-3 text-end">Amaun Keseluruhan Kontrak (RM)</div>
                            <div class="col-3">
                                <input type="text" name="" value="360,000.00"  class="form-control">
                            </div>
                        </div>
                        
                        <div class="row my-2">
                            <div class="col-md-3 d-flex justify-content-end">
                                <label for="" class="">Insurans / Jaminan</label>
                            </div>
                            <div class="col-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="insuransJaminan" id="insuransJaminan1" checked>
                                    <label class="form-check-label" for="insuransJaminan1">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="insuransJaminan" id="insuransJaminan2">
                                    <label class="form-check-label" for="insuransJaminan2">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-end">
                                <label for="" class="">Bon Pelaksanaan <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="bonPelaksanaan" id="bonPelaksanaan1" checked>
                                    <label class="form-check-label" for="bonPelaksanaan1">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="bonPelaksanaan" id="bonPelaksanaan2">
                                    <label class="form-check-label" for="bonPelaksanaan2">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                        </div>
                    <!-- MAKLUMAT SURAT SETUJU TERIMA -->

                    <!-- PERINCIAN KONTRAK -->
                        <div class="row mt-4 justify-content-center">
                                <div class="col-12">
                                    <h4 class="card-title card-title-grey">PERINCIAN KONTRAK</h4>
                                </div>
                            </div>
                            
                            <div class="row my-2">
                                <div class="col-3 text-end">Jenis Kontrak</div>
                                <div class="col-3">
                                    <input type="text" name="" value="Kementerian"  class="form-control">
                                </div>
                            </div>
                            
                            <div class="row my-2">
                                <div class="col-3 text-end">Agensi</div>
                                <div class="col-3">
                                    <textarea name=""  class="form-control" rows="4">BAHAGIAN PENTADBIRAN CAWANGAN KEWANGAN KEMENTERIAN KWANGAN</textarea>
                                </div>
                            </div>
                            
                            <div class="row my-2">
                                <div class="col-3 text-end">Pentadbir Kontrak</div>
                                <div class="col-3">
                                    <select name=""  class="form-control">
                                        <option value="">Petadbir Kontrak Kementerian Ptj248</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row my-2">
                                <div class="col-3 text-end">Tempoh Kontrak (Bulan)</div>
                                <div class="col-3">
                                    <input type="number" name="" value="12"  class="form-control">
                                </div>
                            </div>
                            
                            <div class="row my-2">
                                <div class="col-3 text-end">Tarikh Kuatkuasa Kontrak</div>
                                <div class="col-3">
                                    <input type="text" name="" value="01/11/2021"  class="form-control">
                                </div>
                                <div class="col-3 text-end">Tarikh Tamat Kontrak</div>
                                <div class="col-3">
                                    <input type="text" name="" value="31/10/2022"  class="form-control">
                                </div>
                            </div>
                            
                            <div class="row my-2">
                                <div class="col-3 text-end">Perjanjian Diperlukan <span class="text-danger">*</span></div>
                                <div class="col-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="insuransJaminan" id="insuransJaminan1" checked>
                                        <label class="form-check-label" for="insuransJaminan1">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="insuransJaminan" id="insuransJaminan2">
                                        <label class="form-check-label" for="insuransJaminan2">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- PERINCIAN KONTRAK -->

                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-success my-3">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-success btn-submit"></button>

@endsection
