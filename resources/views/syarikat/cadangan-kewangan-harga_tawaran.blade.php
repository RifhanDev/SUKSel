@extends('layouts.master')

@section('title', 'Harga Tawaran')

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

        thead tr th {
            background-color: #435d91;
            color: white;
            font-weight: 500;
            text-align: center;
            vertical-align: middle;
            font-size: 14px;
            white-space: nowrap;
        }

        tbody tr td {
            vertical-align: middle;
            font-size: 14px;
            padding: 8px;
        }

        tbody tr td input,
        tbody tr td textarea {
            width: 100%;
            padding: 4px 8px;
            font-size: 14px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        tbody tr td input[readonly] {
            background-color: #f8f9fa;
        }

        .summary-row {
            background-color: #dcdcdc;
            font-weight: 700;
            font-size: 14px;
        }

        .table thead th {
            background-color: #3e5a9a;
            color: white;
            font-weight: 600;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="breadcrumb-path">
            PENYEDIAAN KERTAS CADANGAN &gt; CADANGAN KEWANGAN &gt; HARGA TAWARAN
        </div>

        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Unit Ukuran</th>
                        <th>Kekerapan / Unit Ukuran</th>
                        <th>Bil. Unit Ukuran sehari</th>
                        <th>Bil. Unit Ukuran Sebulan</th>
                        <th>Kuantiti</th>
                        <th>Harga Seunit (RM)</th>
                        <th>Amaun yang ditawarkan setahun (RM)</th>
                            <th>Jumlah Harga (RM)</th>
                            <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-start">PENYEDIAAN DAN PENGAKTIFAN PLATFORM KESELAMATAN</td>
                        <td><input type="text" readonly value="unit" /></td>
                        <td><input type="text" readonly value="1" /></td>
                        <td><input type="text" readonly /></td>
                        <td><input type="text" readonly /></td>
                        <td><input type="text" readonly value="1" /></td>
                        <td><input type="number" step="0.01" name="harga_seunit[]" class="harga-seunit" /></td>
                        <td>T/B</td>
                        <td><input type="text" readonly class="jumlah-harga" value="0.00" /></td>
                        <td><input type="text" name="catatan[]" /></td>
                    </tr>
                    <tr>
                        <td class="text-start">PERKHIDMATAN PENGURUSAN KESELAMATAN</td>
                        <td><input type="text" readonly value="months" /></td>
                        <td><input type="text" readonly value="36" /></td>
                        <td><input type="text" readonly /></td>
                        <td><input type="text" readonly /></td>
                        <td><input type="text" readonly value="1" /></td>
                        <td><input type="number" step="0.01" name="harga_seunit[]" class="harga-seunit" /></td>
                        <td>T/B</td>
                        <td><input type="text" readonly class="jumlah-harga" value="0.00" /></td>
                        <td><input type="text" name="catatan[]" /></td>
                    </tr>
                    <tr class="summary-row">
                        <td colspan="8" class="text-end">Jumlah Besar (RM)</td>
                        <td class="text-center" id="total-jumlah">0.00</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <div class="d-flex justify-content-end gap-2">
            <button type="button" class="btn btn-primary btn-md">Kembali</button>
            <button type="submit" class="btn btn-success btn-md">Simpan</button>
        </div>
    </div>

    <script>
        // Calculate Jumlah Harga based on Harga Seunit input changes
        document.addEventListener('DOMContentLoaded', function () {
            function calculateTotal() {
                let total = 0;
                document.querySelectorAll('.harga-seunit').forEach((input, index) => {
                    const harga = parseFloat(input.value) || 0;
                    const jumlahInput = input.closest('tr').querySelector('.jumlah-harga');
                    // Here, for simplicity, jumlah harga = harga_seunit * kuantiti (which is 1 in this case)
                    // Adjust logic if needed to multiply by other columns
                    jumlahInput.value = harga.toFixed(2);
                    total += harga;
                });
                document.getElementById('total-jumlah').textContent = total.toFixed(2);
            }

            document.querySelectorAll('.harga-seunit').forEach(input => {
                input.addEventListener('input', calculateTotal);
            });
        });
    </script>
@endsection