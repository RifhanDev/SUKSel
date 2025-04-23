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
                            <h4 class="card-title card-title-grey">TEMPLAT</h4>
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
                                        <th class="text-center"><input type="checkbox" name="" id="" class="form-check-input"></th>
                                        <th class="text-center">Jenis Kelulusan</th>
                                        <th class="text-center">Status <span class="text-danger">*</span></th>
                                        <th class="text-center">Dokumen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><input type="checkbox" name="" id="" class="form-check-input"></td>
                                        <td class="">Kelulusan Berbelanja</td>
                                        <td class="text-center">
                                            <select name="" id="" class="form-control">
                                                <option value="">Diluluskan</option>
                                            </select>
                                        </td>
                                        <td class="text-center"><button class="btn btn-success">Muat Naik</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label for="" class="">Jumlah Skor <span class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-2">
                            <input type="number" name="" id="" value="121" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="left"></div>
                            <div class="right">
                                <button class="btn btn-success mx-1">Tambah</button>
                                <button class="btn btn-danger mx-1">Hapus</button>
                                <a href="#" class="btn-md-sm btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#senaraiSemakStandard">Senarai Semak Standard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="senaraiSemakStandard" tabindex="-1" aria-labelledby="senaraiSemakStandardLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="senaraiSemakStandardLabel">Senarai Semak Standard</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-10">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" name="" id="" class="form-check-input"></th>
                                        <th>Tajuk / Dokumen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                                        <td>Pengalaman Syarikat Dengan Kerajaan Persekutuan (Bilangan Kontrak yang pernah diikat)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
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
