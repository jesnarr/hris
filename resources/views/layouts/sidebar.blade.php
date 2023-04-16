<nav id="js-primary-nav" class="primary-nav" role="navigation">
    <ul id="js-nav-menu" class="nav-menu" data-widget="treeview" data-accordion="false">
        @php $current = url()->current() @endphp

        <li class="{{ $current == url('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" title="Dashboard">
                <i class="fal fa-info-circle text-white"></i>
                <span class="nav-link-text">Dashboard</span>
            </a>
        </li>

        <li class="nav-title">Employee Section</li>

        <li class="">
            <a href="javascript:void(0)" class="nav-link">
                <i class="fal fa-users text-white"></i>
                <span class="nav-link-text">Employees</span>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-link {{ Route::is('employee.*') ? 'active' : '' }}">
                    <a href="/employee" title="Employee">
                        <i class="fal fa-user-tie text-white"></i>
                        <span class="nav-link-text">Employees</span>
                    </a>
                </li>
                {{-- <li class="nav-link{{ $current == url('attendance') ? 'active' : '' }}">
                    <a href="/timekeep-list" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Monitor Attendance</span>
                    </a>
                </li> --}}
                <li class="nav-link{{ $current == url('overtime') ? 'active' : '' }}">
                    <a href="/overtime/list" title="Time off">
                        <i class="fal fa-users-cog text-white"></i>
                        <span class="nav-link-text">Overtime Requests</span>
                    </a>
                </li>
                <li class="nav-link {{ $current == url('timeoff/team-off') ? 'active' : '' }}">
                    <a href="/timeoff/team-off" title="Time off">
                        <i class="fal fa-users-cog text-white"></i>
                        <span class="nav-link-text">Team Time Off</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- <li class="">
            <a href="javascript:void(0)" class="nav-link {{ Route::is('careers.*') ? 'active' : '' }}">
                <i class="fal fa-user-tie text-white"></i>
                <span class="nav-link-text">Careers</span>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-link {{ Route::is('careers.*') ? 'active' : '' }}">
                    <a href="{{ route('careers.admin.index') }}" title="Careers">
                        <i class="fal fa-user-tie text-white"></i>
                        <span class="nav-link-text">Careers</span>
                    </a>

                </li>
                <li class="nav-link">
                    <a href="/employee" title="Employee">
                        <i class="fal fa-clipboard-list text-white"></i>
                        <span class="nav-link-text">Careers</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="javascript:void(0)" class="nav-link">
                <i class="fal fa-plane text-white"></i>
                <span class="nav-link-text">Productivity</span>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-link {{ Route::is('employee.*') ? 'active' : '' }}">
                    <a href="/employee" title="Employee">
                        <i class="fal fa-user-tie text-white"></i>
                        <span class="nav-link-text">Activity</span>
                    </a>
                </li>
                <li class="nav-link {{ $current == url('attendance') ? 'active' : '' }}">
                    <a href="/timekeep-list" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Daily Tasks</span>
                    </a>
                </li>
            </ul>
        </li> --}}

        <li class="">
            <a href="javascript:void(0)" class="nav-link">
                <i class="fal fa-business-time text-white"></i>
                <span class="nav-link-text">Time Management</span>
            </a>
            <ul class="nav nav-treeview">
                {{-- <li class="nav-link {{ $current == url('attendance') ? 'active' : '' }}">
                    <a href="/attendance-list" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Attendance</span>
                    </a>
                </li>
                <li class="nav-link {{ $current == url('attendance') ? 'active' : '' }}">
                    <a href="/timekeep-list" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Time Keep</span>
                    </a>
                </li> --}}
                {{-- <li class="nav-link {{ $current == url('overtime/list') ? 'active' : '' }}">
                    <a href="/overtime/list" title="Time off">
                        <i class="fal fa-users-cog text-white"></i>
                        <span class="nav-link-text">Overtime Requests</span>
                    </a>
                </li> --}}
                <li class="nav-link {{ $current == url('attendance') ? 'active' : '' }}">
                    <a href="/dtr/list" title="Employee">
                        <i class="fal fa-folder-times text-white"></i>
                        <span class="nav-link-text">DTR</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="javascript:void(0)" class="nav-link">
                <i class="fal fa-plane text-white"></i>
                <span class="nav-link-text">Filing Management</span>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-link {{ $current == url('attendance') ? 'active' : '' }}">
                    <a href="/overtime" title="Employee">
                        <i class="fal fa-alarm-clock text-white"></i>
                        <span class="nav-link-text">Overtime</span>
                    </a>
                </li>
                <li class="nav-link {{ $current == url('timeoff') ? 'active' : '' }}">
                    <a href="/timeoff" title="Employee">
                        <i class="fal fa-walking text-white"></i>
                        <span class="nav-link-text">Leave</span>
                    </a>
                </li>
                {{-- <li class="nav-link {{ $current == url('attendance') ? 'active' : '' }}">
                    <a href="/leave" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Official Business</span>
                    </a>
                </li>
                <li class="nav-link {{ $current == url('timeoff/team-off') ? 'active' : '' }}">
                    <a href="/overtime" title="Time off">
                        <i class="fal fa-users-cog text-white"></i>
                        <span class="nav-link-text">MRF</span>
                    </a>
                </li> --}}
            </ul>
        </li>


        {{-- <li class="">
            <a href="javascript:void(0)" class="nav-link">
                <i class="fal fa-plane text-white"></i>
                <span class="nav-link-text">Tracker Management</span>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-link {{ $current == url('attendance') ? 'active' : '' }}">
                    <a href="/overtime" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Application</span>
                    </a>
                </li>
                <li class="nav-link {{ $current == url('timeoff') ? 'active' : '' }}">
                    <a href="/timeoff" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Payroll Reports</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="javascript:void(0)" class="nav-link">
                <i class="fal fa-plane text-white"></i>
                <span class="nav-link-text">Announcements</span>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-link {{ $current == url('attendance') ? 'active' : '' }}">
                    <a href="/overtime" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">News</span>
                    </a>
                </li>
                <li class="nav-link {{ $current == url('timeoff') ? 'active' : '' }}">
                    <a href="/timeoff" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Memo</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="javascript:void(0)" class="nav-link">
                <i class="fal fa-plane text-white"></i>
                <span class="nav-link-text">Payroll</span>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-link {{ $current == url('attendance') ? 'active' : '' }}">
                    <a href="/overtime" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Salary</span>
                    </a>
                </li>
                <li class="nav-link {{ $current == url('timeoff') ? 'active' : '' }}">
                    <a href="/timeoff" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Payroll Reports</span>
                    </a>
                </li>
                <li class="nav-link {{ $current == url('timeoff') ? 'active' : '' }}">
                    <a href="/timeoff" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Payslips</span>
                    </a>
                </li>
            </ul>
        </li> --}}

        {{-- <li class="">
            <a href="javascript:void(0)" class="nav-link">
                <i class="fal fa-plane text-white"></i>
                <span class="nav-link-text">Insights</span>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-link {{ $current == url('attendance') ? 'active' : '' }}">
                    <a href="/overtime" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Application Reports</span>
                    </a>
                </li>
                <li class="nav-link {{ $current == url('timeoff') ? 'active' : '' }}">
                    <a href="/timeoff" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Attendance Reports</span>
                    </a>
                </li>
            </ul>
        </li> --}}


        {{-- <li class="">
            <a href="javascript:void(0)" class="nav-link">
                <i class="fal fa-plane text-white"></i>
                <span class="nav-link-text">System</span>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-link {{ $current == url('attendance') ? 'active' : '' }}">
                    <a href="/overtime" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Users</span>
                    </a>
                </li>
                <li class="nav-link {{ $current == url('timeoff') ? 'active' : '' }}">
                    <a href="/timeoff" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">Manage Module</span>
                    </a>
                </li>
            </ul>
        </li> --}}


        {{-- <li class="{{ Route::is('timeoff.*') ? 'active' : '' }}">
            <a href="javascript:void(0)" class="nav-link">
                <i class="fal fa-plane text-white"></i>
                <span class="nav-link-text">Time off</span>
            </a>
            <ul class="nav nav-treeview">
                <li class="{{ $current == url('leave') ? 'active' : '' }}">
                        <a href="/leave" title="Employee">
                            <i class="fal fa-cog text-white"></i>
                            <span class="nav-link-text">Settings</span>
                        </a>
                    </li>
                <li class="nav-link {{ $current == url('timeoff') ? 'active' : '' }}">
                    <a href="/timeoff" title="Employee">
                        <i class="fal fa-plane text-white"></i>
                        <span class="nav-link-text">My Time Off</span>
                    </a>
                </li>
                <li class="nav-link {{ $current == url('timeoff/team-off') ? 'active' : '' }}">
                    <a href="/timeoff/team-off" title="Time off">
                        <i class="fal fa-users-cog text-white"></i>
                        <span class="nav-link-text">Team Time Off</span>
                    </a>
                </li>
            </ul>
        </li> --}}


        {{-- <li class="{{ Route::is('mrf.*') ? 'active' : '' }}">
            <a href="javascript:void(0)" class="nav-link">
                <i class="fal fa-file text-white"></i>
                <span class="nav-link-text">MRF</span>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-link {{ Route::is('mrf.*') ? 'active' : '' }}">
                    <a href="/mrf" title="MRF">
                        <i class="fal fa-file text-white"></i>
                        <span class="nav-link-text">MRF</span>
                    </a>
                </li>
                @admin
                <li class="nav-link {{ Route::is('mrf.*') ? 'active' : '' }}">
                    <a href="/mrf/list" title="MRF">
                        <i class="fal fa-file text-white"></i>
                        <span class="nav-link-text">MRF List</span>
                    </a>
                </li>
                @endadmin
            </ul>
        </li> --}}


    </ul>
</nav>


@push('scripts')
    <script>

    </script>
@endpush
