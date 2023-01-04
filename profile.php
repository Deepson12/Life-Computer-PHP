<?php
session_start();

if(isset($_SESSION["lifecomputer"])) {

}else{
    header("location:startpage.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Life Computer</title>
	<link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="./css/profile.css?v=<?php echo time(); ?>">


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

	<!-- Swiper JS -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
	
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
<!-- End of Loader -->
	<div id="progressbar"></div>
	<div id="scrollPath"></div>
<!-- END OF SCROLL BAR -->

	<nav>
		<div class="container nav__container">
			<a href="index.php"><h4>LIFE COMPUTER</h4></a>
			<ul class="nav__menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="courses.php">Courses</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="signout.php">Signout</a></li>

			</ul>
			<button id="open-menu-btn"><i class="uil uil-bars"></i></button>
			<button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
		</div>
	</nav>
	<!-- END OF NAVBAR -->

    	<!-- DARK/MODE TOGGLE -->
	<div class="toggle">

</div>

<!-- BACK TO TOP -->
<a class="to-top-section" id="to-top-section" href="#">
    <i class="uil uil-arrow-circle-up"></i>
</a>

<!-- Main body code -->


	<div class="card-image">
		<div class="cover-image"></div>
	</div>
	<div class="profile-image">
		<img src="images/avatar1.jpg" alt="">
	</div>
	<div class="bottom-text">
	<h3 class="profile-name">
		Deepson Sharma
</h3>
	<div class="profile-icons">
	<i class="uil uil-edit"></i>
	<i class="uil uil-ellipsis-h"></i>
	</div>


	</div>


	<div class="form">
		<div class="inner-form">
			<form action="">
			<div class="inner-section">
				<i class="uil uil-edit"></i>
				<input type="text" placeholder="Temporary Adderess">
			</div>

			<div class="inner-section">
			<i class="uil uil-edit"></i>
				<input type="text" placeholder="Permanent Adderess">
			</div>

			<div class="inner-section">
			<i class="uil uil-edit"></i>
				<input type="text" placeholder="Email">
			</div>

			<div class="inner-section">
			<i class="uil uil-edit"></i>
				<input type="text" placeholder="Phone No.">
			</form>
			</div>
		</div>
	</div>










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






	<script type="text/javascript" src="main.js"></script>
	<script src="js/main.js"></script>

    
<script>
	$(window).on("load",function(){
		$(".loader").fadeOut(1000);
	})
</script>