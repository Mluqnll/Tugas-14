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
                <a href="{{ url('penjual') }}" class="{{ checkRouteActive('penjual') }}">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                    <span class="menu">
                        <i class="mdi "></i>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ url('produk') }}" class="{{ checkRouteActive('produk') }}">
                    <i class="fa fa-gift"></i>
                    <span>Product</span>
                </a>
            </li>
        </ul>

    </div>
</div>
