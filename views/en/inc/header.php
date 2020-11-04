<?php
/**
 * Created by PhpStorm.
 * User: SMART 2
 * Date: 06/08/2020
 * Time: 18:46
 */
$pg = $page;
?>

<!--NAVBAR-->
<div class="sc-navbar shadow-sm sticky-top">
    <div class="d-flex justify-content-between align-items-center">
        <div class="d-inline-flex justify-content-center align-items-center">
            <a class="navbar-brand mx-3" href="./index.php">
                <img src="../../assets/images/smart.png" width="55" height="55" alt="Smart Consulting Logo"
                     loading="lazy">
            </a>
            <div class="d-inline-flex justify-content-start align-items-center">
                <div class="d-flex flex-column justify-content-center align-items-start">
                    <h6 class="text-white h6-responsive font-weight-bold">Smart Consulting Inc<span
                                class="accent-color"> .</span></h6>
                    <h6 class="text-white h6-responsive font-weight-light">Clients satisfaction is our priority</h6>
                </div>
            </div>
        </div>

        
        <nav class="navbar navbar-expand-lg d-none d-sm-none d-md-block d-lg-block">
            <div class="d-inline-flex justify-content-center align-items-center">
               <div class="d-flex d-inline-flex justify-content-center align-items-center">
                    <ul class="list-unstyled list-inline text-center align-self-center">
                        <li class="list-inline-item d-inline-flex align-items-center">
                            <a href="https://www.facebook.com/SMART-Consulting-106703661188775/?modal=admin_todo_tour" target="_blank" class="no-deco btn-floating circle-social-icon text-white opacity-40 mx-1 d-flex justify-content-center align-items-center border border-light">
                                <i class="fab fa-facebook-f align-self-center"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/channel/UCFqoLSkconFisd_tTniAcqw" target="_blank" class="no-deco btn-floating circle-social-icon text-white opacity-40 mx-1 d-flex justify-content-center align-items-center border border-light">
                                <i class="fab fa-youtube align-self-center"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/SMARTConsultin8" target="_blank" class="no-deco btn-floating circle-social-icon text-white opacity-40 mx-1 d-flex justify-content-center align-items-center border border-light">
                                <i class="fab fa-twitter align-self-center"> </i>
                            </a>
                        </li>
                        
                        <li class="list-inline-item">
                            <a class="no-deco btn-floating circle-social-icon text-white opacity-40 mx-1 d-flex justify-content-center align-items-center border border-light">
                                <i class="fab fa-google-plus-g align-self-center"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/smart.cons/" target="_blank"  class="no-deco btn-floating circle-social-icon text-white opacity-40 mx-1 d-flex justify-content-center align-items-center border border-light">
                                <i class="fab fa-instagram align-self-center"> </i>
                            </a>
                        </li>
                    

                    </ul>
                </div>
            </div>

        </nav>
    </div>
</div>
<!--.NAVBAR-->
<!--NAVBAR MOBILE-->
<!-- <div class="sc-navbar shadow-sm d-block d-sm-block d-md-block d-lg-none py-3">
    <div class="d-flex justify-content-between align-items-center ">
        <a href="#" data-target="slide-out" class="sidenav-trigger d-none d-sm-none d-md-block">
            <div class="mx-3"><i class="fas fa-bars text-white fa-2x"></i></div>
        </a>
        <a href="#" data-target="slide-out-mobile" class="sidenav-trigger d-block d-sm-block d-md-none">
            <div class="mx-3"><i class="fas fa-bars text-white"></i></div>
        </a>
    </div>

</div> -->
<!--.NAVBAR MOBILE-->

<!--SIDENAV MOBILE-->
<!-- <ul id="slide-out" class="sidenav d-none d-sm-none d-md-block">
    <li>
        <div class="user-view p-0">
            <div class="row">
                <div class="col-12">
                    <i class="fas fa-arrow-left text-dark p-4" id="close-sidnav"></i>
                </div>
            </div>
            <div class="background-sidenav p-5">
                <p class="py-5"></p>
                <p class="py-5"></p>
            </div>


        </div>
    </li>
    <li><a href="./index.php" class="primary-color"><i class="fas fa-home primary-color"></i>Home</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="./product.php" class="primary-color"><i class="fas fa-gift primary-color"></i>Products</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="./services.php" class="primary-color"><i class="fas fa-building primary-color"></i>Services</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="./team.php" class="primary-color"><i class="fas fa-users primary-color"></i>Our team</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="#" class="primary-color"><i class="fas fa-file-contract primary-color"></i>Porfolio</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="../fr/index.php" class="primary-color"><i class="fas fa-flag primary-color"></i>French Version</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <?php if(!isset($_SESSION["id"])){ ?>
        
            
            <li><a href="./login.php" class="primary-color"><i class="fas fa-sign-in-alt primary-color"></i>Sign In</a></li>
        <?php } else{ ?>
            <li>
               <a  href="../../../back-end/en/c_logout.php" class="primary-color"><i class="fas fa-sign-out-alt primary-color"></i>Profil</a>
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a  href="../../../back-end/en/c_logout.php" class="primary-color"><i class="fas fa-sign-out-alt primary-color"></i>Sign Out</a></li>
        <?php } ?>
    
    <li>
        <div class="divider"></div>
    </li>
    <li><a target="_blank" href="https://emailmg.ipage.com/roundcube/" class="primary-color"><i
                    class="fas fa-envelope primary-color"></i>Mail</a></li>

</ul> -->

<!-- <ul id="slide-out-mobile" class="sidenav d-block d-sm-block d-md-none">
    <li>
        <div class="user-view p-0">
            <div class="row">
                <div class="col-12">
                    <i class="fas fa-arrow-left text-dark p-4" id="close-sidnav-mobile"></i>
                </div>
            </div>
            <div class="background-sidenav p-5">
                <p class="py-5"></p>
                <p class="py-5"></p>
            </div>


        </div>
    </li>
    <li><a href="./index.php" class="primary-color"><i class="fas fa-home primary-color"></i>Home</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="./product.php" class="primary-color"><i class="fas fa-gift primary-color"></i>Products</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="./services.php" class="primary-color"><i class="fas fa-building primary-color"></i>Services</a></li>
    <li>
        <div class="divider"></div>
    </li>
   
    <li><a href="./team.php" class="primary-color"><i class="fas fa-users primary-color"></i>Our team</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="#" class="primary-color"><i class="fas fa-file-contract primary-color"></i>Porfolio</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="../fr/index.php" class="primary-color"><i class="fas fa-flag primary-color"></i>French Version</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <?php if(!isset($_SESSION["id"])){ ?>
        
            
            <li><a href="./login.php" class="primary-color"><i class="fas fa-sign-in-alt primary-color"></i>Sign In</a></li>
        <?php } else{ ?>
            <li>
               <a  href="../../../back-end/en/c_logout.php" class="primary-color"><i class="fas fa-sign-out-alt primary-color"></i>Profil</a>
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a  href="../../../back-end/en/c_logout.php" class="primary-color"><i class="fas fa-sign-out-alt primary-color"></i>Sign Out</a></li>
        <?php } ?>
    <li>
        <div class="divider"></div>
    </li>
    <li><a target="_blank" href="https://emailmg.ipage.com/roundcube/" class="primary-color"><i
                    class="fas fa-envelope primary-color"></i>Mail</a></li>
</ul> -->
<!--.SIDENAV MOBILE-->
