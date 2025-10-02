<style>
    #sidebar-menu,
    #sidebar-menu ul li,
    #sidebar-menu ul li a {
        color: #ffffff !important;
    }

    #sidebar-menu ul li a.active {
        position: relative;
        color: #FFD700 !important;
        font-weight: 600;
    }

    #sidebar-menu ul li a.active {
        background-color: transparent !important;
        color: #FFD700 !important;
        border-left: 4px solid #FFD700;
        /* gold highlight */
        padding-left: 12px;
        font-weight: 600;
    }

    /* Active parent label (no bg, only bolder text) */
    #sidebar-menu ul li>a.active-parent {
        font-weight: 700;
        opacity: 0.95;
    }
</style>

@php
    // Helper lambdas
    $is = fn(...$names) => request()->routeIs(...$names);

    // Grouped route checks for parents
    $grpSkor = $is('senarai-semak-teknikal', 'senarai-semak-kewangan', 'skor-teknikal', 'skor-kewangan', 'skor-keseluruhan');
    $grpSemakanDok = $is('perincian-mesyuarat', 'jawatankuasa', 'peringkat-pematuhan', 'peringkat-penilaian');
    $grpKertasCadangan = $is('kertas-cadangan-teknikal', 'kertas-cadangan-kewangan', 'perakuan', 'surat-akuan-pembida', 'maklumat-umum');
    $grpUrusetia = $is('pengesahan-kehadiran');
    $grpPeringkatPenilaianTek = $is('teknikal', 'kewangan', '1-tier');
    $grpPembelianTerus = $is('cipta-projek', 'sebut-harga', 'cut-off-pb', 'pemilihan-syarikat', 'keputusan-syarikat');
    $grpKerja = $is(
        'penyediaan-spesifikasi-tender',
        'maklumat-kewangan',
        'penyediaan-dokumen-tender',
        'lawatan-tapak-kerja',
        'mesyuarat-jk-kerja',
        'pematuhan-dokumen-kerja',
        'penilaian-teknikal',
        'penilaian-kewangan',
        'borang1',
        'borang2',
        'borang4',
        'borang5',
        'borang6',
        'analisa-kecukupan-modal',
        'lembaran-imbangan',
        'akaun-bank',
        'bon-saham',
        'borang7a',
        'borang7b'
    );
    $grpBorang3 = $is('analisa-kecukupan-modal', 'lembaran-imbangan', 'akaun-bank', 'bon-saham');
    $grpBorang7 = $is('borang7a', 'borang7b');
    $grpBorang9 = $is('borang9', 'borang9a', 'borang9b');
