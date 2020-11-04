<?php
/**
 * Created by PhpStorm.
 * User: SMART 2
 * Date: 06/08/2020
 * Time: 19:01
 */
session_start();
$page = 'service';
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'inc/head.php' ?>

    <title>SMART Consulting - Services</title>
</head>
<body>

<!--NAVBAR-->
<?php
include 'inc/header.php';
?>


<div class="container-fluid bg-home-p">

    <!--SEARCH HEADER-->
    <div class="container shadow-sm">
        <div class="row">
            <div class="col-lg-10 col-md-8 col-12 mx-auto">
                
                <div class="row">
                    <div class="col-12">
                        <h3 class="h3-responsive primary-color-dark text-uppercase font-weight-bold py-4 text-center my-3">
                            Find the right shop for your need.
                        </h3>
                    </div>
                    <div class="col-12 py-2 py-md-3">
                        <form action="" method="POST">
                            <div class="input-group md-form form-sm form-2 pl-0 mx-auto  py-2 w-75">
                                <input class="form-control my-0 py-3 border " type="text" placeholder="Name or type of shop you're looking for" aria-label="Search">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary-color-dark" id="basic-text1">
                                        <a href="#" type="submit">
                                            <i class="fas fa-search text-white"
                                            aria-hidden="true">
                                            </i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 py-2 py-md-3">
                        <hr class="w-25 mx-auto">
                    </div>
                    <div class="col-12 ">
                        <div class="row py-5">
                            <div class="col-2 d-none d-sm-none d-md-block d-lg-block">
                                <h6 class="h6-responsive font-italic">Quick Search</h6>
                            </div>
                            <div class="col-12 d-block d-sm-block d-md-none d-lg-none">
                                <h6 class="h6-responsive font-italic text-center">Quick Search</h6>
                            </div>
                            <div class="col-md-10 col-sm-12">
                                <div class="row my-auto">
                                    <div class="col-1 prev-btn" >
                                        <div class="search-c shadow text-white d-flex justify-content-center align-items-center"><i class="fas fa-arrow-left align-self-center"></i></div>
                                    </div>
                                    <div class="col-8" >
                                        
                                        <div id="film_roll">
                                            <div>
                                                <a href="#" class="no-deco"><div class="py-3 border text-dark px-3 mx-3 mb-2 rounded-button px-4"> Restaurant</div> </a>
                                            </div>
                                            <div>
                                                <a href="#" class="no-deco"><div class="py-3 border text-dark px-3 mx-3 mb-2 rounded-button px-4"> Jewerly</div> </a>
                                            </div>
                                            <div>
                                                <a href="#" class="no-deco"><div class="py-3 border text-dark px-3 mx-3 mb-2 rounded-button px-4"> Perfume</div> </a>
                                            </div>
                                             <div>
                                                <a href="#" class="no-deco"><div class="py-3 border text-dark px-3 mx-3 mb-2 rounded-button px-4"> Shoes</div> </a>
                                            </div>
                                            <!-- <div>
                                                <a href="#" ><img src="..."> </a>
                                            </div>
                                            <ul class="item-swipe">
                                                <li class="item-swipe py-3 border text-dark rounded border px-3">
                                                    Restaurant
                                                </li>
                                                <li class="item-swipe py-3 border text-dark rounded border px-3">
                                                    Jewerly
                                                </li>
                                                <li class="item-swipe py-3 border text-dark rounded border px-3">
                                                    Perfume
                                                </li>
                                                <li class="item-swipe py-3 border text-dark rounded border px-3">
                                                    Shoes
                                                </li>
                                            </ul> -->
                                       
                                        </div>
                                    </div>
                                    <div class="col-1 next-btn" >
                                        <div class="search-c text-white d-flex justify-content-center align-items-center"><i class="fas fa-arrow-right align-self-center"></i></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="d-flex flex-column justify-content-between">
                    <div class="d-flex justify-content-center">
                        <h2 class="h2-responsive primary-color-dark text-uppercase font-weight-bold py-4">
                            Find the right shop for your need.
                        </h2>
                    </div>
                    <div class="d-flex justify-content-center py-4">
                        <form action="" method="POST" class="w-50">
                            <div class="input-group md-form form-sm form-2 pl-0  py-2">
                                <input class="form-control my-0 py-1 lime-border " type="text" placeholder="Name or type of shop you're looking for" aria-label="Search">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary-color-dark lighten-2" id="basic-text1">
                                        <a href="#" type="submit">
                                            <i class="fas fa-search text-white"
                                            aria-hidden="true">
                                            </i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </form>
                       
                    </div> 
                    <div class="w-25 mx-auto">
                        <hr>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <p class="text-capitalize primary-color-dark mr-3">Quick search</p>
                        <div class="bo">ee</div>
                    </div>
                </div> -->
                
               
            </div>

        </div>

    </div>
    <!--.SEARCH HEADER-->

    <div class="container my-4">
        <div class="row mb-3">
            <div class="col-12 mt-5">
                <h3 class="primary-color-dark text-uppercase">You may also like this</h3>
            </div>
        </div>

        <div  class="row bo">
             <div class="col-md-1 col-sm-6 prev-ad-btn" >
                <div class="search-c-ad-left text-white d-flex justify-content-center align-items-center"><i class="fas fa-arrow-left align-self-center"></i></div>
            </div>
            <div class="col-md-1 col-sm-6 next-ad-btn" >
                <div class="search-c-ad-right text-white d-flex justify-content-center align-items-center"><i class="fas fa-arrow-right align-self-center"></i></div>
            </div>
            <div id="film_roll_ad" class="col-10 col-md-4 col-lg-3">
                <a href="#" class="no-deco">
                    <div class="card flex-fill">
              
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="card-img-top align-self-center img-fluid"
                                src="../../assets/images/p1.png"
                                alt="Smart Consulting Audit Services">
                        </div>

                    
                        <div class="card-body opacity10 p-2 d-flex flex-column justify-content-between">
                            <div class="opacity-100">
                                <h4 class=" text-uppercase primary-color-dark opacity-100 py-3">Smart Shops</h4>
                                <p class="card-text py-2 primary-color-dark text-right font-italic">By Noreol</p>
                            </div>
                        </div>
