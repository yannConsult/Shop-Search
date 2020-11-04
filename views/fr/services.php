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


<div class="container-fluid">

    <!--CARD SERVICES-->
    <div class="container mt-5 p-3">
        <div class="row py-3">
            <div class="col-md-4 d-flex">
                <!--CARD-->
                <div class="card flex-fill">
                    <!-- Card image -->
                    <div class="d-flex justify-content-center align-items-center p-4">
                        <img class="card-img-top align-self-center img-fluid p-4" style="width: 150px; height: 150px;"
                             src="../../assets/images/ic_audit.png"
                             alt="Smart Consulting Audit Services">

                    </div>

                    <!-- Card content -->
                    <div class="card-body bg-primary-color-opacity10 p-4 d-flex flex-column justify-content-between">
                        <div class="opacity-100">
                            <!-- Title -->
                            <h5 class=" text-uppercase opacity-100 mt-3">IT Audit</h5>
                            <!-- Text -->
                            <p class="card-text mt-4">Ceci est le meilleur service si vous voulez connaitre ce qui ne vas pas et comment améliorer les services de votre entreprises</p>

                        </div>
                        <!-- Button -->
                        <div class="d-flex justify-content-center align-items-end mt-5">
                            <!-- <div class="primary-color font-weight-light">
                                <p class="h5">50$.99 USD</p>
                            </div> -->
                            <a type="button" href="./contact.php"
                               class="btn btn-sm bg-accent-color-dark d-flex justify-conent-center align-items-center rounded-button">
                                <div class=" align-self-center d-inline-flex justify-content-center align-items-center mx-2">
                                    <div class="align-self-center py-auto text-white mr-2">
                                        Faire une demande
                                    </div>

                                    <i class="fas fa-envelope text-white opacity-60 align-self-center ml-2"></i>
                                </div>
                            </a>
                        </div>


                    </div>


                </div>
                <!--.CARD-->
            </div>
            <div class="col-md-4">
                <!--CARD-->
                <div class="card flex-fill">
                    <!-- Card image -->
                    <div class="d-flex justify-content-center align-items-center p-4">
                        <img class="card-img-top align-self-center img-fluid p-4" style="width: 150px; height: 150px;"
                             src="../../assets/images/ic_process.png"
                             alt="Smart Consulting Audit Services">

                    </div>

                    <!-- Card content -->
                    <div class="card-body bg-primary-color-opacity10 p-4 d-flex flex-column justify-content-between">
                        <div class="opacity-100">
                            <!-- Title -->
                            <h5 class=" text-uppercase opacity-100 mt-3">IT PROCESS AND IMPROVEMENT</h5>
                            <!-- Text -->
                            <p class="card-text mt-4">Maintenant que vous savez quoi améliorer dans votre département technologique pour générer plus de profits
                                departement in order to generate more values, nous mettons notre équipe d'expert à votre disposition pour le réaliser pour vous.</p>
                        </div>
                        <!-- Button -->
                        <div class="d-flex justify-content-center align-items-end mt-5">
                            <!-- <div class="primary-color font-weight-light">
                                <p class="h5">50$.99 USD</p>
                            </div> -->
                            <a type="button" href="./contact.php"
                               class="btn btn-sm bg-accent-color-dark d-flex justify-conent-center align-items-center rounded-button">
                                <div class=" align-self-center d-inline-flex justify-content-center align-items-center mx-2">
                                    <div class="align-self-center py-auto text-white mr-2">
                                        Faire une demande
                                    </div>

                                    <i class="fas fa-envelope text-white opacity-60 align-self-center ml-2"></i>
                                </div>
                            </a>
                        </div>


                    </div>


                </div>
                <!--.CARD-->
            </div>
            <div class="col-md-4 d-flex">
                <!--CARD-->
                <div class="card flex-fill">
                    <!-- Card image -->
                    <div class="d-flex justify-content-center align-items-center p-4">
                        <img class="card-img-top align-self-center img-fluid p-4" style="width: 150px; height: 150px;"
                             src="../../assets/images/ic_dev_ops.png"
                             alt="Smart Consulting Audit Services">

                    </div>

                    <!-- Card content -->
                    <div class="card-body bg-primary-color-opacity10 p-4 d-flex flex-column justify-content-between">
                        <div class="opacity-100">
                            <!-- Title -->
                            <h5 class=" text-uppercase opacity-100 mt-3">Dev-QA-Ops Consulting</h5>
                            <!-- Text -->
                            <p class="card-text mt-4">Vous avez besoin d'un développeur, d'un assistant en 
                            informatique/automatisation or d'un consultant en informatique bureautique ? Nous sommes en mesure de vous fournir notre équipe d'expert.</p>

                        </div>
                        <!-- Button -->
                        <div class="d-flex justify-content-center align-items-end mt-5">
                            <!-- <div class="primary-color font-weight-light">
                                <p class="h5">50$.99 USD</p>
                            </div> -->
                            <a type="button" href="./contact.php"
                               class="btn btn-sm bg-accent-color-dark d-flex justify-conent-center align-items-center rounded-button">
                                <div class=" align-self-center d-inline-flex justify-content-center align-items-center mx-2">
                                    <div class="align-self-center py-auto text-white mr-2">
                                        Faire une demande
                                    </div>

                                    <i class="fas fa-envelope text-white opacity-60 align-self-center ml-2"></i>
                                </div>
                            </a>
                        </div>


                    </div>


                </div>
                <!--.CARD-->
            </div>

        </div>
        <div class="row py-3">
            <div class="col-md-4 d-flex">
                <!--CARD-->
                <div class="card flex-fill">
                    <!-- Card image -->
                    <div class="d-flex justify-content-center align-items-center p-4">
                        <img class="card-img-top align-self-center img-fluid p-4" style="width: 150px; height: 150px;"
                             src="../../assets/images/ic_training.png"
                             alt="Smart Consulting Audit Services">

                    </div>

                    <!-- Card content -->
                    <div class="card-body bg-primary-color-opacity10 p-2 d-flex flex-column justify-content-between">
                        <div class="opacity-100">
                            <!-- Title -->
                            <h5 class=" text-uppercase opacity-100 py-3">Formation et Assistance</h5>
                            <!-- Text -->
                            <p class="card-text py-2">Votre équipe à besoin d'une formation ou d'une assistance sur comment maintenir un système ou comment utiliser un logiciel? 
                                ? Nos experts sont là pour ça²</p>
                        </div>
                        <!-- Button -->
                        <div class="d-flex justify-content-center align-items-end my-4 mx-2">
                            <!-- <div class="primary-color font-weight-light">
                                <p class="h5">50$.99 USD</p>
                            </div> -->
                            <a type="button" href="./contact.php"
                               class="btn btn-sm bg-accent-color-dark d-flex justify-conent-center align-items-center rounded-button">
                                <div class=" align-self-center d-inline-flex justify-content-center align-items-center mx-2">
                                    <div class="align-self-center py-auto text-white mr-2">
                                        Faire une demande
                                    </div>

                                    <i class="fas fa-envelope text-white opacity-60 align-self-center ml-2"></i>
                                </div>
                            </a>
                        </div>
                    </div>


                </div>
                <!--.CARD-->
            </div>
            <div class="col-md-4 d-flex">
                <!--CARD-->
                <div class="card flex-fill">
                    <!-- Card image -->
                    <div class="d-flex justify-content-center align-items-center p-4">
                        <img class="card-img-top align-self-center img-fluid p-4" style="width: 150px; height: 150px;"
                             src="../../assets/images/ic_soft_realization.png"
                             alt="Smart Consulting Audit Services">

                    </div>

                    <!-- Card content -->
                    <div class="card-body bg-primary-color-opacity10 p-2 d-flex flex-column justify-content-between">
                        <div class="opacity-100">
                            <!-- Title -->
                            <h5 class=" text-uppercase opacity-100 py-3">Réalisation de logiciels et de site web</h5>
                            <!-- Text -->
                            <p class="card-text py-2">Vous avez une bonne idée et vous voulez la transformée en réalité? nous pouvons le faire en une période de temps très court</p>
                        </div>
                        <!-- Button -->
                        <div class="d-flex justify-content-center align-items-end my-4 mx-2">
                            <!-- <div class="primary-color font-weight-light">
                                <p class="h5">50$.99 USD</p>
                            </div> -->
                            <a type="button" href="./contact.php"
                               class="btn btn-sm bg-accent-color-dark d-flex justify-conent-center align-items-center rounded-button">
                                <div class=" align-self-center d-inline-flex justify-content-center align-items-center mx-2">
                                    <div class="align-self-center py-auto text-white mr-2">
                                        Faire une demande
                                    </div>

                                    <i class="fas fa-envelope text-white opacity-60 align-self-center ml-2"></i>
                                </div>
                            </a>
                        </div>


                    </div>


                </div>
                <!--.CARD-->
            </div>
            <div class="col-md-4 d-flex">
                <!--CARD-->
                <div class="card flex-fill">
                    <!-- Card image -->
                    <div class="d-flex justify-content-center align-items-center p-4">
                        <img class="card-img-top align-self-center img-fluid p-4" style="width: 150px; height: 150px;"
                             src="../../assets/images/ic_soft_sell.png"
                             alt="Smart Consulting Audit Services">

                    </div>

                    <!-- Card content -->
                    <div class="card-body bg-primary-color-opacity10 p-2 d-flex flex-column justify-content-between">
                        <div class="opacity-100">
                            <!-- Title -->
                            <h5 class=" text-uppercase opacity-100 py-3">Commercialisation de logiciel</h5>
                            <!-- Text -->
                            <p class="card-text py-2">Nous développons et commercialisons tout type de solution informatique pour chaque domainer d'opération d'une entreprise.
                            Consultez nos produits pour plus d'informations.</p>
                        </div>
                        <!-- Button -->
                        <div class="d-flex justify-content-center align-items-end my-4 mx-2">
                            <!-- <div class="primary-color font-weight-light">
                                <p class="h5">50$.99 USD</p>
                            </div> -->
                            <a type="button" href="./contact.php"
                               class="btn btn-sm bg-accent-color-dark d-flex justify-conent-center align-items-center rounded-button">
                                <div class=" align-self-center d-inline-flex justify-content-center align-items-center mx-2">
                                    <div class="align-self-center py-auto text-white mr-2">
                                        Faire une demande
                                    </div>

                                    <i class="fas fa-envelope text-white opacity-60 align-self-center ml-2"></i>
                                </div>
                            </a>
                        </div>


                    </div>


                </div>
                <!--.CARD-->
            </div>

        </div>
    </div>
    <!--.CARD SERVICES-->
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