@endphp

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu" style="background: #993B3B">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">

                {{-- Top-level items --}}
                <li>
                    <a href="{{ url('cipta-tender') }}"
                        class="waves-effect {{ request()->is('cipta-tender') ? 'active' : '' }}">
                        <span key="t-cipta-tender">@lang('translation.Cipta_Tender')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('getIndex') }}" class="waves-effect {{ $is('getIndex') ? 'active' : '' }}">
                        <span key="t-perlantikan-jawatan-kuasa">@lang('translation.Perlantikan_Jawatan_Kuasa')</span>
                    </a>
                </li>

                {{-- Penyediaan Spesifikasi Skor (parent) --}}
                <li>
                    <a href="#submenu-skor" class="has-arrow waves-effect {{ $grpSkor ? 'active-parent' : '' }}"
                        data-bs-toggle="collapse" aria-expanded="{{ $grpSkor ? 'true' : 'false' }}">
                        <span key="t-projects">@lang('translation.Penyediaan_Spesifikasi_Skor')</span>
                    </a>
                    <ul id="submenu-skor" class="sub-menu collapse {{ $grpSkor ? 'show' : '' }}"
                        data-bs-parent="#side-menu">
                        <li><a href="{{ route('senarai-semak-teknikal') }}"
                                class="{{ $is('senarai-semak-teknikal') ? 'active' : '' }}"
                                key="t-p-grid">@lang('translation.Senarai_Semak_Teknikal')</a></li>
                        <li><a href="{{ route('senarai-semak-kewangan') }}"
                                class="{{ $is('senarai-semak-kewangan') ? 'active' : '' }}"
                                key="t-p-list">@lang('translation.Senarai_Semak_Kewangan')</a></li>
                        <li><a href="{{ route('skor-teknikal') }}" class="{{ $is('skor-teknikal') ? 'active' : '' }}"
                                key="t-p-list">@lang('translation.Skor_Teknikal')</a></li>
                        <li><a href="{{ route('skor-kewangan') }}" class="{{ $is('skor-kewangan') ? 'active' : '' }}"
                                key="t-p-list">@lang('translation.Skor_Kewangan')</a></li>
                        <li><a href="{{ route('skor-keseluruhan') }}"
                                class="{{ $is('skor-keseluruhan') ? 'active' : '' }}"
                                key="t-p-list">@lang('translation.Skor_Keseluruhan')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0)" class="waves-effect">
                        <span key="t-dashboards">@lang('translation.Penyediaan_Maklumat_Tender')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('lawatan-tapak') }}"
                        class="waves-effect {{ $is('lawatan-tapak') ? 'active' : '' }}">
                        <span key="t-dashboards">@lang('translation.Lawatan_Tapak')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('cut-off') }}" class="waves-effect {{ $is('cut-off') ? 'active' : '' }}">
                        <span key="t-dashboards">@lang('translation.Cut_Off')</span>
                    </a>
                </li>

                {{-- Semakan Pematuhan Dokumen (grandparent) --}}
                <li>
                    <a href="#submenu-semakan"
                        class="has-arrow waves-effect {{ $grpSemakanDok ? 'active-parent' : '' }}"
                        data-bs-toggle="collapse" aria-expanded="{{ $grpSemakanDok ? 'true' : 'false' }}">
                        <span key="t-projects">@lang('translation.Semakan_Pematuhan_Dokumen')</span>
                    </a>
                    <ul id="submenu-semakan" class="sub-menu collapse {{ $grpSemakanDok ? 'show' : '' }}"
                        data-bs-parent="#side-menu">

                        {{-- Persediaan Mesyuarat --}}
                        <li>
                            <a href="#submenu-mesyuarat"
                                class="has-arrow waves-effect {{ $is('perincian-mesyuarat', 'jawatankuasa') ? 'active-parent' : '' }}"
                                data-bs-toggle="collapse"
                                aria-expanded="{{ $is('perincian-mesyuarat', 'jawatankuasa') ? 'true' : 'false' }}">
                                <span>@lang('translation.Persediaan_Mesyuarat')</span>
                            </a>
                            <ul id="submenu-mesyuarat"
                                class="sub-menu collapse {{ $is('perincian-mesyuarat', 'jawatankuasa') ? 'show' : '' }}">
                                <li><a href="{{ route('perincian-mesyuarat') }}"
                                        class="{{ $is('perincian-mesyuarat') ? 'active' : '' }}"
                                        key="t-p-grid">@lang('translation.Perincian_Mesyuarat')</a></li>
                                <li><a href="{{ route('jawatankuasa') }}"
                                        class="{{ $is('jawatankuasa') ? 'active' : '' }}"
                                        key="t-p-list">@lang('translation.Jawatankuasa')</a></li>
                            </ul>
                        </li>

                        {{-- Penilaian Kertas Cadangan --}}
                        <li>
                            <a href="#submenu-penilaian-kertas"
                                class="has-arrow waves-effect {{ $is('peringkat-pematuhan', 'peringkat-penilaian') ? 'active-parent' : '' }}"
                                data-bs-toggle="collapse"
                                aria-expanded="{{ $is('peringkat-pematuhan', 'peringkat-penilaian') ? 'true' : 'false' }}">
                                <span>@lang('translation.Penilaian_Kertas_Cadangan')</span>
                            </a>
                            <ul id="submenu-penilaian-kertas"
                                class="sub-menu collapse {{ $is('peringkat-pematuhan', 'peringkat-penilaian') ? 'show' : '' }}">
                                <li><a href="{{ route('peringkat-pematuhan') }}"
                                        class="{{ $is('peringkat-pematuhan') ? 'active' : '' }}"
                                        key="t-p-grid">@lang('translation.Peringkat_Pematuhan')</a></li>
                                <li><a href="{{ route('peringkat-penilaian') }}"
                                        class="{{ $is('peringkat-penilaian') ? 'active' : '' }}"
                                        key="t-p-list">@lang('translation.Peringkat_Penilaian')</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="{{ route('kertas-taklimat-pengesyoran') }}"
                        class="waves-effect {{ $is('kertas-taklimat-pengesyoran') ? 'active' : '' }}">
                        <span>Penyediaan Kertas Taklimat dan Pengesyoran Pembekal</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('keputusan-mesyuarat') }}"
                        class="waves-effect {{ $is('keputusan-mesyuarat') ? 'active' : '' }}">
                        <span>@lang('translation.Keputusan_Mesyuarat')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0)" class="waves-effect">
                        <span>@lang('translation.Senarai_Surat_Niat')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('penyediaan-sst') }}"
                        class="waves-effect {{ $is('penyediaan-sst') ? 'active' : '' }}">
                        <span>@lang('translation.Penyediaan_SST')</span>
                    </a>
                </li>

                {{-- SECOND ROLE SECTION --}}
                <li>
                    <a href="{{ route('getCiptaTender') }}"
                        class="waves-effect {{ $is('getCiptaTender') ? 'active' : '' }}">
                        <span>@lang('translation.Cipta_Tender')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('getKelulusan') }}"
                        class="waves-effect {{ $is('getKelulusan') ? 'active' : '' }}">
                        <span>@lang('translation.Kelulusan_')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('PenyediaanIklan') }}"
                        class="waves-effect {{ $is('PenyediaanIklan') ? 'active' : '' }}">
                        <span>@lang('translation.Penyediaan_Iklan')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dokumenTenderTawaran') }}"
                        class="waves-effect {{ $is('dokumenTenderTawaran') ? 'active' : '' }}">
                        <span>@lang('translation.Dokumen_Tender_Tawaran')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('butiran-dilihat') }}"
                        class="waves-effect {{ $is('butiran-dilihat') ? 'active' : '' }}">
                        <span>@lang('translation.Butiran_Dilihat')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('lawatan-tapak-syarikat') }}"
                        class="waves-effect {{ $is('lawatan-tapak-syarikat') ? 'active' : '' }}">
                        <span>@lang('translation.Lawatan_Tapak_Syarikat')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('kod-bidang') }}" class="waves-effect {{ $is('kod-bidang') ? 'active' : '' }}">
                        <span>@lang('translation.Kod_Bidang')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('senarai-semak-dokumen') }}"
                        class="waves-effect {{ $is('senarai-semak-dokumen') ? 'active' : '' }}">
                        <span>@lang('translation.Senarai_Semak_Dokumen')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('maklumat-ralat') }}"
                        class="waves-effect {{ $is('maklumat-ralat') ? 'active' : '' }}">
                        <span>@lang('translation.Maklumat_Ralat')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('pegawai-bertanggungjawab') }}"
                        class="waves-effect {{ $is('pegawai-bertanggungjawab') ? 'active' : '' }}">
                        <span>@lang('translation.Pegawai_Bertanggungjawab')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('penilaian-prestasi-syarikat') }}"
                        class="waves-effect {{ $is('penilaian-prestasi-syarikat') ? 'active' : '' }}">
                        <span>@lang('translation.Penilaian_Prestasi_Syarikat')</span>
                    </a>
                </li>

                {{-- Kertas Cadangan --}}
                <li>
                    <a href="#submenu-kertas"
                        class="has-arrow waves-effect {{ $grpKertasCadangan ? 'active-parent' : '' }}"
                        data-bs-toggle="collapse" aria-expanded="{{ $grpKertasCadangan ? 'true' : 'false' }}">
                        <span>@lang('translation.Kertas_Cadangan')</span>
                    </a>
                    <ul id="submenu-kertas" class="sub-menu collapse {{ $grpKertasCadangan ? 'show' : '' }}"
                        data-bs-parent="#side-menu">
                        <li><a href="{{ route('kertas-cadangan-teknikal') }}"
                                class="{{ $is('kertas-cadangan-teknikal') ? 'active' : '' }}">Teknikal</a></li>
                        <li><a href="{{ route('kertas-cadangan-kewangan') }}"
                                class="{{ $is('kertas-cadangan-kewangan') ? 'active' : '' }}">Kewangan</a></li>
                        <li><a href="{{ route('perakuan') }}" class="{{ $is('perakuan') ? 'active' : '' }}">Perakuan</a>
                        </li>
                        <li><a href="{{ route('surat-akuan-pembida') }}"
                                class="{{ $is('surat-akuan-pembida') ? 'active' : '' }}">Surat Akuan</a></li>
                        <li><a href="{{ route('maklumat-umum') }}"
                                class="{{ $is('maklumat-umum') ? 'active' : '' }}">Maklumat Umum</a></li>
                    </ul>
                </li>

                {{-- Urusetia --}}
                <li>
                    <a href="#submenu-urusetia" class="has-arrow waves-effect {{ $grpUrusetia ? 'active-parent' : '' }}"
                        data-bs-toggle="collapse" aria-expanded="{{ $grpUrusetia ? 'true' : 'false' }}">
                        <span>Urusetia</span>
                    </a>
                    <ul id="submenu-urusetia" class="sub-menu collapse {{ $grpUrusetia ? 'show' : '' }}"
                        data-bs-parent="#side-menu">
                        <li><a href="{{ route('pengesahan-kehadiran') }}"
                                class="{{ $is('pengesahan-kehadiran') ? 'active' : '' }}">Pengesahan Kehadiran</a></li>
                    </ul>
                </li>

                {{-- Peringkat Penilaian Teknikal --}}
                <li>
                    <a href="#submenu-penilaian-tek"
                        class="has-arrow waves-effect {{ $grpPeringkatPenilaianTek ? 'active-parent' : '' }}"
                        data-bs-toggle="collapse" aria-expanded="{{ $grpPeringkatPenilaianTek ? 'true' : 'false' }}">
                        <span>Peringkat Penilaian Teknikal</span>
                    </a>
                    <ul id="submenu-penilaian-tek"
                        class="sub-menu collapse {{ $grpPeringkatPenilaianTek ? 'show' : '' }}"
                        data-bs-parent="#side-menu">
                        <li><a href="{{ route('teknikal') }}" class="{{ $is('teknikal') ? 'active' : '' }}">Teknikal</a>
                        </li>
                        <li><a href="{{ route('kewangan') }}" class="{{ $is('kewangan') ? 'active' : '' }}">Kewangan</a>
                        </li>
                        <li><a href="{{ route('1-tier') }}" class="{{ $is('1-tier') ? 'active' : '' }}">1-Tier</a></li>
                    </ul>
                </li>

                {{-- Pembelian Terus --}}
                <li>
                    <a href="#submenu-pbt"
                        class="has-arrow waves-effect {{ $grpPembelianTerus ? 'active-parent' : '' }}"
                        data-bs-toggle="collapse" aria-expanded="{{ $grpPembelianTerus ? 'true' : 'false' }}">
                        <span>Pembelian Terus</span>
                    </a>
                    <ul id="submenu-pbt" class="sub-menu collapse {{ $grpPembelianTerus ? 'show' : '' }}"
                        data-bs-parent="#side-menu">
                        <li><a href="{{ route('cipta-projek') }}"
                                class="{{ $is('cipta-projek') ? 'active' : '' }}">Cipta Projek Pembelian Terus</a></li>
                        <li><a href="{{ route('sebut-harga') }}" class="{{ $is('sebut-harga') ? 'active' : '' }}">Sebut
                                Harga Pembelian Terus</a></li>
                        <li><a href="{{ route('cut-off-pb') }}"
                                class="{{ $is('cut-off-pb') ? 'active' : '' }}">Cut-Off</a></li>
                        <li><a href="{{ route('pemilihan-syarikat') }}"
                                class="{{ $is('pemilihan-syarikat') ? 'active' : '' }}">Pemilihan Syarikat</a></li>
                        <li><a href="{{ route('keputusan-syarikat') }}"
                                class="{{ $is('keputusan-syarikat') ? 'active' : '' }}">Keputusan Syarikat</a></li>
                    </ul>
                </li>

                {{-- Sidebar Tetapan --}}
                <li>
                    <a href="#submenu-tetapan"
                        class="has-arrow waves-effect {{ $is('pengurusan-peranan', 'pengurusan-menu') ? 'active-parent' : '' }}"
                        data-bs-toggle="collapse"
                        aria-expanded="{{ $is('pengurusan-peranan', 'pengurusan-menu') ? 'true' : 'false' }}">
                        <span>@lang('translation.Tetapan')</span>
                    </a>
                    <ul id="submenu-tetapan"
                        class="sub-menu collapse {{ $is('pengurusan-peranan', 'pengurusan-menu') ? 'show' : '' }}">

                        {{-- Pengurusan Peranan --}}
                        <li>
                            <a href="{{ route('pengurusan-peranan') }}"
                                class="{{ $is('pengurusan-peranan') ? 'active' : '' }}">
                                @lang('translation.Pengurusan_Peran')
                            </a>
                        </li>

                        {{-- Pengurusan Menu --}}
                        <li>
                            <a href="{{ route('pengurusan-menu') }}"
                                class="{{ $is('pengurusan-menu') ? 'active' : '' }}">
                                @lang('translation.Pengurusan_Menu')
                            </a>
                        </li>
                    </ul>
                </li>
                
                {{-- Penyediaan Maklumat Tender (duplicate title kept as given) --}}
                <li>
                    <a href="javascript:void(0)" class="waves-effect">
                        <span>@lang('translation.Penyediaan_Maklumat_Tender')</span>
                    </a>
                </li>

                {{-- Kertas Taklimat (duplicate entry kept as given, fixed nested <a>) --}}
                    <li>
                        <a href="{{ route('kertas-taklimat-pengesyoran') }}"
                            class="waves-effect {{ $is('kertas-taklimat-pengesyoran') ? 'active' : '' }}">
                            <span>Penyediaan Kertas Taklimat dan Pengesyoran Pembekal</span>
                        </a>
                    </li>

                    {{-- Kerja (grandparent) --}}
                    <li>
                        <a href="#submenu-kerja" class="has-arrow waves-effect {{ $grpKerja ? 'active-parent' : '' }}"
                            data-bs-toggle="collapse" aria-expanded="{{ $grpKerja ? 'true' : 'false' }}">
                            <span>Kerja</span>
                        </a>
                        <ul id="submenu-kerja" class="sub-menu collapse {{ $grpKerja ? 'show' : '' }}"
                            data-bs-parent="#side-menu">

                            <li><a href="{{ route('penyediaan-spesifikasi-tender') }}"
                                    class="{{ $is('penyediaan-spesifikasi-tender') ? 'active' : '' }}">Penyediaan
                                    Spesifikasi Tender</a></li>
                            <li><a href="{{ route('maklumat-kewangan') }}"
                                    class="{{ $is('maklumat-kewangan') ? 'active' : '' }}">Senarai Semak Maklumat
                                    Kewangan</a></li>
                            <li><a href="{{ route('penyediaan-dokumen-tender') }}"
                                    class="{{ $is('penyediaan-dokumen-tender') ? 'active' : '' }}">Penyediaan Dokumen
                                    Tender / Tawaran</a></li>
                            <li><a href="{{ route('lawatan-tapak-kerja') }}"
                                    class="{{ $is('lawatan-tapak-kerja') ? 'active' : '' }}">Lawatan Tapak</a></li>
                            <li><a href="{{ route('mesyuarat-jk-kerja') }}"
                                    class="{{ $is('mesyuarat-jk-kerja') ? 'active' : '' }}">Jawatankuasa</a></li>

                            {{-- Penilaian Dokumen --}}
                            <li>
                                <a href="#submenu-penilaian-dok"
                                    class="has-arrow waves-effect {{ $is('pematuhan-dokumen-kerja', 'penilaian-teknikal', 'penilaian-kewangan', 'borang1', 'borang2', 'borang4', 'borang5', 'borang6', 'borang7a', 'borang7b', 'analisa-kecukupan-modal', 'lembaran-imbangan', 'akaun-bank', 'bon-saham') ? 'active-parent' : '' }}"
                                    data-bs-toggle="collapse"
                                    aria-expanded="{{ $is('pematuhan-dokumen-kerja', 'penilaian-teknikal', 'penilaian-kewangan', 'borang1', 'borang2', 'borang4', 'borang5', 'borang6', 'borang7a', 'borang7b', 'analisa-kecukupan-modal', 'lembaran-imbangan', 'akaun-bank', 'bon-saham') ? 'true' : 'false' }}">
                                    Penilaian Dokumen
                                </a>
                                <ul id="submenu-penilaian-dok"
                                    class="sub-menu collapse {{ $is('pematuhan-dokumen-kerja', 'penilaian-teknikal', 'penilaian-kewangan', 'borang1', 'borang2', 'borang4', 'borang5', 'borang6', 'borang7a', 'borang7b', 'analisa-kecukupan-modal', 'lembaran-imbangan', 'akaun-bank', 'bon-saham') ? 'show' : '' }}">

                                    <li><a href="{{ route('pematuhan-dokumen-kerja') }}"
                                            class="{{ $is('pematuhan-dokumen-kerja') ? 'active' : '' }}">Peringkat
                                            Pematuhan</a></li>
                                    <li><a href="{{ route('penilaian-teknikal') }}"
                                            class="{{ $is('penilaian-teknikal') ? 'active' : '' }}">Borang Penilaian
                                            Teknikal</a></li>

                                    {{-- Penilaian Kewangan --}}
                                    <li>
                                        <a href="{{ route('penilaian-kewangan') }}"
                                            class="{{ $is('penilaian-kewangan') ? 'active' : '' }}">Penilaian
                                            Kewangan</a>
                                    </li>
                                    <li><a href="{{ route('borang1') }}"
                                            class="{{ $is('borang1') ? 'active' : '' }}">Borang 1</a></li>
                                    <li><a href="{{ route('borang2') }}"
                                            class="{{ $is('borang2') ? 'active' : '' }}">Borang 2</a></li>

                                    {{-- Borang 3 (sub of Kewangan) --}}
                                    <li>
                                        <a href="#submenu-borang3"
                                            class="has-arrow waves-effect {{ $grpBorang3 ? 'active-parent' : '' }}"
                                            data-bs-toggle="collapse"
                                            aria-expanded="{{ $grpBorang3 ? 'true' : 'false' }}">
                                            Borang 3
                                        </a>
                                        <ul id="submenu-borang3"
                                            class="sub-menu collapse {{ $grpBorang3 ? 'show' : '' }}">
                                            <li><a href="{{ route('analisa-kecukupan-modal') }}"
                                                    class="{{ $is('analisa-kecukupan-modal') ? 'active' : '' }}">Analisa
                                                    Kecukupan Modal</a></li>
                                            <li><a href="{{ route('lembaran-imbangan') }}"
                                                    class="{{ $is('lembaran-imbangan') ? 'active' : '' }}">Lembaran
                                                    Imbangan</a></li>
                                            <li><a href="{{ route('akaun-bank') }}"
                                                    class="{{ $is('akaun-bank') ? 'active' : '' }}">Akaun Bank</a></li>
                                            <li><a href="{{ route('bon-saham') }}"
                                                    class="{{ $is('bon-saham') ? 'active' : '' }}">Bon Atau Saham</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="{{ route('borang4') }}"
                                            class="{{ $is('borang4') ? 'active' : '' }}">Borang 4</a></li>
                                    <li><a href="{{ route('borang5') }}"
                                            class="{{ $is('borang5') ? 'active' : '' }}">Borang 5</a></li>
                                    <li><a href="{{ route('borang6') }}"
                                            class="{{ $is('borang6') ? 'active' : '' }}">Borang 6</a></li>

                                    {{-- Borang 7 --}}
                                    <li>
                                        <a href="#submenu-borang7"
                                            class="has-arrow waves-effect {{ $grpBorang7 ? 'active-parent' : '' }}"
                                            data-bs-toggle="collapse"
                                            aria-expanded="{{ $grpBorang7 ? 'true' : 'false' }}">
                                            Borang 7
                                        </a>
                                        <ul id="submenu-borang7"
                                            class="sub-menu collapse {{ $grpBorang7 ? 'show' : '' }}"
                                            data-bs-parent="#side-menu">
                                            <li><a href="{{ route('borang7a') }}"
                                                    class="{{ $is('borang7a') ? 'active' : '' }}">Borang Serupa</a></li>
                                            <li><a href="{{ route('borang7b') }}"
                                                    class="{{ $is('borang7b') ? 'active' : '' }}">Borang Sebanding</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="{{ route('borang8') }}"
                                            class="{{ $is('borang8') ? 'active' : '' }}">Borang 8</a></li>

                                    {{-- Borang 9 --}}
                                    <li>
                                        <a href="#submenu-borang9"
                                            class="has-arrow waves-effect {{ $grpBorang9 ? 'active-parent' : '' }}"
                                            data-bs-toggle="collapse"
                                            aria-expanded="{{ $grpBorang9 ? 'true' : 'false' }}">
                                            Borang 9
                                        </a>
                                        <ul id="submenu-borang9"
                                            class="sub-menu collapse {{ $grpBorang9 ? 'show' : '' }}"
                                            data-bs-parent="#side-menu">
                                            <li><a href="{{ route('borang9') }}"
                                                    class="{{ $is('borang9') ? 'active' : '' }}">Borang 9</a></li>
                                            <li><a href="{{ route('borang9a') }}"
                                                    class="{{ $is('borang9a') ? 'active' : '' }}">Kerja Serupa</a>
                                            </li>
                                            <li><a href="{{ route('borang9b') }}"
                                                    class="{{ $is('borang9b') ? 'active' : '' }}">Kerja Sebanding</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="{{ route('borang10') }}"
                                            class="{{ $is('borang10') ? 'active' : '' }}">Borang 10</a></li>

                                    <li><a href="{{ route('borang11') }}"
                                            class="{{ $is('borang11') ? 'active' : '' }}">Borang 11</a></li>

                                    <li><a href="{{ route('borang12') }}"
                                            class="{{ $is('borang12') ? 'active' : '' }}">Borang 12</a></li>

                                    <li><a href="{{ route('borang13') }}"
                                            class="{{ $is('borang13') ? 'active' : '' }}">Borang 13</a></li>

                                    <li><a href="{{ route('borang14') }}"
                                            class="{{ $is('borang14') ? 'active' : '' }}">Borang 14</a></li>

                                    <li><a href="{{ route('borang15') }}"
                                            class="{{ $is('borang15') ? 'active' : '' }}">Borang 15</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
            </ul>
        </div>
    </div>
</div>

<!-- Left Sidebar End -->