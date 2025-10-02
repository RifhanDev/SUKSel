@extends('layouts.master')

@section('title', 'Borang 10')

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

    <div class="section-header" style="text-transform: uppercase;">Borang 10 Analisa Data - Data Penilaian Keupayaan
        Teknikal
        Petender
    </div>
    <div class="container-fluid mt-4">

        {{-- <div class="table-responsive mt-4">

            <table class="table table-bordered">

                <thead class="table-primary">
                    <tr>
                        <th colspan="4">B. KEUPAYAAN TEKNIKAL <br> B1. KAKITANGAN TEKNIKAL</th>
                    </tr>
                    <tr>
                        <th colspan="4">0</th>
                    </tr>
                    <tr class="text-center">
                        <th>Butiran</th>
                        <th>Kat. A</th>
                        <th>Kat. B</th>
                        <th>Kat. C</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $rows = [
                    ['B2.1 Bilangan', '', '', ''],
                    ['1. Faktor Penyama', '', '', ''],
                    ['2. Bilangan AKM', '', '', ''],
                    ['3. Bilangan dalam penggajian petender', '', '', ''],
                    ['4. Peratus (%) dpd. AKM [(c) x (a)] x 100 / Sum.((b) x (a))]', '', '', '']
                    ]
                    @endphp

                    @foreach($rows as $item)
                    <tr>
                        <td>
                    <tr>{{ $item[0] }}</tr>
                    <tr>{{ $item[1] }}</tr>
                    <tr>{{ $item[2] }}</tr>
                    <tr>{{ $item[3] }}</tr>
                    {{-- <tr>{{ $item[4] }}
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div> --}}

        <table id="borang-10-table" class="table align-middle table-hover table-bordered mt-3">
            <thead>
                <!-- Group title (blue, spans all 4 cols) -->
                <tr class="dt-title-row">
                    <th colspan="4" class="text-white ">
                        B. KEUPAYAAN TEKNIKAL <br> B2. KAKITANGAN TEKNIKAL
                    </th>
                </tr>

                <!-- Column headers used by DataTables -->
                <tr class="dt-columns-row text-center">
                    <th>Butiran</th>
                    <th>Kat. A</th>
                    <th>Kat. B</th>
                    <th>Kat. C</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <button class="btn btn-success m-1">Simpan</button>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script>
        const rows = [
            { type: 'section', section: 'B2.1 Bilangan' },
            { type: 'item', butiran: '1. Faktor Penyama', a: '', b: '', c: '' },
            { type: 'item', butiran: '2. Bilangan AKM', a: '', b: '', c: '' },
            { type: 'item', butiran: '3. Bilangan dalam penggajian petender', a: '', b: '', c: '' },
            { type: 'item', butiran: '4. Peratus (%) dpd. AKM [(c) x (a)] x 100 / Sum.((b) x (a))]', a: '', b: '', c: '' },
            { type: 'item', butiran: '5. (%) keseluruhan dpd. AKM [Sum. e)] atau [(Ae) + 100] jika [(Be) + (Ce)] >100%', a: '', b: '', c: '' },
            { type: 'section', section: 'B2.2 Pengalaman' },
            { type: 'item', butiran: '1. Jumlah Sebenar (tahun)', a: '', b: '', c: '' },
            { type: 'item', butiran: '2. Jumlah sama nilai (tahun) [(g) x (a) / Sum ((b) x (a))]', a: '', b: '', c: '' },
            { type: 'item', butiran: '3. Jumlah sama nilai. Keseluruhan. [Sum:(h)] atau [(Ah) + 10.00] jika [(Bh) + (Ch)] >10.00 tahun', a: '', b: '', c: '' }
        ];



        $('#borang-10-table').DataTable({
            dom: 't',
            ordering: false,
            paging: false,
            searching: false,
            info: false,
            data: rows, 
            columns: [
                { title: 'Butiran', data: null, render: r => r.type === 'section' ? `<strong>${r.section}</strong>` : r.butiran },
                { title: 'Kat. A', data: 'a', render: d => rInput(d) },
                { title: 'Kat. B', data: 'b', render: d => rInput(d) },
                { title: 'Kat. C', data: 'c', render: d => rInput(d) }
            ],
            createdRow: function (row, data) {
                if (data.type === 'section') {
                    // merge this row across all 4 columns
                    const $cells = $('td', row);
                    $cells.eq(0).attr('colspan', 4).addClass('bg-light fw-bold');
                    $cells.slice(1).remove();
                }
            }
        });

        function rInput(v) { return `<input class="form-control form-control-sm text-center" value="${v ?? ''}">`; }

    </script>

@endsection