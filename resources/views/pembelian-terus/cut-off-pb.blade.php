@extends('layouts.master')

@section('title', 'Cut-Off')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

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

        .dropzone {
            background-color: inherit !important;
            border: 2px dashed rgba(108, 117, 125, 0.5) !important;
            width: 300px;
            min-height: 100px !important;
            height: 150px !important;
        }

        .dz-message .dz-text {
            font-size: 1.0rem;
        }
    </style>
@endsection


@section('content')
    <div class="section-header">PENENTUAN CUT-OFF</div>
    <div class="container-fluid mt-4">

        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Bil.</th>
                        <th>Nama Pembekal</th>
                        <th>Harga Termasuk SST (RM)</th>
                        <th>Pilih</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>1</td>
                        <td>Z&Z PROJECT MANAGEMENT SDN BHD</td>
                        <td>410,400.00</td>
                        <td class="text-center">
                            <input type="checkbox" class="form-check-input">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-3 text-end">
            <!-- Button trigger modal -->
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah</button>
        </div>

    </div>
    <br>
    <!-- 2. Section header -->
    <div class="section-header">MUAT NAIK DOKUMEN</div>

    <!-- 3. Two Dropzone forms side by side -->
    <div class="container-fluid mt-4">
        <div class="row gy-4">

            <!-- JPICT upload -->
            <div class="col-md-6">
                <label for="jpictDropzone" class="form-label">JPICT :</label>
                <form action="/upload/jpict" method="POST" enctype="multipart/form-data" class="dropzone"
                    id="jpictDropzone">
                    <!-- Laravel users: insert @csrf here -->
                    <div class="dz-message">
                        <i class="bi bi-cloud-upload"></i><br>
                        <span class="dz-text">Sila Muat Naik fail di sini</span>
                    </div>
                </form>
            </div>

            <!-- Minit Bebas upload -->
            <div class="col-md-6">
                <label for="minitDropzone" class="form-label">Minit Bebas :</label>
                <form action="/upload/minit" method="POST" enctype="multipart/form-data" class="dropzone"
                    id="minitDropzone">
                    <!-- Laravel users: insert @csrf here -->
                    <div class="dz-message">
                        <i class="bi bi-cloud-upload"></i><br>
                        <span class="dz-text">Sila Muat Naik fail di sini</span>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="mt-4 d-flex justify-content-end gap-2">
        <button class="btn btn-info">Laporan</button>
        <button class="btn btn-success">Simpan</button>
    </div>

    <!-- 4. Initialize Dropzone -->
    <script>
        // prevent auto-discovery, we'll instantiate manually
        Dropzone.autoDiscover = false;

        // Common Dropzone options
        const commonOpts = {
            maxFiles: 1,
            acceptedFiles: ".pdf,.doc,.docx,.jpg,.png", // adjust as needed
            addRemoveLinks: true,
            dictRemoveFile: "Buang",
            init: function () {
                this.on("success", (file, resp) => {
                    console.log("Uploaded:", resp);
                });
                this.on("error", (file, err) => {
                    console.error("Upload error:", err);
                });
            }
        };

        // JPICT dropzone
        new Dropzone("#jpictDropzone", {
            url: "/upload/jpict",
            ...commonOpts
        });

        // Minit Bebas dropzone
        new Dropzone("#minitDropzone", {
            url: "/upload/minit",
            ...commonOpts
        });
    </script>
@endsection