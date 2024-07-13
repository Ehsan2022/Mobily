<?php
   include("db_connect.php");
   ?>
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
    <div id="template-mo-zay-hero-carousel" class="carousel slide mt-5" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" style="background-color:white; ">
            <h1 class="h1 text-center text-success">New</h1>
 
            <?php
                $sql = "SELECT * FROM `mobile` INNER JOIN  `mobile_brand` order by mobile_id desc";
                $selectQuery = mysqli_query($Conn,$sql);
                $num = 0 ;
                while($row = mysqli_fetch_assoc($selectQuery)){
                        $mobile_id = $row['mobile_id'];
                        $mobile_fimg = $row['fimg'];
                        $mobile_bimg = $row['bimg'];
                        $model = $row['mobile_model'];
                        $color = $row['mobile_color'];
                        $ram = $row['mobile_ram'];
                        $rom = $row['mobile_rom'];    
                        $fcam = $row['mobile_front_cam'];    
                        $rcam = $row['mobile_back_cam'];  
                        $brand_name = $row['mb_name'];  
                        if ($num == 0) {
                            echo "
                                <div class='carousel-item active'>
                                    <div class='container'>
                                        <div class='row p-5'>
                                            <div class='text-center  col-md-8 col-lg-5 order-lg-last'>
                                                <img class='img-fluid' src='./assets/img/ip13f.jpg' alt=''>
                                                <img class='img-fluid' src='./assets/img/ip13b.jpg' alt=''>
                                            </div>
                                            <div class='col-lg-7 mb-0 d-flex align-items-center'>
                                                <div class='text-align-left align-self-center'>
                                                        <h1 class='   text-success'>$brand_name</h1>
                                                    
                                                        <h1 class=' h1'>$model Storage : $rom</h1> 
                                                        <a class='btn btn-success col-12'>Click For More...</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                ";
                        }  else {
                            echo "
                                <div class='carousel-item '>
                                    <div class='container'>
                                        <div class='row p-5'>
                                            <div class='text-center  col-md-8 col-lg-5 order-lg-last'>
                                                <img class='img-fluid' src='./assets/img/ip13f.jpg' alt=''>
                                                <img class='img-fluid' src='./assets/img/ip13b.jpg' alt=''>
                                            </div>
                                            <div class='col-lg-7 mb-0 d-flex align-items-center'>
                                                <div class='text-align-left align-self-center'>
                                                        <h1 class='   text-success'>$brand_name</h1>
                                                    
                                                        <h1 class=' h1'>$model Storage : $rom</h1> 
                                                        <a class='btn btn-success col-12'>Click For More...</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            ";
                        }
                        
                        if ($num == 3) break;
                        $num++;
                }
            ?>
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
            <div class="row text-center pb-5">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Suggested Product</h1>
                </div>
            </div>

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
                                               <a href='' class='btn btn-outline-primary mx-1 cartButton'>
                                                    <i class='fa fa-cart-arrow-down'></i>
                                               </a>
                                               <a href='' class='btn btn-outline-success mx-1 moreButton'>
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