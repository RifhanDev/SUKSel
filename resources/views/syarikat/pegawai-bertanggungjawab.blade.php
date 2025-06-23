@extends('layouts.master')

@section('title', 'Pegawai Bertanggungjawab')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* Additional styling to match the screenshot */
        .header-bg {
            background-color: #4054a0;
            color: white;
            text-align: center;
            vertical-align: middle;
        }

        .subheader-bg {
            background-color: #d6d6d6;
            font-weight: bold;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .label-bold {
            font-weight: 700;
        }

        .table thead th {
            background-color: #3e5a9a;
            color: white;
            font-weight: 600;
        }
    </style>
@endsection

@section('content')
    <div class="container mt-4">
        <h6>Dokumen Tender</h6>

        <div class="subheader-bg p-2 mb-2">Pegawai Bertanggungjawab</div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="header-bg">Pegawai Bertanggungjawab 1</th>
                    <th class="header-bg">Pegawai Bertanggungjawab 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="label-bold" style="width: 100px;">Nama</td>
                                    <td>Khamisah Binti Misrom</td>
                                </tr>
                                <tr>
                                    <td class="label-bold">E-mel</td>
                                    <td>khamisah@selangor.gov.my</td>
                                </tr>
                                <tr>
                                    <td class="label-bold">No. Tel</td>
                                    <td>03-55447211</td>
                                </tr>
                                <tr>
                                    <td class="label-bold">Jabatan</td>
                                    <td>PERBENDAHARAAN NEGERI SELANGOR</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="label-bold" style="width: 100px;">Nama</td>
                                    <td>Mohammad Hafiz Bin Abdul Shukor</td>
                                </tr>
                                <tr>
                                    <td class="label-bold">E-mel</td>
                                    <td>mhafiz@selangor.gov.my</td>
                                </tr>
                                <tr>
                                    <td class="label-bold">No. Tel</td>
                                    <td>03-55447223 / 7304</td>
                                </tr>
                                <tr>
                                    <td class="label-bold">Jabatan</td>
                                    <td>PERBENDAHARAAN NEGERI SELANGOR</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection