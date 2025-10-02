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



    </div>

    <div class="section-header">MUAT NAIK DOKUMEN</div>

    <div class="container-fluid mt-4">
  <div class="row gy-4">

    <!-- JPICT file display only -->
    <div class="col-md-6">
      <label class="form-label">JPICT :</label>
      <div class="input-group">
        <span class="input-group-text">
          <i class="bi bi-file-earmark-pdf-fill fs-4"></i>
        </span>
        <a
          @if(!empty($model->jpict))
            href="{{ asset('storage/jpict/'.$model->jpict) }}"
            target="_blank"
            title="{{ $model->jpict }}"
            class="form-control text-truncate text-decoration-none"
          @else
            class="form-control text-muted"
          @endif
        >
          {{ $model->jpict ?? 'Tiada Fail' }}
        </a>
      </div>
    </div>

    <!-- Minit Bebas file display only -->
    <div class="col-md-6">
      <label class="form-label">Minit Bebas :</label>
      <div class="input-group">
        <span class="input-group-text">
          <i class="bi bi-file-earmark-pdf-fill fs-4"></i>
        </span>
        <a
          @if(!empty($model->minit_bebas))
            href="{{ asset('storage/minit/'.$model->minit_bebas) }}"
            target="_blank"
            title="{{ $model->minit_bebas }}"
            class="form-control text-truncate text-decoration-none"
          @else
            class="form-control text-muted"
          @endif
        >
          {{ $model->minit_bebas ?? 'Tiada Fail' }}
        </a>
      </div>
    </div>

  </div>
</div>



@endsection