@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection


@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
@endsection
    <div class="card">
        <div class="card-body">
            <!-- STEP INDICATOR -->
            <div class="progress-nav mb-4 p-2">
                <div class="progress" style="height: 2px;">
                    <div id="progressBar" class="progress-bar bg-primary" style="width: 0%;"></div>
                </div>
                <ul class="nav nav-pills progress-bar-tab custom-nav justify-content-between mt-2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill active" id="step1-tab" data-bs-toggle="pill"
                            data-bs-target="#step1" type="button" role="tab" aria-controls="step1" aria-selected="true"
                            onclick="updateProgressBar(1)">1</button>
                        <div class="text-center mt-2">Cipta Projek</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill" id="step2-tab" data-bs-toggle="pill" data-bs-target="#step2"
                            type="button" role="tab" aria-controls="step2" aria-selected="false"
                            onclick="updateProgressBar(2)">2</button>
                        <div class="text-center mt-2">Maklumat BQ</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill" id="step3-tab" data-bs-toggle="pill" data-bs-target="#step3"
                            type="button" role="tab" aria-controls="step3" aria-selected="false"
                            onclick="updateProgressBar(3)">3</button>
                        <div class="text-center mt-2">Kod Bidang</div>
                    </li>
                </ul>
            </div>

            <!-- TAB CONTENT -->
            <div class="tab-content">
                <!-- Step 1 -->
                <div class="tab-pane fade show active" id="step1" role="tabpanel">
                    <div class="card-body">
                        <h6 class="bg-light p-2 fw-bold">CIPTA PROJEK UNTUK PEMBELIAN TERUS</h6>

                        <form>
                            <!-- Tajuk Perolehan -->
                            <div class="mb-3">
                                <label for="tajukPerolehan" class="form-label">Tajuk Perolehan <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control text-success" id="tajukPerolehan"
                                    rows="2">BEKALAN BARANGAN PERSEKOLAHAN</textarea>
                            </div>

                            <!-- Disediakan Untuk PTJ -->
                            <div class="mb-3">
                                <label for="ptj" class="form-label">Disediakan Untuk PTJ <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        value="BAHAGIAN PENTADBIRAN – CAWANGAN KEWANGAN – KEMENTERIAN KEWANGAN">
                                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                                </div>
                            </div>

                            <!-- No Rujukan, Harga -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="rujukanFail" class="form-label">No. Rujukan Fail <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control text-success" value="SH/DF/TRG">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="hargaIndikatif" class="form-label">Harga Indikatif Jabatan <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <!-- Tarikh Buka / Tutup -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="tarikhBuka" class="form-label">Tarikh Buka</label>
                                    <input type="date" class="form-control" value="2021-09-17">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="tarikhTutup" class="form-label">Tarikh Tutup</label>
                                    <input type="date" class="form-control" value="2021-10-17">
                                </div>
                            </div>

                            <!-- Zon / Lokasi -->
                            <div class="mb-3">
                                <label class="form-label d-block">Zon / Lokasi</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="zonLokasi" id="zonYa" value="ya">
                                    <label class="form-check-label" for="zonYa">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="zonLokasi" id="zonTidak"
                                        value="tidak" checked>
                                    <label class="form-check-label" for="zonTidak">Tidak</label>
                                </div>
                            </div>

                            <!-- Lokaliti & Kategori -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="lokaliti" class="form-label">Lokaliti Liputan</label>
                                    <select class="form-select">
                                        <option selected disabled>Sila Pilih</option>
                                        <option>Selangor</option>
                                        <option>Kuala Lumpur</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="kategori" class="form-label">Kategori Perolehan <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select">
                                        <option selected>ICT</option>
                                        <option>Perkhidmatan</option>
                                        <option>Bekalan</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Sumber & Terbuka Kepada -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label d-block">Sumber Peruntukan <span
                                            class="text-danger">*</span></label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sumber" id="pembangunan"
                                            value="pembangunan" checked>
                                        <label class="form-check-label" for="pembangunan">Pembangunan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sumber" id="mengurus"
                                            value="mengurus">
                                        <label class="form-check-label" for="mengurus">Mengurus</label>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label d-block">Terbuka Kepada <span
                                            class="text-danger">*</span></label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="terbuka" id="bumiputra"
                                            value="bumiputra">
                                        <label class="form-check-label" for="bumiputra">Bumiputra</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="terbuka" id="semua" value="semua"
                                            checked>
                                        <label class="form-check-label" for="semua">Semua</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-success me-2">Simpan</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="goToTab('step2-tab', 2)">Seterusnya</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="tab-pane fade" id="step2" role="tabpanel">
                    <h6 class="bg-light p-2 fw-bold">MAKLUMAT SPESIFIKASI KAJIAN</h6>

                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="table-primary text-center">
                                    <tr>
                                        <th>Bil.</th>
                                        <th>Item</th>
                                        <th>Kuantiti</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Monitor</td>
                                        <td>10</td>
                                        <td class="text-center">
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#paparanModal">
                                                Paparan
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- Modal -->
                            <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light">
                                            <h6 class="modal-title fw-bold" id="tambahModalLabel">Cipta Spesifikasi</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="formTambah">
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label">Nama Item <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" placeholder="" required>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label">Kuantiti <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" placeholder="" required>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label">SST <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <select class="form-select" required>
                                                            <option selected disabled>Ya/Tidak</option>
                                                            <option>Ya</option>
                                                            <option>Tidak</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="text-end mt-3">
                                <button class="btn btn-info text-white" data-bs-toggle="modal"
                                    data-bs-target="#tambahModal">Tambah</button>
                            </div>
                        </div>
                    </div>

                    <!-- Paparan Modal -->
                    <div class="modal fade" id="paparanModal" tabindex="-1" aria-labelledby="paparanModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <!-- Butiran Item -->
                                    <div class="p-3">
                                        <h6 class="bg-light p-2 fw-bold">Butiran Item</h6>
                                        <div class="row mb-2">
                                            <label class="col-md-4 col-form-label">Nama Item</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control bg-light" value="MONITOR" readonly>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-md-4 col-form-label">Kuantiti</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" value="10" readonly>
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-md-4 col-form-label">Brand <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" value="Acer">
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-md-4 col-form-label">Harga Seunit (RM) <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" value="10,000.00">
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-md-4 col-form-label">Harga Keseluruhan (RM) <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" value="100,000.00">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <label class="col-md-4 col-form-label">Harga Termasuk SST</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control bg-light" value="100,008.00"
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Muat Naik Dokumen -->
                                    <h6 class="bg-light p-2 fw-bold">Muat Naik Dokumen Sokongan</h6>
                                    <div class="px-3 pb-3">
                                        <p class="text-muted">Sila Muat Naik Dokumen Sokongan di ruangan bawah.</p>
                                        <div class="border rounded text-center p-4" style="border-style: dashed;">
                                            <label for="dokumenUpload" class="d-block">
                                                <i class="bi bi-cloud-upload fs-1 text-secondary"></i><br>
                                                <span class="text-secondary">Muat Naik Dokumen</span>
                                                <input type="file" id="dokumenUpload" class="d-none">
                                            </label>
                                        </div>

                                        <div class="text-end mt-4">
                                            <button type="button" class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-success me-2">Simpan</button>
                        <button type="button" class="btn btn-primary" onclick="goToTab('step3-tab', 3)">Seterusnya</button>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="tab-pane fade" id="step3" role="tabpanel">
                    <h6 class="bg-light p-2 fw-bold">KOD BIDANG</h6>
                    <p class="text-primary small ms-2">
                        Ruangan Kod Bidang ini <strong>WAJIB</strong> diisi oleh Pemilik Projek
                    </p>

                    <!-- Kod Bidang MOF -->
                    <div class="row align-items-center mb-3">
                        <div class="col-md-3">
                            <label class="form-label">Kod Bidang MOF</label>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option selected>Atau</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="...">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary">Tambah</button>
                        </div>
                    </div>

                    <!-- Dan separator -->
                    <div class="row mb-3">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <select class="form-select">
                                <option selected>Dan</option>
                            </select>
                        </div>
                    </div>

                    <!-- Gred & Bidang CIDB -->
                    <div class="row align-items-center mb-3">
                        <div class="col-md-3">
                            <label class="form-label">Gred CIDB</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select">
                                <option selected disabled>Pilih Gred</option>
                            </select>
                        </div>
                    </div>

                    <div class="row align-items-center mb-3">
                        <div class="col-md-3">
                            <label class="form-label">Bidang Pengkhususan CIDB</label>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option selected>Atau</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="...">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary">Tambah</button>
                        </div>
                    </div>

                    <!-- Bottom Buttons -->
                    <div class="d-flex justify-content-between mt-4">
                        <button class="btn btn-info" onclick="goToTab('step2-tab', 2)">Sebelumnya</button>
                        <div>
                            <button class="btn btn-success me-2">Simpan</button>
                            <button class="btn btn-primary">Terbitkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- SCRIPT TO UPDATE PROGRESS -->
    <script>
        function updateProgressBar(step) {
            const progressBar = document.getElementById("progressBar");
            if (step === 1) {
                progressBar.style.width = "0%";
            } else if (step === 2) {
                progressBar.style.width = "50%";
            } else if (step === 3) {
                progressBar.style.width = "100%";
            }
        }

        function goToTab(tabId, step) {
            const tabTrigger = new bootstrap.Tab(document.getElementById(tabId));
            tabTrigger.show();
            updateProgressBar(step);
        }
    </script>
    <script>
        document.getElementById('kategoriJenis').addEventListener('change', function () {
            const selected = this.value;

            const ciptaTenderForm = document.getElementById('ciptaTenderForm');
            const kerjaForm = document.getElementById('kerjaForm');

            if (selected === 'kerja') {
                ciptaTenderForm.style.display = 'none';
                kerjaForm.style.display = 'block';
            } else {
                ciptaTenderForm.style.display = 'block';
                kerjaForm.style.display = 'none';
            }
        });
    </script>
@endsection