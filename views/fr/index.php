<?php
/**
 * Created by PhpStorm.
 * User: SMART 2
 * Date: 06/08/2020
 * Time: 18:44
 */
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'inc/head.php' ?>

    <title>SMART Consulting wish you welcome</title>
</head>
<body>

<?php
include('message.php');
?>

<!-- MAIN CONTENT-->
<div class="container-fluid main-content-bg view p-0 d-flex flex-column m-0 justify-content-between">
    <div class="h-100">
        <!--NAVBAR-->
        <div class="sc-navbar shadow-sm d-none d-sm-none d-md-none d-lg-block fixed-top ">
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
                                <strong><a class="nav-link text-white" href="./index.php"><i class="fas fa-home text-white mr-2"></i>Accueil</a></strong>
                            </li>
                            <div class="sm-divider"></div>
                        </div>

                        <div class="d-flex flex-column waves-effect justify-content-around ">
                            <li class="nav-item ">
                                <a class="nav-link text-white opct opacity-40 link-text" href="./product.php"><i class="fas fa-gifts text-white link-text mx-2"></i>Produits</a>
                            </li>
                            <!-- <div class="sm-divider"></div> -->
                        </div>

                        <div class="d-flex flex-column waves-effect justify-content-around ">
                            <li class="nav-item ">
                                <a class="nav-link text-white opct opacity-40 link-text " href="./services.php"><i class="fas fa-building text-white link-text mx-2"></i>Services</a>
                            </li>
                            <!-- <div class="sm-divider"></div> -->
                        </div>

                        <div class="d-flex flex-column waves-effect justify-content-around ">
                            <li class="nav-item ">
                                <a class="nav-link text-white opct opacity-40 link-text " href="./team.php"><i class="fas fa-users text-white link-text mx-2"></i>Notre équipe</a>
                            </li>
                            <!-- <div class="sm-divider"></div> -->
                        </div>

                        <div class="d-flex flex-column waves-effect justify-content-around ">
                            <li class="nav-item ">
                                <a class="nav-link text-white opct opacity-40 link-text " href="#"><i class="fas fa-bookmark text-white link-text mx-2"></i>Porfolio</a>
                            </li>
                            <!-- <div class="sm-divider"></div> -->
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
                <!-- <div class="btn btn-sm bg-accent-color-dark text-center text-white mx-2 py-2  rounded-button">
                    Get started now
                </div> -->
            </div>

        </div>
        <!--.NAVBAR MOBILE-->
        <div class="d-flex flex-column justify-content-around h-100 align-items-center">
            <!--DESKTOP CONTENT-->
            <div class="font-weight-bold text-white text-center d-none d-sm-none d-md-none d-lg-block w-100">

                <div class="d-flex flex-column justify-content-center align-items-center ">
                    <h1 class="h1-responsive text-uppercase primary-color-dark mt-5">smart consulting inc <span class="accent-color"> .</span></h1>
                    <div class="container mt-3">
                        <div class="row mx-5">
                            <div class="col d-flex py-4 animated zoomIn slow">
                                <div class="flex-fill bg-primary-color-dark shadow-lg rounded d-flex flex-column justify-content-between align-items-center">
                                    <div class="d-flex justify-content-center align-items-center h-100">
                                        <img src="../../assets/images/improvement_icon_desktop.png" alt="Smart Consulting Features" class="img-fluid p-4 align-self-center">
                                    </div>
                                    <div class="white rounded-bottom py-2 primary-color w-100">
                                        <h4 class="font-weight-light h4-responsive text-center">Pratiques Informatiques et Processus <span class="accent-color-dark font-weight-bold">d'amélioration</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex py-2 animated zoomIn slow delay-1s">
                                <div class="flex-fill bg-primary-color-dark shadow-lg rounded d-flex flex-column justify-content-between align-items-center">
                                    <div class="d-flex justify-content-center align-items-center h-100">
                                        <img src="../../assets/images/statistic_icon_desktop.png" alt="Smart Consulting Features" class="img-fluid p-4 align-self-center">
                                    </div>
                                    <div class="white rounded-bottom py-2 primary-color w-100">
                                        <h4 class="font-weight-light h4-responsive text-center">Votre business <span class="accent-color-dark font-weight-bold">à un autre niveau</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex py-4 animated zoomIn slow delay-2s card-anim">
                                <div class="flex-fill bg-primary-color-dark shadow-lg rounded d-flex flex-column justify-content-between align-items-center">
                                    <div class="d-flex justify-content-center align-items-center h-100">
                                        <img src="../../assets/images/best_solution_icon_desktop.png" alt="Smart Consulting Features" class="img-fluid p-4 align-self-center">
                                    </div>
                                    <div class="white rounded-bottom py-2 primary-color w-100">
                                        <h4 class="font-weight-light h4-responsive text-center">La <span class="accent-color-dark font-weight-bold">Meilleure Solution</span> pour votre business</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="./services.php" class="btn bg-accent-color-dark text-white rounded-button shadow py-2 my-3 button-overlay">Commencez maintenant</a>

                </div>

            </div>
            <!--.DESKTOP CONTENT-->

            <!--TABLET CONTENT-->
            <div class="font-weight-bold text-white text-center d-none d-sm-none d-md-block d-lg-none w-100 h-100">
                <div class="d-flex flex-column justify-content-center align-items-center h-75">
                    <div class="">
                        <h1 class="h1-responsive text-uppercase py-4 primary-color-dark">smart consulting inc.</h1>
                    </div>
                    <div class="d-flex flex-column justify-content-start align-items-center">
                        <div class="container-fluid mt-3">
                            <div class="row mx-5">
                                <div class="col-md-5 animated zoomIn slow mx-auto d-flex">
                                    <div class="flex-fill bg-primary-color-dark shadow-lg rounded d-flex flex-column justify-content-between align-items-center">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <img src="../../assets/images/improvemen_icon_tablet.png" alt="Smart Consulting Features" class="img-fluid p-4 align-self-center">
                                        </div>
                                        <div class="white rounded-bottom py-2 primary-color w-100">
                                            <h4 class="font-weight-light h4-responsive text-center">Pratiques Informatiques et Processus <span class="accent-color-dark font-weight-bold">d'amélioration</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 animated zoomIn slow delay-1s mx-auto d-flex">
                                    <div class="flex-fill bg-primary-color-dark shadow-lg rounded d-flex flex-column justify-content-between align-items-center">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <img src="../../assets/images/statistic_icon_tablet.png" alt="Smart Consulting Features" class="img-fluid p-4 align-self-center">
                                        </div>
                                        <div class="white rounded-bottom py-2 primary-color">
                                            <h4 class="font-weight-light h4-responsive text-center">Votre business  <span class="accent-color-dark font-weight-bold">à un autre niveau</span></h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-5 animated zoomIn slow delay-2s mx-auto  d-flex py-4">
                                    <div class="flex-fill bg-primary-color-dark shadow-lg rounded d-flex flex-column justify-content-between align-items-center">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <img src="../../assets/images/best_solution_icon_tablet.png" alt="Smart Consulting Features" class="img-fluid p-4 align-self-center">
                                        </div>
                                        <div class="white rounded-bottom py-2 primary-color">
                                            <h4 class="font-weight-light h4-responsive text-center">La <span class="accent-color-dark font-weight-bold">meilleure Solution</span> pour votre business</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <a href="./services.php" class="btn bg-accent-color-dark text-white rounded-button shadow py-2 my-3 button-overlay">Commencez maintenant</a>
                    </div>
                </div>

            </div>
            <!--.TABLET CONTENT-->

            <!--MOBILE CONTENT-->
            <div class="font-weight-bold text-white text-center d-block d-sm-block d-md-none d-lg-none w-100 h-100">
                <div class="d-flex flex-column justify-content-center align-items-center h-75">
                    <div class="mt-5">
                        <h4 class="h4-responsive text-uppercase py-2 primary-color-dark mt-5">smart consulting inc.</h4>
                    </div>
                    <div class="d-flex flex-column justify-content-start align-items-center">
                        <div class="container-fluid">
                            <div class="row mx-5">
                                <div class="col-10 animated zoomIn slow mx-auto d-flex ">
                                    <div class="flex-fill bg-primary-color-dark shadow-lg rounded d-flex flex-column justify-content-between align-items-center">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <img src="../../assets/images/statistic_icon_mobile.png" alt="Smart Consulting Features" class="img-fluid p-4 align-self-center">
                                        </div>
                                        <div class="white rounded-bottom py-1 primary-color w-100">
                                            <h6 class="font-weight-light h6-responsive text-center">Votre business <span class="accent-color-dark font-weight-bold">à un autre niveau</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-5 mt-2 d-flex justify-content-center">
                                <div class="col-10 animated zoomIn slow delay-1s mx-auto d-flex ">
                                    <div class="flex-fill bg-primary-color-dark shadow-lg rounded d-flex flex-column justify-content-between align-items-center">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <img src="../../assets/images/improvemen_icon_mobile.png" alt="Smart Consulting Features" class="img-fluid p-4 align-self-center">
                                        </div>
                                        <div class="white rounded-bottom py-1 primary-color w-100">
                                            <h6 class="font-weight-light h6-responsive text-center">Pratiques Informatiques et Processus <span class="accent-color-dark font-weight-bold">d'amélioration</span></h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row mx-5 mt-2">
                                <div class="col-10 animated zoomIn slow delay-2s mx-auto d-flex ">
                                    <div class="flex-fill bg-primary-color-dark shadow-lg rounded d-flex flex-column justify-content-between align-items-center">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <img src="../../assets/images/best_solution_icon_mobile.png" alt="Smart Consulting Features" class="img-fluid p-4 align-self-center">
                                        </div>
                                        <div class="white rounded-bottom py-1 primary-color w-100">
                                            <h6 class="font-weight-light h6-responsive text-center">La <span class="accent-color-dark font-weight-bold">Meilleure Solution</span> Pour Votre Business</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="./services.php" class="btn btn-sm bg-accent-color-dark text-white rounded-button shadow my-3 button-overlay">Get started now</a>
                    </div>
                </div>

            </div>
        </div>

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
            <li><a href="./index.php" class="primary-color"><i class="fas fa-home primary-color"></i>Accuiel</a></li>
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
            <?php } else{ ?>
                
                <li>
                <a  href="../../../back-end/en/c_logout.php" class="primary-color"><i class="fas fa-sign-out-alt primary-color"></i>Profil</a>
                </li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a  href="../../../back-end/en/c_logout.php" class="primary-color"><i class="fas fa-sign-out-alt primary-color"></i>Se déconnecter</a></li>
            <?php } ?>
        
            <li><div class="divider"></div></li>
            <li><a href="https://emailmg.ipage.com/roundcube/" class="primary-color"><i class="fas fa-envelope primary-color"></i>Mail</a></li>

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
            <li><a href="https://emailmg.ipage.com/roundcube/" class="primary-color"><i class="fas fa-envelope primary-color"></i>Mail</a></li>
        </ul>
        <!--.SIDENAV MOBILE-->
    </div>
    <div>
        <div class="d-flex justify-content-center align-items-center gradient-primary-color-dark">

            <div class="text-white d-flex flex-column justify-content-center align-items-center">
                <h6 class="h6-responsive font-weight-light text-white align-self-center pt-1" >Ils nous ont fait confiance</h6>
                <a href="#trustpage" id="go-to-next-page"><div class="text-white align-self-center"><i class="fas fa-chevron-down"></i></div></a>
            </div>

        </div>
    </div>



