@extends('layouts.master')

@section('title', 'Sebut Harga Pembelian Terus')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        .breadcrumb-path {
            background-color: #e6e6e6;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .header-info {
            background-color: #e6e6e6;
            padding: 10px 15px;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .header-info b {
            font-weight: 700;
        }

        .header-info span.red-text {
            color: #c40000;
        }

        .table thead th {
            background-color: #3e5a9a;
            color: white;
            font-weight: 600;
        }

        .section-header {
            background-color: #d6d6d6;
            font-weight: bold;
            padding: 10px;
        }
    </style>
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

            /* CSS */
            .upload-zone {
                position: relative;
                border: 2px dashed #ced4da;
                border-radius: 0.25rem;
                padding: 2rem;
                text-align: center;
                background-color: #f8f9fa;
            }

            .upload-zone i {
                font-size: 2rem;
                color: #6c757d;
            }

            .upload-zone p {
                margin: 0.5rem 0 0;
                color: #6c757d;
            }

            .upload-zone input[type="file"] {
                /* Make the real input fill the container, but invisible */
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0;
                cursor: pointer;
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
                                        <h4 class="card-title card-title-grey">PAPARAN PROJEK UNTUK PEMBELIAN TERUS</h4>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-11">
                                        <div class="row">
                                            <div id="ciptaTenderForm">

                                                <!-- Kategori Jenis Perolehan -->
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
                                <div class="row mt-4 justify-content-center">
                                    <div class="col-12">
                                        <h4 class="card-title card-title-grey">PAPARAN PROJEK UNTUK PEMBELIAN TERUS</h4>
                                    </div>
                                </div>

                                <div class="col-md-12 my-2">
                                    <div class="row">
                                        <div class="col-md-2 d-flex justify-content-end">
                                            <label for="">Kod Bidang MOF</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control">
                                        </div>

                                        <div class="col-md-7">
                                            <input class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 my-2">
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-9">
                                            <select name="your_select_name" id="your_select_id" class="form-control">
                                                <option value="">-- Sila Pilih --</option>
                                                <option value="option1">Dan</option>
                                                <option value="option2">Atau</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 my-2">
                                    <div class="row">
                                        <div class="col-md-2 d-flex justify-content-end">
                                            <label for="">Gred CIDB</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input class="form-control">
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
                                                            <button class="btn btn-success" data-bs-toggle="modal"
                                                                data-bs-target="#modalPaparSpesifikasi">
                                                                Papar
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="text-end mt-3">
                                            <button class="btn btn-success">
                                                Simpan
                                            </button>
                                            <button class="btn btn-primary">
                                                Simpan
                                            </button>
                                        </div>

                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="modalPaparSpesifikasi" tabindex="-1"
                                    aria-labelledby="modalPaparSpesifikasiLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">

                                            <!-- header -->
                                            <div class="modal-header bg-light">
                                                <h5 class="modal-title" id="modalPaparSpesifikasiLabel">Butiran Item</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Tutup"></button>
                                            </div>

                                            <!-- body -->
                                            <div class="modal-body">
                                                <form>
                                                    <!-- Nama Item -->
                                                    <div class="mb-3 row align-items-center">
                                                        <label for="namaItem" class="col-sm-4 col-form-label">Nama Item</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="namaItem" class="form-control"
                                                                value="MONITOR" disabled>
                                                        </div>
                                                    </div>

                                                    <!-- Kuantiti -->
                                                    <div class="mb-3 row align-items-center">
                                                        <label for="kuantiti" class="col-sm-4 col-form-label">Kuantiti</label>
                                                        <div class="col-sm-2">
                                                            <input type="number" id="kuantiti" class="form-control" value="10"
                                                                disabled>
                                                        </div>
                                                    </div>

                                                    <!-- Brand -->
                                                    <div class="mb-3 row align-items-center">
                                                        <label for="brand" class="col-sm-4 col-form-label">Brand <span
                                                                class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="brand" class="form-control"
                                                                placeholder="Contoh: Acer">
                                                        </div>
                                                    </div>

                                                    <!-- Harga Seunit -->
                                                    <div class="mb-3 row align-items-center">
                                                        <label for="hargaSeunit" class="col-sm-4 col-form-label">
                                                            Harga Seunit (RM) <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="hargaSeunit" class="form-control"
                                                                placeholder="Contoh: 10,000.00">
                                                        </div>
                                                    </div>

                                                    <!-- Harga Keseluruhan -->
                                                    <div class="mb-3 row align-items-center">
                                                        <label for="hargaKeseluruhan" class="col-sm-4 col-form-label">
                                                            Harga Keseluruhan (RM) <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="hargaKeseluruhan" class="form-control"
                                                                placeholder="Contoh: 100,000.00">
                                                        </div>
                                                    </div>

                                                    <!-- Harga termasuk SST -->
                                                    <div class="mb-4 row align-items-center">
                                                        <label for="hargaTermasukSST" class="col-sm-4 col-form-label">Harga
                                                            termasuk SST</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" id="hargaTermasukSST" class="form-control"
                                                                value="100,008.00" disabled>
                                                        </div>
                                                    </div>

                                                    <hr>

                                                    <!-- Muat Naik Dokumen Sokongan -->
                                                    <h6 class="mb-2">Muat Naik Dokumen Sokongan</h6>
                                                    <p class="text-muted small">Sila Muat Naik Dokumen Sokongan di ruang bawah.
                                                    </p>
                                                    <div class="upload-zone">
                                                        <i class="bi bi-cloud-upload"></i>
                                                        <p>Muat Naik Dokumen</p>
                                                        <input type="file" multiple>
                                                    </div>
                                                </form>
                                            </div>

                                            <!-- footer -->
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
                                <div class="row mt-3 justify-content-center">
                                    <div class="col-11">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-center align-middle mt-2">
                                                <thead class="table-primary text-white">
                                                    <tr>
                                                        <th style="width: 5%;">Bil.</th>
                                                        <th style="width: 45%;">Item</th>
                                                        <th style="width: 20%;">Kuantiti</th>
                                                        <th style="width: 20%;">Harga Keseluruhan (RM)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- contoh baris item -->
                                                    <tr>
                                                        <td>1</td>
                                                        <td class="text-start">Contoh Item</td>
                                                        <td>1</td>
                                                        <td>100.00</td>
                                                    </tr>
                                                    <!-- … baris‑baris item lain … -->

                                                    <!-- ringkasan: total keseluruhan semua item -->
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td class="text-end"><strong>Harga Keseluruhan bagi semua Item</strong>
                                                        </td>
                                                        <td>380,000.00</td>
                                                    </tr>
                                                    <!-- ringkasan: total termasuk SST -->
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td class="text-end"><strong>Harga Termasuk SST bagi semua Item</strong>
                                                        </td>
                                                        <td>410,400.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="text-end mt-3">
                                            <!-- placeholder for uploaded quotation name -->
                                            <span id="uploadedQuotation" class="me-2"
                                                style="min-width: 150px; display: inline-block; color: #495057;">
                                                <!-- e.g. “quotation.pdf” -->
                                            </span>

                                            <!-- actual upload trigger -->
                                            <button type="button" class="btn btn-success" id="uploadQuotationBtn">
                                                Muat Naik Quotation
                                            </button>
                                        </div>

                                        <div class="text-end mt-3">
                                        
                                            <button type="button" class="btn btn-primary">
                                                Selesai
                                            </button>
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



@endsection