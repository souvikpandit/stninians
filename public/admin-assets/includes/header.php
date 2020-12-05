
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Education Management</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/external.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"> -->
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png" />
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <header class="header">
        <ul class="header-link">
            <li>
                <a href="#" class="toogle-btn" id="menu-toggle">
                    <span aria-hidden="true" class="glyphicon glyphicon-menu-hamburger"></span>
                    <span aria-hidden="true" class="glyphicon glyphicon-remove-circle"></span>
                </a>
            </li>
            <li>
                <a href="#"><span aria-hidden="true" class="glyphicon glyphicon-home"></span><strong>OEM</strong></a>
            </li>
        </ul>

        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="http://d22r54gnmuhwmk.cloudfront.net/app-assets/global/default_user_icon-7a95ec473c1c41f6d020d32c0504a0ef.jpg" alt="" /><?php echo $_SESSION['name']; ?> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </header>

    <aside id="page-sidebar">
        <nav class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php">
                        <span><i class="fa fa-dashboard"></i>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-institution"></i>Course</span>
                    </a>
                    <ul>
                        <li>
                            <a href="courses.php">Course List</a>
                            <a href="new_course.php">New Course</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-server"></i>Batch</span>
                    </a>
                    <ul>
                        <li>
                            <a href="batches.php">Batch List</a>
                            <a href="new_batch.php">New Batch</a>
                            <a href="batch_courses.php">Batch Courses</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-user"></i>User</span>
                    </a>
                    <ul>
                        <li>
                            <a href="users.php">User List</a>
                            <a href="new_user.php">New User</a>
                            <a href="new_guest_user.php">New Guest User</a>
                            <a href="#">Import User</a>
                            <a href="export_user.php">Export User</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-leanpub"></i>Subjects</span>
                    </a>
                    <ul>
                        <li>
                            <a href="subjects.php">Subject List</a>
                            <a href="new_subject.php">New Subject</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-question-circle"></i>Questions</span>
                    </a>
                    <ul>
                        <li>
                            <a href="questions.php">Question List</a>
                            <a href="new_question.php">New Question</a>
                            <a href="question_banks.php">Question Bank List</a>
                            <a href="new_question_bank.php">New Question Bank</a>
                            <a href="#">Import Question</a>
                            <a href="export_question.php">Export Question</a>
                            <a href="#">Move Question</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-graduation-cap"></i>Exams</span>
                    </a>
                    <ul>
                        <li>
                            <a href="exams.php">Exam List</a>
                            <a href="new_exam.php">New Exam</a>
                            <a href="exam_trash.php">Exam Trash</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-book"></i>Homework</span>
                    </a>
                    <ul>
                        <li>
                            <a href="homeworks.php">Homework List</a>
                            <a href="homework_trash.php">Homework Trash</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-bar-chart"></i>Reports</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">Exam Report</a>
                            <a href="#">Student Report</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-gear"></i>Account</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">Credit Points</a>
                            <a href="#">IP Security</a>
                            Settings
                        </li>
                    </ul>
                </li>
                
            </ul>
        </nav>
    </aside>
</body>
