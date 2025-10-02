@extends('layouts.master')

@section('title', 'Lembaran Imbangan')

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

    <div class="section-header">BORANG 3 - LEMBARAN IMBANGAN</div>
    <div class="container-fluid mt-4">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th colspan="8">ANALISA KECUKUPAN MODAL</th>
                </tr>
                <tr class="text-center">
                    <th colspan="6">MAKLUMAT DARI LEMBARAN IMBANGAN (BALANCE SHEET)</th>
                    <th colspan="2">BORANG CA / SURAT BANK</th>
                </tr>
                <tr class="text-center">
                    <th rowspan="2">Ruj. Petender</th>
                    <th>Aset</th>
                    <th>Aset</th>
                    <th>Liabiliti</th>
                    <th>Long Term /</th>
                    <th>Wang Tunai</th>
                    <th rowspan="2">Baki Kemudahan Kredir</th>
                    <th rowspan="2">Pinjaman Bank Yang Akan Diluluskan</th>
                </tr>
                <tr class="text-center">
                    <th>Tetap</th>
                    <th>Semasa</th>
                    <th>Semasa</th>
                    <th>Liabiliti Tetap</th>
                    <th>Dalam Tangan</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>1</td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>

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