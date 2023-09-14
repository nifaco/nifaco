<?php include("config.php");


?>
<!DOCTYPE html>
<html lang="en">

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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:300,400,700'>


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

    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 8rem; height: 8rem;" role="status">
        </div>
        <a class="text-primary position-absolute top-50 start-50 translate-middle"> <img
                style="width: 3rem; height: 3rem;" src="img/logo.jpg"> </a>

    </div>

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

    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 " style="font-family: 'Readex Pro', sans-serif; font-size: larger;">
            <h1 class="display-4 text-white animated slideInDown mb-3">ابحث عن وظائف</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">الرئيسية</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">ابحث عن وظائف</li>
                </ol>
            </nav>
        </div>
    </div>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["searchQuery"])) {
    $searchQuery = $_POST["searchQuery"];
    retrieveAndDisplayData22($searchQuery, $conn);
}
?>
</body>


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

</html>