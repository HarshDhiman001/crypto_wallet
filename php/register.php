<?php 
include 'header.php';
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
<!-- <div class="container"> -->

    <div class="col-lg-12 mt-5 mt-lg-0">
        <form action="registerdata.php" method="post" role="form" id="frm">
            <h1><center>Register</center></h1>
            <div class="row">
                <div class="form-group mt-3">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                </div>
                <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                </div>
                <div class="form-group mt-3">
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="form-group mt-3">
                        <a href="login.php">Already registered</a>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-danger w-100 p-1 mt-4 btn-block" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>        
    </div>
</div>
<!-- </div> -->
</section><!-- End Contact Section -->
</main>
<?php
include 'footer.php';
?>
<script>
    $('#frm').validate({
        rules:{
            name:{
                required:true
            },
            email:{
                required:true
            },
            phone:{
                required:true
            },
            password:{
                required:true
            }
        },
        messages:{
            name:'enter your name',
            email: 'enter your valid email',
            phone: 'enter your phone number',
            password: 'set your password'
        }
    });    
</script>