@extends('layouts.master')

@section('title', 'Penilaian Kewangan')

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

    <div class="section-header">BORANG 3 - ANALISA KECUKUPAN MODAL</div>
    <div class="container-fluid mt-4">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th rowspan="4">Ruj. Petender (a)</th>
                    <th colspan="6">ANALISA KECUKUPAN MODAL</th>
                    <th colspan="4">MODAL MINIMUM DIPERLUKAN (3% Dari Nilai Kerja Pembina)</th>
                </tr>
                <tr class="text-center">
                    <th colspan="3">Lembaran Imbangan</th>
                    <th colspan="2">Penyata Bulanan Bank</th>
                    <th rowspan="2">Wang Dalam Tangan Semasa</th>
                    <th>Borang CA2</th>
                    <th>Aset Cair</th>
                    <th>Borang CA1</th>
                    <th>Jumlah Modal</th>
                </tr>
                <tr class="text-center">
                    <th>Asset</th>
                    <th>Liabiliti</th>
                    <th>Modal</th>
                    <th>Baki bagi</th>
                    <th>Purata Baki</th>
                    <th rowspan="2">Deposit Tetap / Saham-saham (h)</th>
                    <th rowspan="2">(d) atau (g) + (h) yang mana lebih tinggi (i)</th>
                    <th rowspan="2">Baki Dari Kemudahan Kredit (j)</th>
                    <th rowspan="2">Mudah Cair yang boleh digunakan (m) = (i) + (j)</th>
                </tr>
                <tr class="text-center">
                    <th>Semasa (b)</th>
                    <th>Semasa (c)</th>
                    <th>Pusingan (d) = (b) - (c)</th>
                    <th>3 Bulan Lepas (e)</th>
                    <th>3 Bulan Lepas (f) = (e) / 3</th>
                    <th>(Nilai Positif f) (g)</th>
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