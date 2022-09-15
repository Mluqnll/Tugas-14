@php
function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp

<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="#" class="logo">
            <span>
                <img src="{{ url('public/superadmin') }}/images/logobibit.png" alt="logo-small" class="logo-sm">
            </span>
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li>
                <a href="{{ url('admin') }}" class="{{ checkRouteActive('admin/admin') }}">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                    <span class="menu">
                        <i class="mdi "></i>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/produk') }}" class="{{ checkRouteActive('admin/produk') }}">
                    <i class="fa fa-gift"></i>
                    <span>Product</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/kategori') }}" class="{{ checkRouteActive('admin/kategori') }}">
                    <i class="fa fa-list"></i>
                    <span>Kategori</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/user') }}" class="{{ checkRouteActive('admin/user') }}">
                    <i class="fa fa-user"></i>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);">
                    <i class="" class="align-self-center menu-icon"></i>
                    <span>MasterData</span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a class="{{ checkRouteActive('admin/test-alamat') }}" href="{{url('admin/test-alamat')}}">Alamat</a></li>
                    <li><a class="{{ checkRouteActive('admin/pembeli') }}" href="{{url('admin/pembeli')}}">Pembeli</a></li>
                    <li><a class="{{ checkRouteActive('admin/penjual') }}" href="{{url('admin/penjual')}}">Penjual</a></li>
                </ul>
            </li>
            </li>



        </ul>

    </div>
</div>
