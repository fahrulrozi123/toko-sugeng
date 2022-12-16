<aside class="main-sidebar sidebar-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TOKO SUGENG</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
                @section('home')
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                        Dashboard
                        </p>
                    </a>
                @show
            </li>
            <li class="nav-header">MASTER</li>
            <li class="nav-item">
                @section('kategori')
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                        Categori
                        <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="daftarkategori" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daftar Category</p>
                        </a>
                        </li>
                    </ul>
                @show
            </li>
            <li class="nav-item">
                @section('produk')
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                        Product
                        <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="daftarproduk" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daftar Product</p>
                        </a>
                        </li>
                    </ul>
                @show
            </li>
            <li class="nav-item">
                @section('transaksi')
                <a href="transaksi" class="nav-link">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p>
                        Transaksi
                    </p>
                </a>
                @show
            </li>
        </ul>
    </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
