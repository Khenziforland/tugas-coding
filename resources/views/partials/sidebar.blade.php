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
    </ul>
</aside>
