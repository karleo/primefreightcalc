<?php include 'backend/conn.php';

$_SESSION['last_logged_url'] = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


if(!isset($_SESSION['uid'])){
	header('location:signin.php');
	exit();
}


?>


<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="robots" content="noindex, nofollow">
		<title>Prime Logistics</title>

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Select2 CSS -->
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


		<!-- Animation CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">



		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css?new">
		<link rel="stylesheet" href="assets/css/my.css?v=0.1">


	</head>
	<body>
		<div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div>
		<!-- Main Wrapper -->
		<div class="main-wrapper">

<div class="header">

  <!-- Logo -->
   <div class="header-left active">
    <a id="toggle_btn" href="javascript:void(0);">
    </a>

			<img src="logo/New-logo-Prime.png" style="width:150px;" alt="">
  </div>
  <!-- /Logo -->

  <a id="mobile_btn" class="mobile_btn" href="#sidebar">
    <span class="bar-icon">
      <span></span>
      <span></span>
      <span></span>
    </span>
  </a>

  <!-- Header Menu -->
  <ul class="nav user-menu">

    <!-- Search -->
    <!-- <li class="nav-item">
      <div class="top-nav-search">

        <a href="javascript:void(0);" class="responsive-search">
          <i class="fa fa-search"></i>
      </a>
        <form action="#">
          <div class="searchinputs">
            <input type="text" placeholder="Search Here ...">
            <div class="search-addon">
              <span><img src="../assets/img/icons/closes.svg" alt="img"></span>
            </div>
          </div>
          <a class="btn"  id="searchdiv"><img src="../assets/img/icons/search.svg" alt="img"></a>
        </form>
      </div>
    </li> -->
    <!-- /Search -->

    <!-- Flag -->

    <!-- /Flag -->

    <!-- Notifications -->
    <li class="nav-item dropdown">
      <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
        <img src="assets/img/icons/notification-bing.svg"   alt="img"> <span class="badge rounded-pill"></span>
      </a>
      <div class="dropdown-menu notifications">
        <div class="topnav-dropdown-header">
          <span class="notification-title">Notifications</span>
          <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
        </div>
        <div class="noti-content">
          <ul class="notification-list">
						<!-- <li class="notification-message">
              <a href="#activities.html">
                <div class="media d-flex">
                  <div class="media-body flex-grow-1">
                    <p class="noti-details"><span class="noti-title">Quotation Requested By An Customer</span> </p>
                    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                  </div>
                </div>
              </a>
            </li> -->
          </ul>
        </div>
        <div class="topnav-dropdown-footer">
          <a href="#">View all Notifications</a>
        </div>
      </div>
    </li>
    <!-- /Notifications -->

    <li class="nav-item dropdown has-arrow main-drop">
      <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
        <span class="user-img"> SYSTEM  </span>
      </a>
      <div class="dropdown-menu menu-drop-user">
        <div class="profilename">
          <div class="profileset">
            <span class="status online"></span></span>
            <div class="profilesets">
              <h6><?= $_SESSION['u_name'] ?></h6>
            </div>
          </div>
          <hr class="m-0">
          <!-- <a class="dropdown-item" href="profile.html"> <i class="me-2"  data-feather="user"></i> My Profile</a>
          <a class="dropdown-item" href="generalsettings.html"><i class="me-2" data-feather="settings"></i>Settings</a> -->
          <hr class="m-0">
          <a class="dropdown-item logout pb-0" href="backend/logout.php"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
        </div>
      </div>
    </li>
  </ul>
  <!-- /Header Menu -->

  <!-- Mobile Menu -->
  <div class="dropdown mobile-user-menu">
    <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
    <div class="dropdown-menu dropdown-menu-right">
      <a class="dropdown-item" href="backend/logout.php">Logout</a>
    </div>
  </div>
  <!-- /Mobile Menu -->
</div>
