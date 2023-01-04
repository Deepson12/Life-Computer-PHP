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
    <link rel="stylesheet" href="./css/about.css?v=<?php echo time(); ?>">


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


	<nav>
		<div class="container nav__container">
			<a href="index.php"><h4>LIFE COMPUTER</h4></a>
			<ul class="nav__menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php" class="selected">About</a></li>
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

    <div class="toggle"></div>

    	<!-- BACK TO TOP -->
	<a class="to-top-section" id="to-top-section" href="#">
		<i class="uil uil-arrow-circle-up"></i>
	</a>

    <section class="about__achievements">
        <div class="container about__achievements-container">
            <div class="about__achievements-left">
                <img src="./images/about achievements.svg" alt="">
            </div>
            <div class="about__achievements-right">
                <h1>Achievements</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisici
                    ng elit. Sequi architecto accusamus, delectus atq
                    ue eius, deserunt provident dolorum necessitatibu
                    s, consectetur cupiditate eum dolor iure quo mole
                    stias totam fuga placeat odio dignissimos.
                </p>
                <div class="achievements__cards">
                    <article class="achievements__card">
                        <span class="achievements__icon">
                            <i class="uil uil-video"></i>
                        </span>
                        <h3>79,000+</h3>
                        <p>Courses</p>
                    </article>

                    <article class="achievements__card">
                        <span class="achievements__icon">
                            <i class="uil uil-award"></i>
                        </span>
                        <h3>26</h3>
                        <p>Awards</p>
                    </article>

                    <article class="achievements__card">
                        <span class="achievements__icon">
                            <i class="uil uil-user"></i>
                        </span>
                        <h3>450+</h3>
                        <p>Users</p>
                    </article>
                </div>
            </div>

        </div>
    </section>



    <!-- END OF ACHIEVEMENTS -->




    <section class="team">
        <h2>Meet Our Team</h2>
        <div class="container team__container">
            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm1.jpg" alt="">
                </div>
                <div class="team__member-info">
                    <h4>Shatta Wale</h4>
                    <p>Expert Tutor</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm2.jpg" alt="">
                </div>
                <div class="team__member-info">
                    <h4>Shatta Wale</h4>
                    <p>Expert Tutor</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm3.jpg" alt="">
                </div>
                <div class="team__member-info">
                    <h4>Shatta Wale</h4>
                    <p>Expert Tutor</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm4.jpg" alt="">
                </div>
                <div class="team__member-info">
                    <h4>Shatta Wale</h4>
                    <p>Expert Tutor</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm5.jpg" alt="">
                </div>
                <div class="team__member-info">
                    <h4>Shatta Wale</h4>
                    <p>Expert Tutor</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm6.jpg" alt="">
                </div>
                <div class="team__member-info">
                    <h4>Shatta Wale</h4>
                    <p>Expert Tutor</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm7.jpg" alt="">
                </div>
                <div class="team__member-info">
                    <h4>Shatta Wale</h4>
                    <p>Expert Tutor</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>
            </article>

            <article class="team__member">
                <div class="team__member-image">
                    <img src="./images/tm8.jpg" alt="">
                </div>
                <div class="team__member-info">
                    <h4>Shatta Wale</h4>
                    <p>Expert Tutor</p>
                </div>
                <div class="team__member-socials">
                    <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter-alt"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
                </div>
            </article>
        </div>
    </section>


    <!-- END OF TEAM SECTION -->

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