@extends('layouts.master')

@section('title', 'Senarai Semak Kewangan')

@section('css')

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

    <div class="section-header">BORANG TEKNIKAL</div>
    <div class="container-fluid mt-4">



        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr class="table-row text-center">
                        <th>Bilangan</th>
                        <th>Rujukan Petender</th>
                        <th>Harga Tender Asal (RM)</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row text-center">

                        <td>1</td>

                        <td>45/53</td>

                        <td>4,438,243.50</td>

                        <td>
                            <select name="status" class="form-select form-select-sm">
                                <option value="1">Lulus</option>
                                <option value="2">Gagal</option>
                            </select>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container-fluid mt-4">
            <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-success me-2">
                    Simpan
                </button>
            </div>
        </div>

        <div class="row mt-4 justify-content-center">
            <div class="col-12">
                <div class="section-header">LAMPIRAN PENILAIAN TEKNIKAL (JIKA PERLU)</div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-6">
                <div class="d-flex">
                    <!-- 1. Display file name -->
                    <input type="text" id="technicalDocName" class="form-control" placeholder="Nama Dokumen" readonly />

                    <!-- 2. File picker trigger -->
                    <button type="button" class="btn btn-success ms-3"
                        onclick="document.getElementById('technicalDocFile').click()">
                        Pilih Fail
                    </button>
                    <input type="file" id="technicalDocFile" name="technicalDocFile[]" accept=".pdf,.doc,.docx" hidden
                        onchange="document.getElementById('technicalDocName').value = this.files[0]?.name || ''" />
                </div>
            </div>

            <!-- 3. “Tambah Dokumen” button -->
            <div class="col-md-8 d-flex justify-content-start">
                <button type="button" class="btn btn-primary mt-3" onclick="/* your add-doc logic here */">
                    Tambah Dokumen
                </button>
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