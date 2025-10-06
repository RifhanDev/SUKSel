@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection


@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />

    <style>
        /* ===== Top info strip (like screenshot #2) ===== */
        .header-band {
            background: #f6eaea;
            /* soft rose */
            border: 1px solid #e7d1d1;
            border-radius: .5rem;
            padding: .75rem 1rem;
        }

        .header-band .item small {
            display: block;
            font-size: .75rem;
            text-transform: uppercase;
            letter-spacing: .03em;
            color: #666;
            font-weight: 700;
            line-height: 1.1;
        }

        .header-band .item .val {
            font-weight: 700;
            margin-top: .15rem;
            white-space: nowrap;
        }

        .header-band .ok {
            color: #19c1a7;
        }


        /* ===== Wizard progress pills (maroon active + thin divider) ===== */
        .progress-nav {
            border-bottom: 4px solid #d9d9d9;
            /* grey line under pills */
        }

        .progress-nav .progress {
            height: 4px;
            background: #e8e8e8;
            margin: 0;
            border-radius: 2px;
        }

        .progress-nav .progress-bar {
            background: #a84545;
            /* maroon */
            transition: width .3s ease;
        }

        .progress-nav .custom-nav {
            gap: 1rem;
            padding-top: .5rem;
        }

        .progress-nav .nav-link {
            border: 0 !important;
            background: transparent !important;
            color: #2b2b2b;
            font-weight: 700;
            padding: .45rem 1rem;
            border-radius: .75rem;
        }

        .progress-nav .nav-link.active {
            background: #a84545 !important;
            color: #fff !important;
            box-shadow: 0 2px 6px rgba(168, 69, 69, .25);
        }
    </style>
@endsection


