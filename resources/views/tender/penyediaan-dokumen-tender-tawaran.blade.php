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
       
        .square {
            height: 50px;
            border: 1px solid #aaa;
            padding: 5px;
            margin: 5px;
            position: relative;
        }
        .nice-diagonal:after {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: linear-gradient(to top right, transparent calc(50% - 1px), black, transparent calc(50% + 1px));
        }
        .hanging-indent {
            padding-left: 1em;
            text-indent: -1em;
        }
        .second-hanging-indent {
            padding-left: 3em;
            text-indent: -1em;
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
                            <h4 class="card-title card-title-grey">SENARAI DOKUMEN TENDER</h4>
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
                                        <th class="text-center">Bil</th>
                                        <th class="text-center">Nama Dokumen</th>
                                        <th class="text-center">Muat Naik <span class="text-danger">*</span></th>
                                        <th class="text-center">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <input type="text" name="" id="" value="Surat Akuan Pembida" class="form-control mb-1">
                                            <span class="card-title-desc"><input type="checkbox" name="" id="" class="form-check-input me-2">Dokumen Meja Terkawal</span>
                                        </td>
                                        <td class="text-center"><button class="btn btn-success"><i class='bx bxs-cloud-upload h3 mb-0'></i></button></td>
                                        <td class="text-center"><button class="btn btn-danger">Hapus</button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <input type="text" name="" id="" value="Surat Perwakilan Kuasa" class="form-control mb-1">
                                            <span class="card-title-desc"><input type="checkbox" name="" id="" class="form-check-input me-2">Dokumen Meja Terkawal</span>
                                        </td>
                                        <td class="text-center"><button class="btn btn-success"><i class='bx bxs-cloud-upload h3 mb-0'></i></button></td>
                                        <td class="text-center"><button class="btn btn-danger">Hapus</button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <input type="text" name="" id="" value="Surat Setuju Terima" class="form-control mb-1">
                                            <span class="card-title-desc"><input type="checkbox" name="" id="" class="form-check-input me-2">Dokumen Meja Terkawal</span>
                                        </td>
                                        <td class="text-center"><button class="btn btn-success"><i class='bx bxs-cloud-upload h3 mb-0'></i></button></td>
                                        <td class="text-center"><button class="btn btn-danger">Hapus</button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <input type="text" name="" id="" value="Surat Akuan Pembida Berjaya (Lampiran B)" class="form-control mb-1">
                                            <span class="card-title-desc"><input type="checkbox" name="" id="" class="form-check-input me-2">Dokumen Meja Terkawal</span>
                                        </td>
                                        <td class="text-center"><button class="btn btn-success"><i class='bx bxs-cloud-upload h3 mb-0'></i></button></td>
                                        <td class="text-center"><button class="btn btn-danger">Hapus</button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <input type="text" name="" id="" value="Surat Akuan Sumpah Syarikat (Lampiran C)" class="form-control mb-1">
                                            <span class="card-title-desc"><input type="checkbox" name="" id="" class="form-check-input me-2">Dokumen Meja Terkawal</span>
                                        </td>
                                        <td class="text-center"><button class="btn btn-success"><i class='bx bxs-cloud-upload h3 mb-0'></i></button></td>
                                        <td class="text-center"><button class="btn btn-danger">Hapus</button></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"><button class="btn btn-success">+ Tambah Dokumen</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row mt-4 justify-content-center">
                        <div class="col-12">
                            <h4 class="card-title card-title-grey">BORANG / DOKUMEN TENDER ATAS TALIAN</h4>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12">
                            <p class="card-title-desc text-primary fst-italic">
                                Borang yang perlu diisi oleh Petender
                            </p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label for="" class="">Borang atas talian:</label>
                        </div>
                        <div class="col-md-4">
                            <a href="#"><u>Maklumat Profil Petender</u></a><br>
                            <a href="#"><u>Butiran Kontrak</u></a>
                        </div>
                        <div class="col-md-2 d-flex justify-content-end">
                            <label for="" class="">Dokumen:</label>
                        </div>
                        <div class="col-md-4">
                            <a href="#"><u>Notis Tender</u></a><br>
                            <a href="#"><u>Arahan Kepada Petender</u></a>
                            <a href="#"><u>Syarat-syarat Tender</u></a>
                        </div>
                    </div>
                    
                    <div class="row mt-4 justify-content-center">
                        <div class="col-12">
                            <h4 class="card-title card-title-grey">SENARAI SEMAK</h4>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12">
                            <p class="card-title-desc text-primary fst-italic">
                                Senaraikan Dokumen - Dokumen yang perlu disemak oleh Petender
                            </p>
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
                                        <th>Bil</th>
                                        <th>Dokumen Harga</th>
                                        <th>Muat Turun</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td><input type="text" value="Salinan Sijil Pendaftaran dengan Kementeraian Kewangan" name="" id="" class="form-control"></td>
                                        <td class="text-center"><a href="#"><u>Muat Turun</u></a></td>
                                        <td class="text-center"><span class="badge-soft-success me-1 badge">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td><input type="text" value="Salinan Sijil Akuan Syarikat Bumiputera dengan Kementeraian Kewangan" name="" id="" class="form-control"></td>
                                        <td class="text-center"><a href="#"><u>Muat Turun</u></a></td>
                                        <td class="text-center"><span class="badge-soft-success me-1 badge">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td><input type="text" value="Salinan Sijil Suruhanjaya Syarikat Malaysia (SSM)" name="" id="" class="form-control"></td>
                                        <td class="text-center"><a href="#"><u>Muat Turun</u></a></td>
                                        <td class="text-center"><span class="badge-soft-success me-1 badge">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td><input type="text" value="Salinan Surat Pendaftaran Cukai Jualan Dan Cukai Perkhidmatan (CJCP)" name="" id="" class="form-control"></td>
                                        <td class="text-center"><a href="#"><u>Muat Turun</u></a></td>
                                        <td class="text-center"><span class="badge-soft-success me-1 badge">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td><input type="text" value="Surat Perwakilan Kuasa dan Ditandatangani" name="" id="" class="form-control"></td>
                                        <td class="text-center"><a href="#"><u>Muat Turun</u></a></td>
                                        <td class="text-center"><span class="badge-soft-success me-1 badge">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td><input type="text" value="Surat Akuan Pembida dan Ditandatangani" name="" id="" class="form-control"></td>
                                        <td class="text-center"><a href="#"><u>Muat Turun</u></a></td>
                                        <td class="text-center"><span class="badge-soft-success me-1 badge">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td><input type="text" value="Penyata Bank Terkini (3 Bulan Terakhir) Syarikat" name="" id="" class="form-control"></td>
                                        <td class="text-center"><a href="#"><u>Muat Turun</u></a></td>
                                        <td class="text-center"><span class="badge-soft-success me-1 badge">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">8</td>
                                        <td><input type="text" value="Penyata Kewangan (2 Tahun) Syarikat yang telah diaudit" name="" id="" class="form-control"></td>
                                        <td class="text-center"><a href="#"><u>Muat Turun</u></a></td>
                                        <td class="text-center"><span class="badge-soft-success me-1 badge">Selesai</span></td>
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
                                        <th>Bil</th>
                                        <th>Dokumen Teknikal</th>
                                        <th>Muat Turun</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td><input type="text" value="Surat Pengesahan Prinsipal yang lengkap ditandatangani" name="" id="" class="form-control"></td>
                                        <td class="text-center"><a href="#"><u>Muat Turun</u></a></td>
                                        <td class="text-center"><span class="badge-soft-success me-1 badge">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td><input type="text" value="Senarai Kakitangan Teknikal dan Carta Organisasi Pasukan Projek" name="" id="" class="form-control"></td>
                                        <td class="text-center"><a href="#"><u>Muat Turun</u></a></td>
                                        <td class="text-center"><span class="badge-soft-success me-1 badge">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td><input type="text" value="Salinan Reseume dan Sijil Teknikal Kakitangan Syarikat" name="" id="" class="form-control"></td>
                                        <td class="text-center"><a href="#"><u>Muat Turun</u></a></td>
                                        <td class="text-center"><span class="badge-soft-success me-1 badge">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td><input type="text" value="Cadangan Carta Perbatuan Projek (Gantt Chart) bagi tempoh 3 tahun Kontrak" name="" id="" class="form-control"></td>
                                        <td class="text-center"><a href="#"><u>Muat Turun</u></a></td>
                                        <td class="text-center"><span class="badge-soft-success me-1 badge">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td><input type="text" value="Cadangan pelan pelaksanaan projek" name="" id="" class="form-control"></td>
                                        <td class="text-center"><a href="#"><u>Muat Turun</u></a></td>
                                        <td class="text-center"><span class="badge-soft-success me-1 badge">Selesai</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="left"></div>
                            <div class="right">
                                <a href="#" class="btn-md-sm btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#maklumatProfilPetender">Hantar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    
    <div class="modal fade" id="maklumatProfilPetender" tabindex="-1" aria-labelledby="maklumatProfilPetenderLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mx-4">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p><h5><b>MAKLUMAT PROFIL PETENDER</b></h5></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <b>No. Tender Harga: QT2100000000023741</b>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <b>KOD PETENDER</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8"></div>
                        <div class="col-8"></div>
                        <div class="col-4 d-flex justify-content-end">
                            <div class="square nice-diagonal" style="width:50%"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 my-2">
                            <p>1. Borang ini hendaklah diisi dengan lengkap secara bertaip supaya memudahkan Lembaga Perolehan menimbangkan tender ini. Kegagalan petender melengkapkan borang ini dengan sempurna akan menjelaskan peluangnya di dalam tender ini.</p>
                            <p><b>2. Jangan gunakan atau merujuk kepada lampiran lain, kecuali diminta di ruangan berkenaan. Walau bagaimanapun, jika ruangan tidak mencukupi, borang ini boleh dicetak semula berdasarkan format asalnya.</b></p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" 
                                data-table-sort="id"
                                data-table-order="asc"
                                data-page="1">
                                <thead>
                                    <tr>
                                        <th>BIL</th>
                                        <th style="width: 30%;">PERKARA</th>
                                        <th colspan="2">BUTIRAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Nama Syarikat</td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Jenis Syarikat</td>
                                        <td colspan="2">Persendirian / Perkongsian / Koperasi / Sdn Bhd (*)</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Taraf Petender (Sertakan salianan sijil)</td>
                                        <td colspan="2">Bumiputra / Bukan Bumiputra (*)</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Alamat</td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Pegawai untuk Dihubungi</td>
                                        <td colspan="2">
                                            <p>Nama :</p>
                                            <p>No. Telefon :</p>
                                            <p>Email :</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Maklumat Pendaftaran Petender</td>
                                        <td colspan="2">
                                            <p>No. SSM :</p>
                                            <p>No. MOF :</p>
                                            <p>Tempoh Sah MOF :</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Bilangan Pekerja Sekarang</td>
                                        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp; Orang</td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>Bilangan Pekerja Teknikal (Cadangan bagi melaksanakan Kontrak, jika berjaya kelak)</td>
                                        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp; Orang</td>
                                    </tr>
                                    <tr>
                                        <td>9.</td>
                                        <td>Modal Berbayar</td>
                                        <td colspan="2">RM</td>
                                    </tr>
                                    <tr>
                                        <td>10.</td>
                                        <td>Modal Dibenarkan</td>
                                        <td colspan="2">RM</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="4">11.</td>
                                        <td>Kedudukan Kewangan Semasa <br>11.1 Harta (Aset) Syarikat (Senarai 5 aset yang terbesar)</td>
                                        <td colspan="2">
                                            <p><i>Contoh : 1. Rumah Kedai - 1 unit</i></p>
                                            <p>1.</p>
                                            <p>2.</p>
                                            <p>3.</p>
                                            <p>4.</p>
                                            <p>5.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11.2 Peralatan (Nyatakan nilai dan senaraikan 5 sahaja peralatan yang berkaitan dengan tender ini.)</td>
                                        <td colspan="2">
                                            <p><i>Contoh : Kereta Perdana V6 (2002) - RM40,000.00</i></p>
                                            <p>1.</p>
                                            <p>2.</p>
                                            <p>3.</p>
                                            <p>4.</p>
                                            <p>5.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11.3 Tanggungan / Liabilities</td>
                                        <td colspan="2">
                                            RM
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11.4 Baki wang dalam Bank</td>
                                        <td colspan="2">
                                            RM
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12.</td>
                                        <td colspan="3">Senarai Projek - Projek Terdahulu (dalam tempoh 2 tahun lalu)</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Nama Projek :</td>
                                        <td>Agensi :</td>
                                        <td>Nilai Projek (RM) :</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-danger m-1">Batal</button>
                            <button class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#butiranKontrak">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="butiranKontrak" tabindex="-1" aria-labelledby="butiranKontrakLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mx-4">
                    <div class="row text-center mb-5">
                        <div class="col-12">
                            <p><h5><b>BUTIRAN KONTRAK</b></h5></p>
                        </div>
                        <div class="col-12">
                            TENDER PERKHIDMATAN DIGITAL FORENSIK KE ATAS ALIRAN PROSES SISTEM XXXX
                        </div>
                        <div class="col-12">
                            <b>NO TENDER: QT2100000000023741</b>
                        </div>
                    </div>
                    
                    <div class="row my-2">
                        <div class="col-12 hanging-indent">
                            <b>1. <u>Pendaftaran Syarikat Dengan Suruhanjaya Syarikat Malaysia (SSM) Atau Pendaftaran Koperasi Dengan Suruhanjaya Koperasi Malaysia (SKM) (jika berkaitan)</u></b>
                        </div>
                        <div class="col-12 second-hanging-indent">
                            <div class="">i. No. Pendaftaran :</div>
                            <div class="">ii. Tempoh Sah Laku :</div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12 hanging-indent">
                            <b>2. <u>Pendaftaran Dengan Kementerian Kewangan (jika berdaftar)</u></b>
                        </div>
                        <div class="col-12 second-hanging-indent">
                            <div class="">i. No. Pendaftaran :</div>
                            <div class="">ii. Tempoh Sah Laku :</div>
                            <div class="">iii. Kod Bidang :</div>
                            <div class="">iv. Taraf Syarikat :</div>
                            <div class="">v. Tempoh Sah Laku Taraf Bumiputera :</div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12 hanging-indent">
                            3. Harga dan Tempoh Kontrak
                        </div>
                        <div class="col-12 second-hanging-indent">
                            <div class="">i. Harga *Sebut Harga/Tender (butiran harga seperti di Lampiran A1) : RM</div>
                            <div class="">ii. Fi Perkhidmatan ePerolehan (sekiranya berkaitan ) : *0.4% / 0.8%</div>
                            <div class="">iii. Harga Kontrak : RM</div>
                            <div class="">iv. Tempoh Kontrak :</div>
                            <div class="">v. Tarikh Mula Kontrak :</div>
                            <div class="">vi. Tarikh Tamat Kontrak :</div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12 hanging-indent">
                            4. Bon Pelaksanaan
                        </div>
                        <div class="col-12 second-hanging-indent">
                            <div class="">i. Kadar Bon Pelaksanaan :</div>
                            <div class="">ii. Formula Bon : Pelaksanaan :</div>
                            <div class="">iii. Nilai Bon : Pelaksanaan :</div>
                            <div class="">iv. Bentuk Bon Pelaksanaan : Jaminan Bank / Bank Islam / Bank Pembangunan Malaysia Berhad; atau Jaminan Syarikat Kewangan; atau Jaminan Insurans / Takaful.</div>
                            <div class="">v. Tempoh Sah Laku : Jaminan Bank / Bank Islam / Bank Pembangunan Malaysia Berhadl atau Jaminan Syarikat Kewangan; atau Jaminan Insurans / Takaful</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-danger m-1">Batal</button>
                            <button class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#saveSuccess">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="saveSuccess" tabindex="-1" aria-labelledby="saveSuccessLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body d-flex justify-content-center">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <p>Penyediaan Maklumat Tender telah berjaya dihantar</p>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#butiranKontrak">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection