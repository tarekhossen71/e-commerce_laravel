<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <ul class="side-menu metismenu mt-2">
            @permission('app.dashbaoard')
                <li>
                    <a class="active" href="{{ route('app.dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                        <span class="nav-label">Dashboard</span>
                    </a>
                </li>
            @endpermission
            <li class="heading">FEATURES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Basic UI</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="colors.html">Colors</a>
                    </li>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>