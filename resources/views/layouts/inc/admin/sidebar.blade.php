    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/admin/dashboard">
            <i class="mdi mdi-camera-timer menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/sales/basic_elements.html">
            <i class="mdi mdi-sale menu-icon"></i>
            <span class="menu-title">Sales</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-view-list menu-icon"></i>
            <span class="menu-title">Category</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/category/create">Add Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/category">View Category</a></li>
            </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false" aria-controls="products">
            <i class="mdi mdi-plus-circle menu-icon"></i>
            <span class="menu-title">Products</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products/create')}}"> Add Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products')}}"> View Products </a></li>

            </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/brands')}}">
            <i class="mdi mdi-view-headline menu-icon"></i>
            <span class="menu-title">Brands</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
            <span class="menu-title">Users</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="users">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#"> Add User </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> View Users </a></li>
            </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/sliders') }}">
            <i class="mdi mdi-view-carousel menu-icon"></i>
            <span class="menu-title">Home Slider</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="siteSetting/siteSetting.html">
            <i class="mdi mdi-settings menu-icon"></i>
            <span class="menu-title"> Site Settings</span>
            </a>
        </li>

        </ul>
    </nav>
