<?php
/**
 * Created by PhpStorm.
 * User: SMART2
 * Date: 21/07/2020
 * Time: 15:43
 */
session_start();
$page = 'portfolio';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'inc/head.php' ?>
    <title>SMART Consulting - Contact</title>
</head>

<body>

<!--NAVBAR-->
<?php
include 'inc/header_search.php';
?>


<div class="container-fluid p-0">

    <div class="container-fluid">
        <div class="row my-4">
            <div class="col-6 mx-auto">
                <h4 class="h4-responsive text-center">Resultat sur la recherche <span class="font-weight-bold">Shoes</span></h4>
            </div>
        </div>
        <div class="divider w-25 mt-2 mb-5 mx-auto"></div>
        <div class="container">
            <div class="row mb-5">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card flex-fill">
                            
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="card-img-top align-self-center img-fluid"
                                    src="../../assets/images/p1.png"
                                    alt="Smart Consulting Audit Services">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card flex-fill">
                            
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="card-img-top align-self-center img-fluid"
                                    src="../../assets/images/p1.png"
                                    alt="Smart Consulting Audit Services">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card flex-fill">
                            
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="card-img-top align-self-center img-fluid"
                                    src="../../assets/images/p1.png"
                                    alt="Smart Consulting Audit Services">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card flex-fill">
                            
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="card-img-top align-self-center img-fluid"
                                    src="../../assets/images/p1.png"
                                    alt="Smart Consulting Audit Services">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card flex-fill">
                            
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="card-img-top align-self-center img-fluid"
                                    src="../../assets/images/p1.png"
                                    alt="Smart Consulting Audit Services">
                            </div>
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
<script>
    $("#customFile").change(function (e) {
        var fileName = e.target.files[0].name;
        $("#choose-file").text(fileName);
    });
</script>
</body>
</html>
