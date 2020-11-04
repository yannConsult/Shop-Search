<?php
/**
 * Created by PhpStorm.
 * User: SMART 2
 * Date: 07/08/2020
 * Time: 12:20
 */
session_start();
$page = 'team';
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'inc/head.php' ?>

    <title>SMART Consulting - Notre équipe</title>
</head>
<body>

<!--NAVBAR-->
<?php
include 'inc/header.php';
?>

<div class="container-fluid">
    <!--CARD TEAM-->
    <div class="container p-3 mt-5">
        <!-- <div class="row py-3">
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card flex-fill">
                    <div class="container-fliuid bg-wave-deco rounded-top p-0">
                        <div class="d-flex flex-column justify-content-between p-3">
                            <div class="d-flex justify-content-center">
                                <img src="../../assets/images/founder_profil.png" style="width: 170px; height: 170px;"
                                     alt="Smart Consulting Team" class="img-flui">
                            </div>
                            <div class="d-flex justify-content-start">
                                <h3 class="text-capitalize text-white font-weight-bold">Yves Lionel K. T.</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card-body bg-primary-color-opacity10 py-4">
                        <div class="opacity-100">
                            <h4 class="card-title text-uppercase opacity-100 py-3">Fondateur & CEO</h4>
                            <p class="card-text py-2">M. Ing. in software engineering and owning lot of
                                certifications in various skills, Lionel has being operating in various
                                companies around the 4 continents before he quit and focus on rising up
                                SMART Consulting Inc.</p>

                        </div>
                    </div>
                    <div class="gradient-primary-color-dark d-flex justify-content-between align-items-end t-4 py-2 rounded-bottom">
                        <div class="d-flex justify-content-start align-items-center">
                            <p class="h6 font-italic text-white opacity-60 ml-3">Follow me on</p>
                        </div>
                        <div class="d-inline-flex justify-content-start align-items-end mr-2 p-1">
                            <ul class="list-unstyled align-self-center m-0">
                                <li class="list-inline-item mr">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                     d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                     d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                     d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                     d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex">
                <div class="card flex-fill">
                    <div class="container-fliuid bg-wave-deco rounded-top p-0">
                        <div class="d-flex flex-column justify-content-between p-3">
                            <div class="d-flex justify-content-center">
                                <img src="../../assets/images/software_manager_profil.png"
                                     style="width: 170px; height: 170px;" alt="Smart Consulting Team" class="img-flui">
                            </div>
                            <div class="d-flex justify-content-start">
                                <h3 class="text-capitalize text-white font-weight-bold">Vishal Dhaduk</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card-body bg-primary-color-opacity10 py-4">
                        <div class="opacity-100">

                            <h4 class="card-title text-uppercase opacity-100 py-3">Software Dev. Manager</h4>

                            <p class="card-text py-2">Ing. in software engineering and owning various IT
                                certifications, he has took lot of bankrupt IT companies and rise them up
                                in few years due to his amazing experiences and background in IT domain.</p>
                        </div>
                    </div>
                    <div class="gradient-primary-color-dark d-flex justify-content-between align-items-end t-4 py-2 rounded-bottom">
                        <div class="d-flex justify-content-start align-items-center">
                            <p class="h6 font-italic text-white opacity-60 ml-3">Follow me on</p>
                        </div>
                        <div class="d-inline-flex justify-content-start align-items-end mr-2 p-1">
                            <ul class="list-unstyled align-self-center m-0">
                                <li class="list-inline-item mr">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>


            <div class="col-md-6 col-lg-4 d-flex">

                <div class="card flex-fill">
                    <div class="container-fliuid bg-wave-deco rounded-top p-0">
                        <div class="d-flex flex-column justify-content-between p-3">
                            <div class="d-flex justify-content-center">
                                <img src="../../assets/images/manager_profil.png" style="width: 170px; height: 170px;"
                                     alt="Smart Consulting Team" class="img-flui">
                            </div>
                            <div class="d-flex justify-content-start">
                                <h3 class="text-capitalize text-white font-weight-bold">Elizabeth Mai</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card-body bg-primary-color-opacity10 py-4">
                        <div class="opacity-100">
                
                            <h4 class="card-title text-uppercase opacity-100 py-3">Marketing and Com. Manager</h4>
                        
                            <p class="card-text py-2">Digital Marketing and international relationship
                                specialist, Elizabeth has being traveling around over 35 countries in
                                the globe for international cooperation and marketing purpose.
                                She is able to speak over 5 languages herself.</p>


                        </div>
                    </div>
                    <div class="gradient-primary-color-dark d-flex justify-content-between align-items-end t-4 py-2 rounded-bottom">
                        <div class="d-flex justify-content-start align-items-center">
                            <p class="h6 font-italic text-white opacity-60 ml-3">Follow me on</p>
                        </div>
                        <div class="d-inline-flex justify-content-start align-items-end mr-2 p-1">
                            <ul class="list-unstyled align-self-center m-0">
                                <li class="list-inline-item mr">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>


        </div> -->
           <div class="row pt-5">
            <div class="col-12 col-sm-12 col-md-6">
                <img src="../../assets/images/about_us.png" alt="about us pic" class="img-fluid">
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-12">
                        <h2 class="accent-color-dark text-uppercase">A propos de l'entreprise</h2>
                    </div>
                    <div class="col-12">
                        <p class="primary-color mt-3">SMART Consulting est un IT canadien
                            société de conseil. Fournir divers services de technologies de l'information
                            et produits de solutions logicielles. SMART Consulting s'est construit depuis 2009 jusqu'à aujourd'hui pour se sentir prêt que jamais et a encore beaucoup de surprises à venir pour améliorer la société et les organisations dans le domaine informatique.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="accent-color-dark text-uppercase">NOTRE VISION</h2>
                    </div>
                    <div class="col-12">
                        <p class="primary-color mt-3">Premier marché des services informatiques dans les prochaines années
                            sont nos principaux objectifs. Nous continuons à nous mettre à jour, à faire des recherches et à contribuer
                            sur les pratiques informatiques et l'amélioration continue des processus. Nous prévoyons de couvrir
                            dans le monde entier avec nos produits logiciels et avec nos expertises à travers nos
                            spécialistes. Nous continuerons à vous fournir les meilleurs services et clients
                            les satisfactions resteront nos valeurs.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="accent-color-dark text-uppercase">L'EQUIPE</h2>
                    </div>
                    <div class="col-12">
                        <p class="primary-color mt-3">De plus en plus grande, notre équipe compose avec
                            spécialistes en arrière-plan éduqués et impressionnants dans divers domaines tels que les logiciels
                            ingénierie, marketing numérique, droit, comptabilité et bien d'autres.</p>
                    </div>
                </div>
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