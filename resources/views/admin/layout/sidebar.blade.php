 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!-- @if(auth()->check())     -->
            <div class="image">
                <img src="/vendor/admin/dist/img/resto.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"></a>
            </div>
            <!-- @endif -->
        </div>
        <a href="index3.html" class="brand-link">
       <!--img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"!-->
      <span class="brand-text font-weight-light">Kasir Restaurant Food</span>
    </a>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

           
          <li class="nav-item">
            <a href="/kasir/transaksi" class="nav-link  {{ Request::is('admin/transaksi*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-exchange-alt"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>

          @if(auth()->user()->role!="pengguna")
          <li class="nav-item">
            <a href="/admin/produk" class="nav-link  {{ Request::is('admin/produk*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          @endif
          @if(auth()->user()->role!="pengguna")
          <li class="nav-item">
            <a href="/admin/kategori" class="nav-link  {{ Request::is('admin/kategori*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          @endif
          @if(auth()->user()->role!="pengguna")
          <li class="nav-item">
            <a href="/admin/user" class="nav-link  {{ Request::is('admin/user*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">