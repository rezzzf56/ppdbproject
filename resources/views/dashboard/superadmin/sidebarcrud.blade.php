        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="" class="app-brand-link text-decoration-none">
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
                <div>Kelola Admin</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('superadmin.create') }}" class="menu-link text-decoration-none">
                    <div>Tambah Admin</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('superadmin.showall') }}" class="menu-link">
                    <div>Lihat Admin</div>
                  </a>
                </li>
              </ul>
            </li>

     
          </ul>
        </aside>