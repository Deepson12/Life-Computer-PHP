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
				<li><a href="index.php" class="selected">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="courses.php">Courses</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="contact.php">Contact</a></li>
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

	<!-- DARK/MODE TOGGLE -->
	<div class="toggle">

	</div>

	<!-- BACK TO TOP -->
	<a class="to-top-section" id="to-top-section" href="#">
		<i class="uil uil-arrow-circle-up"></i>
	</a>


	<header>
		<div class="container header__container">
			<div class="header__left">
		<div class="text-outside">
	
			<div class="php-text">
			<span class="title-slide-text">Bonjour</span>
			<?php 
			if(isset($_SESSION['lifecomputer'])){
				
				echo $_SESSION['lifecomputer'].",";
			}else{
				echo 'User,';
			}
			?>
			</div>
		</div>
				<h1>Grow your skills to advance your career path</h1>
				<p>
					The only IT Training Company where quality is never compromised !
				</p>
				<a href="courses.php" class="btn btn-primary">Get Started</a>
			</div>

			<div class="header__right">
				
					<img src="./images/header.svg" alt="">
			</div>
		</div>
	</header>
	<!-- END OF HEADER -->



	<section class="categories">
		<div class="container categories__container">
			<div class="categories__left">
				<h1>Categories</h1>
				<p>We provide the best learning facilities and service for oschur students to make them able for various computer related softwares. </p>
				<a href="#" class="btn">Learn More</a>
			</div>

			<div class="categories__right">
				<article class="category">
					<span class="category__icon"><i class="uil uil-brackets-curly"></i></span>
						<h5>Web Design</h5>
						<p>HTML5<br>
						   CSS3<br>
						   Javascript<br>
						   Bootstrap</p>
				</article>

				<article class="category">
					<span class="category__icon"><i class="uil uil-palette"></i></span>
						<h5>Graphic Design</h5>
						<p>Adope Photoshop<br>
							Adobe Illustrator<br>
							Adobe Indesign </p>
				</article>

				<article class="category">
					<span class="category__icon"><i class="uil uil-calculator"></i></span>
						<h5>Accounting Training</h5>
						<p>Tally<br>
						   FACT<br>
						   Swastik </p>
				</article>

				<article class="category">
					<span class="category__icon"><i class="uil uil-qrcode-scan"></i></span>
						<h5>Ethical Hacking</h5>
						<p>Python<br>
						   Ruby<br>
						   C programming<br>
						   C++ <br>
						   Pearl</p>
				</article>	

				<article class="category">
					<span class="category__icon"><i class="uil uil-circuit"></i></span>
						<h5>Hardware & Networking</h5>
						<p>DOS Command<br>
						   Control Panel <br>
						   Data Backup <br>
						   Networking</p>
				</article>	

				<article class="category">
					<span class="category__icon"><i class="uil uil-webcam"></i></span>
						<h5>Video Editing</h5>
						<p>Adobe Premiere Pro <br>
						   Text Animation<br>
						   Sound Sink </p>
				</article>
			</div>
		</div>
	</section>
	<!-- END OF CATEGORIES -->





	<section class="courses">
		<h2>Our Popular Courses</h2>
		<div class="container courses__container">
			<article class="course">
				<div class="course__image">
					<img src="./images/course111.webp" alt="">
				</div>
				<div class="course__info">
					<h4>Responsive Social Home Website Ui Design</h4>
				<p>
					Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing
				</p>
				<a href="courses.php" class="btn btn__primary">Learn More</a>
				</div>
			</article>

			<article class="course">
				<div class="course__image">
					<img src="./images/course222.webp" alt="">
				</div>
				<div class="course__info">
					<h4>Responsive Social Home Website Ui Design</h4>
				<p>
					Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing
				</p>
				<a href="courses.php" class="btn btn__primary">Learn More</a>
				</div>
			</article>	

			<article class="course">
				<div class="course__image">
					<img src="./images/course333.jpg" alt="">
				</div>
				<div class="course__info">
					<h4>Responsive Social Home Website Ui Design</h4>
				<p>
					Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing
				</p>
				<a href="courses.php" class="btn btn__primary">Learn More</a>
				</div>
			</article>
		</div>
	</section>
	<!-- END OF COURSES -->




	<section class="faqs">
		<h2>Frequently Asked Questions</h2>
		<div class="container container-fluid">
			<div class="accordion">
				<div class="icon"></div>
			<h5>Is computer class after SEE a good choice?</h5>
			</div>
		<div class="panel">
			<p>Computer classes after SEE are good choice to enhance the computer skills. It also further helps in future jobs and even academic reports. Learning various computer languages at early age makes it easier in the future too. So, computer skill is a must.</p>
		</div>  
	
		<div class="accordion">
			<div class="icon"></div>
		<h5>What is the fees required for this course?</h5>
		</div>
	<div class="panel">
		<p>Tution fees depends upon the selected course and categories. You can know the required information by contacting the respected branch. The contact details are mentioned in the contact section.</p>
	</div>  
	
	
	<div class="accordion">
		<div class="icon"></div>
	<h5>What do we get after completing the course?</h5>
	</div>
	<div class="panel">
	<p>After the completion of the course you will receive various information and knowledge on some related subjects. We also provide the certificate to those who hae completed our course.</p>
	</div>  
	
	<div class="accordion">
		<div class="icon"></div>
	<h5>What are requirements for learning in life computer?</h5>
	</div>
	<div class="panel">
	<p>There aren't any requirements to study in life computer. Our courses ary from very basic to professional so, those with no computer experience are also benefitted by our course.</p>
	</div>  
	   </div> 
	</section>
	<!-- END OF FAQS -->



	<section class="container testimonials__container mySwiper">
		<h2>Students' Testimonials</h2>
		<div class="swiper-wrapper">
			<article class="testimonial swiper-slide">
				<div class="avatar">
					<img src="./images/avatar1.jpg">
				</div>
				<div class="testimonial__info">
					<h5>Diana Ayi</h5>
					<small>Student</small>
				</div>
				<div class="testimonial__body">
					<p>
						Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing
					</p>
				</div>
			</article>

			<article class="testimonial swiper-slide">
				<div class="avatar">
					<img src="./images/avatar2.jpg">
				</div>
				<div class="testimonial__info">
					<h5>Diana Ayi</h5>
					<small>Student</small>
				</div>
				<div class="testimonial__body">
					<p>
						Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing
					</p>
				</div>
			</article>

			<article class="testimonial swiper-slide">
				<div class="avatar">
					<img src="./images/avatar3.jpg">
				</div>
				<div class="testimonial__info">
					<h5>Diana Ayi</h5>
					<small>Student</small>
				</div>
				<div class="testimonial__body">
					<p>
						Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing
					</p>
				</div>
			</article>

			<article class="testimonial swiper-slide">
				<div class="avatar">
					<img src="./images/avatar4.jpg">
				</div>
				<div class="testimonial__info">
					<h5>Diana Ayi</h5>
					<small>Student</small>
				</div>
				<div class="testimonial__body">
					<p>
						Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing
					</p>
				</div>
			</article>

			<article class="testimonial swiper-slide">
				<div class="avatar">
					<img src="./images/avatar5.jpg">
				</div>
				<div class="testimonial__info">
					<h5>Diana Ayi</h5>
					<small>Student</small>
				</div>
				<div class="testimonial__body">
					<p>
						Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing
					</p>
				</div>
			</article>

			<article class="testimonial swiper-slide">
				<div class="avatar">
					<img src="./images/avatar6.jpg">
				</div>
				<div class="testimonial__info">
					<h5>Diana Ayi</h5>
					<small>Student</small>
				</div>
				<div class="testimonial__body">
					<p>
						Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing
					</p>
				</div>
			</article>
		</div>
		 <div class="swiper-pagination"></div>
	</section>

<!-- TESTIMONIAL ENDS -->

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

        breakpoints:{
        	600: {
        		slidesPerView: 2
        	}
        }
      });
	</script>
</body>
</html>

<script>
	$(window).on("load",function(){
		$(".loader").fadeOut(1000);
	})
</script>