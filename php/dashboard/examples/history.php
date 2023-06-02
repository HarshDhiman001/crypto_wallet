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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
<style>
  img {
    height: 100%;
}
</style>
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
          <li class="<?php echo $url == 'history' ? 'active' : '' ?>">
            <a href="history.php?email=<?php echo $email;?>">
              <i class="now-ui-icons text_caps-small"></i>
              <p>History</p>
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
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <?php
                include 'connect.php';
                $email = $_GET['email'];
                $sql = "SELECT * FROM `users` WHERE `email` LIKE '$email'";
                $result = mysqli_query($con,$sql);
                if($result)
                {
                  foreach($result as $row)
                  {
                    $wallet = $row['balance'];
                  }
                }
                ?>
                <h5 class="title">Available Balance</h5>
                <div class="col-md-7 pl-0">
                <div class="form-group">
                <input type="text" class="form-control" disabled="" placeholder="Company" value="<?php echo $wallet;?>">
              </div>
              </div>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Category</th>
                    <!-- <th scope="col">User ID</th> -->
                    <!-- <th scope="col">Credit</th> -->
                    <th scope="col">Debit</th>
                    <th scope="col">Date/Time</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $sqli = "SELECT * FROM `expenses` WHERE `user_id` = $id";
                    $data = mysqli_query($con,$sqli);
                    foreach($data as $info)
                    {
                      $c_id  = $info['category_id'];
                      $userid = $info ['user_id'];
                      // $credit = $info['credit'];
                      $debit = $info['debit'];
                      $date = $info['created_at'];
                    ?>
                    <th scope="row"><?php echo $c_id;?></th>
                    <!-- <td><?php echo $credit;?></td> -->
                    <td><?php echo $debit;?></td>
                    <td><?php echo $date;?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-md-6">
            <img src="https://www.limitlesstechnology.com/wp-content/uploads/2012/05/Money.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
    <?php include'footer.php';?>