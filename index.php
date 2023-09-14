<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <title>وضيفتكم</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="fonts/" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:300,400,700'>

    <script src="https://kit.fontawesome.com/c274082413.js" crossorigin="anonymous"></script>
    <!-- Libraries Stylesheet -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:300,400,700'>
    <link rel="stylesheet" href="css/style.css">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
    html {
        scroll-behavior: smooth;
    }
    </style>

</head>




<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 8rem; height: 8rem;" role="status">
        </div>
        <a class="text-primary position-absolute top-50 start-50 translate-middle"> <img
                style="width: 3rem; height: 3rem;" src="img/logo.jpg"> </a>

    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <ol class="breadcrumb mb-0">

                    <li class="breadcrumb-item"><a class="small text-secondary" href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="small text-secondary" href="about.php">about</a></li>
                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Terms</a></li>
                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Privacy</a></li>
                </ol>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn-square text-primary border-end rounded-0" href=" https://www.facebook.com/profile.php?id=100055158892178&mibextid=ZbWKwL"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn-square text-primary border-end rounded-0" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn-square text-primary border-end rounded-0" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn-square text-primary pe-0" href="https://www.instagram.com/branc1_0/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End-->

    <!-- Brand & Contact Start                   
-->
    <div class="container-fluid py-4 px-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row align-items-center top-bar">
            <div class="col-lg-4 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">
                    <img class="col-4" src="img/logo.jpg" alt="Logo">
                </a>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex align-items-center justify-content-end">


                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-left justify-content-end">
                            <div s class="flex-shrink-0 btn-lg-square border rounded-circle">
                                <i class="fa fa-phone text-primary"></i>
                            </div>
                            <div style="text-align:right;font-family: 'Readex Pro', sans-serif; " class="ps-3">

                                <p style="text-align: right;" class="mb-2">أتصل بنا</p>
                                <h6 style="text-align: right;" class="mb-0">+962-788232744</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-left justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                                <i class="far fa-envelope text-primary"></i>
                            </div>
                            <div style="text-align: right;    font-family: 'Readex Pro', sans-serif; /* Specify your desired font */
                            " class="ps-3">
                                <p style="text-align: right;" class="mb-2">راسلنا</p>
                                <h6 style="text-align: right;" class="mb-0">watafcom@gmail.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand & Contact End -->

    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">

        <form class="search" method="POST" action="search.php">
            <div class="search__wrapper" data-bs-target="#navbarCollapse">
                <input type="text" name="searchQuery" placeholder="أبحث ...." class="search__field"
                    data-bs-target="#navbarCollapse">
                <button type="submit" class="fa fa-search search__icon" data-bs-target="#navbarCollapse"></button>
            </div>
        </form>

        <button type="button" class="navbar-toggler me-3 " data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarCollapse">
            <div style="font-family: 'Readex Pro', sans-serif; font-size:larger;"
                class="navbar-nav nav  ms-auto  p-3 p-lg-0">
                <a href="index.php" class="nav-item nav-link active arabic-text">الرئيسية</a>
                <a href="about.php" class="nav-item nav-link arabic-text">من نحن</a>
                <a href="service.php" class="nav-item nav-link arabic-text">خدماتنا</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle arabic-text" data-bs-toggle="dropdown">الصفحات</a>
                    <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                        <a href="category1.php" class="dropdown-item arabic-text">المبيعات والتسويق</a>
                        <a href="category2.php" class="dropdown-item arabic-text">القطاع الحكومي</a>
                        <a href="category3.php" class="dropdown-item arabic-text">تكنولوجيا المعلومات وتطوير
                            البرمجيات</a>
                        <a href="category4.php" class="dropdown-item arabic-text">الطب والرعاية الصحية</a>
                        <a href="category5.php" class="dropdown-item arabic-text">الفنادق والضيافة</a>
                        <a href="category6.php" class="dropdown-item arabic-text">أخرى</a>
                        <a href="404.php" class="dropdown-item arabic-text">صفحة 404</a>
                    </div>
                </div>
                <a href="#bottom" class="nav-item nav-link arabic-text">اتصل بنا</a>



            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="img/carousel-3.jpg" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn"> نحن رواد العثور على فرص العمل
                            </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">ابحث عن وظيفتك المثالية وقدّم لها الآن
                                معنا</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">نحن رواد العثور على فرص العمل
                            </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">ابحث عن وظيفتك المثالية وقدّم لها الآن
                                معنا</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">نحن رواد العثور على فرص العمل
                            </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">ابحث عن وظيفتك المثالية وقدّم لها الآن
                                معنا</h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">العملاء الراضين</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">12041</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-user fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">الباحثين</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">5391</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">وظائف شاغرة</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">20873</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">الطلبات المقدمة</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">7682</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->
    <!-- contant Start -->
    <?php retrieveLastDataInEachCategory(); ?>

    <!-- contant End -->


    <!-- Service Start -->
    <div style="font-family: 'Readex Pro', sans-serif" class="container-xxl py-5">

        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">الاقسام</h6>
                <h1 class="display-6 mb-4">أختر القسم وقدم طلبك الان</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="category1.php">
                        <img class="img-fluid rounded mb-4" src="img2/service-1.jpg" alt="">
                        <h4 class="mb-0">المبيعات والتسويق</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href=" category2.php">
                        <img class="img-fluid rounded mb-4" src="img2/service-2.jpg" alt="">
                        <h4 class="mb-0">القطاع الحكومي</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="category3.php">
                        <img class="img-fluid rounded mb-4" src="img2/service-3.jpg" alt="">
                        <h4 class="mb-0">تكنولوجيا المعلومات وتطوير البرمجيات</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="category4.php">
                        <img class="img-fluid rounded mb-4" src="img2/service-4.jpg" alt="">
                        <h4 class="mb-0">الطب والرعاية الصحية</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="category5.php">
                        <img class="img-fluid rounded mb-4" src="img2/service-5.jpg" alt="">
                        <h4 class="mb-0">الفنادق والضيافة</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="category6.php">
                        <img class="img-fluid rounded mb-4" src="img2/service-6.jpg" alt="">
                        <h4 class="mb-0">اخرى</h4>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- Service End -->
    <?php displayRandomJobsWithCarousel($conn); ?>

    <!-- Feature Start 
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Why Choose Us</h6>
                        <h1 class="display-6 mb-4">Why People Trust Us? Learn About Us!</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Digital Marketing</p>
                                        <p class="mb-2">85%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">SEO & Backlinks</p>
                                        <p class="mb-2">90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Design & Development</p>
                                        <p class="mb-2">95%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="img/feature.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
     Feature End -->


    <!-- Project Start 
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Projects</h6>
                <h1 class="display-6 mb-4">Learn More About Our Complete Projects</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item border rounded h-100 p-4" data-dot="01">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/project-1.jpg" alt="">
                        <a href="img/project-1.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="02">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/project-2.jpg" alt="">
                        <a href="img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="03">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/project-3.jpg" alt="">
                        <a href="img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="04">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/project-4.jpg" alt="">
                        <a href="img/project-4.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="05">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/project-5.jpg" alt="">
                        <a href="img/project-5.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="06">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/project-6.jpg" alt="">
                        <a href="img/project-6.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="07">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/project-7.jpg" alt="">
                        <a href="img/project-7.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="08">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/project-8.jpg" alt="">
                        <a href="img/project-8.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="09">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/project-9.jpg" alt="">
                        <a href="img/project-9.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
                <div class="project-item border rounded h-100 p-4" data-dot="10">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="img/project-10.jpg" alt="">
                        <a href="img/project-10.jpg" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>UI / UX Design</h6>
                    <span>Digital agency website design and development</span>
                </div>
            </div>
        </div>
    </div>
    Project End -->


    <!-- Team Start 
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Team</h6>
                <h1 class="display-6 mb-4">We Are A Creative Team For Your Dream Project</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/team-1.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/team-2.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/team-3.jpg" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Full Name</h5>
                                <span>Designation</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     Team End -->
    <div class="container-xxl py-5 ">
        <div class="container" style="font-family: 'Readex Pro', sans-serif; font-size: x-small;">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;"
                dir="rtl">
                <h6 class="section-title bg-white text-center text-primary px-3">المصادر </h6>
                <h1 class="display-6 mb-4">أهم المواقع التي نستخدمها لأيجاد الوظائف</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-4" dir="rtl">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/google.png" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">وظائف جوجل</h5>
                        </div>
                    </div>
                    <p class="mb-0">يُعد موقع وظائف جوجل منصة موثوقة للباحثين عن وظائف. فهو يتيح للأفراد البحث عن وظائف
                        شاغرة في مختلف القطاعات والمجالات بسهولة </p>
                </div>
                <div class="testimonial-item bg-light rounded p-4" dir="rtl">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/ln.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1"> وظائف لينكد إن </h5>
                        </div>
                    </div>
                    <p class="mb-0">تميز الموقع بشبكة واسعة من الشركات والمؤسسات الكبيرة والصغيرة، مما يعني أنك ستجد
                        العديد من الوظائف المثيرة والفرص المهنية.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4" dir="rtl">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/bee.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">موقع بيبي </h5>
                        </div>
                    </div>
                    <p class="mb-0">تتيح هذه المنصة للشركات نشر الوظائف الشاغرة وللمستخدمين نشر سيرهم الذاتية
                        واهتماماتهم المهنية تُمكن المستخدمين من التواصل ومشاركة المحتوى</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4" dir="rtl">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/MOL-01.jPg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">وزارة العمل الأردنية</h5>
                            <span>حكومي</span>
                        </div>
                    </div>
                    <p class="mb-0">تعمل الوزارة على توفير منصة شفافة وموثوقة للباحثين عن الوظائف وأصحاب العمل على حد
                        سواء في المملكة الأردنية الهاشمية</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Testimonial Start 
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="display-6 mb-4">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-1.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-2.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-3.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-4.jpg" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div>
     Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"
        style="font-family: 'Readex Pro', sans-serif; font-size: larger; direction: rtl; writing-mode: rtl;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">العنوان</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Madaba,Jordan</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+962-788232744</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>wadaecom@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href="https://www.facebook.com/profile.php?id=100055158892178&mibextid=ZbWKwL"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-0" href="https://www.instagram.com/branc1_0/"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6" >
                    <h5 class="text-light mb-4">روابط سريعة</h5> 
                    <i class="fa fa-link" ><a rtl-text href="about.php" style="direction: rtl; text-align: right; margin:10px;">من نحن</a></i>
                    <i class="fa fa-link" ><a rtl-text href="#" style="direction: rtl; text-align: right;  margin:10px;">تواصل معنا</a></i>
                    <i class="fa fa-link" ><a rtl-text href="#" style="direction: rtl; text-align: right; margin:10px;">خدماتنا</a></i>
                    <i class="fa fa-link"><a rtl-text href="#" style="direction: rtl; text-align: right; margin:10px;">الشروط والاحكام</a> </i>
                    <i class="fa fa-link"><a rtl-text href="#" style="direction: rtl; text-align: right; margin:10px; ">الدعم</a></i>
                </div>


                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">الاقسام</h5>
                    <div class="row g-2">
                        <div class="col-4">
                            <a class="img-fluid rounded" href="category1.php">
                                <img class="img-fluid rounded" src="img2/service-1.jpg" alt="Image"
                                    href="category1.php">
                            </a>
                        </div>

                        <div class="col-4">
                            <a class="img-fluid rounded" href="category2.php">
                                <img class="img-fluid rounded" src="img2/service-2.jpg" alt="Image"
                                    href="category2.php">
                            </a>
                        </div>

                        <div class="col-4">
                            <a class="img-fluid rounded" href="category3.php">
                                <img class="img-fluid rounded" src="img2/service-3.jpg" alt="Image"
                                    href="category3.php">
                            </a>
                        </div>

                        <div class="col-4">
                            <a class="img-fluid rounded" href="category4.php">
                                <img class="img-fluid rounded" src="img2/service-4.jpg" alt="Image"
                                    href="category4.php">
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="img-fluid rounded" href="category5.php">
                                <img class="img-fluid rounded" src="img2/service-5.jpg" alt="Image"
                                    href="category5.php">
                            </a>
                        </div>

                        <div class="col-4">
                            <a class="img-fluid rounded" href="category6.php">
                                <img class="img-fluid rounded" src="img2/service-6.jpg" alt="Image"
                                    href="category6.php">
                            </a>
                        </div>

                    </div>


                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">نشرة إخبارية</h5>

                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="text"
                            style="direction: ltr; text-align: left;" placeholder="بريدك الالكتروني">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">أشترك</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="index.php">وضيفتكم</a>, جميع الحقوق محفوظة.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br>Distributed By: <a class="border-bottom" href="https://themewagon.com"
                            target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <a name="bottom"></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>