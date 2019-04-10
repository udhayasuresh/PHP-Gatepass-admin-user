
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Viari Dashboard</title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
  
   

  <!--demo-->
  <script>
   jQuery(function ($) {
    var $active = $('#accordion .panel-collapse.in').prev().addClass('active');
    $active.find('a').prepend('<i class="glyphicon glyphicon-minus"></i>');
    $('#accordion .panel-heading').not($active).find('a').prepend('<i class="glyphicon glyphicon-plus"></i>');
    $('#accordion').on('show.bs.collapse', function (e) {
        $('#accordion .panel-heading.active').removeClass('active').find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
        $(e.target).prev().addClass('active').find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
    })
});
   </script>
   
  <!--end demo-->
</head>

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="https://www.viari.in/media/images/default/logo_1_1.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="https://viari.in/skin/frontend/tm_themes/theme777/images/logoimage.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
			
            <a href="logout.php" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./index.html">
              <i class="ni ni-tv-2 text-primary"></i> GatePass
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./permissionslip/permission.php">
              <i class="ni ni-planet text-blue"></i> PermissionSlip
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./onduty/onduty.php">
              <i class="ni ni-pin-3 text-orange"></i> OnDuty Slip
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./visitorpass/visitorpass.php">
              <i class="ni ni-single-02 text-yellow"></i> Visitor Pass
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="./examples/login.html">
              <i class="ni ni-key-25 text-info"></i> Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/register.html">
              <i class="ni ni-circle-08 text-pink"></i> Register
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
       
        <!-- Navigation -->
        
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Dashboard</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="https://viari.in/skin/frontend/tm_themes/theme777/images/logoimage.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Viari</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
			  
              <a href="logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <a href="gatepass.php"><h5 class="card-title text-uppercase text-muted mb-0">GatePass</h5>
                      <span class="h2 font-weight-bold mb-0">
					  <?php 
    include('config.php');
	$today = date('Y-m-d');
    $result = $db->query("SELECT id,date,code,name,place,TIME_FORMAT(time, '%r')time,emp_sign,status,auth_sign  FROM gatepass WHERE DATE(date) = '$today' ORDER BY id DESC ");
    $data_record = $result->num_rows;
	echo  $data_record;
      ?>
					  </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
					
                  </div>
				  </a>
				  <hr/>
                  <a href="gatepass.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      <strong>Details</strong>
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
				  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">PermissionSlip</h5>
                      <span class="h2 font-weight-bold mb-0">
					  <?php 
    include('config.php');
	$today = date('Y-m-d');
    $result = $db->query("SELECT p_id,date,code,name,TIME_FORMAT(time, '%r')time,emp_sign,status,auth_sign FROM permission_slip WHERE DATE(date) = '$today' ");
    $data_record = $result->num_rows;
	echo  $data_record;
      ?>
					  </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
				  <hr/>
                  <a href="permissionslip/permission.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      <strong>Details</strong>
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">On Duty</h5>
                      <span class="h2 font-weight-bold mb-0">
					   <?php 
    include('config.php');
	$today = date('Y-m-d');
    $result = $db->query("SELECT onduty_id,date,name,code,TIME_FORMAT(time, '%r')time,out_time,place,reason,emp_sign,status,auth_sign FROM on_duty WHERE DATE(date) = '$today' ");
    $data_record = $result->num_rows;
	echo  $data_record;
      ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
				  <hr/>
                  <a href="onduty/onduty.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      <strong>Details</strong>
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Visitor Pass</h5>
                      <span class="h2 font-weight-bold mb-0">
					   <?php 
    include('config.php');
	$today = date('Y-m-d');
    $result = $db->query("SELECT v_id,date,TIME_FORMAT(time, '%r')time,name,visitor_from,visit,requested,status,auth_sign FROM visitor_pass WHERE DATE(date) = '$today' ORDER BY v_id DESC");
    $data_record = $result->num_rows;
	echo  $data_record;
      ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
				  <hr/>
                  <a href="visitorpass/visitorpass.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      <strong>Details</strong>
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">GatePass</h3>
                </div>
                <div class="col text-right">
                  <a href="gatepass.php" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Place</th>
					<th scope="col">Time</th>
					<th scope="col">Emp.Sign</th>
					<th scope="col">Status</th>
					<th scope="col">Auth.Sign</th>
                  </tr>
                </thead>
				<?php
        require("dbconfig.php"); 
       	
       $today = date('Y-m-d');

$result = mysqli_query($dbc,"SELECT id,date,code,name,place,TIME_FORMAT(time, '%r')time,emp_sign,status,auth_sign  FROM gatepass WHERE DATE(date) = '$today' ORDER BY id DESC ");


        if(mysqli_num_rows($result)>0)
        {
       while($row = mysqli_fetch_array($result))
{
 
$date=$row['date'];
$code=$row['code'];
$name=$row["name"];
$place=$row['place'];
$time=$row["time"];
$emp_sign=$row['emp_sign'];
$status=$row['status'];
$auth_sign=$row['auth_sign'];



 echo '<tbody>
                  <tr>
                    <td>
                      '.$row["date"].'
                    </td>
                    <td>
                      '.$row["code"].'
                    </td>
                    <td>
                      '.$row["name"].'
                    </td>
                    <td>
                      '.$row["place"].'
                    </td>
					<td>
                      '.$row["time"].'
                    </td>
					<td>
                      '.$row["emp_sign"].'
                    </td>
					<td>
                      '.$row["status"].'
                    </td>
					<td>
                      '.$row["auth_sign"].'
                    </td>
                  </tr>
                  
                </tbody>';
				}
				}
				?>
				
              </table>
			  
            </div>
          </div>
		  <br/>
	
        </div>
		
		<div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Permission Slip</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Code</th>
                    <th scope="col">Name</th>
                    
					<th scope="col">Time</th>
					<th scope="col">Emp.Sign</th>
					<th scope="col">Status</th>
					<th scope="col">Auth.Sign</th>
                  </tr>
                </thead>
				<?php
        require("dbconfig.php"); 
       	
       $today = date('Y-m-d');

