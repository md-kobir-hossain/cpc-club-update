<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CPC-KiU Computer & Programming Club | Events, Courses, Panels</title>
  <meta name="description" content="Join the CPC-KiU Computer & Programming Club to develop your programming skills. Explore our events, courses, and networking opportunities." />
  <meta name="keywords" content="CSE, Computer Science and Engineering, Kishoreganj University, KiU, Kishoreganj, university in Kishoreganj, CSE department, KiU CSE, computer club, programming club, CPC-KiU">
  
  <!-- Open Graph meta tags -->
  <meta property="og:title" content="BSMRU Computer & Programming Club | Events, Courses, Panels">
  <meta property="og:description" content="Explore events, courses, and panels at the BSMRU Computer and Programming Club.">
  <meta property="og:image" content="https://bpc.bsmru.ac.bd/assets/img/temp_logo.png">
  <meta property="og:url" content="https://bpc.bsmru.ac.bd">
  <meta property="og:type" content="website">

  <!-- Twitter Card meta tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="BSMRU Computer and Programming Club | Events, Courses, Panels">
  <meta name="twitter:description" content="Explore events, courses, and panels at the BSMRU Computer and Programming Club.">
  <meta name="twitter:image" content="https://bpc.bsmru.ac.bd/assets/img/temp_logo.png">
  
  <!-- Organization Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "BSMRU Computer and Programming Club",
    "url": "https://bpc.bsmru.ac.bd",
    "logo": "https://bpc.bsmru.ac.bd/assets/img/temp_logo.png",
    "sameAs": ["https://www.facebook.com/bcpc.bsmru"]
  }
  </script>

  <!-- Favicons and CSS links -->
  <link href="assets/img/temp_logo.png" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Raleway:300,400,500,600,700|Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css?version=2" rel="stylesheet">

<style>
/* ========== Portfolio Card Styling ========== */


/* ========== Title Styling ========== */
.animated-title h2 {
    position: relative;
    font-size: 2.5rem;
    color: black; /* Deep red */
    animation: pulse-glow 2s infinite ease-in-out;
    text-shadow: 0 0 10px rgba(255, 0, 0, 0.3), 0 0 20px rgba(255, 0, 0, 0.3);
}

@keyframes pulse-glow {
    0% {
        transform: scale(1);
        opacity: 0.9;
        text-shadow: 0 0 5px rgba(255, 0, 0, 0.3);
    }
    50% {
        transform: scale(1.05);
        opacity: 1;
        text-shadow: 0 0 20px rgba(255, 0, 0, 0.4);
    }
    100% {
        transform: scale(1);
        opacity: 0.9;
        text-shadow: 0 0 5px rgba(255, 0, 0, 0.3);
    }
}





.items {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    position: relative;
    min-height: 300px;
    padding: 10px;
}

.item {
    width: calc(33.333% - 20px);
    transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
}

/* Responsive: 2 per row for tablets */
@media (max-width: 992px) {
    .item {
        width: calc(50% - 20px);
    }
}

/* Responsive: 1 per row for mobile */
@media (max-width: 576px) {
    .item {
        width: 100%;
    }
}

.portfolio-wrap {
  width: 100%;
  border-radius: 7px;
  box-shadow: 5px 10px 10px rgba(24, 13, 13, 0.44);
  overflow: hidden;
  position: relative;
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  will-change: transform;
}


.portfolio-item:hover .portfolio-wrap {
  transform: translateY(-12px) scale(1.03);
  box-shadow: 0 25px 45px rgba(0, 0, 0, 0.25);
}

/* Image Hover Zoom */
.portfolio-wrap img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
}

.portfolio-wrap:hover img {
  transform: scale(1.05);
}

/* Fade-in on scroll */
.portfolio-item {
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease forwards;
  animation-delay: 0.2s;
}

@keyframes fadeInUp {
  to {
    opacity: 1;
    transform: translateY(5px);
  }
}

/* Icon Hover Animation */
.portfolio-links a i {
  font-size: 1.2rem;
  transition: transform 0.4s ease, color 0.4s ease;
}

.portfolio-links a:hover i {
  transform: scale(1.2);
  color: #0dcaf0; /* Bootstrap info color */
}

/* Info Background Hover */
.portfolio-info {
  transition: background-color 0.4s ease;
}

.portfolio-wrap:hover .portfolio-info {
  background-color: rgba(0, 0, 0, 0.4);
}

/* Bounce Animation for Button */
@keyframes bounce {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-8px);
  }
}

#loadMoreEvents {
    display: block;
    margin: 30px auto 0 auto;
    transition: margin-top 0.5s ease;
    max-width: 250px;
    text-align: center;
}

.btn-more {
  cursor: pointer;
  transition: all 1s ease;
  animation: bounce 2s infinite;
}


/* Header Transparent Nav */
#header.transparent-nav {
  background-color: transparent;
  box-shadow: var(--bs-box-shadow);
}

@media (min-width: 994px) {
  #header.transparent-nav .navbar li a {
    color: white;
  }
}

@media (max-width: 994px) {
  #header.transparent-nav .navbar li a {
    color: black;
  }

  .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }
}

/* Portfolio Filter Buttons */
#portfolio-flters li {
  cursor: pointer;
  padding: 8px 16px;
  transition: all 0.3s;
}

#portfolio-flters li.active,
#portfolio-flters li:hover {
  color: #fff;
  background: #3498db;
}

/* ========== Layout ========== */
.items {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 5px;
  position: relative;
  min-height: 300px;
}

.item {
  width: calc(33.333% - 20px); /* 3 items per row */
  transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
}

/* Responsive Adjustments */
@media (max-width: 992px) {
  .item {
    width: calc(50% - 20px); /* 2 items per row */
  }
}

@media (max-width: 768px) {
  .item {
    width: 100%; /* 1 item per row */
  }
}

/* ========== Additional Elements ========== */
.image-shade:after {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#374050), to(#798696));
  opacity: 0.7;
}

#home .animated {
  animation: up-down 2s ease-in-out infinite alternate-reverse both;
}

.c-item {
  height: 100vh;
  width: 100vw;
}

.c-img {
  height: 100vh;
  width: auto;
  object-fit: cover;
}

/* ========== Course Card Styling ========== */


.card {
    position: relative;
    animation: float 3s infinite ease-in-out; /* Continuous floating effect */
    transition: transform 3s ease, box-shadow 3s ease;
}

/* Floating effect */
@keyframes float {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-12px); /* Move up a little */
    }
    100% {
        transform: translateY(0); 
    }
}



/* Hover effect on the 'Read More' link */
.read-more a {
    position: relative;
    display: inline-block;
    padding-right: 20px;
    transition: color 3s ease;
}

.read-more a:before {
    content: "→";
    position: absolute;
    right: 0;
    transition: right 0.3s ease;
}

.read-more a:hover:before {
    right: -15px;
}

/* ========== admin pannel style ========== */

@keyframes floatMotion {
  0% {
    transform: translate(0, 0);
  }
  25% {
    transform: translate(5px, -5px);
  }
  50% {
    transform: translate(0, -10px);
  }
  75% {
    transform: translate(-5px, -5px);
  }
  100% {
    transform: translate(0, 0);
  }
}

.member {
  animation: floatMotion 5s ease-in-out infinite;
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  will-change: transform;
}

.member:hover {
  transform: translateY(-12px) scale(1.03);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
}




</style>

</head>





<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BCPC :: BSMRU Computer and Programming Club</title>

  <meta  name="keywords" content="CSE, Computer Science and Engineering, Bangabandhu Sheikh Mujibur Rahman University, BSMRU, Kishoreganj, university in Kishoreganj,kishoreganj university, CSE department, BSMRU CSE, club, computer club, programming club, BSMRU computer club, BSMRU computer and programmming club, computer, programming, BUET clubs, clubs, BSMRU computer, BCPC, BPC, BCPC club"> -->

<!-- Open Graph meta tags for social media -->
<!-- <meta property="og:title" content="BCPC :: BSMRU Computer and Programming Club">
<meta property="og:description" content="Explore events, courses, and panels at the BSMRU Computer and Programming Club. Join us to expand your programming and computing skills.">
<meta property="og:image" content="assets/img/bcpc.png">
<meta property="og:url" content="https://bpc.bsmru.ac.bd">
<meta property="og:type" content="website"> -->

<!-- Twitter Card meta tags -->
<!-- <meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="BCPC :: BSMRU Computer and Programming Club">
<meta name="twitter:description" content="Join the BSMRU Computer and Programming Club to explore events, courses, and panel discussions.">
<meta name="twitter:image" content="assets/img/bcpc.png"> -->

  <!-- Favicons -->
  <!-- <link href="assets/img/bcpc.png" rel="icon">
  <link href="assets/img/bcpc.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href=" assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href=" assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href=" assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href=" assets/vendor/swiper/swiper-bundle.min.css " rel="stylesheet"> -->


  <!-- Template Main CSS File -->
  <!-- <link href=" assets/css/style.css?version=2" rel="stylesheet"> -->



<!-- </head> -->

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center transparent-nav">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">

        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index#home"><img src="assets/img/temp_logo.png" style="height: 300px;"  alt="" class="img-fluid img-srolled"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index#home"><strong>HOME</strong></a></li>
          <li><a class="nav-link scrollto " href="index#portfolio"><strong>EVENTS</strong></a></li>
          <li><a class="nav-link scrollto" href="index#about"><strong>ABOUT</strong></a></li>
          <li><a class="nav-link scrollto" href="index#notices"><strong>NOTICES</strong></a></li>
          <li><a class="nav-link scrollto" href="index#services"><strong>COURSES</strong></a></li>

          <strong>
            <li class="dropdown"><a href="index#team"><span><strong>PANEL</strong></span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li class="dropdown"><a href="facultypanel" style="color:black"><strong>Faculty Panel</strong> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li class="blink"><a href="facultypanel" style="color:green"><strong>Current Faculty Panel</strong></a></li>
                    <li class="blink"><a href="former_facultypanel" style="color:black"><strong>Former Faculty Panel</strong></a></li>
                  </ul>
        
                </li>
                <li class="blink"><a href="current_panel" style="color:green"><strong>Current Panel</strong></a></li>
                <li class="dropdown"><a style="color:black"><span><strong>Former Panel</strong></span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li class="blink"><a href="former_panel_2" style="color:black"><strong>Panel 2023-24(May-Nov)</strong></a></li>
                    <li class="blink"><a href="former_panel_1" style="color:black"><strong>Panel 2023-24(Aug-May)</strong></a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </strong>
          <li><a class="nav-link scrollto" href="index#contact"><strong>CONTACT</strong></a></li>
          <li><a class="getstarted scrollto" href="https://www.facebook.com/bcpc.bsmru"><strong>EXPLORE</strong></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->