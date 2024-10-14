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

<body class="about-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

<div class="navbar navbar-expand-lg  ">
    <a class="navbar-brand" href="#">
        <img src="images/<?=$user_data['logo']?>" alt="Logo" class="logo">
    </a>
</div>


      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php" class="active">About</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
         <!--  -->
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>About</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">About</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="images/<?=$user_data['profilepic']?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h1><?=$user_data['abouttitle']?></h1>
            <h2 class="fst-italic py-3">
              <?=$user_data['aboutsubtitle']?>
            </h2>
            <div class="row">
              <div class="col-lg-6">


                <ul>
                  <?php
$query2 = "SELECT * FROM personal_info";
  $run2 = mysqli_query($db,$query2);
while ($personal_info = mysqli_fetch_array($run2)) {
  ?>
  <li><i class="icofont-rounded-right"></i> <strong><?=$personal_info['label']?>:</strong><?=$personal_info['value']?></li>
  <?php
}
?>  
                  
            
                </ul>
              </div>
            </div>
            <h2 class="py-3">
             <?=$user_data['aboutdesc']?>
            </h2>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <!-- /Stats Section -->

    <!-- Skills Section -->
     <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <div><span>My</span> <span class="description-title">Skills</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-12">
                      <?php
  $query3 = "SELECT * FROM skills";
  $run3 = mysqli_query($db,$query3);

while ($skill = mysqli_fetch_array($run3)) {
  ?>
  

            <div class="progress">
              <span class="skill"><?=$skill['skill_name']?><i class="val"><?=$skill['skill_level']?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?=$skill['skill_level']?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->
            <?php
          }
            ?>
     
<!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->
   

    <!-- Interests Section -->
   <!--  <section id="interests" class="interests section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <div><span>I'm</span> <span class="description-title">interested in</span></div>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="features-item">
              <i class="bi bi-eye" style="color: #ffbb2c;"></i>
              <h3><a href="" class="stretched-link">Lorem Ipsum</a></h3>
            </div>
          </div>

          

        </div>

      </div>

    </section> --><!-- /Interests Section -->

    <!-- Testimonials Section -->
<!-- /Testimonials Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">Personal</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-skype"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
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