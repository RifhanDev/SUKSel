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

        .table-topbar {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 12px
        }

        .table-title {
            font-weight: 700;
            letter-spacing: .3px;
            margin-top: 40px;
            /* adjust this value as needed */

        }

        .meta-box {
            background: #f4f4f4;
            border: 1px solid #dedede;
            border-radius: 4px;
            padding: 10px 14px;
            min-width: 280px
        }

        .meta-box .row-line {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            font-weight: 600
        }

        .meta-box .label {
            color: #2c2c2c
        }

        .meta-box .value {
            color: #000
        }

        @media (max-width: 576px) {
            .table-topbar {
                flex-direction: column;
                align-items: stretch
            }

            .meta-box {
                min-width: unset
            }
        }
    </style>
@endsection

@section('content')

    <div class="section-header">SENARAI PROJEK UNTUK PEMBELIAN TERUS</div>
    <div class="container-fluid mt-4">

        @php
            // Use your real values if available
            $noRuj = $noRuj ?? '45/53';
            $gred = $gred ?? '#N/A';
        @endphp

        <div class="table-topbar">
            <div class="table-title">PRESTASI KERJA SEMASA PETENDER</div>
            <div class="meta-box">
                <div class="row-line">
                    <span class="label">No. Ruj. Petender</span>
                    <span class="value">: {{ $noRuj }}</span>
                </div>
                <div class="row-line">
                    <span class="label">Gred Pendaftaran</span>
                    <span class="value">: {{ $gred }}</span>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered w-100">
                <!-- Column widths -->
                <colgroup>
                    <col style="width: 35%;">
                    <col style="width: 16.25%;">
                    <col style="width: 16.25%;">
                    <col style="width: 16.25%;">
                    <col style="width: 16.25%;">
                </colgroup>

                <thead>
                    <tr class="text-center">
                        <th>Perkara</th>
                        <th>Kerja 1</th>
                        <th>Kerja 2</th>
                        <th>Kerja 3</th>
                        <th>Kerja 4</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $rows = [
                            'Nama Ringkas Kerja Semasa',
                            'No. Kontrak Kerja Semasa',
                            'Harga Kontrak (RM)',
                            'Tarikh Pemilikan Tapak',
                            'Tempoh Kontrak (Hari) (P)',
                            'Tarikh Siap Kontrak Termasuk (termasuk EOT diluluskan)',
                            'Tarikh Penilaian Kemajuan',
                            'Luputan Tarikh Siap Kontrak (Hari) (D)',
                            'Peratus Kemajuan Sebenar Dicapai (A) (%)',
                            'Peratus Kemajuan Mengikut Jadual (S) (%)'
                        ];
                    @endphp

                    @foreach($rows as $row)
                        <tr>
                            <td>{{ $row }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach

                    <!-- Prestasi Kerja Semasa row -->
                    <tr>
                        <td>
                            Prestasi Kerja Semasa (A-S(P+D)/P) <br><br> Status Prestasi
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <!-- Prestasi Kerja Semasa Terendah row -->
                    <tr>
                        <td>Prestasi Kerja Semasa Terendah (%)</td>
                        <td colspan="4"></td>
                    </tr>

                    <!-- Last row with select only in Kerja 1 -->
                    <tr>
                        <td>Semakan Projek Sakit Oleh Pegawai Penilai</td>
                        <td>
                            <select class="form-select">
                                <option value="">ADA / TIADA</option>
                                <option value="ADA">ADA</option>
                                <option value="TIADA">TIADA</option>
                            </select>
                        </td>
                        <td colspan="3">
                            Formula Pengiraan Nilai Baki Kerja Semasa Dalam Tangan : (100% - %Kerja Sebenar) x Harga Kontrak
                            Kerja
                        </td>
                    </tr>
                </tbody>

            </table>

        </div>

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