@extends('layouts.master')

@section('title', 'Kod-kod Bidang')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  /* Bold for "DAN" */
  .dan {
    font-weight: 700;
    margin: 1rem 0 0.5rem;
  }
  /* Left column styling */
  .left-col {
    font-weight: 700;
    background-color: #f8f9fa;
    width: 200px;
    vertical-align: top;
  }
  /* Right column content spacing */
  .right-col p {
    margin-bottom: 0.6rem;
    line-height: 1.4;
  }
</style>
@endsection

@section('content')
<div class="container mt-4">
  <h5 class="mb-3">Dokumen Tender</h5>

  <h6 class="py-2 px-3 bg-secondary text-white">Kod-kod Bidang</h6>

  <div class="table-responsive">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td class="left-col">Kod Bidang MOF</td>
          <td class="right-col">
            <p><strong>120601</strong> PERTAHANAN DAN KESELAMATAN &gt; PERLINDUNGAN KEBAKARAN &gt; SISTEM PENCEGAH KEBAKARAN</p>

            <p class="dan">DAN</p>

            <p><strong>210102 ICT</strong> &gt; BEKALAN DAN PERKHIDMATAN BAGI SEKTOR TEKNOLOGI MAKLUMAT DAN KOMUNIKASI &gt; PERALATAN DAN KELENGKAPAN KOMPUTER, PERKAKASAN DAN KOMPONEN &gt; HARDWARE (HIGH END TECHNOLOGY) - ALL TYPES OF SERVER, MAINFRAME, HIGH END PRINTERS, SAN, NAS INCLUDING MAINTENANCE</p>

            <p class="dan">DAN</p>

            <p><strong>210105 ICT</strong> &gt; BEKALAN DAN PERKHIDMATAN BAGI SEKTOR TEKNOLOGI MAKLUMAT DAN KOMUNIKASI &gt; PERALATAN DAN KELENGKAPAN KOMPUTER, PERKAKASAN DAN KOMPONEN &gt; TELECOMMUNICATION/NETWORKING – SUPPLY PRODUCT, INFRASTRUCTURE, SERVICES INCLUDING MAINTENANCE (LAN/WAN/INTERNET/WIRE)</p>

            <p class="dan">DAN</p>

            <p><strong>220301</strong> PERKHIDMATAN &gt; PENYELENGGARAAN/ PEMBAIKAN ALAT HAWA DINGIN &gt; ALAT HAWA DINGIN (WINDOW, SPLIT, BERPUSAT)</p>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
