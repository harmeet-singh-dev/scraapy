<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Main</li>

            <li>
                <a href="{{ URL::to('admin/home') }}" class="waves-effect">
                    <i class="mdi mdi-view-dashboard"></i>
                   
                    <span>Dashboard</span>
                </a>
            </li>

           

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-account-box"></i>
                    <span>All Users</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ URL::to('admin/ind-users') }}">Individual Users</a></li>
                    <li><a href="{{ URL::to('admin/industrial-users') }}">Industrial Users</a></li>
                    <li><a href="{{ URL::to('admin/global-users') }}">Global Users</a></li>
                    <li><a href="{{ URL::to('admin/vendor-users') }}">Vendor Users</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-format-list-bulleted-type"></i>
                    <span>All Scrap</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ URL::to('admin/view-category') }}">Scrap Category</a></li>
                    <li><a href="{{ URL::to('admin/view-scraptype') }}">Scrap Type</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>