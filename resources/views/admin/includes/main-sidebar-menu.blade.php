<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p> Categories
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('categories.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Category Add</p>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
            <p> Products
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('products.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Products</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('products.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Product Add</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{ route('orders.index') }}" class="nav-link">
        <i class="nav-icon fas fa-shopping-cart"></i>
            <p> Orders </p>
        </a>
    </li>
</ul>