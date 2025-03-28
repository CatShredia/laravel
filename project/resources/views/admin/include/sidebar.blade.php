<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
        <img src="{{ asset('dist/1.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">CatShredia's AP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/2.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Current Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">Pages</li>
            <li class="nav-item">
                <a href="{{ route('admin.category') }}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Categories
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/gallery.html" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p>
                        Tags
                        {{-- <span class="badge badge-info right">@livewire('count-tags')</span> --}}
                    </p>
                </a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>