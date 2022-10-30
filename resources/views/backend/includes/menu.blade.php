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

            <li class="side-nav-item {{ request()->is('admin/library_book_category*') ? 'menuitem-active' : '' }} {{ request()->is('admin/library_book*') ? 'menuitem-active' : '' }} {{ request()->is('admin/library_member*') ? 'menuitem-active' : '' }} {{ request()->is('admin/library_ebook*') ? 'menuitem-active' : '' }}{{ request()->is('admin/library_ebook_file*') ? 'menuitem-active' : '' }} ">
                <a data-bs-toggle="collapse" href="#Library" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="mdi-blur-off"></i>
                    <span> Library </span>
                </a>
                <div class="collapse" id="Library">
                    <ul class="side-nav-second-level">
                        <li class="{{ request()->is('admin/library_book_category*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('library_book_category.index') }}" class="{{ request()->is('admin/library_book_category') || request()->is('admin/library_book_category/*') ? 'active' : '' }}">Book Category</a>
                        </li>
                        <li class="{{ request()->is('admin/library_book*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('library_book.index') }}" class="{{ request()->is('admin/library_book') || request()->is('admin/library_book/*') ? 'active' : '' }}">Book</a>
                        </li>
                        <li class="{{ request()->is('admin/library_member*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('library_member.index') }}" class="{{ request()->is('admin/library_member') || request()->is('admin/library_member/*') ? 'active' : '' }}">Member</a>
                        </li>
                        <li class="{{ request()->is('admin/library_ebook*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('library_ebook.index') }}" class="{{ request()->is('admin/library_ebook') || request()->is('admin/library_ebook/*') ? 'active' : '' }}">Ebook</a>
                        </li>
                        <li class="{{ request()->is('admin/library_ebook_file*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('library_ebook_file.index') }}" class="{{ request()->is('admin/library_ebook_file') || request()->is('admin/library_ebook_file/*') ? 'active' : '' }}">Ebook File</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="side-nav-item {{ request()->is('admin/hostel*') ? 'menuitem-active' : '' }} {{ request()->is('admin/hostel_member*') ? 'menuitem-active' : '' }}  ">
                <a data-bs-toggle="collapse" href="#Hostel" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="mdi-blur-off"></i>
                    <span> Hostel </span>
                </a>
                <div class="collapse" id="Hostel">
                    <ul class="side-nav-second-level">
                        <li class="{{ request()->is('admin/hostel*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('hostel.index') }}" class="{{ request()->is('admin/hostel') || request()->is('admin/hostel/*') ? 'active' : '' }}">Hostel</a>
                        </li>
                        <li class="{{ request()->is('admin/hostel_member*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('hostel_member.index') }}" class="{{ request()->is('admin/hostel_member') || request()->is('admin/hostel_member/*') ? 'active' : '' }}">Hostel Member</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item {{ request()->is('admin/exam*') ? 'menuitem-active' : '' }} {{ request()->is('admin/exam_mark_distribution_type*') ? 'menuitem-active' : '' }} {{ request()->is('admin/exam_attendance*') ? 'menuitem-active' : '' }} {{ request()->is('admin/exam_grade*') ? 'menuitem-active' : '' }}{{ request()->is('admin/exam_schedule*') ? 'menuitem-active' : '' }}{{ request()->is('admin/question*') ? 'menuitem-active' : '' }} {{ request()->is('admin/question_difficulty_level*') ? 'menuitem-active' : '' }} ">
                <a data-bs-toggle="collapse" href="#ExamManagement" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="mdi-blur-off"></i>
                    <span> Exam Management </span>
                </a>
                <div class="collapse" id="ExamManagement">
                    <ul class="side-nav-second-level">
                        <li class="{{ request()->is('admin/exam*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('exam.index') }}" class="{{ request()->is('admin/exam') || request()->is('admin/exam/*') ? 'active' : '' }}">Exam</a>
                        </li>
                        <li class="{{ request()->is('admin/exam_mark_distribution_type*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('exam_mark_distribution_type.index') }}" class="{{ request()->is('admin/exam_mark_distribution_type') || request()->is('admin/exam_mark_distribution_type/*') ? 'active' : '' }}">Exam_mark_distribution_type</a>
                        </li>
                        <li class="{{ request()->is('admin/exam_attendance*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('exam_attendance.index') }}" class="{{ request()->is('admin/exam_attendance') || request()->is('admin/exam_attendance/*') ? 'active' : '' }}">Exam Attendance</a>
                        </li>
                        <li class="{{ request()->is('admin/exam_grade*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('exam_grade.index') }}" class="{{ request()->is('admin/exam_grade') || request()->is('admin/exam_grade/*') ? 'active' : '' }}">Exam Grade</a>
                        </li>
                        <li class="{{ request()->is('admin/exam_schedule*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('exam_schedule.index') }}" class="{{ request()->is('admin/exam_schedule') || request()->is('admin/exam_schedule/*') ? 'active' : '' }}">Exam Schedule</a>
                        </li>
                        <li class="{{ request()->is('admin/question*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('question.index') }}" class="{{ request()->is('admin/question') || request()->is('admin/question/*') ? 'active' : '' }}">Question</a>
                        </li>
                        <li class="{{ request()->is('admin/question_difficulty_level*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('question_difficulty_level.index') }}" class="{{ request()->is('admin/question_difficulty_level') || request()->is('admin/question_difficulty_level/*') ? 'active' : '' }}">Question Difficulty Level</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="side-nav-item {{ request()->is('admin/academic_stuff*') ? 'menuitem-active' : '' }} {{ request()->is('admin/user_admin*') ? 'menuitem-active' : '' }}{{ request()->is('admin/designation*') ? 'menuitem-active' : '' }}{{ request()->is('admin/user_management_student*') ? 'menuitem-active' : '' }}{{ request()->is('admin/user_management_teacher*') ? 'menuitem-active' : '' }} {{ request()->is('admin/user_submitted_certificate*') ? 'menuitem-active' : '' }}  ">
                <a data-bs-toggle="collapse" href="#user_management" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="mdi-blur-off"></i>
                    <span> User Management </span>
                </a>
                <div class="collapse" id="user_management">
                    <ul class="side-nav-second-level">
                        <li class="{{ request()->is('admin/academic_stuff*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('academic_stuff.index') }}" class="{{ request()->is('admin/academic_stuff') || request()->is('admin/academic_stuff/*') ? 'active' : '' }}">Academic Stuff</a>
                        </li>
                        <li class="{{ request()->is('admin/user_admin*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('user_admin.index') }}" class="{{ request()->is('admin/user_admin') || request()->is('admin/user_admin/*') ? 'active' : '' }}">Admin</a>
                        </li>
                        <li class="{{ request()->is('admin/designation*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('designation.index') }}" class="{{ request()->is('admin/designation') || request()->is('admin/designation/*') ? 'active' : '' }}">Designation</a>
                        </li>
                        <li class="{{ request()->is('admin/user_management_student*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('user_management_student.index') }}" class="{{ request()->is('admin/user_management_student') || request()->is('admin/user_management_student/*') ? 'active' : '' }}">Students</a>
                        </li>
                        <li class="{{ request()->is('admin/user_management_teacher*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('user_management_teacher.index') }}" class="{{ request()->is('admin/user_management_teacher') || request()->is('admin/user_management_teacher/*') ? 'active' : '' }}">Teachers</a>
                        </li>
                        <li class="{{ request()->is('admin/user_submitted_certificate*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('user_submitted_certificate.index') }}" class="{{ request()->is('admin/user_submitted_certificate') || request()->is('admin/user_submitted_certificate/*') ? 'active' : '' }}">Submitted Certificates</a>
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
