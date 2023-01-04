<?php

session_start();
if(isset($_SESSION["lifecomputer"])) {

}else{
    
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Life Computer</title>
	<link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/contact.css?v=<?php echo time(); ?>">



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

    <div class="toggle"></div>

    	<!-- BACK TO TOP -->
	<a class="to-top-section" id="to-top-section" href="#">
		<i class="uil uil-arrow-circle-up"></i>
	</a>
	
</head>



<body id="body" class="dark">

<div class="loader">
<div class="square">
	<span></span>
	<span></span>
	<span></span>
	<span></span>
</div>
</div>

	<nav>
		<div class="container nav__container">
			<a href="index.php"><h4>LIFE COMPUTER</h4></a>
			<ul class="nav__menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="courses.php">Courses</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="contact.php" class="selected">Contact</a></li>
                <?php 
       if(isset($_SESSION['lifecomputer']))
       {
?>
     <li class="li-ch-menu"><a class="a-ch-menu" href="profile.php">Profile</a></li>
<?php
       }
       else
       {
           ?>
            <li class="li-ch-menu"><a class="a-ch-menu" href="startpage.php">Login</a></li>
           <?php
       }
       
       ?>
			</ul>
			<button id="open-menu-btn"><i class="uil uil-bars"></i></button>
			<button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
		</div>
	</nav>
	<!-- END OF NAVBAR -->

    <section class="contact">
        <div class="container contact__container">
            <aside class="contact__aside">
                <div class="aside__image">
                    <img src="./images/contact.svg" alt="">
                </div>
                <h2>Contact Us</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi voluptatibus, 
                    cum vitae laborum omnis assumenda placeat fuga quam quibusdam magnam maxime al
                </p>
                <ul class="contact__details">
                    <li>
                        <i class="uil uil-phone-times"></i>
                        <h5>+1213121234123412</h5>
                    </li>
                    <li>
                        <i class="uil uil-envelope"></i>
                        <h5>support@gutter.com</h5>
                    </li>
                    <li>
                        <i class="uil uil-location-point"></i>
                        <h5>Balaju, Kathmandu</h5>
                    </li>
                </ul>
                <ul class="contact__socials">
                    <li> <a href="https://facebook.com"><i class="uil uil-facebook-f"></i></a></li>
                    <li> <a href="https://instagram.com"><i class="uil uil-instagram"></i></a></li>
                    <li> <a href="https://twitter.com"><i class="uil uil-twitter-alt"></i></a></li>
                    <li> <a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a></li>
                </ul>
            </aside>


            <form class="contact__form">
                <div class="form__name">
                    <input type="text" name="Firstname" placeholder="Firstname" required>
                    <input type="text" name="Lastname" placeholder="Lastname" required>
                </div>

                <input type="email" name="Emailaddress" placeholder="Email Address" required>
                <textarea name="Message" rows="7" placeholder="Message" required></textarea>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>



    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.php" class="footer__logo"><h4>LIFE COMPUTER</h4></a>
                <p>
                    The only IT Training Company where quality is never compromised !
                </p>
            </div>
    
            <div class="footer__2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
    
            <div class="footer__3">
                <h4>Primacy</h4>
                <div class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </div>
                
            </div>
    
            <div class="footer__4">
                <h4>Contact Us</h4>
                <div>
                    <p>+12 123 123 1234</p>
                    <p>example@example.com</p>
                </div>
    
                <ul class="footer__socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-linkedin-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>
            <div class="footer__copyright">
                <small>Copyright &copy; Dipshan Websites</small>
            </div>
    </footer>
    
    <!-- END OF FOOTER -->
    
    
    
    <script src="js/main.js"></script>
        <script type="text/javascript" src="main.js"></script>
      
    </body>
    </html>

    <script>
	$(window).on("load",function(){
		$(".loader").fadeOut(1000);
	})
</script>