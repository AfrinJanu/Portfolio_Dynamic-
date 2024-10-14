<?php
  require('include/db.php');
  $query = "SELECT * FROM home,section_control,social_media,about,contact,site_background,personal_info,skills,resume,portfolio,seo,admin,service";
  $run = mysqli_query($db,$query);
  $user_data = mysqli_fetch_array($run);
  
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

 
  <title><?=$user_data['page_title']?></title>
  <meta content="<?=$user_data['description']?>" name="description">
  <meta content="<?=$user_data['keywords']?>" name="keywords">

  <!-- Favicons -->
  <link href="images/<?=$user_data['siteicon']?>" rel="icon">
  <link href="images/<?=$user_data['siteicon']?>" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
     .logo {
    max-width: 100%; /* মোবাইলে সাইজ নিয়ন্ত্রণ করবে */
    height: auto;    /* অঙ্গভঙ্গি বজায় রাখবে */
}

/* ল্যাপটপ স্ক্রীনের জন্য */
@media (min-width: 260px) {
    .logo {
        width: 150px; /* নির্দিষ্ট সাইজ */
        height:auto; /* অঙ্গভঙ্গি বজায় রাখবে */
    }
}

/* ডেস্কটপ স্ক্রীনের জন্য */
@media (min-width: 992px) {
    .logo {
        width: 150px; /* নির্দিষ্ট সাইজ */
        height: auto; /* অঙ্গভঙ্গি বজায় রাখবে */
    }
}
    </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <!-- <a href="index.php" class="logo d-flex align-items-center" > -->
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
       <!--  <img src="../images/<?=$user_data['logo']?>" alt="logo" class="sitename"  >
      </a> -->
     <div class="navbar navbar-expand-lg  ">
    <a class="navbar-brand" href="#">
        <img src="images/<?=$user_data['logo']?>" alt="Logo" class="logo">
    </a>
</div>
      <nav id="navmenu" class="navmenu">
        <ul>

<?php
if($user_data['home_section']){?>          
          <li><a href="index.php" class="active">Home</a></li>
          <?php
          }
          if($user_data['about_section']){

        ?>
          <li><a href="about.php">About</a></li>
          <?php
          }
          if($user_data['resume_section']){

        ?>

          <li><a href="resume.php">Resume</a></li>
          <?php
          }
          if($user_data['services_section']){

        ?>

          <li><a href="services.php">Services</a></li>
          <?php
          }
          if($user_data['portfolio_section']){

        ?>

          <li><a href="portfolio.php">Portfolio</a></li>
           <?php
          }
          if($user_data['contact_section']){

        ?>


         <!--  <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="contact.php">Contact</a></li>
           <?php
          }
          

        ?>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

     <img src="images/<?=$user_data['background_img']?>" class="img-fluid" alt="">

      <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h2><?=$user_data['title']?></h2>
        <h3><?=$user_data['subtitle']?></h3>
       <!--  <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer">Photographer</span><span class="typed-cursor typed-cursor--blink"></span></p>---->


<?php
if($user_data['showicons']){
?>

       <div class="social-links">
<?php if ($user_data['twitter']!=='') {?>        
          <a href="https://www.twitter.com/<?=$user_data['twitter']?>" class="twitter"><i class="bi bi-twitter-x"></i></a>

          <?php
        }
          ?>

          <?php if ($user_data['facebook']!=='') {?>        
           <a href="https://www.facebook.com/<?=$user_data['facebook']?>" class="facebook"><i class="bi bi-facebook"></i></a>

          <?php
        }
          ?>

          <?php if ($user_data['skype']!=='') {?>        
          <a href="https://www.skype.com/<?=$user_data['skype']?>" class="skype"><i class="bi bi-skype"></i></a>

          <?php
        }
          ?>
         


          <?php if ($user_data['instagram']!=='') {?>        
         <a href="https://www.instagram.com/<?=$user_data['instagram']?>" class="instagram"><i class="bi bi-instagram"></i></a>

          <?php
        }
          ?>
          <?php if ($user_data['linkedin']!=='') {?>        
          <a href="https://www.linkedin.com/<?=$user_data['linkedin']?>" class="linkedin"><i class="bi bi-linkedin"></i></a>

          <?php
        }
          ?>
           
          
         
        </div>


<?php
}
?>       
       
      </div>

    </section><!-- /Hero Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">Personal</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links d-flex justify-content-center">
            <?php if($user_data['twitter']!=''){?>    
    <a href="https://twitter.com/<?=$user_data['twitter']?>" class="twitter px-1"><i class="bi bi-twitter-x"></i></a>
    <?php 
}
    ?>

<?php if($user_data['facebook']!=''){?>    
  <a href="https://facebook.com/<?=$user_data['facebook']?>" class="facebook px-1"><i class="bi bi-facebook"></i></a>

    <?php 
}
if($user_data['instagram']!=''){
    ?>  
        <a href="https://instagram.com/<?=$user_data['instagram']?>" class="instagram px-1"><i class="bi bi-instagram"></i></a>
  <?php
}
if($user_data['skype']!=''){
  ?>
        <a href="https://skype.com/<?=$user_data['skype']?>" class="skype px-1"><i class="bi bi-skype"></i></a>
  <?php
}
if($user_data['linkedin']!=''){
  ?>
        <a href="https://linkedin.com/<?=$user_data['linkedin']?>" class="linkedin px-1"><i class="bi bi-linkedin"></i></a>
   <?php
}
   ?>
          </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">Personal</strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href=" https://github.com
/AfrinJanu">AFriN JaHan</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>