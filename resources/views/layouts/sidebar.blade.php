<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('adminlte3/dist/img/AdminLTELogo.png')}} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Bakery</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
                   
          <li class="nav-header">SUPER ADMIN</li>
          <li class="nav-item">
            <a wire:navigate href="{{ route('superadmin.user.index') }}" class="nav-link @yield('menuSuperadminUser')">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a wire:navigate href="{{ route('superadmin.category.index') }}" class="nav-link @yield('menuSuperadminCategory')">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a wire:navigate href="{{ route('superadmin.product.index') }}" class="nav-link @yield('menuSuperadminProduct')">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-header">ADMIN</li>
          <li class="nav-item">
            <a wire:navigate href="{{ route('admin.product.index') }}" class="nav-link @yield('menuAdminProduct')">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>