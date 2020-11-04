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
    <div class="sc-navbar shadow-sm d-none d-sm-none d-md-none d-lg-block fixed-top">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-inline-flex justify-content-center align-items-center">
                <a class="navbar-brand mx-3" href="./index.php">
                    <img src="../../assets/images/smart.png" width="55" height="55" alt="Smart Consulting Logo" loading="lazy">
                </a>
                <div class="d-inline-flex justify-content-start align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <h6 class="text-white h6-responsive font-weight-bold">Smart Consulting Inc<span class="accent-color"> .</span></h6>
                        <h6 class="text-white h6-responsive font-weight-light">Clients satisfaction is our priority</h6>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg primary-color">
                <ul class="navbar-nav text-white">
                    <div class="d-flex flex-column waves-effect justify-content-around ">
                        <li class="nav-item active rgba-black-light">
                            <strong><a class="nav-link text-white opct opacity-40 link-text" href="./index.php"><i class="fas fa-home text-white mr-2"></i>Home</a></strong>
                        </li>
                        <!-- <div class="sm-divider"></div> -->
                    </div>

                    <div class="d-flex flex-column waves-effect justify-content-around ">
                        <?php if ($pg == 'product'){
                            echo '
                            <li class="nav-item ">
                            <strong><a class="nav-link text-white" href="./product.php"><i class="fas fa-gifts text-white mx-2"></i>Products</a></strong>
                        </li>
                        <div class="sm-divider"></div>
                            ';
                        }else {
                            echo '
                            <li class="nav-item ">
                            <a class="nav-link text-white opct opacity-40 link-text" href="./product.php"><i class="fas fa-gifts text-white link-text mx-2"></i>Products</a>
                        </li>
                            ';
                        }
                        ?>
                    </div>

                    <div class="d-flex flex-column waves-effect justify-content-around ">
                        <?php if ($pg == 'service'){
                            echo '
                            <li class="nav-item ">
                            <strong><a class="nav-link text-white" href="./services.php"><i class="fas fa-building text-white mx-2"></i>Services</a></strong>
                        </li>
                        <div class="sm-divider"></div>
                            ';
                        }else {
                            echo '
                            <li class="nav-item ">
                            <a class="nav-link text-white opct opacity-40 link-text " href="./services.php"><i class="fas fa-building text-white link-text mx-2"></i>Services</a>
                        </li>
                            ';
                        }
                        ?>
                    </div>

                    <div class="d-flex flex-column waves-effect justify-content-around ">
                        <?php if ($pg == 'team'){
                            echo '
                            <li class="nav-item ">
                            <strong><a class="nav-link text-white" href="./team.php"><i class="fas fa-users text-white mx-2"></i>Notre équipe</a></strong>
                        </li>
                        <div class="sm-divider"></div>
                            ';
                        }else {
                            echo '
                            <li class="nav-item ">
                            <a class="nav-link text-white opct opacity-40 link-text " href="./team.php"><i class="fas fa-users text-white link-text mx-2"></i>Notre équipe</a>
                        </li>
                            ';
                        }
                        ?>
                    </div>

                    <div class="d-flex flex-column waves-effect justify-content-around ">
                        <?php if ($pg == 'portfolio'){
                            echo '
                            <li class="nav-item ">
                            <strong><a class="nav-link text-white" href="#"><i class="fas fa-bookmark text-white mx-2"></i>Porfolio</a></strong>
                        </li>
                        <div class="sm-divider"></div>
                            ';
                        }else {
                            echo '
                            <li class="nav-item ">
                            <a class="nav-link text-white opct opacity-40 link-text " href="#"><i class="fas fa-bookmark text-white link-text mx-2"></i>Porfolio</a>
                        </li>
                            ';
                        }
                        ?>
                    </div>
                    <div class="d-flex flex-column waves-effect justify-content-around ">
                            <li class="nav-item ">
                                <a class="nav-link text-white opct opacity-40 link-text " href="../en/index.php"><i class="fas fa-flag text-white link-text mx-2"></i>English Version</a>
                            </li>
                            <!-- <div class="sm-divider"></div> -->
                        </div>

                </ul>
            </nav>


            <nav class="navbar navbar-expand-lg">
                <div class="d-inline-flex justify-content-center align-items-start">
                    <ul class="d-inline-flex align-items-center my-auto">
                        <?php if (!isset($_SESSION["id"])) { ?>
                        
                        <div class="align-self-center d-flex waves-effect justify-content-around ">
                            <li class="nav-item ">
                                <a class="nav-link text-white opct opacity-40 link-text" href="./login.php"><i class="fas fa-sign-in-alt text-white link-text mx-2"></i>Se connecter</a>
                            </li>
                        </div>
                            
                        <?php } else { ?>
                        
                        <div class="align-self-center d-flex waves-effect justify-content-around ">
                                <li class="nav-item ">
                                    <div class="dropdown">
                                        <a 
                                        class="nav-link text-white opct opacity-40 link-text"
                                        id="dropdownMenuButton"
                                        data-toggle="dropdown"
                                        aria-expanded="false">
                                        Mon compte<i class="fas fa-arrow-down text-white link-text mx-2"></i></a>

                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="./myaccount">Profil</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item"  href="../../../back-end/en/c_logout.php">Se déconnecter</a>
                                        </div>
                                    </div>

                                </li>
                            </div>
                           
                         <?php } ?>
                        
                        <div class="align-self-center d-flex flex-column waves-effect justify-content-around ">
                            <li class="nav-item ">
                                <a class="nav-link text-white opct opacity-40 link-text " target="_blank" href="https://emailmg.ipage.com/roundcube/"><i class="fas fa-envelope text-white link-text mx-2"></i>Mail</a>
                            </li>
                            <!-- <div class="sm-divider"></div> -->
                        </div>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
    <!--.NAVBAR-->

    <!--NAVBAR MOBILE-->
    <div class="sc-navbar shadow-sm d-block d-sm-block d-md-block d-lg-none py-3">
        <div class="d-flex justify-content-between align-items-center ">
            <a href="#" data-target="slide-out" class="sidenav-trigger d-none d-sm-none d-md-block">
                <div class="mx-3"><i class="fas fa-bars text-white fa-2x"></i></div>
            </a>
            <a href="#" data-target="slide-out-mobile" class="sidenav-trigger d-block d-sm-block d-md-none">
                <div class="mx-3"><i class="fas fa-bars text-white"></i></div>
            </a>
        </div>

    </div>
    <!--.NAVBAR MOBILE-->

    <!--SIDENAV MOBILE-->
    <ul id="slide-out" class="sidenav d-none d-sm-none d-md-block">
        <li><div class="user-view p-0">
                <div class="row">
                    <div class="col-12" >
                        <i class="fas fa-arrow-left text-dark p-4" id="close-sidnav"></i>
                    </div>
                </div>
                <div class="background-sidenav p-5">
                    <p class="py-5"></p>
                    <p class="py-5"></p>
                </div>


            </div></li>
        <li><a href="./index.php" class="primary-color"><i class="fas fa-home primary-color"></i>Accueil</a></li>
        <li><div class="divider"></div></li>
        <li><a href="./product.php" class="primary-color"><i class="fas fa-gift primary-color"></i>Produits</a></li>
        <li><div class="divider"></div></li>
        <li><a href="./services.php" class="primary-color"><i class="fas fa-building primary-color"></i>Services</a></li>
        <li><div class="divider"></div></li>
        <li><a href="./team.php" class="primary-color"><i class="fas fa-users primary-color"></i>Notre équipe</a></li>
        <li><div class="divider"></div></li>
        <li><a href="#" class="primary-color"><i class="fas fa-file-contract primary-color"></i>Porfolio</a></li>
        <li><div class="divider"></div></li>
        <li><a href="../en/index.php" class="primary-color"><i class="fas fa-flag primary-color"></i>English Version</a></li>
        <li><div class="divider"></div></li>
        <?php if(!isset($_SESSION["id"])){ ?>
        
            <li><a href="./login.php" class="primary-color"><i class="fas fa-sign-in-alt primary-color"></i>Se connecter</a></li>
        <?php }else{ ?>
            
            <li>
               <a  href="../../../back-end/en/c_logout.php" class="primary-color"><i class="fas fa-sign-out-alt primary-color"></i>Profil</a>
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a  href="../../../back-end/en/c_logout.php" class="primary-color"><i class="fas fa-sign-out-alt primary-color"></i>Se déconnecter</a></li>
        <?php } ?>
    
        <li><div class="divider"></div></li>
        <li><a target="_blank" href="https://emailmg.ipage.com/roundcube/" class="primary-color"><i class="fas fa-envelope primary-color"></i>Mail</a></li>

    </ul>

    <ul id="slide-out-mobile" class="sidenav d-block d-sm-block d-md-none">
        <li><div class="user-view p-0">
                <div class="row">
                    <div class="col-12" >
                        <i class="fas fa-arrow-left text-dark p-4" id="close-sidnav-mobile"></i>
                    </div>
                </div>
                <div class="background-sidenav p-5">
                    <p class="py-5"></p>
                    <p class="py-5"></p>
                </div>


            </div></li>
        <li><a href="./index.php" class="primary-color"><i class="fas fa-home primary-color"></i>Accueil</a></li>
        <li><div class="divider"></div></li>
        <li><a href="./product.php" class="primary-color"><i class="fas fa-gift primary-color"></i>Produits</a></li>
        <li><div class="divider"></div></li>
        <li><a href="./services.php" class="primary-color"><i class="fas fa-building primary-color"></i>Services</a></li>
        <li><div class="divider"></div></li>
        <!-- <li><a href="#" class="primary-color"><i class="fas fa-dollar-sign primary-color"></i>Princing</a></li> -->
        <li><a href="./team.php" class="primary-color"><i class="fas fa-users primary-color"></i>Notre équipe</a></li>
        <li><div class="divider"></div></li>
        <li><a href="#" class="primary-color"><i class="fas fa-file-contract primary-color"></i>Porfolio</a></li>
        <li><div class="divider"></div></li>
        <li><a href="../en/index.php" class="primary-color"><i class="fas fa-flag primary-color"></i>English Version</a></li>
         <li><div class="divider"></div></li>
        <?php if(!isset($_SESSION["id"])){ ?>
        
            <li><a href="./login.php" class="primary-color"><i class="fas fa-sign-in-alt primary-color"></i>Se connecter</a></li>
        <?php }else{ ?>
            
            <li>
               <a  href="../../../back-end/en/c_logout.php" class="primary-color"><i class="fas fa-sign-out-alt primary-color"></i>Profil</a>
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a  href="../../../back-end/en/c_logout.php" class="primary-color"><i class="fas fa-sign-out-alt primary-color"></i>Se déconnecter</a></li>
        <?php } ?>
    
        <li><div class="divider"></div></li>
        <li><a target="_blank" href="https://emailmg.ipage.com/roundcube/" class="primary-color"><i class="fas fa-envelope primary-color"></i>Mail</a></li>
    </ul>
    <!--.SIDENAV MOBILE-->
