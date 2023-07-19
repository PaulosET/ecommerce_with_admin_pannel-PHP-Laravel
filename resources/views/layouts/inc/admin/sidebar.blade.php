<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('admin/dashboard') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>

            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/orders') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('admin/orders') }}">
                <i class="mdi   mdi-star menu-icon"></i>
                <span class="menu-title">Orders</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/category*') ? 'active' : '' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#category"
                aria-expanded="{{ Request::is('admin/category*') ? 'false' : 'false' }}">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Catagory</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Request::is('admin/category*') ? 'show' : '' }}" id="category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('admin/category/create') ? 'active' : '' }}"
                            href="{{ url('admin/category/create') }}">Add catagory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('admin/category') || Request::is('admin/category/*/edit') ? 'active' : '' }}"
                            href="{{ url('admin/category') }}">View catagory</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Request::is('admin/products*') ? 'active' : '' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#products"
                aria-expanded="{{ Request::is('admin/products*') ? 'true' : 'false' }}">
                <i class="mdi mdi-plus-circle menu-icon"></i>
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse  {{ Request::is('admin/products*') ? 'show' : 'false' }}" id="products">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a
                            class="nav-link {{ Request::is('admin/products/create') ? 'active' : '' }}"
                            href="{{ url('admin/products/create') }}">Add
                            Product</a>
                    </li>
                    <li class="nav-item"> <a
                            class="nav-link {{ Request::is('admin/products') || Request::is('admin/products/*/edit') ? 'active' : '' }}"
                            href="{{ url('admin/products') }}">View Product</a>

                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ Request::is('admin/brand') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('admin/brand') }}">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Brands(Origin)</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/colors') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('admin/colors') }}">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Colors</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/sliders') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('admin/sliders') }}">
                <i class="mdi mdi mdi mdi-view-carousel menu-icon"></i>
                <span class="menu-title">Home Slider</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/users/*') ? 'active' : '' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#users"
                aria-expanded="{{ Request::is('admin/users*') ? 'true' : 'false' }}" aria-controls="users">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ Request::is('admin/users/*') ? 'show' : '' }}" id="users">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link {{ Request::is('admin/users/create') ? 'active' : '' }}"
                            href="{{ url('admin/users/create') }}"> Add User </a></li>
                    <li class="nav-item"> <a
                            class="nav-link {{ Request::is('admin/users') || Request::is('admin/users/*/edit') ? 'active' : '' }}"
                            href="{{ url('admin/users') }}"> View User </a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item {{ Request::is('admin/setting') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('admin/setting') }}">
                <i class="mdi mdi-settings menu-icon"></i>
                <span class="menu-title">Site Setting</span>
            </a>
        </li>
    </ul>
</nav>
