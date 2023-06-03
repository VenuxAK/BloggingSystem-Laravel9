<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    @if (auth()->user()->avatar)
                        <img src="/storage/{{ auth()->user()->avatar }}" alt="profile">
                    @else
                        <img src="/assets/admin/images/faces/face1.jpg" alt="profile">
                    @endif
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2"> {{ auth()->user()->name }} </span>
                    <span class="text-secondary text-small">
                        {{ ucwords(str_replace('_', ' ', auth()->user()->role)) }}
                    </span>
                </div>
                <i
                    class="mdi mdi-bookmark-check nav-profile-badge {{ auth()->user()->role == 'super_admin' ? 'text-danger' : 'text-success' }}"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/dashboard">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-view-dashboard menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#toggleBlog" aria-expanded="false"
                aria-controls="toggleBlog">
                <span class="menu-title">Blogs Management</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="toggleBlog">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/blogs">View Blogs</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/blogs/create"> Create
                            Blog </a></li>
                </ul>
            </div>
        </li>
        @can('superAdmin')
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
                    <span class="menu-title">Users Management</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-account-multiple-plus menu-icon"></i>
                </a>
                <div class="collapse" id="users">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/admin/users">View Users</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="/admin/users/create"> Create
                                User </a></li>
                    </ul>
                </div>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="/admin/users">
                    <span class="menu-title">View Users</span>
                    <i class="mdi mdi-account menu-icon"></i>
                </a>
            </li>
        @endcan
        <li class="nav-item">
            <a class="nav-link" href="/">
                <span class="menu-title">Home</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
