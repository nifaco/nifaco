<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>وضيفتكم - من نحن</title>
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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>


<body>

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
                        <a class="btn-square text-primary border-end rounded-0" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn-square text-primary border-end rounded-0" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn-square text-primary border-end rounded-0" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                        <a class="btn-square text-primary pe-0" href=""><i class="fab fa-instagram"></i></a>
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
                    <a href="index.php" class="navbar-brand m-0 p-0">
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
                                <div style="text-align: right;    font-family: 'Readex Pro', sans-serif; /* Specify your desired font */
                            " class="ps-3">
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

        <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn"
            data-wow-delay="0.1s">
            <form class="search" method="POST" action="search.php">
            <div class="search__wrapper" data-bs-target="#navbarCollapse">
                <input type="text" name="searchQuery" placeholder="أبحث ...." class="search__field"
                    data-bs-target="#navbarCollapse">
                <button type="submit" class="fa fa-search search__icon" data-bs-target="#navbarCollapse"></button>
            </div>
        </form>
            <button type="button" class="navbar-toggler  me-3  " data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse">
                <div style="font-family: 'Readex Pro', sans-serif; font-size: larger;"
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
                    <a href="contact.php" class="nav-item nav-link arabic-text">اتصل بنا</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center py-5 " style="font-family: 'Readex Pro', sans-serif; font-size: larger;">
                <h1 class="display-4 text-white animated slideInDown mb-3">من نحن</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="index.php">الرئيسية</a></li>
                        <li class="breadcrumb-item text-primary active" aria-current="page">من نحن</li>
                    </ol>
                </nav>
            </div>
        </div>


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
                            <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
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


        <div class="container-xxl py-5" dir="rtl" style="font-family: 'Readex Pro', sans-serif; font-size: small; ">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" dir="rtl">
                        <div class="h-100">
                            <h6 class="section-title bg-white text-start text-primary pe-3"
                                style="font-family: 'Readex Pro', sans-serif; font-size: larger;">لماذا تختارنا</h6>
                            <h1 class="display-6 mb-4"
                                style="font-family: 'Readex Pro', sans-serif; font-size: larger ;  ">لماذا يثق الناس
                                فينا؟ تعرف علينا!</h1>
                            <p class="mb-4">نحن هنا لنسهل عليك عملية البحث عن أفضل الوظائف ونشرها على موقعنا الاحترافي.
                                نهدف إلى توفير فرص مثيرة للباحثين عن فرص عمل مثالية وللشركات لنشر فرص العمل الشاغرة بكل
                                سهولة وفاعلية.
                                مع مجموعة واسعة من الوظائف والفرص المتاحة، يمكنك استعراض واختيار الوظيفة التي تناسب
                                مهاراتك واهتماماتك بسهولة. نحن نقدم معلومات دقيقة حول كل وظيفة، بما في ذلك المتطلبات
                                والمزايا والمزايا التي تقدمها.</p>
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="skill">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">معلومات دقيقة</p>
                                            <p class="mb-2">95%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="skill">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">سهولة الاستخدام</p>
                                            <p class="mb-2">90%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="skill">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">توفير الوقت والجهد</p>
                                            </p>
                                            <p class="mb-2">95%</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="img-border">
                            <img class="img-fluid" src="img/about.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>















        <?php include("footer.php") ?>
    </body>

</html>