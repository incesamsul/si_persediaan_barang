<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">CV. Andalas Jaya</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            {{-- MENU PENGGUNA --}}
            {{-- SEMUA PENGGUNA / USER MEMPUNYAI MENU INI --}}
            <li class="menu-header">Pengguna</li>
            <li class="" id="liDashboard"><a class="nav-link" href="{{ URL::to('/dashboard') }}"><i
                        class="far fa-chart-bar"></i> <span>Dashboard</span></a></li>
            <li class="" id="liProfile"><a class="nav-link" href="{{ URL::to('/profile') }}"><i
                        class="far fa-user"></i>
                    <span>Profile</span></a></li>



            @if (auth()->user()->role == 'Administrator')
                {{-- MENU ADMIN --}}
                <li class="menu-header">Admin</li>

                <li class="" id="liBantuan"><a class="nav-link" href="{{ URL::to('/admin/pengguna') }}"><i
                            class="far fa-address-card"></i> <span>Pengguna</span></a></li>
                <li class="" id="liBarang"><a class="nav-link" href="{{ URL::to('/barang') }}"><i
                            class="fas fa-list"></i> <span>Barang</span></a></li>
                <li class="" id="liBarangMasuk"><a class="nav-link" href="{{ URL::to('/barang_masuk') }}"><i
                            class="fas fa-arrow-right"></i> <span>Barang Masuk</span></a></li>
                <li class="" id="liBarangMasuk"><a class="nav-link" href="{{ URL::to('/barang_keluar') }}"><i
                            class="fas fa-arrow-left"></i> <span>Barang Keluar</span></a></li>
                <li class="" id="liBarangMasuk"><a class="nav-link" href="{{ URL::to('/laporan') }}"><i
                            class="fas fa-file-excel"></i> <span>Laporan</span></a></li>

                {{-- END OF MENU ADMIN --}}
            @endif






        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ URL::to('/logout') }}" class="btn bg-main text-white btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </aside>
</div>
