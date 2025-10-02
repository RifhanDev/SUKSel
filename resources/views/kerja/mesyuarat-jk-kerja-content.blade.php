@extends('layouts.master')

@section('title', 'Senarai Ahli Jawatankuasa')

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

    <div class="section-header">SENARAI AHLI JAWATANKUASA PEMBUKA</div>
    <div class="container-fluid mt-4">

        <div class="row mt-3">
            <div class="col-md-5">
                <input type="text" class="form-control" value="Menunggu Penyerahan Pembentukan Jawatankuasa" readonly>
            </div>

            <div class="col-md-3 d-flex align-items-center">
                <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" name="checkbox1" id="checkbox1" value="1">
                    <label class="form-check-label mb-0" for="checkbox1">
                        Untuk Kelulusan
                    </label>
                </div>
            </div>
        </div>


        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Nama</th>
                        <th>No. Kad Pengenalan</th>
                        <th>Jawatan</th>
                        <th>Email</th>
                        <th>Gred</th>
                        <th>P&P</th>
                        <th>Peranan</th>
                        <th>Hadir</th>
                    </tr>
                </thead>
                <tbody>

                    <td class="text-center">
                        100002480022
                    </td>

                    <td class="text-center">
                        Ali Bin Abu
                    </td>

                    <td class="text-center">
                        KETUA PENOLONG SETIAUSAHA KANAN
                    </td>

                    <td class="text-center">
                        <a href="mailto:training@commerceedc.com.my" class="text-decoration-none">
                            training@commerceedc.com.my
                        </a>
                    </td>

                    <td class="text-center">
                        G52
                    </td>

                    <td class="text-center">
                        Ya
                    </td>

                    <td class="text-center">
                        Pengerusi
                    </td>

                    <td>
                        <div class="d-flex justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="checkbox" value="1">
                                <label class="form-check-label" for="checkbox"></label>
                            </div>
                        </div>
                    </td>


                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container-fluid mt-4">

            <div class="d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-success me-2">
                    Tambah
                </button>
                <button type="submit" class="btn btn-danger">
                    Hapus
                </button>
            </div>

        </div>

        {{-- Tindakan Modal --}}
        <div class="modal fade" id="tindakanModal" tabindex="-1" aria-labelledby="tindakanModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="tindakanModalLabel">Tindakan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    @csrf

                    <div class="modal-body">
                        {{-- Lembaran Imbangan --}}
                        <div class="section-header">LEMBARAN IMBANGAN</div>
                        <p class="text-primary mb-3">Perlu diisi oleh Petender</p>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Aset Tetap (RM)</label>
                                <input type="text" name="aset_tetap" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Aset Semasa (RM)</label>
                                <input type="text" name="aset_semasa" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Liabiliti Semasa (RM)</label>
                                <input type="text" name="liabiliti_semasa" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Long Term / Liabiliti Tetap (RM)</label>
                                <input type="text" name="liabiliti_tetap" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Wang Tunai Dalam Tangan (RM)</label>
                                <input type="text" name="wang_tunai" class="form-control">
                            </div>
                        </div>

                        {{-- Borang CA / Surat Bank --}}
                        <div class="section-header mt-4">BORANG CA / SURAT BANK</div>
                        <p class="text-primary mb-3">Perlu diisi oleh Petender</p>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Baki Kemudahan Kredit</label>
                                <input type="text" name="baki_kredit" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Kembali
                        </button>
                        <button type="button" class="btn btn-info">
                            Laporan
                        </button>
                        <button type="submit" class="btn btn-success">
                            Simpan
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