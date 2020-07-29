<!doctype html>
<html lang="en">


<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 12:07:25 GMT -->
<head>
<title>Admin DASHBOARD</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="./assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="./assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="./assets/vendor/toastr/toastr.min.css">

<!-- <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="./assets/vendor/fullcalendar/fullcalendar.min.css">
<!-- <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css"> -->
<!-- MAIN CSS -->
<link rel="stylesheet" href="./assets1/css/main.css">
<link rel="stylesheet" href="./assets1/css/color_skins.css">
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="/assets/images/inner.png" alt="ICM"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>

            <div class="navbar-brand">
                <img src="/assets/images/inner.png" alt="ICM" style="height:40px">               
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>               

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">                        
                        
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="notification-dot" style="background:red !important"></span>
                            </a>
                            <ul class="dropdown-menu notifications animated shake">
                                <li class="header"><strong>You have 4 new Notifications</strong></li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-warning"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                <span class="timestamp">10:00 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>                               
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-like text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                <span class="timestamp">11:30 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                                <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                    
                            <ul class="dropdown-menu user-menu menu-icon animated bounceIn">
                                <li class="menu-heading">ACCOUNT SETTINGS</li>
                             
                               
                            </ul>
                        </li>
                        <li><a href="{{route('logout')}}" class="icon-menu"><i class="icon-login"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="/assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Jessica Doe</strong></a>                    
                    <ul class="dropdown-menu dropdown-menu-right account animated flipInY">
                        <li><a href="{{route('profile')}}"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('logout')}}"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <h6>5+</h6>
                        <small>New Employee</small>                        
                    </div>
                    <div class="col-4">
                        <h6>400+</h6>
                        <small>All Employees</small>                        
                    </div>
                    <div class="col-4">                        
                        <h6>80+</h6>
                        <small>Our Partners</small>
                    </div>
                </div>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#hr_menu">Main Nav</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#project_menu">Uploads</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sub_menu"><i class="icon-grid"></i></a></li>                
                <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li> -->
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane animated fadeIn active" id="hr_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li class="active"><a href="{{route('dashboard')}}"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                            <li><a href="{{route('profile')}}"><i class="icon-user"></i>User Profile</a></li>
                            <li><a href="{{route('events')}}"><i class="icon-calendar"></i>Events</a></li>
                            <li><a href="{{url('/request/leave')}}"><i class="icon-plane"></i>Request For Leave</a></li>
                            
                            <li>
                                <a href="#Employees" class="has-arrow"><i class="icon-settings"></i><span>Management Section</span></a>
                                <ul>
                                    <li><a href="{{route('icmStaffs')}}">ICM Staff Members</a></li>
                                    <li><a href="{{route('leaveRequest')}}">Leave Requests</a></li>
                                    <li><a href="{{route('allReport')}}">Reports</a></li>
                                    <li><a href="{{route('manageEvent')}}">Manage Events</a></li>
                                    <li><a href="activities">Departmental Activities</a></li>
                                </ul>
                            </li>
                </div>
                <div class="tab-pane animated fadeIn" id="project_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                        <li><a href="/upload/banner/image"><i class="icon-arrow-up"></i><span>Upload Banner</span></a></li>

                        <li><a href="/upload/about"><i class="icon-settings"></i><span>Upload About</span></a></li>
                            <li><a href="/upload/services"><i class="icon-settings"></i><span>Upload Services</span></a></li>
                            <li><a href="/upload/portfolio"><i class="icon-settings"></i><span>Upload Portfolio</span></a></li>
                            <li><a href="/manage/client"><i class="icon-settings"></i><span>Upload Client</span></a></li>
                            <!-- <li><a href="/manage/report"><i class="icon-settings"></i><span>Manage Report</span></a></li> -->


                            <li><a href="/manage/report"><i class="icon-settings"></i><span>Manage Report</span></a></li>

                            
                            
                            <li><a href="/task/board"><i class="icon-tag"></i>Taskboard</a></li>
                            <!-- <li><a href="app-tickets.html"><i class="icon-screen-tablet"></i>Tickets</a></li> -->
                        </ul>                        
                    </nav>                    
                </div>



                <div class="tab-pane animated fadeIn" id="sub_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <ul class="main-menu metismenu">
                             <li><a href="/add/todo"><i class="fa fa-arrows-alt"></i><span>Add ToDo</span></a></li>
                            <li><a href="/manage/todo"><i class="icon-settings"></i><span>Manage ToDo</span></a></li>
                            
                            <li><a href="/task/board"><i class="icon-tag"></i>Taskboard</a></li>
                            <!-- <li><a href="app-tickets.html"><i class="icon-screen-tablet"></i>Tickets</a></li> -->
                        </ul>  
                           
                        </ul>
                    </div>
                </div>             
            </div>          
        </div>
    </div>
