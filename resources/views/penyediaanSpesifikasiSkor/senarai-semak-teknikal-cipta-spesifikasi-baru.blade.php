@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection

@section('content')
    <style>
        #datatable-buttons th {
            background-color: #405393 !important;
            color: white !important;
            border: 1px solid #848484;
        }

        #dynamicTable th {
            background-color: #405393 !important;
            color: white !important;
            border: 1px solid #848484;

        }

        .btn-primary {
            background: #405189;
        }

        .card-title-grey {
            background: #D9D9D9;
            padding: 5px 15px;
        }

        hr {
            border: 1px solid #E9EBEC;
        }

        /* Modal Background */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black with opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            /* Could be more or less, depending on screen size */
        }

        .close {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 28px;
            font-weight: bold;
            color: #aaa;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        #okBtn,
        #cancelBtn {
            padding: 10px 20px;
            font-size: 13px;
            border-radius: 8px;
        }

        <style>.form-type {
            display: none;
        }
    </style>

    </style>

    <div class="row">
        <div class="col-4">
            <div class="row">
                <div class="col-5 text-center">
                    <b>No. Sebut Harga / Tender</b>
                </div>
                <div class="col-7 text-center">
                    QT21000000000023741
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-2 text-center">
                    <b>PTJ</b>
                </div>
                <div class="col-10 text-center">
                    BAHAGIAN PENTADBIRAN - CAWANGAN KEWANGAN - KEMENTERIAN KEWANGAN
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col-3 text-end">
                    <b>Status</b>
                </div>
                <div class="col-9 text-center">
                    Menunggu Penyerahan Sebut Harga / Tender
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- Penetapan Skor -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">Penyediaan Spesifikasi & Skor</div>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4 class="card-title card-title-grey">TEMPLAT SPESIFIKASI</h4>
                            <p class="card-title-desc text-primary fst-italic">
                                1. Sila klik untuk Garis Panduan Item dan Spesifikasi.<br>
                                2. Sila klik pautan UOM untuk carian nama unit ukuran sebagai panduan. Nama unit ukursan
                                yang dikehendaki perlu dikunci masuk di ruang medan Unit Ukuran dan pilih dari senarai
                                'autocomplete' yang dipaparkan<br>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-3 mx-3">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label for="" class="">Tajuk Dokumen</label>
                        </div>
                        <div class="col-md-7">
                            <textarea name="" class="form-control"
                                id="">PERKHIDMATAN DIGITAL FORENSIK KE ATAS ALIRAN PROSES SISTEM XXXX</textarea>
                        </div>
                    </div>
                    <div class="row mb-3 mx-3">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label for="" class="">Jenis Item</label>
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="" id="" value="Perkhidmatan" class="form-control">
                        </div>
                        <div class="col-md-3 d-flex justify-content-end">
                            <label for="" class="">Jenis Spesifikasi</label>
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="" id="" value="Teknikal" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3 mx-3">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label for="" class="">Jenis Barang</label>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenisBarang" id="jenisBarang1" checked>
                                <label class="form-check-label" for="jenisBarang1">
                                    Tempatan
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenisBarang" id="jenisBarang2">
                                <label class="form-check-label" for="jenisBarang2">
                                    Import
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-end">
                            <label for="" class="">Wajaran Spesifikasi</label>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="wajaranSpesifikasi"
                                    id="wajaranSpesifikasi1">
                                <label class="form-check-label" for="wajaranSpesifikasi1">
                                    Mengikut Keutamaan
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="wajaranSpesifikasi"
                                    id="wajaranSpesifikasi2" checked>
                                <label class="form-check-label" for="jenisBarang2">
                                    Secara Terus
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 mx-3">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label for="" class="">Status</label>
                        </div>
                        <div class="col-md-2 ">
                            <input type="text" name="" id="" value="Menunggu Penyerahan" class="form-control">
                        </div>
                        <div class="col-md-3 d-flex justify-content-end">
                            <label for="" class="">Penghantaran Fizikal</label>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fizikal"
                                    id="fizikal1">
                                <label class="form-check-label" for="fizikal1">
                                    Ya
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fizikal"
                                    id="fizikal2" checked>
                                <label class="form-check-label" for="fizikal2">
                                    Tidak
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h4 class="card-title card-title-grey">SPESIFIKASI</h4>
                            <p class="card-title-desc text-primary fst-italic">
                                Klik "ikon pensil" untuk penetapan skor.<br>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-3 mx-3">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100"
                            data-table-sort="id" data-table-order="asc" data-page="1">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">Item <span class="text-danger">*</span></th>
                                    <th class="text-center align-middle" rowspan="2">Unit Ukuran <span
                                            class="text-danger">*</span></th>
                                    <th class="text-center align-middle" rowspan="2">Kekerapan / Unit Ukuran <span
                                            class="text-danger">*</span></th>
                                    <th class="text-center align-middle" rowspan="2">Bil. Unit Ukuran Sehari <span
                                            class="text-danger">*</span></th>
                                    <th class="text-center align-middle" rowspan="2">Bil. Unit Ukuran Sebulan <span
                                            class="text-danger">*</span></th>
                                    <th class="text-center align-middle" rowspan="2">Kuantiti <span
                                            class="text-danger">*</span></th>
                                    <th class="text-center align-middle" rowspan="2">Penetapan Skor <span
                                            class="text-danger">*</span></th>
                                    <th class="text-center align-middle" rowspan="2">Tindakan <span
                                            class="text-danger">*</span></th>
                                </tr>
                                <tr>
                                    <th class="text-center">Spesifikasi <span class="text-danger">*</span></th>
                                </tr>
                            </thead>
                            <tbody id="specificationTableBody">
                                <tr>
                                    <td style="width: 30%"><input class="form-control" type="text" name=""
                                            value="PERKHIDMATAN DIGITAL FORENSIK KE ATAS ALIRAN PROSES SISTEM XXXX" id="">
                                    </td>
                                    <td>
                                        <select class="form-control" name="" id="">
                                            <option value="">AU - Activity UOM</option>
                                        </select>
                                    </td>
                                    <td><input class="form-control text-center" type="number" name="" value="1" id=""></td>
                                    <td></td>
                                    <td></td>
                                    <td><input class="form-control text-center" type="number" name="" value="1" id=""></td>
                                    <td>
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <button class="btn btn-success m-1 tambah-spesifikasi ">Tambah Spesifikasi</button>
                                        <button class="btn btn-danger m-1 hapus-row">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12 d-flex justify-content-end">
                            <a href="javascript: void(0)" class="btn-md-sm btn btn-success mx-1">Muat Turun Templat</a>
                            <a href="javascript: void(0)" class="btn-md-sm btn btn-success mx-1">Muat Naik Dokumen BQ /
                                Spesifikasi</a>
                            <a href="javascript: void(0)" class="btn-md-sm btn btn-success mx-1">Tambah Item</a>

                        </div>
                    </div>
                    <!-- Penetapan Skor -->

                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <a href="javascript: void(0)" class="btn-md-sm btn btn-primary mx-1">Simpan</a>
                            <a href="javascript: void(0)" class="btn-md-sm btn btn-success mx-1">Selesai</a>
                            <a href="javascript: void(0)" class="btn-md-sm btn btn-danger mx-1">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!-- Modal (Popup Form) -->
    <div id="popupForm" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Penetapan Skor</h2>
            <br>
            <form id="form">

                <!-- For Text Option -->
                <div id="textForm" class="form-type">

                    <div class="row mb-3 mx-3">
                        <div class="col-md-4 d-flex justify-content-end">
                            <label for="" class="">Spesifikasi</label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="" class="form-control"
                                id="">PERKHIDMATAN DIGITAL FORENSIK KE ATAS ALIRAN PROSES SISTEM XXXX</textarea>
                        </div>
                    </div>
                    <div class="row mb-3 mx-3">
                        <div class="col-md-4 d-flex justify-content-end">
                            <label for="" class="">Jenis Skema Maklumbalas</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="" id="" value="Text" class="form-control">
                        </div>
                        <div class="col-md-2 d-flex justify-content-end">
                            <label for="" class="">Jenis Skor</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="" id="" value="Pengguna" class="form-control">
                        </div>

                    </div>
                    <div class="row mb-3 mx-3">
                        <div class="col-md-4 d-flex justify-content-end">
                            <label for="" class="">Skor Maksima</label>
                        </div>
                        <div class="col-md-2">
                            <input type="number" name="" id="" value="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-success mx-1 okBtn">OK</button>
                            <button type="button" class="btn btn-danger mx-1 cancelBtn">Batal</button>
                        </div>
                    </div>
                </div>
                <!-- For Ya/Tidak Option -->
                <div id="yesNoForm" class="form-type">

                    <div class="row mb-3 mx-3">
                        <div class="col-md-4 d-flex justify-content-end">
                            <label for="" class="">Ya/Tidak</label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="" class="form-control"
                                id="">PERKHIDMATAN DIGITAL FORENSIK KE ATAS ALIRAN PROSES SISTEM XXXX</textarea>
                        </div>
                    </div>
                    <div class="row mb-3 mx-3">
                        <div class="col-md-4 d-flex justify-content-end">
                            <label for="" class="">Jenis Skema Maklumbalas</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="" id="" value="Ya/Tidak" class="form-control">
                        </div>

                        <div class="col-md-2 d-flex justify-content-end">
                            <label for="" class="">Jenis Skor</label>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control jenis-skor">
                                <option value="">Automatik</option>
                                <option value="">Manual</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 mx-3">
                        <div class="col-md-4 d-flex justify-content-end">
                            <label for="" class="">Skema Skor:</label>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="">Ya</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="" id="" value="" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-2">
                                    <label for="">Tidak</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="" id="" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-success mx-1 okBtn">OK</button>
                            <button type="button" class="btn btn-danger mx-1 cancelBtn">Batal</button>
                        </div>
                    </div>
                </div>

                <!-- For Number Option -->
                <div id="numberForm" class="form-type">

                    <div class="row mb-3 mx-3">
                        <div class="col-md-4 d-flex justify-content-end">
                            <label for="" class="">Spesifikasi</label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="" class="form-control"
                                id="">PERKHIDMATAN DIGITAL FORENSIK KE ATAS ALIRAN PROSES SISTEM XXXX</textarea>
                        </div>
                    </div>
                    <div class="row mb-3 mx-3">
                        <div class="col-md-4 d-flex justify-content-end">
                            <label for="" class="">Jenis Skema Maklumbalas</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="" id="" value="Text" class="form-control">
                        </div>
                        <div class="col-md-2 d-flex justify-content-end">
                            <label for="" class="">Jenis Skor</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="" id="" value="Pengguna" class="form-control">
                        </div>
                    </div>
                    <br>
                    <h4 class="card-title card-title-grey">SKEMA SKOR</h4>
                    <br>

                    <div class="container mb-5">
                        <table class="table table-bordered" id="dynamicTable">
                            <thead>
                                <tr>
                                    <th style="width: 5%; text-align: center;">Pilih</th>
                                    <th style="width: 30%;">Dari</th>
                                    <th style="width: 30%;">Hingga</th>
                                    <th style="width: 30%;">Skor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Rows will be added dynamically -->
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-end">
                            <button type="button" id="addRow" class="btn btn-success mx-2">Tambah</button>
                            <button type="button" id="deleteRow" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-success mx-1 okBtn">OK</button>
                            <button type="button" class="btn btn-danger mx-1 cancelBtn">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Cipta Spesifikasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="card-title card-title-grey">CARI</h4>

                    <div class="mx-3">
                        <div class="row my-4">
                            <div class="col-md-4 text-end">
                                Klon Spesifikasi Daripada <span class="text-danger">*</span>
                            </div>
                            <div class="col-md-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klonSpesifikasi"
                                        id="klonSpesifikasi1" checked>
                                    <label class="form-check-label" for="klonSpesifikasi1">
                                        Templat Standard / Kosong
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klonSpesifikasi"
                                        id="klonSpesifikasi2">
                                    <label class="form-check-label" for="klonSpesifikasi2">
                                        Sebut Harga / Tender Yang Lepas
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="col-4 text-end">Jenis Item</div>
                            <div class="col-4">
                                <select name="" id="" class="form-control">
                                    <option value="">Bekalan</option>
                                    <option value="">Perkhidmatan</option>
                                </select>
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-success mx-1" data-bs-dismiss="modal">Cari</button>
                                <button type="button" class="btn btn-success mx-1">Set Semula</button>
                            </div>
                        </div>
                    </div>

                    <h4 class="card-title card-title-grey">TEMPLAT</h4>

                    <div class="mx-3">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100"
                            data-table-sort="id" data-table-order="asc" data-page="1">
                            <thead>
                                <tr>
                                    <th class="text-center">Tajuk / Dokumen</th>
                                    <th class="text-center">Skor Maksima</th>
                                    <th class="text-center">Jenis Item</th>
                                    <th class="text-center">Dicipta Oleh</th>
                                    <th class="text-center">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5">Tiada rekod dijumpai</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const modal = document.getElementById("popupForm");


        function showPopupForm(type) {
            // Hide all first
            document.querySelectorAll('.form-type').forEach(form => {
                form.style.display = 'none';
            });

            // Show the right one
            if (type === 'text') {
                document.getElementById('textForm').style.display = 'block';
            } else if (type === 'nombor') {
                document.getElementById('numberForm').style.display = 'block';
            } else if (type === 'ya/tidak') {
                document.getElementById('yesNoForm').style.display = 'block';
            }

            // Show the popup
            modal.style.display = "block";
        }


        // =====================
        // Table handling
        const specTableBody = document.getElementById("specificationTableBody"); // main spesifikasi table
        const dynamicTableBody = document.querySelector("#dynamicTable tbody");   // dynamic popup table

        // Untuk SPESIFIKASI Table (outside)
        specTableBody.addEventListener('click', function (e) {
            const target = e.target;

            // Add row
            if (target.classList.contains('tambah-spesifikasi')) {
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td><input class="form-control" type="text" name="spesifikasi" placeholder="Spesifikasi Baru"></td>
                    <td colspan="5"></td>
                    <td>
                        <select class="form-control penetapan-skor">
                            <option value="">Select Penetapan Skor</option>
                            <option value="text">Text</option>
                            <option value="nombor">Nombor</option>
                            <option value="ya/tidak">Ya/Tidak</option>
                        </select>
                    </td>
                    <td class="d-flex justify-content-center">
                        <button class="btn btn-success m-1 tambah-spesifikasi">Tambah Spesifikasi</button>
                        <button class="btn btn-danger m-1 hapus-row">Hapus</button>
                    </td>
                `;
                specTableBody.appendChild(newRow);
            }

            // Delete row
            if (target.classList.contains('hapus-row')) {
                const row = target.closest('tr');
                row.remove();
            }
        });

        // Bila pilih jenis skor dalam spesifikasi table
        specTableBody.addEventListener('change', function (e) {
            const target = e.target;
            if (target.classList.contains('penetapan-skor')) {
                const selectedValue = target.value;
                if (selectedValue === 'text' || selectedValue === 'nombor' || selectedValue === 'ya/tidak') {
                    showPopupForm(selectedValue);
                }
            }
        });

        // =====================
        // Dynamic table in number popup
        const addRowBtn = document.getElementById("addRow");
        const deleteRowBtn = document.getElementById("deleteRow");

        addRowBtn.addEventListener("click", function () {
            const newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td class="text-center"><input type="checkbox" class="form-check-input"></td>
                <td><input type="number" class="form-control" placeholder="Dari"></td>
                <td><input type="number" class="form-control" placeholder="Hingga"></td>
                <td><input type="number" class="form-control" placeholder="Skor"></td>
            `;
            dynamicTableBody.appendChild(newRow);
        });

        deleteRowBtn.addEventListener("click", function () {
            const checkboxes = dynamicTableBody.querySelectorAll('input[type="checkbox"]:checked');
            if (checkboxes.length === 0) {
                alert("Sila pilih baris untuk dipadam.");
                return;
            }
            checkboxes.forEach(checkbox => {
                checkbox.closest('tr').remove();
            });
        });

        // =====================
        // Modal close handling
        document.querySelector(".close").addEventListener("click", function () {
            modal.style.display = "none";
        });

        

        // Click outside to close
        window.onclick = function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };

        // Handle all OK buttons
        document.querySelectorAll(".okBtn").forEach(btn => {
            btn.addEventListener("click", function () {
                console.log("Form submitted");
                modal.style.display = "none";
            });
        });

        // Handle all Cancel buttons
        document.querySelectorAll(".cancelBtn").forEach(btn => {
            btn.addEventListener("click", function () {
                modal.style.display = "none";
            });
        });


    </script>

@endsection