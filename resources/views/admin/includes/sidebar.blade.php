<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.main.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.user.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-angle-double-up"></i>
                        <p>
                            Users
                        </p>
                    </a><i class=""></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.source.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-angle-double-up"></i>
                        <p>
                            Sources
                        </p>
                    </a><i class=""></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.type.index') }}" class="nav-link">
                        <i class="nav-icon far fa-bookmark pr-2"></i>
                        <p>
                            Types
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.tag.index') }}" class="nav-link">
                        <i class="nav-icon fab fa-buffer pr-2"></i>
                        <p>
                            Tags
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}" class="nav-link">
                        <i class="nav-icon far fa-bookmark pr-2"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.earning.index') }}" class="nav-link">
                        <i class="nav-icon far fa-arrow-alt-circle-up pr-2"></i>
                        <p>
                            Earnings
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.spending.index') }}" class="nav-link">
                        <i class="nav-icon far fa-arrow-alt-circle-down pr-2"></i>
                        <p>
                            Spendings
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
