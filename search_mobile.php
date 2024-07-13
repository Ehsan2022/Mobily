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
    <?php include("navbar.php");?>

    <!-- Suggested Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center pb-3">
                <div class="col-lg-6 m-auto">
                    <h3 class="h3">Search Result <span class="h2">☺</span></h3>
                </div>
            </div>
            <div class="row">
            <?php 
                    if($_GET['mobile_name']){
                      $mobile_name = $_GET['mobile_name'];

                      $sql = "SELECT * FROM mobile WHERE mobile_model LIKE '%$mobile_name%'";
                      $query = mysqli_query($Conn, $sql);
                      while($row = mysqli_fetch_assoc($query)){
                        $mobile_id = $row['mobile_id'];
                        $mobile_fimg = $row['fimg'];
                        $mobile_bimg = $row['bimg'];
                        $model = $row['mobile_model'];
                        $color = $row['mobile_color'];
                        $ram = $row['mobile_ram'];
                        $rom = $row['mobile_rom'];    
                        $fcam = $row['mobile_front_cam'];    
                        $rcam = $row['mobile_back_cam'];  

                     echo "
                        <div class='col-12 col-md-4 mb-4 text-center'>
                            <div class='card h-100 py-3'>
                                <a href='shop-single.html'>
                                    <img class='img-fluid' src='$mobile_fimg' alt=''>
                                    <img class='img-fluid' src='$mobile_bimg' alt=''>
                                </a>
                                <div class='card-body'>
                                
                                    <a href='shop-single.html' class='h2 text-decoration-none text-dark'>$model</a>
                                    <p class='card-text'>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.
                                    </p>
                                    <button class='cartButton bg-success'><a class='text-dark text-decoration-none' href='cart.php'>
                                    Add to Cart<i class='fa fa-fw fa-cart-arrow-down mr-1 text-dark'></i>
                                    </a></button>
                                </div>
                            </div>
                        </div>
                      ";
 
        }
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