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
      <div class="panel-header">
        <div class="header text-center">
          <h2 class="title">Notifications</h2>
          <p class="category">Handcrafted by our friend <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a></p>
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Notifications Style</h4>
              </div>
              <div class="card-body">
                <div class="alert alert-info">
                  <span>This is a plain notification</span>
                </div>
                <div class="alert alert-info">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span>This is a notification with close button.</span>
                </div>
                <div class="alert alert-info alert-with-icon" data-notify="container">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                  <span data-notify="message">This is a notification with close button and icon.</span>
                </div>
                <div class="alert alert-info alert-with-icon" data-notify="container">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                  <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Notification states</h4>
              </div>
              <div class="card-body">
                <div class="alert alert-primary">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span><b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
                </div>
                <div class="alert alert-info">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span><b> Info - </b> This is a regular notification made with ".alert-info"</span>
                </div>
                <div class="alert alert-success">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span><b> Success - </b> This is a regular notification made with ".alert-success"</span>
                </div>
                <div class="alert alert-warning">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span><b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
                </div>
                <div class="alert alert-danger">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                  </button>
                  <span><b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="places-buttons">
                  <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                      <h4 class="card-title">
                        Notifications Places
                        <p class="category">Click to view notifications</p>
                      </h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','left')">Top Left</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','center')">Top Center</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','right')">Top Right</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','left')">Bottom Left</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','center')">Bottom Center</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','right')">Bottom Right</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include'footer.php';?>