@section('content')


    <div class="header-band d-flex flex-wrap align-items-center gap-4 mb-3">
        <div class="item">
            <small>No. Sebut Harga / Tender</small>
            <span class="val ok">Belum Dijana</span>
        </div>

        <div class="item flex-grow-1">
            <small>PTJ</small>
            <span class="val">BAHAGIAN PENTADBIRAN – CAWANGAN KEWANGAN – KEMENTERIAN KEWANGAN</span>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <form action="{{route('storeCiptaTender')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div>Cipta Tender</div>
                                    <div class="item ms-auto text-end">
                                        <small>Status</small>
                                        <span class="val">Menunggu Penyerahan Sebut Harga / Tender</span>
                                    </div>
                                </div>
                        </div>
                        <hr>
                        <div id="custom-progress-bar" class="progress-nav mb-4 p-2">
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <ul class="nav nav-pills progress-bar-tab custom-nav" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button type="button" id="makluman-umum-tab" class="nav-link rounded-pill active"
                                        data-progressbar="custom-progress-bar" data-bs-toggle="pill"
                                        data-bs-target="#makluman-umum"
                                        data-title="@lang('translation.application-information')" role="tab"
                                        aria-controls="makluman-umum" aria-selected="true">1</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button type="button" id="kod-bidang-tab" class="nav-link rounded-pill"
                                        data-bs-toggle="pill" data-bs-target="#kod-bidang" role="tab" aria-controls="kod-bidang"
                                        aria-selected="false">2</button>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="tab-content" id="application-content">
                        <div class="tab-pane fade show active" id="makluman-umum" role="tabpanel"
                            aria-labelledby="makluman-umum-tab">
                            <div class="row mt-4 justify-content-center">
                                <div class="col-12">
                                    <h4 class="card-title card-title-grey">MAKLUMAT UMUM</h4>
                                    <p class="card-title-desc text-primary fst-italic">
                                        Untuk perkhidmatan yang memerlukan bayaran secara progresif, sila pilih Jenis
                                        Pemenuhan sebagai Bermasa (Bila Perlu)
                                    </p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-11">
                                    <div class="row">
                                        <!-- Kaedah Perolehan -->
                                        <div class="col-md-12 my-2">
                                            <div class="row">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">Kaedah Perolehan</label>
                                                </div>
                                                <div class="col-md-4 text-end">
                                                    <select class="form-control" name="">
                                                        <option value="">Tender</option>
                                                        <option value="">Sebut Harga</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">Kategori Jenis Perolehan <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control" id="kategoriJenis">
                                                        <option value="perkhidmatan">Perkhidmatan</option>
                                                        <option value="bekalan">Bekalan</option>
                                                        <option value="kerja">Kerja</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Default Form - Cipta Tender --}}
                                        <div id="ciptaTenderForm">
                                            <!-- Kategori Jenis Perolehan -->
                                            <!-- Item Panel -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="" class="">Item Panel <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="formRadios"
                                                                id="formRadios1" checked>
                                                            <label class="form-check-label" for="formRadios1">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="formRadios"
                                                                id="formRadios2">
                                                            <label class="form-check-label" for="formRadios2">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Item Panel -->
                                            <!-- Tajuk Perolehan -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="" class="">Tajuk Perolehan <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" name=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tajuk Perolehan -->
                                            <!-- Disediakan Untuk PTJ -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="" class="">Disediakan Untuk PTJ <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="input-group">
                                                            <select class="form-control" name="">
                                                                <option value="">BAHAGIAN PENTADBIRAN - CAWANNGAN KEWANGAN -
                                                                    KEMENTERIAN KEWANGAN</option>
                                                            </select>
                                                            <span class="input-group-text"><i
                                                                    class="bx bx-search-alt"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Disediakan Untuk PTJ -->
                                            <!-- No. Rujukan Fail -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="" class="">No. Rujukan Fail <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- No. Rujukan Fail -->
                                            <!-- Tarikh Dicipta -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label for="" class="">Tarikh Dicipta</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input class="form-control" type="date">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tarikh Dicipta -->
                                            <!-- Jumlah Harga Indikatif Jangkaan (RM) -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 text-end">
                                                        <label for="" class="">Jumlah Harga Indikatif Jangkaan (RM) <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input class="form-control" type="number" name="">
                                                    </div>
                                                    <div class="col-md-2 text-end">
                                                        <label for="" class="">Anggaran Jabatan <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="number" name="" class="form-control">
                                                    </div>
                                                    <div class="col-md-2 text-end">
                                                        <label for="" class="">Sumber Peruntukan <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="sumberPeruntukan"
                                                                id="pembangunan" checked>
                                                            <label class="form-check-label" for="pembangunan">
                                                                Pembangunan
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="sumberPeruntukan"
                                                                id="mengurus">
                                                            <label class="form-check-label" for="mengurus">
                                                                Mengurus
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Jumlah Harga Indikatif Jangkaan (RM) -->

                                            <!-- Sumber Peruntukan -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">

                                                </div>
                                            </div>
                                            <!-- Sumber Peruntukan -->
                                            <!-- Jenis Sebut Harga / Tender -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 text-end">
                                                        <label for="" class=""> Jenis Tender/Sebut Harga <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="">
                                                            <option value="">Konvensional</option>
                                                            <option value="">Reka & Bina</option>
                                                            <option value="">Terhad</option>
                                                        </select>


                                                    </div>
                                                    <div class="col-md-2 text-end">
                                                        <label for="" class="">Terbuka Kepada <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="terbukaKepada"
                                                                id="terbukaKepada1">
                                                            <label class="form-check-label" for="terbukaKepada1">
                                                                Bumiputra
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="terbukaKepada"
                                                                id="terbukaKepada2" checked>
                                                            <label class="form-check-label" for="terbukaKepada2">
                                                                Semua
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 my-2">
                                                    <div class="row">
                                                        <div class="col-md-2 text-end">
                                                            <label for="" class="">Zon / Lokasi</label>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="zonLokasi"
                                                                    id="zonLokasi1">
                                                                <label class="form-check-label" for="zonLokasi1">
                                                                    Ya
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="zonLokasi"
                                                                    id="zonLokasi2" checked>
                                                                <label class="form-check-label" for="zonLokasi2">
                                                                    Tidak
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-4 text-end ">
                                                            <label for="" class="">Taklimat Tender / Lawatan Tapak&nbsp;<span
                                                                    class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="taklimat"
                                                                    id="ada" checked>
                                                                <label class="form-check-label" for="ada">
                                                                    Ada
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="taklimat"
                                                                    id="tidak">
                                                                <label class="form-check-label" for="tidak">
                                                                    Tidak
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Lokaliti Penilaian -->
                                                <div class="col-md-12 my-2">
                                                    <div class="row">
                                                        <div class="col-md-2 text-end">
                                                            <label for="" class="">Lokaliti Liputan</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select class="form-control" name="">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>


                                                    </div>
                                                </div>
                                                <!-- Lokaliti Penilaian -->

                                                <!-- Jenis Kontrak -->
                                                <div class="col-md-12 my-2">
                                                    <div class="row">
                                                        <div class="col-md-2 text-end">
                                                            <label for="" class="">Jenis Kontrak <span
                                                                    class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select class="form-control" name="">
                                                                <option value="">Kementerian</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2 d-flex justify-content-end">
                                                            <label for="" class="">Kategori Perolehan <span
                                                                    class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select class="form-control" name="">
                                                                <option value="">ICT</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Jenis Kontrak -->

                                                <!-- No. Kontrak Sedia Ada (Jika Ada) -->
                                                <!-- Jenis Pemenuhan -->
                                                <div class="col-md-12 my-2">
                                                    <div class="row">
                                                        <div class="col-md-2 d-flex justify-content-end">
                                                            <label for="" class="">Jenis Pemenuhan <span
                                                                    class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select class="form-control" name="">
                                                                <option value="">Bermasa (Bila Perlu)</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2 d-flex justify-content-end">
                                                            <label for="" class="">No. Kontrak Sedia Ada (Jika Ada)</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input class="form-control" type="text" name="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Jenis Pemenuhan -->

                                                <!-- Kelulusan Spesifikasi Daripada Kementerian -->
                                                <div class="col-md-12 my-2">
                                                    <div class="row">
                                                        <div class="col-md-2 text-end">
                                                            <label for="" class="">Kelulusan Spesifikasi Daripada Kementerian
                                                                <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="kelulusanSpesifikasiDaripadaKementerian"
                                                                    id="kelulusanSpesifikasiDaripadaKementerian1">
                                                                <label class="form-check-label"
                                                                    for="kelulusanSpesifikasiDaripadaKementerian1">
                                                                    Ya
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="kelulusanSpesifikasiDaripadaKementerian"
                                                                    id="kelulusanSpesifikasiDaripadaKementerian2" checked>
                                                                <label class="form-check-label"
                                                                    for="kelulusanSpesifikasiDaripadaKementerian2">
                                                                    Tidak
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-2 d-flex justify-content-end">
                                                            <label for="" class="">Tempoh Kontrak / Penyiapan (Bulan)</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input class="form-control" type="number" name="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 my-2">
                                                    <div class="row">
                                                        <div class="col-md-2 text-end">
                                                            <label for="" class="">Penghantaran Fizikal <span
                                                                    class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="penghantaranFizikal" id="penghantaranFizikal1"
                                                                    checked>
                                                                <label class="form-check-label" for="penghantaranFizikal1">
                                                                    Ya
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="penghantaranFizikal" id="penghantaranFizikal2">
                                                                <label class="form-check-label" for="penghantaranFizikal2">
                                                                    Tidak
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Penghantaran Fizikal -->
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Form Khusus untuk Kerja --}}
                                    <div id="kerjaForm" style="display: none;">
                                        <!-- Tajuk Perolehan -->
                                        <div class="col-md-12 my-2">
                                            <div class="row">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">Tajuk Perolehan <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tajuk Perolehan -->
                                        <!-- Disediakan Untuk PTJ -->
                                        <div class="col-md-12 my-2">
                                            <div class="row">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">Disediakan Untuk PTJ <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="input-group">
                                                        <select class="form-control" name="">
                                                            <option value="">BAHAGIAN PENTADBIRAN - CAWANNGAN KEWANGAN -
                                                                KEMENTERIAN KEWANGAN</option>
                                                        </select>
                                                        <span class="input-group-text"><i class="bx bx-search-alt"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Disediakan Untuk PTJ -->
                                        <!-- No. Rujukan Fail -->
                                        <div class="col-md-12 my-2">
                                            <div class="row">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">No. Rujukan Fail <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- No. Rujukan Fail -->
                                        <!-- No. Tender/Sebut Harga -->
                                        <div class="col-md-12 my-2">
                                            <div class="row">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">No. Tender/Sebut Harga <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- No. Tender/Sebut Harga -->
                                        <!-- Tarikh Dicipta -->
                                        <div class="col-md-12 my-2">
                                            <div class="row ">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">Tarikh Dicipta</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input class="form-control" type="date">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tarikh Dicipta -->
                                        <!-- Harga Indikatif Jabatan (RM) -->
                                        <div class="col-md-12 my-2">
                                            <div class="row ">
                                                <div class="col-md-2 text-end">
                                                    <label class="">Harga Indikatif Jabatan (RM) <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                                <div class="col-md-4 text-end">
                                                    <label class="required">Sumber Peruntukan</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="formRadios"
                                                            id="formRadios1" checked>
                                                        <label class="form-check-label" for="formRadios1">Pembangunan</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="formRadios"
                                                            id="formRadios2">
                                                        <label class="form-check-label" for="formRadios2">Mengurus</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="formRadios"
                                                            id="formRadios3">
                                                        <label class="form-check-label" for="formRadios3">Lain-Lain</label>
                                                    </div>
                                                    <!-- Textbox for "Lain-Lain", hidden initially -->
                                                    <div id="lainLainInput" class="mt-2" style="display: none;">
                                                        <input type="text" class="form-control" placeholder="Sila nyatakan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Harga Indikatif Jabatan (RM) -->
                                        <!-- Anggaran Jabatan -->
                                        <div class="col-md-12 my-2">
                                            <div class="row ">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class="">Anggaran Jabatan (RM) <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Anggaran Jabatan -->

                                        <!-- Jenis Sebut Harga / Tender -->
                                        <div class="col-md-12 my-2">
                                            <div class="row">
                                                <div class="col-md-2 text-end">
                                                    <label for="" class=""> Jenis Tender/Sebut Harga <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="form-control" name="">
                                                        <option value="">Konvensional</option>
                                                        <option value="">Reka & Bina</option>
                                                        <option value="">Terhad</option>
                                                    </select>


                                                </div>
                                                <div class="col-md-4 text-end">
                                                    <label for="" class="">Terbuka Kepada <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="terbukaKepada"
                                                            id="terbukaKepada1">
                                                        <label class="form-check-label" for="terbukaKepada1">
                                                            Bumiputra
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="terbukaKepada"
                                                            id="terbukaKepada2" checked>
                                                        <label class="form-check-label" for="terbukaKepada2">
                                                            Semua
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Jenis Sebut Harga / Tender -->

                                            <!-- Zon / Lokasi -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 text-end">
                                                        <label for="" class="">Zon / Lokasi</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="zonLokasi"
                                                                id="zonLokasi1">
                                                            <label class="form-check-label" for="zonLokasi1">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="zonLokasi"
                                                                id="zonLokasi2" checked>
                                                            <label class="form-check-label" for="zonLokasi2">
                                                                Tidak
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2 text-end">
                                                        <label for="" class="">Taklimat Tender / Lawatan Tapak&nbsp;<span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="taklimat"
                                                                id="ada" checked>
                                                            <label class="form-check-label" for="ada">
                                                                Ada
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="taklimat"
                                                                id="tidak">
                                                            <label class="form-check-label" for="tidak">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Zon / Lokasi -->


                                            <!-- Lokaliti Penilaian -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 text-end">
                                                        <label for="" class="">Lokaliti Liputan</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <select class="form-control" name="">
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 text-end">
                                                        <label for="" class="">Skop Kerja <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <select class="form-control" name="">
                                                            <option value="">Bangunan</option>
                                                            <option value="">Kejuruteraan Awam</option>
                                                            <option value="">Mekanikal & Elektrikal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Lokaliti Penilaian -->


                                            <!-- Jenis Pemenuhan -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 text-end">
                                                        <label class="">Jenis Pemenuhan <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <select class="form-control" name="">
                                                            <option value="">Bermasa (Bila Perlu)</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 text-end">
                                                        <label class="">Tempoh Siap Maksima</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <input class="form-control" type="number" name="">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <select class="form-control" name="">
                                                            <option value="bulan">Bulan</option>
                                                            <option value="minggu">Minggu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Jenis Pemenuhan -->

                                            <!-- Penghantaran Fizikal -->
                                            <div class="col-md-12 my-2">
                                                <div class="row">
                                                    <div class="col-md-2 text-end">
                                                        <label for="" class="">Jawatan Spesifikasi&nbsp;<span
                                                                class="text-danger">*</span></span></label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="jawatanSpek"
                                                                id="ya">
                                                            <label class="form-check-label" for="ya">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="jawatanSpek"
                                                                id="tidak" checked>
                                                            <label class="form-check-label" for="tidak">
                                                                Tidak
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4 text-end ">
                                                        <label for="" class="">Penghantaran Fizikal&nbsp;<span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="penghantaranFizikal" id="ya" checked>
                                                            <label class="form-check-label" for="ya">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="penghantaranFizikal" id="tidak">
                                                            <label class="form-check-label" for="tidak">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Penghantaran Fizikal -->
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <div class="left"></div>
                                            <div class="right">
                                                <button type="submit" class="btn-md-sm btn btn-success ">Simpan</button>
                                                <button type="button" class="btn btn-primary ms-auto" data-step="step1"
                                                    data-currenttab="application-content" data-nexttab="kod-bidang-tab">
                                                    Seterusnya
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kod-bidang" role="tabpanel" aria-labelledby="kod-bidang-tab">
                                    <div class="row mt-4 justify-content-center">
                                        <div class="col-12">
                                            <h4 class="card-title card-title-grey">KOD BIDANG</h4>
                                            <p class="card-title-desc text-primary fst-italic">
                                                Syarikat Selangor Sahaja atau Syarikat Selangor dan Lain-lain Negeri <span
                                                    class="text-danger">wajib</span> di isi.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-11">
                                            <div class="row my-2">
                                                <div class="col-2 text-end">
                                                    <b>Kod Bidang MOF</b>
                                                </div>
                                                <div class="col-2">
                                                    <select class="form-control" name="">
                                                        <option value="">Atau</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-2"></div>
                                                <div class="col-2">
                                                    <button class="btn btn-primary">Tambah</button>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row my-2">
                                                <div class="col-3"></div>
                                                <div class="col-8">
                                                    <select name="" class="form-control">
                                                        <option value="">Dan</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row my-2">
                                                <div class="col-1"></div>
                                                <div class="col-2 text-end"><b>Gred CIDB</b></div>
                                                <div class="col-8">
                                                    <select class="form-control" name="">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-2 text-end">
                                                    <b>Bidang Pengkhususan CIDB</b>
                                                </div>
                                                <div class="col-2">
                                                    <select class="form-control" name="">
                                                        <option value="">Atau</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-2"></div>
                                                <div class="col-2">
                                                    <button class="btn btn-primary">Tambah</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <div class="left">
                                                <a href="{{ route('team.create') }}"
                                                    class="btn-md-sm btn btn-info mx-1">Sebelumnya</a>
                                            </div>
                                            <div class="right">
                                                <a href="{{ route('team.create') }}"
                                                    class="btn-md-sm btn btn-success mx-1">Simpan</a>
                                                <a href="{{ route('team.create') }}"
                                                    class="btn-md-sm btn btn-primary mx-1">Hantar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Next -> open tab #2
                const nextBtn = document.querySelector('[data-nexttab="kod-bidang-tab"]');
                if (nextBtn) {
                    nextBtn.addEventListener('click', function () {
                        const nextTabEl = document.getElementById('kod-bidang-tab');
                        if (nextTabEl) new bootstrap.Tab(nextTabEl).show();
                    });
                }

                // (Optional) Previous button in tab #2
                const prevBtn = document.getElementById('btn-prev-to-makluman');
                if (prevBtn) {
                    prevBtn.addEventListener('click', function () {
                        const prevTabEl = document.getElementById('makluman-umum-tab');
                        if (prevTabEl) new bootstrap.Tab(prevTabEl).show();
                    });
                }

                // Progress line reacts to tab changes
                const barWrap = document.getElementById('custom-progress-bar');
                const tabButtons = barWrap
                    ? Array.from(barWrap.querySelectorAll('[data-bs-toggle="pill"]'))
                    : [];
                const bar = barWrap ? barWrap.querySelector('.progress-bar') : null;

                function updateProgress(targetBtn) {
                    if (!bar || !tabButtons.length) return;
                    const idx = tabButtons.indexOf(targetBtn);
                    const pct = (idx / Math.max(1, tabButtons.length - 1)) * 100; // 0% on first, 100% on last
                    bar.style.width = pct + '%';
                    bar.setAttribute('aria-valuenow', pct);
                }

                tabButtons.forEach(btn => {
                    btn.addEventListener('shown.bs.tab', (e) => updateProgress(e.target));
                });

                // set initial progress based on which tab is active on load
                const initialActive = tabButtons.find(b => b.classList.contains('active')) || tabButtons[0];
                if (initialActive) updateProgress(initialActive);
            });
        </script>

@endsection
