<?php
include 'connect.php';
$email = $_GET['email'];
$sql = "SELECT * FROM `users` WHERE `email` LIKE '$email'";
$result = mysqli_query($con,$sql);
if($result)
{
  foreach($result as $row)
  {
    $id = $row['id'];
    // header("location: http://localhost/clg_project/php/dashboard/examples/user.php?email=$email");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">

      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          CT
        </a>
        <a href="#" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
<?php
    $url = str_replace('.php','',basename($_SERVER['PHP_SELF']));
?>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li class="<?php echo $url == 'user' ? 'active' : '' ?>">
            <a href="./user.php?email=<?php echo $email;?>">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="<?php echo $url == 'dashboard' ? 'active' : '' ?>">
            <a href="./dashboard.php?email=<?php echo $email;?>">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="<?php echo $url == 'icons' ? 'active' : '' ?>">
            <a href="./wallet.php?email=<?php echo $email;?>">
              <i class="now-ui-icons education_atom"></i>
              <p>Wallet</p>
            </a>
          </li>
          <li class="<?php echo $url == 'typography' ? 'active' : '' ?>">
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.php">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                Google Maps
              </div>
              <div class="card-body ">
                <div id="map" class="map"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include'footer.php';?>