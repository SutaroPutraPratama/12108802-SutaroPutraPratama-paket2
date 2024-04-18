<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="dist/img/logo-color.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Kasir</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{auth()->user()->role}}</a>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'menu-open active' : '' }}">
                <a href="{{ route('dashboard') }}"
                    class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{route('user')}}" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        User
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{route('product')}}" class="nav-link">
                    <i class="nav-icon fas fa-cube"></i>
                    <p>
                        Produk
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{route('penjualan')}}" class="nav-link">
                    <i class="nav-icon fas fa-cube"></i>
                    <p>
                        Penjualan
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <hr style="border-top: 1px solid rgba(255, 255, 255, 0.25);"> <!-- Warna putih dengan tingkat transparansi 25% -->
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    @method('post')
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </li>
        </ul>
    </nav>
</div>
<!-- /.sidebar -->
