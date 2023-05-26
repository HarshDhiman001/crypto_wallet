<?php 
include 'header.php';
?>

<?php 
    $url=simplexml_load_file('https://www.belongly.com/wp-content/uploads/xml/81-postings-generic.xml');
    echo "<pre>";
    print_r($url);die;
    $xml = new SimpleXMLElement($url);
?>


<main id="main">
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Register Now</h2>
          <ol>
            <li><a href="#">Home</a></li>
            <li>Register</li>
          </ol>
        </div>
      </div>
    </section>
     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
      <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-5 mt-lg-0"> 
                <img src="assets/img/portfolio/graph.jpg" class="form_img" alt="">
            </div>
            <div class="col-lg-6 mt-5 mt-lg-4">
                <form action="dashboard.php" method="post" role="form" id="frm">
                    <div class="row">
                        <h1><center>Login</center></h1>
                            <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group mt-3">
                        <a href="register.php">New user</a> ||
                        <a href="#">Forgot password</a>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-danger w-100 p-1 mt-4 btn-block" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>        
    </div>
</div>
    </section><!-- End Contact Section -->
</main>
<?php
include 'footer.php';
?>
<script>
    $('#frm').validate({
        rules:{
            email:{
                required:true
            },
            password:{
                required:true
            }
        }
    });
</script>