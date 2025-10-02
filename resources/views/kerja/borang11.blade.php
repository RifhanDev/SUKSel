@extends('layouts.master')

@section('title', 'Borang 11')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

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

        .formula-line {
            display: flex;
            align-items: center;
        }

        .formula-line .label {
            width: 250px;
            /* adjust so all labels fit neatly */
        }

        .formula-line .equal {
            margin-left: 10px;
        }
    </style>
@endsection

@section('content')

    <div class="section-header">BORANG 11b - PENILAIAN KEUPAYAAN PETENDER
    </div>
    <div class="container-fluid mt-4">
        <h5 class="fw-bold text-center">PENGIRAAN MARKAH PENILAIAN BAGI TENDER KERJA PENYELENGGARAAN MEKANIKAL / ELETRIKAL
        </h5>

        <div class="table-responsive mt-4">

            <table id="borang-11-table" class="table align-middle table-hover table-bordered mt-3">
                <thead class="table-primary">
                    <tr>
                        <th colspan="7">NO. RUJUKAN PETENDER: </th>
                    </tr>
                    <tr class="text-center">
                        <th rowspan="2">FAKTOR / KRITERIA PENILAIAN</th>
                        <th rowspan="2">NILAI</th>
                        <th rowspan="2">MARKAH</th>
                        <th rowspan="2">WAJARAN</th>
                        <th rowspan="2">JUMLAH MARKAH</th>
                        <th colspan="2">MARKAH KELAYAKAN MINIMUM</th>
                    </tr>

                    <tr class="text-center">
                        <th>P.B.*</th>
                        <th>P.B.P#</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>


        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <button class="btn btn-success m-1">Simpan</button>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        // ---- Sample data (edit as needed) ----
        const rows = [
            { type: 'section', section: 'A - KEUPAYAAN KEWANGAN' },
            { type: 'item', butiran: 'A1 - Keupayaan Biayawan', nilai: '', markah: '', wajaran: '', jumlah: '', pb: '', pbp: '' },

            { type: 'section', section: 'B - KEUPAYAAN TEKNIKAL' },
            { type: 'item', butiran: 'B1 - Pengalaman Kerja', nilai: '', markah: '', wajaran: '', jumlah: '', pb: '', pbp: '' },
            { type: 'item', butiran: 'B1.1 - Jumlah Keseluruhan Kerja', nilai: '', markah: '', wajaran: '', jumlah: '', pb: '', pbp: '' },
            { type: 'item', butiran: 'B1.2 - Nilai Kerja Terbesar', nilai: '', markah: '', wajaran: '', jumlah: '', pb: '', pbp: '' },
            { type: 'item', butiran: 'Markah Purata', nilai: '', markah: '', wajaran: '', jumlah: '', pb: '', pbp: '' },

            { type: 'item', butiran: 'B2 - Kakitangan Teknikal', nilai: '', markah: '', wajaran: '', jumlah: '', pb: '', pbp: '' },
            { type: 'item', butiran: 'B2.1 - Bilangan Kakitangan Teknikal', nilai: '', markah: '', wajaran: '', jumlah: '', pb: '', pbp: '' },
            { type: 'item', butiran: 'B2.2 - Pengalaman Kakitangan Teknikal', nilai: '', markah: '', wajaran: '', jumlah: '', pb: '', pbp: '' },
            { type: 'item', butiran: 'Markah Purata', nilai: '', markah: '', wajaran: '', jumlah: '', pb: '', pbp: '' },
        ];

        // ---- Small helpers for inputs ----
        const input = (field, v, readonly = false) =>
            `<input type="text" data-field="${field}" class="form-control form-control-sm text-center" ${readonly ? 'readonly' : ''} value="${v ?? ''}">`;

        $(function () {
            const dt = $('#borang-11-table').DataTable({
                dom: 't',                 // table only
                ordering: false,
                paging: false,
                searching: false,
                info: false,
                autoWidth: false,
                data: rows,
                // 7 columns to match your header (multi-row thead is OK)
                columns: [
                    { data: null, render: r => r.type === 'section' ? `<strong>${r.section}</strong>` : (r.butiran ?? '') },
                    { data: 'nilai', render: (d, t, r) => r.type === 'section' ? '' : input('nilai', d) },
                    { data: 'markah', render: (d, t, r) => r.type === 'section' ? '' : input('markah', d) },
                    { data: 'wajaran', render: (d, t, r) => r.type === 'section' ? '' : input('wajaran', d) },
                    { data: 'jumlah', render: (d, t, r) => r.type === 'section' ? '' : input('jumlah', d, true) }, // readonly
                    { data: 'pb', render: (d, t, r) => r.type === 'section' ? '' : input('pb', d) },
                    { data: 'pbp', render: (d, t, r) => r.type === 'section' ? '' : input('pbp', d) },
                ],
                createdRow: function (row, data) {
                    // Merge "section" rows across all 7 columns
                    if (data.type === 'section') {
                        const $cells = $('td', row);
                        $cells.eq(0).attr('colspan', 7).addClass('bg-light fw-bold');
                        $cells.slice(1).remove();
                    } else {
                        // Left-align first data cell
                        $('td:eq(0)', row).addClass('text-start');
                    }
                },
                drawCallback: function () {
                    // Attach listeners to recalc "Jumlah Markah" per row: markah * wajaran / 100
                    $('#borang-11-table tbody tr').each(function () {
                        const $tr = $(this);
                        // skip section rows (they have only 1 merged TD)
                        if ($tr.find('td').length < 7) return;

                        const $markah = $tr.find('input[data-field="markah"]');
                        const $wajaran = $tr.find('input[data-field="wajaran"]');
                        const $jumlah = $tr.find('input[data-field="jumlah"]');

                        function recalc() {
                            const m = parseFloat(($markah.val() || '').toString().replace(',', '.')) || 0;
                            const w = parseFloat(($wajaran.val() || '').toString().replace(',', '.')) || 0;
                            const j = (m * w / 100).toFixed(2);
                            $jumlah.val(j);
                        }
                        $markah.off('input.dt').on('input.dt', recalc);
                        $wajaran.off('input.dt').on('input.dt', recalc);
                        recalc();
                    });
                }
            });
        });
    </script>
@endsection