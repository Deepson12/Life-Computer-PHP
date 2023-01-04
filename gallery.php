<?php

session_start();
if (isset($_SESSION["lifecomputer"])) {
} else {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=s, initial-scale=1.0">
	<title>Gallery</title>
	<link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="./css/gallery.css?v=<?php echo time(); ?>">


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
			<a href="index.php">
				<h4>LIFE COMPUTER</h4>
			</a>
			<ul class="nav__menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="courses.php">Courses</a></li>
				<li><a href="gallery.php" class="selected">Gallery</a></li>
				<li><a href="contact.php">Contact</a></li>
				<?php
				if (isset($_SESSION['lifecomputer'])) {
				?>
					<li class="li-ch-menu"><a class="a-ch-menu" href="profile.php">Profile</a></li>
				<?php
				} else {
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

	<!-- DARK/MODE TOGGLE -->
	<div class="toggle">

	</div>

	<!-- BACK TO TOP -->
	<a class="to-top-section" id="to-top-section" href="#">
		<i class="uil uil-arrow-circle-up"></i>
	</a>

	<h1>Gallery</h1>

	<div class="img-gallery">
		<img src="images/1.jpg" alt="">
		<img src="images/2.jpg" alt="">
		<img src="images/3.jpg" alt="">
		<img src="images/4.jpg" alt="">
		<img src="images/5.jpg" alt="">
		<img src="images/6.jpg" alt="">
		<img src="images/7.jpg" alt="">
		<img src="images/8.jpg" alt="">
		<img src="images/9.jpg" alt="">
		<img src="images/10.jpg" alt="">
		<img src="images/11.jpg" alt="">
		<img src="images/12.jpg" alt="">
		<img src="images/13.jpg" alt="">
		<img src="images/14.jpg" alt="">
		<img src="images/15.jpg" alt="">
		<img src="images/16.jpg" alt="">
		<img src="images/17.jpg" alt="">
		<img src="images/18.jpg" alt="">
		<img src="images/19.jpg" alt="">
		<img src="images/20.jpg" alt="">
		<img src="images/21.jpg" alt="">
		<img src="images/22.jpg" alt="">
		<img src="images/23.jpg" alt="">
		<img src="images/24.jpg" alt="">
		<img src="images/25.jpg" alt="">
		<img src="images/26.jpg" alt="">

	</div>



	<footer>
		<div class="container footer__container">
			<div class="footer__1">
				<a href="index.php" class="footer__logo">
					<h4>LIFE COMPUTER</h4>
				</a>
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





</body>

</html>




<script type="text/javascript" src="main.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="js/main.js"></script>

<script type="text/javascript">
	var swiper = new Swiper(".mySwiper", {
		slidesPerView: 1,
		spaceBetween: 30,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},

		//when window width is >= 600px

		breakpoints: {
			600: {
				slidesPerView: 2
			}
		}
	});
</script>
</body>

</html>

<script>
	$(window).on("load", function() {
		$(".loader").fadeOut(1000);
	})
</script>