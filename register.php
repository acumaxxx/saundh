<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta http-equiv="x-ua-compatible" content="ie=edge"/>
  <link rel="shortcut icon" href="img/favicon.png" type=""/>
  <title> SAUNDH || Register</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/aos.css"/>
  <link rel="stylesheet" type="text/css" href="css/header.css"/>
  <link rel="stylesheet" type="text/css" href="css/footer.css"/>
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/fonts.css" />
  <link rel="stylesheet" type="text/css" href="css/responsive.css" />
   <!--[if lt IE 8]>
   <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
   <![endif]-->  
</head>
<body class="product-details-page">


<!-- header area start -->
 <?php @include("include/header.php") ?>
<!-- header area end -->


<section class="main_section">
   <div class="container">
      <div class="row">
         <div class="Register_area">
            <div class="login_form active" id="login">
               <h2>Welcome Back</h2>
               <p>Insert your email and password to <span>complete your purchase in a fast and simple way</span></p>
               <form>
                  <div class="form-group">
                    <input type="text" placeholder="Username" />
                  </div>
                  <div class="form-group">
                    <input type="password" placeholder="Password" />
                  </div>
                  <div class="form-group">
                    <button>LOGIN</button>
                  </div>
               </form>
               <p class="forgot_psd"><a href="javascript:void(0);">Forgot Password?</a></p>
               <p class="text-sign">Doesn't have an account? <a href="javascript:void(0);" class="sign_btn">Register with us</a></p>
            </div>


            <div class="login_form" id="psd_forgot">
               <h2>Forgot Your Password</h2>
               <p>Enter your registered e-mail address <span>to recover your password</span></p>
               <form>
                  <div class="form-group">
                    <input type="email" placeholder="E-mail Id" />
                  </div>
                  <div class="form-group">
                    <button>RECOVER PASSWORD</button>
                  </div>
               </form>
               <p class="text-sign">Doesn't have an account? <a href="javascript:void(0);" class="sign_btn">Register with us</a></p>
            </div>


            <div class="login_form sign_form" id="sign_up">
               <h2>New User </h2>
               <p>First time visiting? <span>Please input the following details to join in.</span></p>
               <form>
                  <div class="form-group">
                    <input type="text" placeholder="Name" />
                  </div>
                  <div class="form-group">
                    <input type="email" placeholder="E-mail" />
                  </div>
                  <div class="form-group">
                    <input type="text" placeholder="Mobile No." />
                  </div>
                  <div class="form-group">
                    <select>
                        <option>Country</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="password" placeholder="Enter Password"/>
                  </div>
                  <div class="form-group">
                    <input type="password" placeholder="Confirm Password"/>
                  </div>
                  <div class="form-group sign_up">
                    <button>REGISTER</button>
                  </div>
               </form>
               <p class="text-sign">Already have an account? <a href="javascript:void(0);" class="login_btn">LOGIN NOW</a></p>
            </div>

         </div>
      </div>
   </div>

<section class="last-section"></section>

</section>


<!-- footer area start -->
 <?php @include("include/footer.php") ?>
<!-- footer area end -->



<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.12.0.min.js"><\/script>')</script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/jarallax.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/smoothScroll.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/saundh.js"></script>

<script>
$(document).ready(function() {
   $(".login_btn").click(function(){
      $("#login").addClass("active");
      $("#sign_up").removeClass("active"); 
      $("#psd_forgot").removeClass("active"); 
   });
   $(".sign_btn").click(function(){
      $("#sign_up").addClass("active"); 
      $("#login").removeClass("active");
      $("#psd_forgot").removeClass("active");
   });
   $(".forgot_psd").click(function(){
      $("#psd_forgot").addClass("active"); 
      $("#login").removeClass("active");
      $("#sign_up").removeClass("active");
   });
});      

</script>


</body>
</html> 