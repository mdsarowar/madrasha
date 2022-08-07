<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{ route('dashboard') }}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('/') }}backend/assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('/') }}backend/assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="{{ route('dashboard') }}" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('/') }}backend/assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('/') }}backend/assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Menu Options</li>
            <li class="side-nav-item {{ request()->is('dashboard') ? 'menuitem-active' : '' }}">
                <a href="{{ route('dashboard') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Only for admin</li>

            <li class="side-nav-item {{ request()->is('admin/permissions*') ? 'menuitem-active' : '' }} {{ request()->is('admin/roles*') ? 'menuitem-active' : '' }} {{ request()->is('admin/users*') ? 'menuitem-active' : '' }}">
                <a data-bs-toggle="collapse" href="#userRolePermission" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> User Management </span>
                </a>
                <div class="collapse" id="userRolePermission">
                    <ul class="side-nav-second-level">
                        <li class="{{ request()->is('admin/permissions*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('permissions.index') }}" class="{{ request()->is('admin/permission') || request()->is('admin/permissions/*') ? 'active' : '' }}">Permission</a>
                        </li>
                        <li class="{{ request()->is('admin/roles*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('roles.index') }}" class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">Role</a>
                        </li>
                        <li class="{{ request()->is('admin/users*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('users.index') }}" class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">User</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item {{ request()->is('admin/class*') ? 'menuitem-active' : '' }} {{ request()->is('admin/section*') ? 'menuitem-active' : '' }} {{ request()->is('admin/subject*') ? 'menuitem-active' : '' }} {{ request()->is('admin/parent*') ? 'menuitem-active' : '' }} {{ request()->is('admin/teacher*') ? 'menuitem-active' : '' }} {{ request()->is('admin/staff*') ? 'menuitem-active' : '' }}">
                <a data-bs-toggle="collapse" href="#Academic" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-diary"></i>
                    <span> Academic </span>
                </a>
                <div class="collapse" id="Academic">
                    <ul class="side-nav-second-level">
                        <li class="{{ request()->is('admin/permissions*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('class.index') }}" class="{{ request()->is('admin/class') || request()->is('admin/class/*') ? 'active' : '' }}">Class</a>
                        </li>
                        <li class="{{ request()->is('admin/roles*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('section.index') }}" class="{{ request()->is('admin/section') || request()->is('admin/section/*') ? 'active' : '' }}">Section</a>
                        </li>
                        <li class="{{ request()->is('admin/users*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('subject.index') }}" class="{{ request()->is('admin/subject') || request()->is('admin/subject/*') ? 'active' : '' }}">Subject</a>
                        </li>
                        <li class="{{ request()->is('admin/teacher*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('teacher.index') }}" class="{{ request()->is('admin/teacher') || request()->is('admin/teacher/*') ? 'active' : '' }}">Teacher</a>
                        </li>
                        <li class="{{ request()->is('admin/parent*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('parent.create') }}" class="{{ request()->is('admin/parent') || request()->is('admin/parent/*') ? 'active' : '' }}">Parent</a>
                        </li>
                        <li class="{{ request()->is('admin/staff*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('staff.create') }}" class="{{ request()->is('admin/staff') || request()->is('admin/staff/*') ? 'active' : '' }}">Staff</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item {{ request()->is('admin/chapter*') ? 'menuitem-active' : '' }} {{ request()->is('admin/varse*') ? 'menuitem-active' : '' }} {{ request()->is('admin/translation*') ? 'menuitem-active' : '' }} {{ request()->is('admin/translation_provider*') ? 'menuitem-active' : '' }} ">
                <a data-bs-toggle="collapse" href="#Quran" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="mdi-blur-off"></i>
                    <span> Quran </span>
                </a>
                <div class="collapse" id="Quran">
                    <ul class="side-nav-second-level">
                        <li class="{{ request()->is('admin/chapter*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('chapter.index') }}" class="{{ request()->is('admin/chapter') || request()->is('admin/chapter/*') ? 'active' : '' }}">Chapter</a>
                        </li>
                        <li class="{{ request()->is('admin/varse*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('varse.index') }}" class="{{ request()->is('admin/varse') || request()->is('admin/varse/*') ? 'active' : '' }}">Varse</a>
                        </li>
                        <li class="{{ request()->is('admin/translation*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('translation.index') }}" class="{{ request()->is('admin/translation') || request()->is('admin/translation/*') ? 'active' : '' }}">Translation</a>
                        </li>
                        <li class="{{ request()->is('admin/translation_provider*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('translation_provider.index') }}" class="{{ request()->is('admin/translation_provider') || request()->is('admin/translation_provider/*') ? 'active' : '' }}">Translation Provider</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="side-nav-item {{ request()->is('setting') ? 'menuitem-active' : '' }}">
                <a href="{{ route('setting.create') }}" class="side-nav-link">
                    <i class="dripicons-gear"></i>
                    <span> Setting </span>
                </a>
            </li>
        </ul>

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
