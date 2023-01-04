<?php
session_start();

if(isset($_SESSION["lifecomputer"])) {
    header("location:index.php");
}else{

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- company icon -->
	<link href="./images/favicon.png" rel="icon">

	<!-- Icon Scout CDN -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

	<!-- Font Awesome CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Google Fonts (MONTSERRAT) -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
   
	<link rel="stylesheet" href="./css/startpage.css?v=<?php echo time(); ?>">
    <title>Sign in & Sign up Form</title>
  </head>

    
  <div class="loader">
<div class="square">
	<span></span>
	<span></span>
	<span></span>
	<span></span>
</div>
</div>


  <body>





    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" class="sign-in-form" method="post" id="login-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="uil uil-user"></i>
              <input type="text" placeholder="Username" name="logusername" required autocomplete="off"/>
            </div>
            <div class="input-field">
              <i class="uil uil-lock"></i>
              <input type="password" placeholder="Password" name="logpassword" required autocomplete="off"/>
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="uil uil-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="uil uil-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="uil uil-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="uil uil-linkedin"></i>
              </a>
            </div>
          </form>
          <form action="php/signup.php" class="sign-up-form" method="post" id="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="uil uil-user"></i>
              <input type="text" placeholder="Username" name="Username" id="Username"/>
            </div>
            <div class="input-field">
              <i class="uil uil-envelope"></i>
              <input type="email" placeholder="Email" name="Email" id="Email"/>
            </div>
            <div class="input-field">
              <i class="uil uil-lock"></i>
              <input type="password" placeholder="Password" name="Password" id="Password"/>
            </div>

            <div class="response-msgs">
      <div class="error-msg" name="error-msg" id="error-msg"></div>
      <div class="success-msg" name="success-msg" id="success-msg"></div>
    </div>

            <input type="submit" class="btn" value="Sign up" id="signup-submit"/>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="uil uil-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="uil uil-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="uil uil-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="uil uil-linkedin"></i>
              </a>
            </div>

          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="images/rocket.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="images/desk.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="startpage.js"></script>
  </body>
</html>

<script src="js/main.js"></script>
<script>
    $("#login-form").submit(function(e) {
 e.preventDefault();

 var formdata = new FormData(this);
 formdata.append("lifeappend", "1");
 $.ajax({
 url: "php/signin.php",
 type: "POST",
 data: formdata,
 processData: false,
 contentType: false,
 success: function(response) {
    //  var res = JSON.parse(response);
//  if (res.hasOwnProperty("success")) {
 
//  setTimeout(function() { window.location.reload(); }, 1000);
//  } else if (res.hasOwnProperty("error")) {
 
//  } 

window.location.reload();

 }
 });
 
 });
</script>

<script>
	$(window).on("load",function(){
		$(".loader").fadeOut(1000);

	})



  $("#sign-up-form").submit(function(e) {
            e.preventDefault();
            var Username = $("#Username").val();
            var Email = $("#Email").val();
            var Password = $("#Password").val();
            $("#error-msg").empty();
            if (Username == "") {
                $("#error-msg").append("Please provide an Username :(");
                jQuery("#Username").focus();
            } else if (Email == "") {
              $("#error-msg").append("Please provide an Email :(");
            jQuery("#Email").focus();;
            } else if (Password == "") {
                $("#error-msg").append("Please provide a Password :(");
                jQuery("#img").focus();
            }else {
            $("#success-msg").append("successfully signed-up :)");
            jQuery("#signup-submit").val("Saving...");
            jQuery("#signup-submit").attr("disabled", true);
            var formdata = new FormData(this);
            formdata.append("mylife", "1");
            $.ajax({
            url: "php/signup.php",
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            success: function(response) {
                setTimeout(function() { window.location.reload(); }, 1000);
                jQuery("#btn-submit").attr("disabled", false); 
            }
    
        });
        }
        });


</script>