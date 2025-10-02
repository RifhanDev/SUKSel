@extends('layouts.master')

@section('title', 'Akaun Bank')

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
@endsection

@section('content')

    <div class="section-header">AKAUN BANK</div>
    <div class="container-fluid mt-4">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th colspan="11">MAKLUMAT BAKI AKAUN BANK BAGI 3 BULAN LEPAS</th>
                </tr>
                <tr class="text-center">
                    <th>Ruj. Petender</th>
                    <th>Bulan</th>
                    <th>Akaun 1</th>
                    <th>Bank</th>
                    <th>Akaun 2</th>
                    <th>Bank</th>
                    <th>Akaun 3</th>
                    <th>Bank</th>
                    <th>Akaun 4</th>
                    <th>Bank</th>
                    <th>Jumlah Besar</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>45/53</td>
                    <td>Aug 2024 <br> Sep 2024 <br> Oct 2024</td>
                    <td>157,694.95 <br> 181,807.61 <br> 252,434.87</td>
                    <td>RHB BANK</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>   

                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>

        <div class="form-check mt-3">
            <input class="form-check-input" type="checkbox" id="confirmationCheckbox">
            <label class="form-check-label" for="confirmationCheckbox">
                Saya mengesahkan petender diatas layak untuk penilaian peringkat seterusnya.
            </label>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <button class="btn btn-success m-1">Simpan</button>
            </div>
        </div>
    </div>

@endsection