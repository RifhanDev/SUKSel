@extends('layouts.master')

@section('title', 'Penyediaan Spesifikasi Tender')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />

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

    <div class="section-header">PENYEDIAAN SPESIFIKASI TENDER</div>
    <div class="container-fluid mt-4">



        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Diskripsi Kerja</th>
                        <th>Ya/Tidak</th>
                        <th>Catatan</th>
                        <th>Dokumen</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <!-- 1. Input Field -->
                        <td>
                            <input type="text" name="your_input_name" class="form-control form-control-sm"
                                placeholder="Masukkan teks…">
                        </td>

                        <!-- 2. Ya/Tidak Selection -->
                        <td>
                            <select name="your_yes_no_field" class="form-select form-select-sm">
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                        </td>

                        <!-- 3. Catatan -->
                        <td>
                            <textarea name="catatan" class="form-control form-control-sm" rows="1"
                                placeholder="Catatan…"></textarea>
                        </td>

                        <!-- 4. Upload -->
                        <td>
                            <input type="file" name="file_upload" class="form-control form-control-sm">
                        </td>

                        <!-- 5. Delete -->
                        <td>
                            <button type="button" class="btn btn-sm btn-danger" onclick="/* your delete logic here */">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container-fluid mt-4">

            <div class="d-flex justify-content-end mb-3">
                <a class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#uploadModal">
                    <i class="bi bi-upload me-1"></i>
                    Muat Naik BQ/Spesifikasi 
                    <a class="btn btn-success">
                        <i class="bi bi-plus-lg me-1"></i>
                        Tambah Spesifikasi
                    </a>
            </div>

        </div>

        {{-- Modal Markup --}}
        <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="uploadModalLabel">
                            Muat Naik BQ/Spesifikasi
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="bqSpecFile" class="form-label">
                                    Pilih fail BQ/Spesifikasi
                                </label>
                                <input class="form-control" type="file" id="bqSpecFile" name="bq_spec_file"
                                    accept=".pdf,.doc,.docx" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Batal
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Muat Naik
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            // make any <tr data-href> act like a link
            document.querySelectorAll('tbody tr[data-href]')
                .forEach(row => {
                    row.style.cursor = 'pointer';
                    row.addEventListener('click', () => {
                        window.location.href = row.dataset.href;
                    });
                });

        </script>

@endsection