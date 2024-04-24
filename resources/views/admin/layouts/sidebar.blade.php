<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}" class="brand-link">
        <img src="{{ asset('assets/admin/lte3/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">bdapps</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <i class="fas fa-user-circle text-white" style="font-size: 30px"></i>
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    {{ session()->get('bdapps_aa_admin_mail') }}
                </a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->



                <li class="nav-item {{ $is_active == 'admin_list' || $is_active == 'admin_create' ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Admin
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.admin_user') }}"
                                class="nav-link {{ $is_active == 'admin_list' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.admin_user.create') }}"
                                class="nav-link {{ $is_active == 'admin_create' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Admin</p>
                            </a>
                        </li>
                    </ul>
                </li>

                
                <li
                    class="nav-item {{ $is_active == 'bdapps_dev' || $is_active == 'affiliate_create' ? 'bdapps_dev' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            bdapps Developer
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.dev_user') }}"
                                class="nav-link {{ $is_active == 'bdapps_dev' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                    </ul>
                </li>

               


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
