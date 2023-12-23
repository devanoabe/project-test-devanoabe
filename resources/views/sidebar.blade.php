<head>
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
</head>

<aside style="background: black" class="main-sidebar">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item pill-1">
                    <a style="color: white;" href="{{ route('home') }}" class="nav-link {{ (request()->routeIs('home') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item pill-2">
                    <a style="color: white;" href="{{ route('profile') }}" class="nav-link {{ (request()->routeIs('profile') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item pill-3">
                    <a style="color: white;" href="{{ route('pengalaman') }}" class="nav-link {{ (request()->routeIs('pengalaman') ? 'active' : '') }}">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Pengalaman Kuliah
                        </p>
                    </a>
                </li>
                <li class="nav-item pill-3">
                    <a style="color: white;" href="{{ route('hobi') }}" class="nav-link {{ (request()->routeIs('hobi') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Hobi
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

