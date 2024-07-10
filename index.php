<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mobily Online Shop</title>
   <?php
   include("generalLinks.php");
   ?>
</head>

<body>


 <!-- Header -->
    <!-- Search modal -->
    <?php
    include("navbar.php");
    include("searchModal.php");
   ?>


    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="background-color:white; box-shadow:0px 1px 10px grey;">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="text-center  col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/ip13f.jpg" alt="">
                            <img class="img-fluid" src="./assets/img/ip13b.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success">Apple</h1>
                                <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                     Doloribus necessitatibus quidem, natus eius beatae modi sequi
                                      asperiores minima vitae neque qui sapiente ratione,
                                     incidunt non cumque, quia molestiae quisquam quis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="text-center col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/s24f.jpg" alt="">
                        <img class="img-fluid" src="./assets/img/s24b.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success">Samsung</h1>
                                <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                     Doloribus necessitatibus quidem, natus eius beatae modi sequi
                                      asperiores minima vitae neque qui sapiente ratione,
                                     incidunt non cumque, quia molestiae quisquam quis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="text-center col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/xi14f.jpg" alt="">
                        <img class="img-fluid" src="./assets/img/xi14b.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success">Xiaomi</b></h1>
                                <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                     Doloribus necessitatibus quidem, natus eius beatae modi sequi
                                      asperiores minima vitae neque qui sapiente ratione,
                                     incidunt non cumque, quia molestiae quisquam quis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Suggested Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Suggested Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4 text-center">
                    <div class="card h-100 py-3">
                        <a href="shop-single.html">
                            <img class="img-fluid" src="./assets/img/ip13f.jpg" alt="">
                            <img class="img-fluid" src="./assets/img/ip13b.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$1240.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Iphone 15 Promax</a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.
                            </p>
                            <button class="cartButton bg-success"><a class="text-dark text-decoration-none" href="cart.php">
                            Add to Cart<i class="fa fa-fw fa-cart-arrow-down mr-1 text-dark"></i>
                            </a></button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 text-center">
                    <div class="card h-100 py-3">
                        <a href="shop-single.html">
                            <img class="img-fluid" src="./assets/img/s24f.jpg" alt="">
                            <img class="img-fluid" src="./assets/img/s24b.jpg" alt="">                        
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$1240.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Samsung S24 Ultra</a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.
                            </p>
                            <button class="cartButton bg-success"><a class="text-dark text-decoration-none" href="cart.php">
                            Add to Cart<i class="fa fa-fw fa-cart-arrow-down mr-1 text-dark"></i>
                            </a></button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 text-center">
                    <div class="card h-100 py-3">
                        <a href="shop-single.html">
                            <img class="img-fluid" src="./assets/img/xi14f.jpg" alt="">
                            <img class="img-fluid" src="./assets/img/xi14b.jpg" alt="">                        
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$1240.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Xiaomi 14 Pro</a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.
                            </p>
                            <button class="cartButton bg-success"><a class="text-dark text-decoration-none" href="cart.php">
                            Add to Cart<i class="fa fa-fw fa-cart-arrow-down mr-1 text-dark"></i>
                            </a></button>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </section>


    <!-- Start Footer -->
   <?php
    include("footer.php");
   ?>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>