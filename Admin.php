<?php include("config.php");
?>

<head>
    <meta charset="utf-8">
    <title>JOBS</title>
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



    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 8rem; height: 8rem;" role="status">
        </div>
        <a class="text-primary position-absolute top-50 start-50 translate-middle"> <img style="width: 3rem; height: 3rem;" src="img/logo.jpg"> </a>

    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <ol class="breadcrumb mb-0">

                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Career</a></li>
                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Terms</a></li>
                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Privacy</a></li>
                </ol>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn-square text-primary border-end rounded-0" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn-square text-primary border-end rounded-0" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn-square text-primary border-end rounded-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn-square text-primary pe-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End-->


    <!-- Brand & Contact Start   -->




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
                            <div style="text-align: right;    font-family: 'Readex Pro', sans-serif; /* Specify your desired font */
                            " class="ps-3">
                                <p style="text-align: right;" class="mb-2">أتصل بنا</p>
                                <h6 style="text-align: right;" class="mb-0">+012 345 6789</h6>
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
                                <h6 style="text-align: right;" class="mb-0">info@example.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand & Contact End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="#" class="navbar-brand me-3  d-lg-none">القائمة</a>
        <button type="button" class="navbar-toggler  me-3  " data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <div class="navbar-nav nav  ms-auto  p-3 p-lg-0">
                <a href="index.html" class="nav-item nav-link active arabic-text">الرئيسية</a>
                <a href="about.html" class="nav-item nav-link arabic-text">من نحن</a>
                <a href="service.html" class="nav-item nav-link arabic-text">خدماتنا</a>
                <a href="project.html" class="nav-item nav-link arabic-text">مشاريعنا</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle arabic-text" data-bs-toggle="dropdown">الصفحات</a>
                    <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                        <a href="feature.html" class="dropdown-item arabic-text">المميزات</a>
                        <a href="team.html" class="dropdown-item arabic-text">فريق العمل</a>
                        <a href="testimonial.html" class="dropdown-item arabic-text">الشهادات</a>
                        <a href="404.html" class="dropdown-item arabic-text">صفحة 404</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link arabic-text">اتصل بنا</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <form class="position-relative mx-auto" style=" direction: rtl;  max-width: 800px; text-align: right; font-family: 'Readex Pro', sans-serif;" $result=insertJobInfo ($title, $dec_short, $dec_long, $image_path, $date, $name, $conn); action="" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="text" name="title" required><br>

        <label for="dec_short">Short Description:</label>
        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="text" name="dec_short" required><br>

        <label for="dec_long">Long Description:</label>
        <textarea class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" name="dec_long" required></textarea><br>

        <label for="image">Image:</label>
        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="file" name="image" accept="image/*" required><br>

        <label for="small_img">small-Image:</label>
        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="file" name="small_img" accept="image/*" required><br>


        <label for="date">Date:</label>
        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="date" name="date" required><br>

        <label for="name">Name:</label>
        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="text" name="name" required><br>

        <label for="title">text:</label>
        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="text" name="link" required><br>

            <input type="radio" name="category" value="1" required> المبيعات والتسويق
            <input type="radio" name="category" value="2" required> القطاع الحكومي
            <input type="radio" name="category" value="3" required> تكنولوجيا
            <input type="radio" name="category" value="4" required> الطب
            <input type="radio" name="category" value="5" required> الفنادق
            <input type="radio" name="category" value="6" required> اخرى
        


        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" type="submit" name="insert" value="Submit">

    </form>




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