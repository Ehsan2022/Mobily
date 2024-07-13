<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mobile Shop - Product Listing Page</title>
    <?php
       include("db_connect.php");
   include('generalLinks.php');
   ?>
</head>

<body>



    <!-- Header -->
    <?php
    include("navbar.php");
    include("searchModal.php");
   ?>
 



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <?php
                $sql = "SELECT * FROM `mobile` order by mobile_id desc";
                $selectQuery = mysqli_query($Conn,$sql);
                $num=1;
                while(($row = mysqli_fetch_assoc($selectQuery)) && $num <= 7){
                    $mobile_id = $row['mobile_id'];
                    $mobile_fimg = $row['fimg'];
                    $mobile_bimg = $row['bimg'];
                    $model = $row['mobile_model'];
                    $color = $row['mobile_color'];
                    $ram = $row['mobile_ram'];
                    $rom = $row['mobile_rom'];    
                    $fcam = $row['mobile_front_cam'];    
                    $rcam = $row['mobile_back_cam'];  
                    if ($mobile_fimg == null) {
                        $mobile_fimg = "assets/img/ip13f.jpg";
                    }

                        echo "
                            <div class='col-12 col-md-4 col-lg-3 mb-4 text-center '>
                                <div class='card h-100 py-3 shadow'>
                                    <a>
                                        <img class='img-fluid' src='$mobile_fimg' alt='Mobile Image'>
                                    </a>
                                    <div class='card-body'>
                                        <h3 class='h3 card-text'>$model</h3>
                                        <p >Storage : $rom</p>
                                        <p>Color : <a class='btn' style='background-color:$color;box-shadow:0 0 10px 3px black;margin:0 10px;'></a></p>
                                        <a href='' class='btn btn-outline-primary cartButton'>
                                            <i class='fa fa-cart-arrow-down'></i>
                                        </a>
                                        <a href='' class='btn btn-outline-success moreButton'>
                                            <i class='fa fa-ellipsis-h'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            ";
                            $num++;
                }
                
            ?>

        </div>
    </div>
    <!-- End Content -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Our Brands</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->


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