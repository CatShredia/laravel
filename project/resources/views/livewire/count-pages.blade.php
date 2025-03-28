<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-header">Pages</li>
    <li class="nav-item">
        <a href="{{ route('admin.category') }}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
                Categories
                <span class="badge badge-info right">{{ count($categories) }}</span>
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="pages/gallery.html" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
                Tags
                <span class="badge badge-info right">{{ count($tags) }}</span>
            </p>
        </a>
    </li>
</ul>