@extends('layouts.master')

@section('title', 'Borang 8')

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

    <div class="section-header" style="text-transform: uppercase;">Borang 8 Analisa Data - Data Penilaian Keupayaan Petender
    </div>
    <div class="container-fluid mt-4">

        <div class="table-responsive mt-4">

            <table class="table table-bordered">

                <colgroup>
                    <col style="width: 5%;">
                    <col style="width: 60%;">
                    <col style="width: 35;">
                </colgroup>

                <thead class="table-primary text-center">
                    <tr class="text-center">
                        <th colspan="3">KEDUDUKAN KEWANGAN PETENDER</th>
                    </tr>
                    <tr class="text-start">
                        <th colspan="3">No. Ruj. Petender</th>
                    </tr>
                    <tr>
                        <th>Bil.</th>
                        <th>Butiran</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $rows = [
                            ['1', 'Modal Pusingan (MP)*', ''],
                            ['2', 'Jumlah Aset (JA)**', ''],
                            ['3', 'Jumlah Liabiliti (JL)**', ''],
                            ['4', 'Nett Worth (NW) = (JA - JL)', ''],
                            ['5', 'Jumlah Baki Nilai Kemudahan Kredit yang telah diperolehi (KK)**', ''],
                            ['6', 'Wang Dalam Tangan Semasa (WDTS)', ''],
                            ['7', 'Harga Tender (T)', ''],
                            ['8', 'Harga Tender Mengikut Anggaran Jabatan (AJ) ', ''],
                            ['9', 'Nilai Wang Kos Prima (WKP) dan Wang Peruntukan Sementara (WPS)', ''],
                            ['10', 'Tempoh Siap Penengah (TSP)', ''],
                            ['11', 'Tempoh Penyiapan yang di Tender (TS)', ''],
                            ['12', 'Jumlah Nilai Tahunan Baki Kerja Dalam Tangan (NTBK di bawa dari Borang 7)', ''],
                            ['13', 'Nilai Keupayaan Biayawan (KB) +', ''],
                            ['14', 'Nilai Tahunan Projek (NTP) = [(AJ - (WKP + WPS)/TSP)]', ''],
                            ['15', 'Peratus Nilai Keupayaan Biyawan Berbanding dengan Nilai Tahunan Projek, [(KB) x 100/(NTP)]', '']
                        ]
                    @endphp

                    @foreach($rows as $item)
                        <tr>
                            <td class="text-center">{{ $item[0] }}</td>
                            <td>{{ $item[1] }}</td>
                            <td>{{ $item[2] }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-start">
                            <p><strong>Catatan :</strong> (Semua tempoh hendaklah dalam dua titik perpuluhan)</p>
                            <p>* <strong>Modal Pusingan (MP)</strong> adalah perbezaan antara Aset Semasa dan Liabiliti
                                Semasa petender seperti yang dinyatakan dalam Lembaran Imbangan dan dicampur nilai positif
                                perbezaan antara WDTS (Penyata Akaun) dengan WDT (Lembaran Imbangan)
                                <br>{MP = (Aset Semasa – Liabiliti Semasa) + Nilai positif (WDTS – WDT)}
                            </p>

                            <p>** Nilai ini hendaklah seperti yang dinyatakan dalam Lembaran Imbangan seperti yang terdapat
                                dalam Akaun Syarikat yang diaudit oleh Juru Audit bertauliah bagi tahun kewangan terakhir
                                atau sekiranya tiada, bagi tahun kewangan setahun sebelumnya.</p>

                            <p>'*** Nilai-nilai ini hendaklah seperti yang dinyatakan dalam Laporan Bank mengenai kedudukan
                                kewangan petender</p>

                            <div class="ms-3">
                                <p>1) (KB) = [(10 × MP) + (5 × (NW – MP)) ] – (0.5 × NTBK)</p>
                                <p>2) (KB) = [(10 × MP) + (9 × KK)] – (0.5 × NTBK)</p>
                                <p>3) (KB) = [(10 × WDTS) + (9 × KK)] – (0.5 × NTBK)</p>
                                <p>Yang mana lebih tinggi.</p>
                            </div>

                            <div class="text-end" >
                                <label><strong>RM</strong></label>
                                <input type="text" class="form-control d-inline-block" style="width:200px;" />
                            </div>
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