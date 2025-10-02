@extends('layouts.master')

@section('title', 'Borang 9')

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

        .formula-line {
            display: flex;
            align-items: center;
        }

        .formula-line .label {
            width: 250px;
            /* adjust so all labels fit neatly */
        }

        .formula-line .equal {
            margin-left: 10px;
        }
    </style>
@endsection

@section('content')

    <div class="section-header" style="text-transform: uppercase;">Borang 9 Analisa Data - Data Penilaian Keupayaan Teknikal
        Petender
    </div>
    <div class="container-fluid mt-4">

        <div class="table-responsive mt-4">

            <table class="table table-bordered">

                <colgroup>
                    <col style="width: 80%;">
                    <col style="width: 20;">
                </colgroup>

                <thead class="table-primary">
                    <tr>
                        <th colspan="2">B. KEUPAYAAN TEKNIKAL <br> B1. PENGALAMAN KERJA DALAM LIMA (5) TAHUN LEPAS (termasuk
                            kerja semasa yang telah siap) </th>
                    </tr>
                    <tr class="text-end">
                        <th colspan="2">Anggaran Jabatan (AJ): 0.00</th>
                    </tr>
                    <tr class="text-center">
                        <th>Senarai Pengalaman Kerja</th>
                        <th>Pelarasan Nilai Kerja (RM)</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $rows = [
                            ['1. Kerja-kerja serupa yang disiapkan (Lampiran 9a)', ''],
                            ['2. Kerja-kerja sebanding yang disiapkan (Lampiran 9b)', ''],
                            ['3. Bahagian kerja semasa (serupa) yang telah siap (Borang 7a)', ''],
                            ['4. Bahagian kerja semasa (sebanding) yang telah siap (Borang 7b)', '']
                        ]
                    @endphp

                    @foreach($rows as $item)
                        <tr>
                            <td>{{ $item[0] }}</td>
                            <td>{{ $item[1] }}</td>
                        </tr>
                    @endforeach

                    <tr class="text-center">
                        <td>Jumlah Keseluruhan Kerja</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p><strong>B1.1 Keseluruhan Kerja</strong></p>
                            <div class="formula-line">
                                <span class="label">(i) Jumlah Keseluruhan Kerja</span>
                                <span class="equal">= </span>
                            </div>
                            <div class="formula-line">
                                <span class="label">(ii) % berbanding dengan AJ</span>
                                <span class="equal">= </span>
                            </div>

                            <br>

                            <p><strong>Kerja Terbesar +</strong></p>
                            <div class="formula-line">
                                <span class="label">(i) Nilai Kerja Terbesar</span>
                                <span class="equal">= </span>
                            </div>
                            <div class="formula-line">
                                <span class="label">(ii) % berbanding dengan AJ</span>
                                <span class="equal">= </span>
                            </div>
                            <br>
                            <p><strong>Nota:</strong></p>
                            <p>1. Pelarasan Nilai Kerja - (i)Kerja Serupa - tidak perlu pelarasan. - (ii) Kerja Sebanding -
                                Nilai Kerja sebanding darab 0.5</p>
                            <p>2. + Kerja Terbesar - Nilai Kerja terbesar selepas mengambil kira pelarasan nilai kerja</p>

                        </td>
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