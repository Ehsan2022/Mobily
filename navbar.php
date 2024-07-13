<style>
   header{
    height:50px;
    padding: 5px 0px;
   }
   .search{
    right:1%;
    display: flex;
    position: absolute;
    width: 260px ;
   }
   .call{
    left:1%;
    display: flex;
    position: absolute;
    width: 260px ;
   }
   @media (max-width: 992px) {
    .search{
        width: 50%;
        margin-right:5px;
    }
    .call{
        margin-left:5px;
    }
   }
</style>
<header class="bg-light" >
                <div class="input-group call">
                    <button  class="btn btn-success input-group-text" title="Call">
                            <a href="tel:079-023-4314" class="text-white"><i class="fa fa-phone" ></i> </a>
                    </button>
                    <input type="text" class="form-control border-none d-lg-inline d-none text-center" placeholder="Tel : 0790 234 314" disabled>  
                </div>
                <div class=" search">
                        <form class="search-form " method="get" action="search_mobile.php">
                            <div class="input-group">
                            <input type="text" class="form-control border-none  text-center bg-transparent" name="mobile_name" placeholder="Search Mobile..." title="Enter search keyword">
                            <button class="btn btn-success input-group-text" type="submit" name="search_mobile" title="Search">
                                <a class="text-white"><i class="fa fa-search "></i></a>
                            </button>
                            </div>
                       
                        </form>                    
                </div>
</header>


<nav class="navbar navbar-expand-lg  shadow">
        <div class="container ">

            <a class="navbar-brand text-success h3 " href="index.html">Mobily</a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item ">
                            <a class="nav-link  fw-bolder" href="index.php">Home</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link  fw-bolder" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  fw-bolder" href="products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  fw-bolder" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

                <a href="cart.php">
                    <button class="nav-icon position-relative btn btn-outline-success me-2">
                            <i class="fa fa-fw fa-cart-arrow-down mr-1"></i>
                    </button>
                </a>

                <a href="/php/MolibeStoreManagement/www/login.php">
                    <button  class="btn btn-outline-success  fw-bolder">
                        E-SMS <i class="fa fa-sign-in-alt"></i> 
                    </button> 
                </a>
            </div>
            
        </div>
    </nav>