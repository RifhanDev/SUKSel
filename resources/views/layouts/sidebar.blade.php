<style>
    #sidebar-menu {
        color: #ffffff !important;
    }

    #sidebar-menu ul li a {
        color: #ffffff !important;
        /* This is for the links inside the list */
    }

    /* If you have other nested elements, add specific rules as necessary */
    #sidebar-menu ul li {
        color: #ffffff !important;
    }
</style>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu" style="background: #993B3B">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!-- <li class="menu-title" key="t-menu">@lang('translation.Menu')</li> -->

                {{-- @if (Auth::user()->role == 1) --}}

                <li>
                    <a href="{{ url('cipta-tender') }}" class="waves-effect">
                        <span key="t-cipta-tender">@lang('translation.Cipta_Tender')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('getIndex') }}" class="waves-effect">
                        <span key="t-perlantikan-jawatan-kuasa">@lang('translation.Perlantikan_Jawatan_Kuasa')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <span key="t-projects">@lang('translation.Penyediaan_Spesifikasi_Skor')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('senarai-semak-teknikal') }}"
                                key="t-p-grid">@lang('translation.Senarai_Semak_Teknikal')</a></li>
                        <li><a href="{{ route('senarai-semak-kewangan') }}"
                                key="t-p-list">@lang('translation.Senarai_Semak_Kewangan')</a></li>
                        <li><a href="{{ route('skor-teknikal') }}" key="t-p-list">@lang('translation.Skor_Teknikal')</a>
                        </li>
                        <li><a href="{{ route('skor-kewangan') }}" key="t-p-list">@lang('translation.Skor_Kewangan')</a>
                        </li>
                        <li><a href="{{ route('skor-keseluruhan') }}"
                                key="t-p-list">@lang('translation.Skor_Keseluruhan')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span key="t-dashboards">@lang('translation.Penyediaan_Maklumat_Tender')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('lawatan-tapak') }}" class="waves-effect">
                        <span key="t-dashboards">@lang('translation.Lawatan_Tapak')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('cut-off') }}" class="waves-effect">
                        <span key="t-dashboards">@lang('translation.Cut_Off')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <span key="t-projects">@lang('translation.Semakan_Pematuhan_Dokumen')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-projects">@lang('translation.Persediaan_Mesyuarat')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('perincian-mesyuarat') }}"
                                        key="t-p-grid">@lang('translation.Perincian_Mesyuarat')</a></li>
                                <li><a href="{{ route('jawatankuasa') }}"
                                        key="t-p-list">@lang('translation.Jawatankuasa')</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span key="t-projects">@lang('translation.Penilaian_Kertas_Cadangan')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('peringkat-pematuhan') }}"
                                        key="t-p-grid">@lang('translation.Peringkat_Pematuhan')</a></li>
                                <li><a href="{{ route('peringkat-penilaian') }}"
                                        key="t-p-list">@lang('translation.Peringkat_Penilaian')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span
                            key="t-dashboards"><a href="{{ route('kertas-taklimat-pengesyoran') }}" key="t-p-grid">Penyediaan Kertas Taklimat dan Pengesyoran Pembekal</a></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span key="t-dashboards">@lang('translation.Keputusan_Mesyuarat')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span key="t-dashboards">@lang('translation.Senarai_Surat_Niat')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('penyediaan-sst') }}" class="waves-effect">
                        <span key="t-dashboards">@lang('translation.Penyediaan_SST')</span>
                    </a>
                </li>

                {{-- @elseif (Auth::user()->role == 2) --}}

                <li>
                    <a href="{{ route('getCiptaTender') }}" class="waves-effect">
                        <span key="t-cipta-tender">@lang('translation.Cipta_Tender')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('getKelulusan') }}" class="waves-effect">
                        <span key="t-cipta-tender">@lang('translation.Kelulusan_')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('PenyediaanIklan') }}" class="waves-effect">
                        <span key="t-cipta-tender">@lang('translation.Penyediaan_Iklan')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dokumenTenderTawaran') }}" class="waves-effect">
                        <span key="t-cipta-tender">@lang('translation.Dokumen_Tender_Tawaran')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('butiran-dilihat') }}" class="waves-effect">
                        <span key="t-cipta-tender">@lang('translation.Butiran_Dilihat')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('lawatan-tapak-syarikat') }}" class="waves-effect">
                        <span key="t-cipta-tender">@lang('translation.Lawatan_Tapak_Syarikat')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kod-bidang') }}" class="waves-effect">
                        <span key="t-cipta-tender">@lang('translation.Kod_Bidang')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('senarai-semak-dokumen') }}" class="waves-effect">
                        <span key="t-cipta-tender">@lang('translation.Senarai_Semak_Dokumen')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('maklumat-ralat') }}" class="waves-effect">
                        <span key="t-cipta-tender">@lang('translation.Maklumat_Ralat')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pegawai-bertanggungjawab') }}" class="waves-effect">
                        <span key="t-cipta-tender">@lang('translation.Pegawai_Bertanggungjawab')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('penilaian-prestasi-syarikat') }}" class="waves-effect">
                        <span key="t-cipta-tender">@lang('translation.Penilaian_Prestasi_Syarikat')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <span key="t-projects">@lang('translation.Kertas_Cadangan')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('kertas-cadangan-teknikal') }}" key="t-p-grid">Teknikal</a></li>
                        <li><a href="{{ route('kertas-cadangan-kewangan') }}">Kewangan</a></li>
                        <li><a href="{{ route('perakuan') }}" key="t-p-list">Perakuan</a></li>
                        <li><a href="{{ route('surat-akuan-pembida') }}" key="t-p-list">Surat Akuan</a></li>
                        <li><a href="{{ route('maklumat-umum') }}" key="t-p-list">Maklumat Umum</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <span key="t-projects">Urusetia</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('pengesahan-kehadiran') }}" key="t-p-grid">Pengesahan Kehadiran</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <span key="t-projects">Peringkat Penilaian Teknikal</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('teknikal') }}" key="t-p-grid">Teknikal</a></li>
                        <li><a href="{{ route('kewangan') }}">Kewangan</a></li>
                        <li><a href="{{ route('1-tier') }}" key="t-p-list">1-Tier</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <span key="t-projects">Pembelian Terus</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('cipta-projek') }}" key="t-p-grid">Cipta Projek Pembelian Terus</a></li>
                        <li><a href="{{ route('sebut-harga') }}">Sebut Harga Pembelian Terus</a></li>
                        <li><a href="{{ route('cut-off-pb') }}" key="t-p-list">Cut-Off</a></li>
                    </ul>
                </li>
                




                {{-- @endif --}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<!-- Left Sidebar End -->