$result = mysqli_query($dbc,"SELECT p_id,date,code,name,TIME_FORMAT(time, '%r')time,emp_sign,status,auth_sign FROM permission_slip WHERE DATE(date) = '$today' ");


        if(mysqli_num_rows($result)>0)
        {
       while($row = mysqli_fetch_array($result))
{
 
$date=$row['date'];
$code=$row['code'];
$name=$row["name"];
//$place=$row['place'];
$time=$row["time"];
$emp_sign=$row['emp_sign'];
$status=$row['status'];
$auth_sign=$row['auth_sign'];



 echo '<tbody>
                  <tr>
                    <td>
                      '.$row["date"].'
                    </td>
					<td>
                      '.$row["code"].'
                    </td>
                    
                    <td>
                      '.$row["name"].'
                    </td>
                    
					<td>
                      '.$row["time"].'
                    </td>
					<td>
                      '.$row["emp_sign"].'
                    </td>
					<td>
                      '.$row["status"].'
                    </td>
					<td>
                      '.$row["auth_sign"].'
                    </td>
                  </tr>
                  
                </tbody>';
				}
				}
				?>
				
              </table>
			  
            </div>
          </div>
		  <br/>
	
        </div>
		<div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">On Duty</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
					<th scope="col">Code</th>
                    <th scope="col">In.Time</th>
					<th scope="col">Out.Time</th>
					<th scope="col">Place</th>
					<th scope="col">Reason</th>
					<th scope="col">Emp.Sign</th>
					<th scope="col">Status</th>
					<th scope="col">Auth.Sign</th>
                  </tr>
                </thead>
				<?php
        require("dbconfig.php"); 
       	
       $today = date('Y-m-d');

$result = mysqli_query($db,"SELECT onduty_id,date,name,code,TIME_FORMAT(time, '%r')time,out_time,place,reason,emp_sign,status,auth_sign FROM on_duty WHERE DATE(date) = '$today' ");


        if(mysqli_num_rows($result)>0)
        {
       while($row = mysqli_fetch_array($result))
{
 
$date=$row['date'];
$name=$row["name"];
$code=$row['code'];
$time=$row['time'];
$out_time=$row['out_time'];
$place=$row['place'];
$reason=$row['reason'];
//$time=$row["time"];
$emp_sign=$row['emp_sign'];
$status=$row['status'];
$auth_sign=$row['auth_sign'];



 echo '<tbody>
                  <tr>
                    <td>
                      '.$row["date"].'
                    </td>
                    
                    <td>
                      '.$row["name"].'
                    </td>
					<td>
                      '.$row["code"].'
                    </td>
                    
					<td>
                      '.$row["time"].'
                    </td>
					<td>
                      '.$row["out_time"].'
                    </td>
					<td>
                      '.$row["place"].'
                    </td>
					<td>
                      '.$row["reason"].'
                    </td>
					<td>
                      '.$row["emp_sign"].'
                    </td>
					<td>
                      '.$row["status"].'
                    </td>
					<td>
                      '.$row["auth_sign"].'
                    </td>
                  </tr>
                  
                </tbody>';
				}
				}
				?>
				
              </table>
			  
            </div>
          </div>
		  <br/>
	
        </div>
		<div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Visitor Pass</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Name</th>
                    <th scope="col">Visitor From</th>
					<th scope="col">Purpose of visit</th>
					<th scope="col">Requested By</th>
					<th scope="col">Status</th>
					<th scope="col">Auth.Sign</th>
                  </tr>
                </thead>
				<?php
        require("dbconfig.php"); 
       	
       $today = date('Y-m-d');

      $result = mysqli_query($db,"SELECT v_id,date,TIME_FORMAT(time, '%r')time,name,visitor_from,visit,requested,status,auth_sign FROM visitor_pass WHERE DATE(date) = '$today' ORDER BY v_id DESC");


        if(mysqli_num_rows($result)>0)
        {
       while($row = mysqli_fetch_array($result))
{
 
$date=$row['date'];
$time=$row['time'];
$name=$row["name"];
$visitor_from=$row['visitor_from'];
$visit=$row["visit"];
$requested=$row['requested'];
$status=$row['status'];
$auth_sign=$row['auth_sign'];



 echo '<tbody>
                  <tr>
                    <td>
                      '.$row["date"].'
                    </td>
                    <td>
                      '.$row["time"].'
                    </td>
                    <td>
                      '.$row["name"].'
                    </td>
                    <td>
                      '.$row["visitor_from"].'
                    </td>
					<td>
                      '.$row["visit"].'
                    </td>
					<td>
                      '.$row["requested"].'
                    </td>
					<td>
                      '.$row["status"].'
                    </td>
					<td>
                      '.$row["auth_sign"].'
                    </td>
                  </tr>
                  
                </tbody>';
				}
				}
				?>
				
              </table>
			  
            </div>
          </div>
		  <br/>
	
        </div>
       
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <!--<a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>-->
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
	
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.0"></script>
</body>

</html>