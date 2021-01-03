<aside id="page-sidebar">
        <nav class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <span><i class="fa fa-dashboard"></i>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-institution"></i>Enquiry</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('enquiry.index') }}">All Enquiries</a>
                            <a href="{{ route('enquiry.notreplied') }}">Unanswered Enquiries</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-cog"></i>Site Settings</span>
                    </a>
                    <ul>
                        <li>
                            {{-- <a href="{{ route('cms.index') }}">SEO Manager</a> --}}
                            <a href="{{ route('cms.school_info') }}">School Info</a>
                            <a href="{{ route('cms.banner') }}">Banner</a>
                            <a href="{{ route('cms.about') }}">Mission & Vision</a>
                            <a href="{{ route('cms.principal_desk') }}">Principal Desk</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-buysellads"></i>Admission</span>
                    </a>
                    <ul>
                        <li><a href="{{ route('admission.index') }}">All Request</a></li>
                        <li><a href="{{ route('admission.approved') }}">Approved Request</a></li>
                        <li><a href="{{ route('admission.pending') }}">Pending Request</a></li>
                        <li><a href="{{ route('admission.declined') }}">Declined Request</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>
