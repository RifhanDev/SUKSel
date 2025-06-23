@extends('layouts.master')

@section('title')
    Butiran Tender
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container mt-4">
        <!-- Title Section -->
        <div class="mb-3">
            <span class="badge bg-warning text-dark fs-5 mb-1">Tender oleh Bahagian Pengurusan Maklumat</span>
            <h6 class="fw-bold fs-6">SH/SUKSEL/14-2025</h6>
            <br>

            <p class="text-uppercase fw-semibold">
                TENDER BAGI PERKHIDMATAN PENYELENGGARAAN SERVER MICROSOFT ACTIVE DIRECTORY DI PEJABAT SETIAUSAHA KERAJAAN
                NEGERI SELANGOR DAN SEMBILAN (9) PEJABAT DAERAH DAN TANAH SELANGOR BAGI TEMPOH TIGA (3) TAHUN
            </p>
        </div>

        <!-- Tender Details Table -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="w-25">Petender</th>
                            <td>Bahagian Pengurusan Maklumat</td>
                        </tr>
                        <tr>
                            <th>No. Sebut Harga</th>
                            <td>SH/SUKSEL/14-2025</td>
                        </tr>
                        <tr>
                            <th>Tarikh Iklan</th>
                            <td>7 Mar 2025 - 17 Mar 2025</td>
                        </tr>
                        <tr>
                            <th>Tarikh Jual</th>
                            <td>7 Mar 2025 - 17 Mar 2025</td>
                        </tr>
                        <tr>
                            <th>Tarikh Tutup</th>
                            <td>17 Mar 2025</td>
                        </tr>
                        <tr>
                            <th>Masa Tutup</th>
                            <td>12:00 PM</td>
                        </tr>
                        <tr>
                            <th>Tempat Hantar</th>
                            <td>
                                Peti Sebut Harga<br>
                                Pejabat Setiausaha Kerajaan Negeri Selangor,<br>
                                Bahagian Khidmat Pengurusan, Tingkat 18, Bangunan SSAAS<br>
                                40000 Shah Alam, Selangor
                            </td>
                        </tr>
                        <tr>
                            <th>Kebenaran Khas</th>
                            <td><i class="bi bi-x-lg text-danger"></i></td>
                        </tr>
                        <tr>
                            <th>Syarikat Bumiputera Sahaja</th>
                            <td><i class="bi bi-x-lg text-danger"></i></td>
                        </tr>
                        <tr>
                            <th>Syarikat Negeri</th>
                            <td><i class="bi bi-check-lg text-success"></i> SELURUH MALAYSIA</td>
                        </tr>
                        <tr>
                            <th>Harga Dokumen</th>
                            <td>RM 30.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Action Button -->
        <div class="d-flex justify-content-end mt-3">
            <a href="checkout" class="btn btn-primary">
                Tambah Kepada Senarai Tempahan
            </a>
        </div>


        <br>
    </div>

    <!-- Bootstrap icons CDN (optional for icons) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection