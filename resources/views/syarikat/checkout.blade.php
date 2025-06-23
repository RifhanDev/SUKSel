@extends('layouts.master')

@section('title')
    Senarai Tempahan
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container mt-4">
        <h5 class="mb-3">Senarai Tempahan</h5>

        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead class="table-primary text-white text-center">
                    <tr>
                        <th>Petender</th>
                        <th>No / Tajuk</th>
                        <th>Tarikh Jual</th>
                        <th>Tarikh Tutup</th>
                        <th>Harga Dokumen</th>
                        <th>Padam</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bahagian Pengurusan Maklumat</td>
                        <td>
                            <div class="fw-bold">SH/SUKSEL/14-2025</div>
                            <div class="text-primary small">
                                SEBUT HARGA BAGI PERKHIDMATAN PENYELENGGARAAN SERVER MICROSOFT ACTIVE DIRECTORY DI PEJABAT
                                SETIAUSAHA KERAJAAN NEGERI SELANGOR DAN SEMBILAN (9) PEJABAT DAERAH DAN TANAH SELANGOR BAGI
                                TEMPOH TIGA (3) TAHUN
                            </div>
                        </td>
                        <td>7 Mar 2025</td>
                        <td>17 Mar 2025</td>
                        <td>RM 30.00</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-danger">Padam</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Summary Section -->
        <div class="mt-3">
            <div class="text-end" style="max-width: 100%;">
                <div>Jumlah Tender: 1</div>
                <hr style="width: 100%; border-top: 2px solid #ccc; margin-left: 0;">
                <div>Jumlah Bayaran: <strong>RM 30.00</strong></div>
            </div>
        </div>



        <br>
        <!-- Action Buttons -->
        <div class="d-flex justify-content-end bg-light p-3 rounded">
            <button class="btn btn-danger me-2">Batal Semua Tempahan</button>
            <a href="{{ route('checkout') }}" class="btn btn-primary">Teruskan Pembayaran</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection