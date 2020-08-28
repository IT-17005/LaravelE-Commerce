 <!-- MENU SIDEBAR-->
 <aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{route('admin.index')}}">
            <img src="/admin_asset/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                <a class="js-arrow" href="{{route('admin.index')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Manage Products</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{route('admin.products')}}">Products List</a>
                        </li>
                        <li>
                            <a href="{{route('admin.product.create')}}">Create Product</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