ss

                    </div>
                </a>
                 <a href="#" class="no-deco">
                    <div class="card flex-fill">
              
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="card-img-top align-self-center img-fluid"
                                src="../../assets/images/p1.png"
                                alt="Smart Consulting Audit Services">
                        </div>

                    
                        <div class="card-body opacity10 p-2 d-flex flex-column justify-content-between">
                            <div class="opacity-100">
                                <h4 class=" text-uppercase primary-color-dark opacity-100 py-3">Smart Shops</h4>
                                <p class="card-text py-2 primary-color-dark text-right font-italic">By Noreol</p>
                            </div>
                        </div>


                    </div>
                </a>
                 <a href="#" class="no-deco">
                    <div class="card flex-fill">
              
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="card-img-top align-self-center img-fluid"
                                src="../../assets/images/p1.png"
                                alt="Smart Consulting Audit Services">
                        </div>

                    
                        <div class="card-body opacity10 p-2 d-flex flex-column justify-content-between">
                            <div class="opacity-100">
                                <h4 class=" text-uppercase primary-color-dark opacity-100 py-3">Smart Shops</h4>
                                <p class="card-text py-2 primary-color-dark text-right font-italic">By Noreol</p>
                            </div>
                        </div>


                    </div>
                </a>
                 <a href="#" class="no-deco">
                    <div class="card flex-fill">
              
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="card-img-top align-self-center img-fluid"
                                src="../../assets/images/p1.png"
                                alt="Smart Consulting Audit Services">
                        </div>

                    
                        <div class="card-body opacity10 p-2 d-flex flex-column justify-content-between">
                            <div class="opacity-100">
                                <h4 class=" text-uppercase primary-color-dark opacity-100 py-3">Smart Shops</h4>
                                <p class="card-text py-2 primary-color-dark text-right font-italic">By Noreol</p>
                            </div>
                        </div>


                    </div>
                </a>
                 <a href="#" class="no-deco">
                    <div class="card flex-fill">
              
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="card-img-top align-self-center img-fluid"
                                src="../../assets/images/p1.png"
                                alt="Smart Consulting Audit Services">
                        </div>

                    
                        <div class="card-body opacity10 p-2 d-flex flex-column justify-content-between">
                            <div class="opacity-100">
                                <h4 class=" text-uppercase primary-color-dark opacity-100 py-3">Smart Shops</h4>
                                <p class="card-text py-2 primary-color-dark text-right font-italic">By Noreol</p>
                            </div>
                        </div>


                    </div>
                </a>
            </div>
            
        </div>

    </div>
</div>


<!-- Footer -->
<?php
include 'inc/footer.php';
?>

<!-- JS SCRIPT  -->
<?php
include 'inc/foot.php';
?>

</body>
</html>
