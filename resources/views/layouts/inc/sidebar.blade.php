<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      {{-- <span class="brand-text font-weight-light">AdminLTE 3</span> --}}
    {{-- </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
          <a href="#" class="center-b">K-modo</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('dashboard') }}" class="nav-link {{ active_link('dashboard') }}">
                <i class="fa-solid fa-user-gear mr-3"></i>
                <p>{{ __('Админпанель') }}</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('categories') }}" class="nav-link {{ active_link('categories') }}">
                <i class="fa-solid fa-boxes-stacked mr-3"></i>
                <p>{{ __('Категории товара') }}</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('products') }}" class="nav-link {{ active_link('products') }}">
                <i class="fa-solid fa-couch mr-3"></i>
              <p>{{ __('Товары') }}</p>
            </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('colors') }}" class="nav-link {{ active_link('colors') }}">
                    <i class="fa-solid fa-palette mr-3"></i>
                  <p>{{ __('Цвета') }}</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
