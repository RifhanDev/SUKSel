@extends('layouts.master')

@section('title')
    Lawatan Tapak (Syarikat)
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container mt-4">

        {{-- Page Header --}}
        <h4 class="mb-4">Dokumen Tender</h4>

        {{-- Table --}}
        <div class="table-responsive">
            <table class="table table-bordered align-middle text-nowrap">
                <thead class="table-primary">
                    <tr>
                        <th style="width: 50px;">Bil.</th>
                        <th>No / Tajuk</th>
                        <th>Alamat Lawatan Tapak</th>
                        <th style="width: 160px;">Tarikh & Waktu</th>
                        <th style="width: 120px;">Wajib Hadir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bilik Gerakan MTES, Tingkat Bawah, Pejabat SUK Selangor</td>
                        <td>Bilik Gerakan MTES, Tingkat Bawah, Pejabat SUK Selangor</td>
                        <td>20 Jun 2024 15:00</td>
                        <td class="text-center">
                            <input type="checkbox" checked disabled>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Confirmation button --}}
        <div class="text-end my-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#attendanceModal">
                Pengesahan Kehadiran
            </button>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="attendanceModal" tabindex="-1" aria-labelledby="attendanceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="attendanceModalLabel">Pengesahan Kehadiran</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <table class="table table-bordered text-nowrap mb-0">
                            <thead class="table-primary text-center align-middle">
                                <tr>
                                    <th style="width: 150px;">No IC</th>
                                    <th>Nama Individu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" value="984356089032" readonly>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" value="ALI BIN ABU" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <small class="text-muted mt-3 d-block">
                            Nota: Nama ejen dan penama hendaklah dinyatakan di sijil CIDB dan MoF.
                        </small>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection