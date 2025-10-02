@extends('layouts.master')

@section('title', 'Borang 7a')

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

    <div class="section-header">BORANG 7A - ANALISA NILAI BAKI KERJA DALAM TANGAN
    </div>
    <div class="container-fluid mt-4">
        <h5 class="fw-bold text-center">ANALISA DATA-DATA PENILAIAN KEUPAYAAN PETENDER <br> NILAI BAKI KERJA DALAM TANGAN
            (SERUPA)</h5>

        <div class="table-responsive mt-4">

            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th colspan="12">NO. RUJUKAN PETENDER: 45/53</th>
                    </tr>
                    <tr class="text-center">
                        <th>BIL</th>
                        <th>NAMA KONTRAK SEMASA</th>
                        <th>NILAI KONTRAK (RM)</th>
                        <th>NILAI WANG KOS PRIMA & PERUNTUKAN SEMENTARA (RM)</th>
                        <th>NILAI KERJA PEMBINA (RM)</th>
                        <th>PERATUS SIAP (%)</th>
                        <th>PERATUS BELUM SIAP (%)</th>
                        <th>Tarikh Jangka Siap Sebenar</th>
                        <th>BAKI TEMPOH PENYIAPAN (Bulan)</th>
                        <th>NILAI KERJA YANG TELAH DISIAPKAN</th>
                        <th>NILAI TAHUNAN BAKI KERJA DALAM TANGAN (NBK) (RM)</th>
                        <th>NILAI BAKI KERJA DALAM TANGAN (NBK) (RM)</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $rows = [
                            [],
                            [],
                            [],
                            []
                        ]
                    @endphp

                    @foreach($rows as $item)
                        <tr class="text-center">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach

                    <tr>
                        <td></td>
                        <td colspan="8" class="text-start">
                            <p><strong>JUMLAH NILAI KERJA YANG TELAH DISIAPKAN</strong> bawa ke Butiran 3 Borang 9</p>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="9" class="text-start">
                            <p><strong>JUMLAH NILAI BAKI KERJA (NBK)</strong> bawa ke Borang 14</p>
                        </td>
                        <td></td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="10" class="text-start">
                            <p><strong>JUMLAH NILAI TAHUNAN BAKI KERJA (NTBK)</strong> bawa ke Butiran 12 Borang 8</p>
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>


        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <button class="btn btn-success m-1">Simpan</button>
            </div>
        </div>
    </div>

@endsection