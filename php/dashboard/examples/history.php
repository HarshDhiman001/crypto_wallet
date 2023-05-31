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
            <div class="card">
              <div class="card-header">
                <h5 class="title">Now Ui Table Heading</h5>
                <p class="category">Created using Montserrat Font Family</p>
              </div>
              <div class="card-body">
                <div class="typography-line">
                  <h1><span>Header 1</span>The Life of Now Ui Dashboard </h1>
                </div>
                <div class="typography-line">
                  <h2><span>Header 2</span>The Life of Now Ui Dashboard </h2>
                </div>
                <div class="typography-line">
                  <h3><span>Header 3</span>The Life of Now Ui Dashboard </h3>
                </div>
                <div class="typography-line">
                  <h4><span>Header 4</span>The Life of Now Ui Dashboard </h4>
                </div>
                <div class="typography-line">
                  <h5><span>Header 5</span>The Life of Now Ui Dashboard </h5>
                </div>
                <div class="typography-line">
                  <h6><span>Header 6</span>The Life of Now Ui Dashboard </h6>
                </div>
                <div class="typography-line">
                  <p><span>Paragraph</span>
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                  </p>
                </div>
                <div class="typography-line">
                  <span>Quote</span>
                  <blockquote>
                    <p class="blockquote blockquote-primary">
                      "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                      <br>
                      <br>
                      <small>
                        - Noaa
                      </small>
                    </p>
                  </blockquote>
                </div>
                <div class="typography-line">
                  <span>Muted Text</span>
                  <p class="text-muted">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                  </p>
                </div>
                <div class="typography-line">
                  <span>Primary Text</span>
                  <p class="text-primary">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                </div>
                <div class="typography-line">
                  <span>Info Text</span>
                  <p class="text-info">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                </div>
                <div class="typography-line">
                  <span>Success Text</span>
                  <p class="text-success">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                </div>
                <div class="typography-line">
                  <span>Warning Text</span>
                  <p class="text-warning">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                  </p>
                </div>
                <div class="typography-line">
                  <span>Danger Text</span>
                  <p class="text-danger">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                </div>
                <div class="typography-line">
                  <h2><span>Small Tag</span>
                    Header with small subtitle <br>
                    <small>Use "small" tag for the headers</small>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include'footer.php';?>