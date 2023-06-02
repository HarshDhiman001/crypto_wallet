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
    $email = $row['email'];
    $name = $row['name'];
    $wallet = $row['balance'];
    $address = $row['address'];
    $phone = $row['phone'];
    $pincode = $row['pincode'];
    $country = $row['country'];
    // header("location: http://localhost/clg_project/php/dashboard/examples/user.php?email=$email");
  }
}
?>
<div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <a href="#">
                      <img class="avatar border-gray" src="../assets/img/harshdhiman.jpg" alt="...">
                    </a>
                    <h5 class="title"><?php echo $name;?></h5>
                  </a>
                  <p class="description">
                    <?php echo $email;?>
                  </p>
                </div>
                <p class="description text-center">
                  Hello There🙋🏻<br>
                  I love to learn new things new technologies and I'm always eager to learn new skills and open for challenges apart from this I Have Good Knowledge About Java , PHP , HTML & CSS as well.
                  Thank You ☺️<br>
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>
        </div>