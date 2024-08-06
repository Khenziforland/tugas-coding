<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('menu-utama') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
            </span>

            <span class="app-brand-text demo menu-text fw-bold">
                Tugas Coding
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ request()->is('dashboard/nomor-1') ? 'active' : '' }}">
            <a href="{{ url('dashboard/nomor-1') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Nomor 1">
                    Nomor 1
                </div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('dashboard/nomor-2') ? 'active' : '' }}">
            <a href="{{ url('dashboard/nomor-2') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Nomor 2">
                    Nomor 2
                </div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('dashboard/nomor-3') ? 'active' : '' }}">
            <a href="{{ url('dashboard/nomor-3') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Nomor 3">
                    Nomor 3
                </div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('dashboard/nomor-4') ? 'active' : '' }}">
            <a href="{{ url('dashboard/nomor-4') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Nomor 4">
                    Nomor 4
                </div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('dashboard/nomor-5') ? 'active' : '' }}">
            <a href="{{ url('dashboard/nomor-5') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Nomor 5">
                    Nomor 5
                </div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('dashboard/nomor-6') ? 'active' : '' }}">
            <a href="{{ url('dashboard/nomor-6') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Nomor 6">
                    Nomor 6
                </div>
            </a>
        </li>
    </ul>
</aside>
