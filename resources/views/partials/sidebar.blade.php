<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('menu-utama') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
            </span>

            <span class="app-brand-text demo menu-text fw-bold">
                <img src="{{ asset('assets/img/logo/logo.png') }}" width="90">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        {{-- * Menu Utama --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">
                Menu Utama
            </span>
        </li>

        <li class="menu-item {{ request()->is('menu-utama') ? 'active' : '' }}">
            <a href="{{ url('menu-utama') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Menu Utama">
                    Menu Utama
                </div>
            </a>
        </li>

        {{-- * Master Data --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">
                Master Data
            </span>
        </li>

        <li class="menu-item {{ request()->is('master-data*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                <div data-i18n="Master Data">
                    Master Data
                </div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('master-data/cut-off*') ? 'active' : '' }}">
                    <a href="{{ url('master-data/cut-off') }}" class="menu-link">
                        <div data-i18n="Cut Off">
                            Cut Off
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('master-data/cabang*') ? 'active' : '' }}">
                    <a href="{{ url('master-data/cabang') }}" class="menu-link">
                        <div data-i18n="Cabang">
                            Cabang
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('master-data/departemen*') ? 'active' : '' }}">
                    <a href="{{ url('master-data/departemen') }}" class="menu-link">
                        <div data-i18n="Departemen">
                            Departemen
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('master-data/jabatan*') ? 'active' : '' }}">
                    <a href="{{ url('master-data/jabatan') }}" class="menu-link">
                        <div data-i18n="Jabatan">
                            Jabatan
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('master-data/shift*') ? 'active' : '' }}">
                    <a href="{{ url('master-data/shift') }}" class="menu-link">
                        <div data-i18n="Shift">
                            Shift
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('master-data/bpjs*') ? 'active' : '' }}">
                    <a href="{{ url('master-data/bpjs') }}" class="menu-link">
                        <div data-i18n="BPJS">
                            BPJS
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('master-data/ptkp*') ? 'active' : '' }}">
                    <a href="{{ url('master-data/ptkp') }}" class="menu-link">
                        <div data-i18n="PTKP">
                            PTKP
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('master-data/bank*') ? 'active' : '' }}">
                    <a href="{{ url('master-data/bank') }}" class="menu-link">
                        <div data-i18n="Bank">
                            Bank
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- * Kepegawaian --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">
                Kepegawaian
            </span>
        </li>

        <li class="menu-item {{ request()->is('kepegawaian*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Kepegawaian">
                    Kepegawaian
                </div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('kepegawaian/rekrutmen*') ? 'active' : '' }}">
                    <a href="{{ url('kepegawaian/rekrutmen') }}" class="menu-link">
                        <div data-i18n="Rekrutmen">
                            Rekrutmen
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('kepegawaian/pegawai*') ? 'active' : '' }}">
                    <a href="{{ url('kepegawaian/pegawai') }}" class="menu-link">
                        <div data-i18n="Pegawai">
                            Pegawai
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('kepegawaian/jadwal*') ? 'active' : '' }}">
                    <a href="{{ url('kepegawaian/jadwal') }}" class="menu-link">
                        <div data-i18n="Jadwal">
                            Jadwal
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('kepegawaian/absensi*') ? 'active' : '' }}">
                    <a href="{{ url('kepegawaian/absensi') }}" class="menu-link">
                        <div data-i18n="Absensi">
                            Absensi
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- * Pengajuan --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">
                Pengajuan
            </span>
        </li>

        <li class="menu-item {{ request()->is('pengajuan*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-file-description"></i>
                <div data-i18n="Pengajuan">
                    Pengajuan
                </div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('pengajuan/ketidakhadiran*') ? 'active' : '' }}">
                    <a href="{{ url('pengajuan/ketidakhadiran') }}" class="menu-link">
                        <div data-i18n="Ketidakhadiran">
                            Ketidakhadiran
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('pengajuan/lembur*') ? 'active' : '' }}">
                    <a href="{{ url('pengajuan/lembur') }}" class="menu-link">
                        <div data-i18n="Lembur">
                            Lembur
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('pengajuan/pengunduran-diri*') ? 'active' : '' }}">
                    <a href="{{ url('pengajuan/pengunduran-diri') }}" class="menu-link">
                        <div data-i18n="Pengunduran Diri">
                            Pengunduran Diri
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('pengajuan/perjalanan-dinas*') ? 'active' : '' }}">
                    <a href="{{ url('pengajuan/perjalanan-dinas') }}" class="menu-link">
                        <div data-i18n="Perjalanan Dinas">
                            Perjalanan Dinas
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('pengajuan/promosi-mutasi*') ? 'active' : '' }}">
                    <a href="{{ url('pengajuan/promosi-mutasi') }}" class="menu-link">
                        <div data-i18n="Promosi & Mutasi">
                            Promosi & Mutasi
                        </div>
                    </a>
                </li>

                <li class="menu-item {{ request()->is('pengajuan/tunjangan-hari-raya*') ? 'active' : '' }}">
                    <a href="{{ url('pengajuan/tunjangan-hari-raya') }}" class="menu-link">
                        <div data-i18n="Tunjangan Hari Raya">
                            Tunjangan Hari Raya
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- * Manajemen --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">
                Manajemen
            </span>
        </li>

        <li class="menu-item {{ request()->is('manajemen/akun*') ? 'active' : '' }}">
            <a href="{{ url('manajemen/akun') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-database"></i>
                <div data-i18n="Akun">
                    Akun
                </div>
            </a>
        </li>
    </ul>
</aside>
