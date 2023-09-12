<ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
            </svg>
            {{ __('Dashboard') }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
            </svg>
            Quản lý sản phẩm
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin-order-index')}}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-cart') }}"></use>
            </svg>
            Quản lý đơn hàng
        </a>
    </li>

</ul>
