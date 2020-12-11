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
            </ul>
        </nav>
    </aside>
