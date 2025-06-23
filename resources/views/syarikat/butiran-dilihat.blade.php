@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')


    <style>
        .tab-active {
            background-color: #a32828;
            color: white;
        }

        .tender-title {
            color: #000;
            font-weight: bold;
        }

        .tender-description {
            color: #004aad;
            font-size: 0.875rem;
        }

        .right-border {
            border-right: 1px solid #dee2e6;
        }
    </style>


    <div class="container">
        <!-- Tabs -->
        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
                <a class="nav-link tab-active" href="#">Maklumat Tender / Sebut Harga</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tab-inactive" href="#">Maklumat Syarikat</a>
            </li>
        </ul>



        <div class="row">
            <!-- Tender List -->
            <div class="col-md-9">
                <!-- Search and dropdown -->
                <div class="d-flex justify-content-end align-items-center gap-2 mb-3">
                    <div class="input-group" style="width: 250px;">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <select class="form-select w-auto">
                        <option selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>

                </div>
                <div class="table-responsive border">
                    <table class="table table-bordered m-0">
                        <thead class="table-primary text-white bg-primary">
                            <tr>
                                <th class="w-75">Tender / Sebut Harga</th>
                                <th class="w-25 text-center">Tarikh Tutup</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td onclick="window.location.href='{{ route('butiran-syarikat', ['id' => 14]) }}'"
                                    style="cursor: pointer;">
                                    <a href="{{ route('butiran-syarikat', ['id' => 14]) }}"
                                        class="text-decoration-none text-dark d-block">
                                        <div class="fw-bold">Bahagian Pengurusan Maklumat</div>
                                        <div class="tender-title">SH/SUKSEL/14-2025</div>
                                        <div class="tender-description">
                                            SEBUT HARGA BAGI PERKHIDMATAN PENYELENGGARAAN SERVER MICROSOFT ACTIVE DIRECTORY
                                            DI PEJABAT SETIAUSAHA KERAJAAN NEGERI SELANGOR DAN SEMBILAN (9) PEJABAT DAERAH
                                            DAN TANAH SELANGOR BAGI TEMPOH TIGA (3) TAHUN
                                        </div>
                                    </a>
                                </td>

                                <td class="text-center align-middle">
                                    17 Mar 2025<br>12:00 PM
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="fw-bold">Jabatan Agama Islam Selangor</div>
                                    <div class="tender-title">JAIS.UPP.400–5/6/11 (2025/2028–A)</div>
                                    <div class="tender-description">
                                        TENDER PERKHIDMATAN SEWAAN (SEWA GUNA) MEMBEKAL, MENGHANTAR, MEMASANG, MENGUJI,
                                        MENTAULIAH DAN MENYENGGARA PERKAKASAN DAN PERISIAN ICT DI JABATAN AGAMA ISLAM
                                        SELANGOR BAGI TEMPOH TIGA (3) TAHUN BERMULA PADA TAHUN 2025 HINGGA 2028
                                    </div>
                                </td>
                                <td class="text-center align-middle">
                                    11 Mar 2025<br>12:00 PM
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="fw-bold">Jabatan Pertanian Selangor</div>
                                    <div class="tender-title">PPN.SEL 09/2025</div>
                                    <div class="tender-description">
                                        PERKHIDMATAN MEREKABENTUK, MENCETAK, MEMBEKAL, DAN MENGHANTAR LABEL SERTA
                                        PEMBUNGKUSAN PRODUK USAHAWAN INDUSTRI ASAS TANI JABATAN PERTANIAN NEGERI
                                        SELANGOR TAHUN 2025
                                    </div>
                                </td>
                                <td class="text-center align-middle">
                                    11 Mar 2025<br>12:00 PM
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Berita Terkini -->
            <div class="col-md-3">
                <div class="border rounded h-100">
                    <div class="bg-primary text-white p-2 fw-semibold">Berita Terkini</div>
                    <div class="p-3">
                        <div class="mb-1 fw-bold">RALAT–PINDAAN BQ SEBUTHARGA 042025 DAN 05/2025</div>
                        <div class="text-muted small mb-3">7 Mar 2025</div>

                        <!-- Pagination -->
                        <nav aria-label="News Pagination">
                            <ul class="pagination pagination-sm justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">←</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><span class="page-link">2</span></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">→</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection