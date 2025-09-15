        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link text-decoration-none">
              <span class="app-brand-text demo menu-text fw-bold">SuperAdmin</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto text-decoration-none">
              <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>
          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle text-decoration-none">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Kelola Admin</div>
                <div class="badge bg-danger rounded-pill ms-auto">5</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('superadmin.create') }}" class="menu-link text-decoration-none">
                    <div data-i18n="Analytics">Tambah Admin</div>
                  </a>
                </li>
                <li class="menu-item active">
                  <a href="dashboards-crm.html" class="menu-link">
                    <div data-i18n="CRM">Buat akun Admin</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-ecommerce-dashboard.html" class="menu-link">
                    <div data-i18n="eCommerce">Lihat Admin</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-logistics-dashboard.html" class="menu-link">
                    <div data-i18n="Logistics">Lihat detail Admin</div>
                  </a>
                </li>
              </ul>
            </li>

     
          </ul>
        </aside>