<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="{{ url('/dashboard')}}"><img src="{{ asset('dist/assets/images/logo/logo.png')}}" alt="Logo" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item active ">
                <a href="{{ url('/dashboard')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Components</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{ url('admin/product/')}}">Products</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('admin/customer/')}}">Customers</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('admin/categories')}}">Category</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('admin/orders/')}}">Orders</a>
                    </li>
                </ul>
            </li>

 
            <li class="sidebar-item  ">
                <a href="{{ url('admin/admins/')}}" class='sidebar-link'>
                    <i class="bi bi-puzzle"></i>
                    <span>Admin</span>
                </a>
            </li>
            <li class="sidebar-item  ">
                <a href="{{ url('/logout')}}" class='sidebar-link'>
                    <i class="bi bi-puzzle"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>