</div>
<!-- .MAIN CONTENT-->

<!-- SECOND CONTENT-->
<div class="container-fluid bg-second-content p-0 " id="trustpage">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 py-5">
                <div class="text-center text-white">
                    <div class="d-none d-sm-none d-md-block d-lg-block">
                        <div class="d-flex justify-content-center align-items-center">
                            <p class="h1 font-weight-bold text-uppercase mr-2">Nous les avons aidés  </p>
                            <div class="d-flex flex-column">
                                <p class="text-uppercase font-weight-bold accent-color h1 ml-2"> à grandir</p>
                                <div class="sm-divider bg-accent-color mt-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                        <div class="d-flex flex-column justify-content-center align-items-center w-100">
                            <p class="h4 font-weight-bold text-uppercase mr-2">Nous les avons aidés </p>
                            <div class="d-flex flex-column">
                                <p class="text-uppercase font-weight-bold accent-color h4 ml-2"> à grandir</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- CARDS-->
    <div class="container-fluid">

        <!-- CARD DESKTOP -->
        <div class="d-none d-sm-none d-md-none d-lg-block">
            <div class="row p-4">
                <div class="col-lg-4 ">
                    <div class="card mt-5">
                        <div class="d-flex flex-column">
                            <div class="text-center avatar_profil mx-auto">
                                <img src="../../assets/images/profil_v1.png" style="width: 120px; height:120px;">
                                <!-- <i class="fas fa-user fa-2x"></i> -->
                            </div>
                            <div class="mx-auto mt-5 py-3">
                                <p class="h6 text-muted font-weight-bold mt-3">Jason Davidson</p>
                            </div>
                        </div>
                        <div class="card-body elegant-color white-text">

                            <p class="h6-responsive font-italic text-left text-muted p-0 m-0">“ J'ai rencontré <strong>SMART
                                    Consulting Inc</strong>. durant et pendant 
                                une période de test d'automatisation à San diego en juin 2017. Après Audit de mon département de test d'automatisation 
                                , ils m'ont conseillé d'utiliser SauceLab pour les vidéos de test. Les résultats attendues étaient très utiles
                                et mon aidé à éconnomiser beaucoup d'argent en utilisant une machine virtuel ce qui s'avère pratique actuellement
                                ”</p>


                            <h6 class="text-dark d-flex justify-content-end text-dark font-italic pr-2 my-4">From
                                <a href="#"><i class="fab fa-twitter text-muted ml-2"></i></a>
                            </h6>

                        </div>


                    </div>
                </div>
                <div class="col-lg-4 ">

                    <div class="card mt-5">

                        <div class="d-flex flex-column">
                            <div class="text-center avatar_profil mx-auto">
                                <!-- <img src="../assets/images/profil2.png" style="width: 120px; height:120px;"> -->
                                <img src="../../assets/images/profil_v3.png" style="width: 120px; height:120px;">
                            </div>
                            <div class="mx-auto mt-5 py-3">
                                <p class="h6 text-muted font-weight-bold mt-3">Lee Totale</p>
                            </div>
                        </div>
                        <div class="card-body elegant-color white-text">

                            <p class="h6-responsive font-italic text-left text-muted p-0 m-0">“ Refaire les compte de 
                            mon restaurant me faisait perdre du temps tous les jours car il fallait prendre en compte
                            chaque facture pour déterminer le profit issue des ventes. Après avoir fait une audit de mon restaurant, ils m'ont proposé un logiciel      
                            <strong>SMART Business Manager</strong>,
                            Par ce logiciel, je peux dorénavant m'occuper à d'autres tâche car ce logiciel m'aide à faire mes comptes et me montre aussi des rapports statistiques”</p>


                            <h6 class="text-dark d-flex justify-content-end text-dark font-italic pr-2 my-4">From
                                <a href="#"><i class="fab fa-twitter text-muted ml-2"></i></a>
                            </h6>

                        </div>


                    </div>


                </div>
                <div class="col-lg-4 ">

                    <div class="card mt-5">

                        <div class="d-flex flex-column">
                            <div class="text-center avatar_profil mx-auto">
                                <!-- <img src="../assets/images/profil3.png" style="width: 120px; height:120px;"> -->
                                <img src="../../assets/images/profil_v2.png" style="width: 120px; height:120px;">
                            </div>
                            <div class="mx-auto mt-5 py-3">
                                <p class="h6 text-muted font-weight-bold mt-3">Yogam Association</p>
                            </div>
                        </div>
                        <div class="card-body elegant-color white-text">

                            <p class="h6-responsive font-italic text-left text-muted p-0 m-0">“ Avec <strong>SMART
                                    Manager</strong>, les rencontres avec les membres de notre association prennen
                                    maintenant la moitié du temps habituel pour nos séances: 1h au lieu de 2h. Nous ne nous traquasserons plus
                                    à connaitre les nouvelles personnes, à savoir ce et celle qui ont fait une activité ou pour supprimer une information pertinante, ou encore
                                    beaucoup d'autres fonctions utiles pour notre organisation. Nous sommes vraiment satisfait de cette solution et nous remercions <strong>Smart Consulting</strong>
                                pour cela”</p>


                            <h6 class="text-dark d-flex justify-content-end text-dark font-italic pr-2 my-4">From
                                <a href="#"><i class="fab fa-twitter text-muted ml-2"></i></a>
                            </h6>

                        </div>


                    </div>


                </div>
                <div class="row pb-4 mx-auto mt-4">
                    <div class="col-4 mx-auto">
                        <a href="./services.php"
                           class="btn btn-large bg-accent-color-dark rounded-button waves-effect d-flex justify-content-center align-items-center">
                            <div class="text-white ">Commencez votre expérience maintenant</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- .CARD DESKTOP -->

        <!-- CARD MOBILE IPAD & TABLET -->
        <div class="d-none d-sm-none d-md-block d-lg-none">
            <div class="row p-4 mx-5 px-5">
                <div class="col-12 py-3">
                    <div class="card mt-5">

                        <div class="d-flex flex-column p-3">
                            <div class="text-center avatar_profil mx-auto">
                                <!-- <img src="../assets/images/profil1.png" style="width: 120px; height:120px;"> -->
                                <img src="../../assets/images/profil_v1.png" style="width: 120px; height:120px;">
                            </div>
                            <div class="d-flex justify-content-between align-items-start">
                                <p class="h4 text-muted font-weight-bold ml-4 align-self-center py-2">Jason Davidson</p>
                                <div class="mr-4 align-self-center">
                                    <p class="h5 text-dark d-flex justify-content-end text-dark font-italic pr-2 py-2">
                                        From
                                        <a href="#"><i class="fab fa-twitter text-muted ml-2"></i></a>
                                    </p>
                                </div>

                            </div>
                            <div class="card-body  white-text">

                                <p class="h4  font-weight-light text-left text-muted p-2">“J'ai rencontré <strong>SMART
                                    Consulting Inc</strong>. durant et pendant 
                                une période de test d'automatisation à San diego en juin 2017. Après Audit de mon département de test d'automatisation 
                                , ils m'ont conseillé d'utiliser SauceLab pour les vidéos de test. Les résultats attendues étaient très utiles
                                et mon aidé à éconnomiser beaucoup d'argent en utilisant une machine virtuel ce qui s'avère pratique actuellement”</p>

                            </div>

                        </div>


                    </div>
                </div>
                <div class="col-12 py-3">
                    <div class="card mt-5">

                        <div class="d-flex flex-column p-3">
                            <div class="text-center avatar_profil mx-auto">
                                <img src="../../assets/images/profil_v3.png" style="width: 120px; height:120px;">
                            </div>
                            <div class="d-flex justify-content-between align-items-start">
                                <p class="h4 text-muted font-weight-bold ml-4 align-self-center py-2">Lee Totale</p>
                                <div class="mr-4 align-self-center">
                                    <p class="h5 text-dark d-flex justify-content-end text-dark font-italic pr-2 py-2">
                                        From
                                        <a href="#"><i class="fab fa-twitter text-muted ml-2"></i></a>
                                    </p>
                                </div>

                            </div>
                            <div class="card-body  white-text">

                                <p class="h4  font-weight-light text-left text-muted p-2">“ Refaire les compte de 
                            mon restaurant me faisait perdre du temps tous les jours car il fallait prendre en compte
                            chaque facture pour déterminer le profit issue des ventes. Après avoir fait une audit de mon restaurant, ils m'ont proposé un logiciel      
                            <strong>SMART Business Manager</strong>,
                            Par ce logiciel, je peux dorénavant m'occuper à d'autres tâche car ce logiciel m'aide à faire mes comptes et me montre aussi des rapports statistiques”</p>

                            </div>

                        </div>


                    </div>
                </div>
                <div class="col-12 py-3">
                    <div class="card mt-5">

                        <div class="d-flex flex-column p-3">
                            <div class="text-center avatar_profil mx-auto">
                                <img src="../../assets/images/profil_v2.png" style="width: 120px; height:120px;">
                            </div>
                            <div class="d-flex justify-content-between align-items-start">
                                <p class="h4 text-muted font-weight-bold ml-4 align-self-center py-2">Yogam Association</p>
                                <div class="mr-4 align-self-center">
                                    <p class="h5 text-dark d-flex justify-content-end text-dark font-italic pr-2 py-2">
                                        From
                                        <a href="#"><i class="fab fa-twitter text-muted ml-2"></i></a>
                                    </p>
                                </div>

                            </div>
                            <div class="card-body  white-text">

                                <p class="h4  font-weight-light text-left text-muted p-2">“ Avec <strong>SMART
                                    Manager</strong>, les rencontres avec les membres de notre association prennen
                                    maintenant la moitié du temps habituel pour nos séances: 1h au lieu de 2h. Nous ne nous traquasserons plus
                                    à connaitre les nouvelles personnes, à savoir ce et celle qui ont fait une activité ou pour supprimer une information pertinante, ou encore
                                    beaucoup d'autres fonctions utiles pour notre organisation. Nous sommes vraiment satisfait de cette solution et nous remercions <strong>Smart Consulting</strong>
                                pour cela”</p>

                            </div>

                        </div>


                    </div>
                </div>
                <div class="row pb-4 mx-auto">
                    <div class="col-12 mx-auto">
                        <a href="./services.php"
                           class="btn btn-large bg-accent-color-dark rounded-button waves-effect d-flex justify-content-center align-items-center">
                            <div class="text-white ">Commencez votre expérience maintenant</div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- .CARD MOBILE IPAD & TABLET -->

        <!-- CARD MOBILE -->
        <div class="d-block d-sm-block d-md-none d-lg-none">
            <div class="row ">
                <div class="col-12 py-3">
                    <div class="card mt-3">

                        <div class="d-flex flex-column p-2">
                            <div class="text-center avatar_profil mx-auto">
                                <!-- <img src="../assets/images/profil1.png" style="width: 100px; height:100px;"> -->
                                <img src="../../assets/images/profil_v1.png" style="width: 120px; height:120px;">
                            </div>
                            <div class="d-flex justify-content-between align-items-start">
                                <p class="h6-responsive font-weight-bold text-muted ml-2 align-self-center py-2 comment-association-text-style">
                                    Jason Davidson</p>
                                <div class="mr-2 align-self-center">
                                    <p class="h6 text-dark d-flex justify-content-end text-dark font-italic pr-2 py-2 comment-association-text-style">
                                        From
                                        <a href="#"><i class="fab fa-twitter text-muted ml-2"></i></a>
                                    </p>
                                </div>

                            </div>
                            <div class="card-body p-0 white-text">

                                <p class="h6-responsive  font-weight-light text-left text-muted px-2">“ J'ai rencontré <strong>SMART
                                    Consulting Inc</strong>. durant et pendant 
                                une période de test d'automatisation à San diego en juin 2017. Après Audit de mon département de test d'automatisation 
                                , ils m'ont conseillé d'utiliser SauceLab pour les vidéos de test. Les résultats attendues étaient très utiles
                                et mon aidé à éconnomiser beaucoup d'argent en utilisant une machine virtuel ce qui s'avère pratique actuellement”</p>

                            </div>

                        </div>


                    </div>
                </div>
                <div class="col-12 py-3">
                    <div class="card mt-3">

                        <div class="d-flex flex-column p-2 ">
                            <div class="text-center avatar_profil mx-auto">
                                <!-- <img src="../assets/images/profil2.png" style="width: 100px; height:100px;"> -->
                                <img src="../../assets/images/profil_v3.png" style="width: 120px; height:120px;">
                            </div>
                            <div class="d-flex justify-content-between align-items-start">
                                <p class="h6-responsive font-weight-bold text-muted ml-2 align-self-center py-2 comment-association-text-style">
                                    Lee Totale</p>
                                <div class="mr-2 align-self-center">
                                    <p class="h6 text-dark d-flex justify-content-end text-dark font-italic pr-2 py-2 comment-association-text-style">
                                        From
                                        <a href="#"><i class="fab fa-twitter text-muted ml-2"></i></a>
                                    </p>
                                </div>

                            </div>
                            <div class="card-body p-0 white-text">

                                <p class="h6-responsive  font-weight-light text-left text-muted px-2">“ Refaire les compte de 
                            mon restaurant me faisait perdre du temps tous les jours car il fallait prendre en compte
                            chaque facture pour déterminer le profit issue des ventes. Après avoir fait une audit de mon restaurant, ils m'ont proposé un logiciel      
                            <strong>SMART Business Manager</strong>,
                            Par ce logiciel, je peux dorénavant m'occuper à d'autres tâche car ce logiciel m'aide à faire mes comptes et me montre aussi des rapports statistiques”</p>

                            </div>

                        </div>


                    </div>
                </div>
                <div class="col-12 py-3">
                    <div class="card mt-3">

                        <div class="d-flex flex-column p-2">
                            <div class="text-center avatar_profil mx-auto">
                                <!-- <img src="../assets/images/profil3.png" style="width: 100px; height:100px;"> -->
                                <img src="../../assets/images/profil_v2.png" style="width: 120px; height:120px;">
                            </div>
                            <div class="d-flex justify-content-between align-items-start">
                                <p class="h6-responsive font-weight-bold text-muted ml-2 align-self-center py-2 comment-association-text-style">
                                   Yogam Association</p>
                                <div class="mr-2 align-self-center">
                                    <p class="h6 text-dark d-flex justify-content-end text-dark font-italic pr-2 py-2 comment-association-text-style">
                                        From
                                        <a href="#"><i class="fab fa-twitter text-muted ml-2"></i></a>
                                    </p>
                                </div>

                            </div>
                            <div class="card-body p-0 white-text">

                                <p class="h6-responsive font-weight-light text-left text-muted px-2">“ Avec <strong>SMART
                                    Manager</strong>, les rencontres avec les membres de notre association prennen
                                    maintenant la moitié du temps habituel pour nos séances: 1h au lieu de 2h. Nous ne nous traquasserons plus
                                    à connaitre les nouvelles personnes, à savoir ce et celle qui ont fait une activité ou pour supprimer une information pertinante, ou encore
                                    beaucoup d'autres fonctions utiles pour notre organisation. Nous sommes vraiment satisfait de cette solution et nous remercions <strong>Smart Consulting</strong>
                                pour cela”</p>

                            </div>

                        </div>


                    </div>
                </div>
                <div class="row pb-4 mx-auto mt-4">
                    <div class="col-12">
                        <a href="./services.php"
                           class="btn btn-large bg-accent-color-dark rounded-button waves-effect d-flex justify-content-center align-items-center">
                            <div class="text-white ">Commencez votre expérience maintenant</div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- .CARD MOBILE -->

    </div>
    <!-- .CARDS-->


</div>
<div class="m-second-content-empty-height"></div>
<!-- .SECOND CONTENT-->


<div class="m-third-content-empty-height"></div>

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