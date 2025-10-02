@extends('layouts.master')

@section('title')
    @lang('translation.Data_Tables')
@endsection


@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h6 class="bg-light p-2 fw-bold">SENARAI PROJEK UNTUK PEMBELIAN TERUS</h6>

            <!-- Filter Section -->
            <div class="row g-2 align-items-center mb-3">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="No. Tender">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>-- Pilih --</option>
                        <option>Sebut Harga</option>
                        <option>Tender</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Tajuk Perolehan">
                </div>
                <div class="col-md-2">
                    <select class="form-select">
                        <option selected>Tarikh</option>
                        <option>Hari Ini</option>
                        <option>Minggu Ini</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-primary w-100">Tapis</button>
                </div>
            </div>

            <!-- Table Section -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>No. Tender/Sebut Harga</th>
                            <th>Tajuk Perolehan</th>
                            <th>Tarikh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>QT21000000023741</td>
                            <td>BEKALAN BARANGAN PERSEKOLAHAN</td>
                            <td>3/3/2024</td>
                        </tr>
                        <tr>
                            <td>QT21000000023740</td>
                            <td>TAJUK PEROLEHAN 1</td>
                            <td>2/2/2024</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection