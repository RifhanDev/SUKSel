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

        /* Tabs container divider like the screenshot */
        .custom-tabs.nav-tabs {
            border-bottom: 4px solid #d9d9d9;
            /* grey bar under tabs */
            gap: 1rem;
            /* spacing between tabs */
            justify-content: center;
            /* center the tabs */
        }

        /* Base tab look: text-only, no borders */
        .custom-tabs .nav-link {
            border: 0 !important;
            background: transparent !important;
            color: #2b2b2b;
            font-weight: 600;
            padding: .55rem 1.25rem;
            border-radius: .6rem;
            /* so hover/active look rounded */
        }

        /* Hover (subtle) */
        .custom-tabs .nav-link:hover {
            color: #000;
            background: rgba(0, 0, 0, .04) !important;
        }

        /* Active tab = maroon pill */
        .custom-tabs .nav-link.active {
            background: #a84545 !important;
            /* maroon */
            color: #fff !important;
            box-shadow: 0 2px 6px rgba(168, 69, 69, .25);
        }

        /* Optional: tighten the tab-content top spacing */
        .tab-content.pill-top {
            margin-top: .75rem;
        }

        .info-strip {
            background: #f6eaea;
            /* soft pink/rose */
            border-top: 1px solid #e7d1d1;
            border-bottom: 1px solid #e7d1d1;
            padding: .5rem .75rem;
            font-size: .875rem;
        }

        .info-strip small {
            color: #666;
            text-transform: uppercase;
            letter-spacing: .02em;
        }

        .info-strip .value {
            font-weight: 600;
            margin-left: .5rem;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid mt-3">
        <div class="breadcrumb-header">
            STOS > <strong>Penyediaan Kertas Taklimat dan Pengesyoran Pembekal</strong>
        </div>

        <div class="info-strip d-flex flex-wrap justify-content-between align-items-center">
            <div><small>No. Sebut Harga / Tender</small><span class="value">QT210000000023741</span></div>
            <div><small>PTJ</small><span class="value">BAHAGIAN PENTADBIRAN – CAWANGAN KEWANGAN – KEMENTERIAN
                    KEWANGAN</span></div>
            <div><small>Status</small><span class="value">Penyediaan Pemilihan Akhir Pembekal</span></div>
            <div><small>Sah Laku Tawaran Tamat</small><span class="value">17/01/2022</span></div>
        </div>

        <!-- Tabs -->
        <ul class="nav nav-tabs custom-tabs" id="tabContent">
            <li class="nav-item">
                <a class="nav-link active" id="tab-penyediaan" data-bs-toggle="tab" href="#penyediaan">
                    Penyediaan Mesyuarat
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-taklimat" data-bs-toggle="tab" href="#taklimat">
                    Paparan Kertas Taklimat
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-pemilihan-pembekal" data-bs-toggle="tab" href="#pemilihan-pembekal">
                    Memuktamadkan Pemilihan Pembekal
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-keputusan" data-bs-toggle="tab" href="#keputusan">
                    Kertas Keputusan
                </a>
            </li>
        </ul>

        <div class="tab-content mt-3">

            {{-- ======================== TAB: PENYEDIAAN MESYUARAT ======================== --}}
            <div class="tab-pane fade show active" id="penyediaan">
                <!-- PERINCIAN MESYUARAT -->
                <div class="px-3 py-2 bg-light border fw-semibold">PERINCIAN MESYUARAT</div>

                <div class="table-responsive">
                    <table class="table table-bordered align-middle mb-2">
                        <thead class="text-white text-center" style="background-color:#2d3e84;">
                            <tr>
                                <th style="width:42px;"></th>
                                <th>Bil Mesyuarat <span class="text-danger">*</span></th>
                                <th>Tarikh Mesyuarat <span class="text-danger">*</span></th>
                                <th>Tajuk Agenda <span class="text-danger">*</span></th>
                                <th>Tempat <span class="text-danger">*</span></th>
                                <th>No. Kod Kertas <span class="text-danger">*</span></th>
                                <th>Status <span class="text-danger">*</span></th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="form-check-input">
                                </td>
                                <td><input type="text" class="form-control form-control-sm" placeholder=""></td>
                                <td><input type="date" class="form-control form-control-sm" value="2021-10-18"></td>
                                <td><input type="text" class="form-control form-control-sm" placeholder=""></td>
                                <td><input type="text" class="form-control form-control-sm"
                                        value="Bilik Mesyuarat Tingkat 3"></td>
                                <td><input type="text" class="form-control form-control-sm" placeholder=""></td>
                                <td>
                                    <select class="form-select form-select-sm">
                                        <option selected>Belum Selesai</option>
                                        <option>Selesai</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control form-control-sm" placeholder=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end gap-2 mb-3">
                    <button type="button" class="btn btn-success">Tambah</button>
                    <button type="button" class="btn btn-warning text-white">Hapus</button>
                </div>



                <!-- Save/Submit buttons (bawah kanan, seperti gambar) -->
                <div class="d-flex justify-content-end gap-3 mt-3">
                    <button type="button" class="btn" style="background-color:#19c1a7;color:#fff;">Simpan</button>
                    <button type="button" class="btn" style="background-color:#324d92;color:#fff;">Hantar</button>
                </div>
            </div>

            {{-- ======================== TAB: PAPARAN KERTAS TAKLIMAT ======================== --}}
            <div class="tab-pane fade" id="taklimat">
                <h6 class="fw-bold">SENARAI DOKUMEN</h6>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-white text-center" style="background-color:#2d3e84;">
                            <tr>
                                <th>Kandungan</th>
                                <th width="15%">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Laporan Jawatankuasa Pembuka</td>
                                <td class="text-center"><a href="#" class="text-primary">Papar</a></td>
                            </tr>
                            <tr>
                                <td>Laporan Jawatankuasa Teknikal</td>
                                <td class="text-center"><a href="#" class="text-primary">Papar</a></td>
                            </tr>
                            <tr>
                                <td>Laporan Jawatankuasa Kewangan</td>
                                <td class="text-center"><a href="#" class="text-primary">Papar</a></td>
                            </tr>
                            <tr>
                                <td>Kertas Taklimat (Perakuan Jabatan)</td>
                                <td class="text-center"><a href="#" class="text-primary">Papar</a></td>
                            </tr>
                            <tr>
                                <td>Laporan Bidaan</td>
                                <td class="text-center"><a href="#" class="text-primary">Papar</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- ======================== TAB: MEMUKTAMADKAN PEMILIHAN PEMBEKAL ======================== --}}
            <div class="tab-pane fade" id="pemilihan-pembekal">
                <h6 class="fw-bold">KEPUTUSAN PIHAK BERKUASA MELULUS</h6>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Keputusan Mesyuarat</label>
                        <select class="form-select">
                            <option selected>Pengesyoran Pembekal</option>
                            <option>Penilaian Semula</option>
                            <option>Iklan Semula</option>
                            <option>Kemukakan kepada Pihak Berkuasa Yang Lebih Tinggi</option>
                            <option>Batal</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Kaedah Memuktamadkan Pembekal</label>
                        <select class="form-select">
                            <option selected>Bidaan</option>
                            <option>Pemilihan Terus</option>
                            <option>Pemilihan Lebih Daripada Satu Syarikat</option>
                        </select>
                    </div>
                </div>

                <h6 class="fw-bold">SENARAI ITEM</h6>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-white text-center" style="background-color:#2d3e84;">
                            <tr>
                                <th></th>
                                <th>Item</th>
                                <th>Jenis Item</th>
                                <th>Unit Ukuran</th>
                                <th>Jenis Harga</th>
                                <th>Dibatalkan</th>
                                <th>Pembekal Dipilih</th>
                                <th>Kuantiti</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><input type="checkbox"></td>
                                <td>Tender Perkhidmatan Penilaian Forensik Keatas Sistem XXXX</td>
                                <td>Perkhidmatan</td>
                                <td>Activity Unit</td>
                                <td>Biasa Standard</td>
                                <td>
                                    <select class="form-select">
                                        <option selected>Tidak</option>
                                        <option>Ya</option>
                                    </select>
                                </td>
                                <td>2</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-success">Terapkan untuk semua</button>
                </div>

                <h6 class="fw-bold mt-4">SENARAI PEMBEKAL</h6>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead class="text-white" style="background-color:#2d3e84;">
                            <tr>
                                <th>Bil</th>
                                <th>Status Bumiputra</th>
                                <th>Harga Tawaran (RM)</th>
                                <th>Jumlah Skor</th>
                                <th>Kedudukan Penilaian Teknikal Kewangan</th>
                                <th>Status Pendaftaran MOF</th>
                                <th colspan="2">Maklumat Tambahan</th>
                                <th>Keputusan oleh Urusetia</th>
                                <th>Catatan Urusetia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2/2</td>
                                <td>Ya</td>
                                <td>360,000.00</td>
                                <td>96.43</td>
                                <td>1</td>
                                <td>Aktif</td>
                                <td>Tindakan Disiplin Diambil</td>
                                <td><button class="btn btn-light"><i class="bi bi-file-earmark"></i></button></td>
                                <td>Disyorkan</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1/2</td>
                                <td>Tidak</td>
                                <td>330,000.00</td>
                                <td>94.53</td>
                                <td>2</td>
                                <td>Aktif</td>
                                <td></td>
                                <td><button class="btn btn-light"><i class="bi bi-file-earmark"></i></button></td>
                                <td>Disyorkan</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="pengakuan">
                    <label class="form-check-label" for="pengakuan">Saya mengesahkan petender diatas layak untuk
                        menyertai Bidaan.</label>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-success">Simpan</button>
                    <button class="btn btn-primary">Hantar</button>
                </div>
            </div>

            {{-- ======================== TAB: KERTAS KEPUTUSAN ======================== --}}
            <div class="tab-pane fade" id="keputusan">
                {{-- SYARAT-SYARAT --}}
                <div class="section-header text-uppercase">Syarat-Syarat</div>
                <div class="py-3">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                            <label class="form-label mb-0">Dengan Syarat</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="syarat" id="syaratYa" value="Ya">
                                <label class="form-check-label" for="syaratYa">Ya</label>
                            </div>
                            <div class="form-check form-check-inline ms-3">
                                <input class="form-check-input" type="radio" name="syarat" id="syaratTidak" value="Tidak"
                                    checked>
                                <label class="form-check-label" for="syaratTidak">Tidak</label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label">Jika Ya, sila nyatakan</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>

                {{-- PENGESYORAN --}}
                <div class="section-header text-uppercase mt-3">Pengesyoran</div>
                <div class="py-3">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label mb-0">Catatan</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="3"
                                placeholder="Pengesyoran Urusetia Perolehan adalah berdasarkan keputusan Jawatankuasa Penilaian...."></textarea>
                        </div>
                    </div>
                </div>

                {{-- JUSTIFIKASI --}}
                <div class="section-header text-uppercase mt-3">Justifikasi</div>
                <div class="py-3">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                            <label class="form-label mb-0">Justifikasi Pemilihan Pembekal <span
                                    class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select">
                                <option selected>Harga dalam lingkungan harga indikatif jabatan</option>
                                <option>Prestasi kerja terdahulu</option>
                                <option>Kepakaran teknikal</option>
                            </select>
                        </div>
                    </div>
                </div>

                {{-- KERTAS KEPUTUSAN (OPTIONAL) --}}
                <div class="section-header text-uppercase mt-3">Kertas Keputusan (Optional)</div>
                <div class="py-4">
                    <div class="row justify-content-start align-items-center g-3">
                        <div class="col-md-3">
                            <div class="text-center">
                                <div class="fw-semibold mb-1">Lampiran</div>
                                <small class="text-info d-block" style="line-height:1.2">
                                    (Memuat naik kertas keputusan yang telah<br>ditanda tangan oleh kesemua ahli
                                    PBM)
                                </small>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="d-flex align-items-center gap-3">
                                <label class="btn btn-outline-success d-inline-flex align-items-center px-3">
                                    <i class="bi bi-cloud-arrow-up me-2"></i> Muat Naik
                                    <input type="file" class="d-none">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- KEPUTUSAN --}}
                <div class="section-header text-uppercase mt-3">Keputusan</div>
                <div class="py-3">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                            <label class="form-label mb-0">Keputusan</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select">
                                <option selected>Keputusan</option>
                                <option>Lulus</option>
                                <option>Tawaran Semula</option>
                                <option>Batal</option>
                                <option>Tangguh</option>
                            </select>
                        </div>
                    </div>
                </div>

                {{-- CATATAN --}}
                <div class="section-header text-uppercase mt-3">Catatan</div>
                <div class="py-3">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label mb-0">Catatan</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>

                {{-- ACTIONS --}}
                <div class="d-flex justify-content-end gap-3 mt-2">
                    <button type="button" class="btn" style="background-color:#19c1a7;color:#fff;">Simpan</button>
                    <button type="button" class="btn" style="background-color:#324d92;color:#fff;">Hantar</button>
                </div>
            </div>

            {{-- ======================== TAB: PENYEDIAAN JADUAL BIDAAN ======================== --}}
            <div class="tab-pane fade" id="jadual-bidaan">
                <h6 class="fw-bold">Penyediaan Jadual Bidaan</h6>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label class="form-label">Tarikh Bidaan Mula<span class="text-danger">*</span></label>
                        <input type="date" class="form-control" value="2021-10-11">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Masa Bidaan Mula<span class="text-danger">*</span></label>
                        <input type="time" class="form-control" value="12:00">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Tarikh Bidaan Tamat<span class="text-danger">*</span></label>
                        <input type="date" class="form-control" value="2021-10-11">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Masa Bidaan Tamat<span class="text-danger">*</span></label>
                        <input type="time" class="form-control" value="17:00">
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary">Mula Bidaan</button>
                </div>
            </div>


        </div>
    </div>
    </div>
    </div>
@endsection