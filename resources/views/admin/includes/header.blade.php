<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{  trans('admininfo.admin_panel_title')  }}</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet" />
    <link href="{{ asset('admin-assets/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin-assets/css/external.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet" />
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
                <a href="#"><span aria-hidden="true" class="glyphicon glyphicon-home"></span><strong>{{ trans('admininfo.company_name') }}</strong></a>
            </li>
        </ul>

        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('admin-assets/images/avtar.jpg') }}" alt="" />Admin <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </header>


</body>
