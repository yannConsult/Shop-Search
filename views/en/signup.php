<?php
/**
 * Created by PhpStorm.
 * User: SMART 2
 * Date: 07/08/2020
 * Time: 12:20
 */
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'inc/head.php' ?>

    <title>SMART Consulting - Signup</title>
</head>
<body>

<!--NAVBAR-->
<?php
include 'inc/header_small.php' ;
?>

<div class="container-fluid  my-3">
    <div class="row p-4">
        <div class="d-md-12 col-md-6 text-center p-md-5 p-lg-5 text-left">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="h1-responsive color-primary-dark mb-5 text-uppercase">Join our community</h1>
                <div class="container my-4 d-none d-sm-none d-md-block d-lg-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img src="../../assets/images/signup_img.png" alt="Smart Consulting Login" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-12 col-md-6 py-md-5 py-lg-5">
            <div class="card w-75 mx-auto">
                <div class="py-3 gradient-primary-color-dark text-center">
                    <h3 class="h3-responsive text-white">SIGN UP</h3>
                </div>
                <div class="row">
                    <div class="col-12 p-lg-5 p-md-4">
                        <div class="p-3 p-md-0">
                            <form action="#" method="POST" class="py-md-4 py-lg-4 ">
                                <div class="row">
                                    <div class="col-md-6 my-2 my-md-0">
                                        <div class="form-outline mb-lg-5 mb-md-3">
                                            <input type="text" id="name" class="form-control"/>
                                            <label class="form-label" for="name"><i
                                                        class="fas fa-user mr-2 color-primary-dark"></i>Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-2 my-md-0">
                                        <div class="form-outline mb-lg-5 mb-md-3">
                                            <input type="tel" id="tel" class="form-control"/>
                                            <label class="form-label" for="tel"><i
                                                        class="fas fa-mobile mr-2 color-primary-dark"></i>Phone
                                                Number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 my-2 my-md-0">
                                        <div class="form-outline mb-lg-5 mb-md-3">
                                            <input type="email" id="email" class="form-control"/>
                                            <label class="form-label" for="email"><i
                                                        class="fas fa-envelope-open-text mr-2 color-primary-dark"></i>Adresse</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-2 my-md-0">
                                        <div class="form-outline mb-lg-5 mb-md-3">
                                            <input type="text" id="adress" class="form-control"/>
                                            <label class="form-label" for="adress"><i
                                                        class="fas fa-address-card mr-2 color-primary-dark"></i></i>
                                                Email</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 my-2 my-md-0">
                                    <div class="form-outline mb-lg-5 mb-md-3">
                                            <input type="text" id="compagnie" class="form-control"/>
                                            <label class="form-label" for="compagnie"><i
                                                        class="fas fa-building mr-2 color-primary-dark"></i></i>
                                                Compagnie</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-2 my-md-0">
                                        <div class="form-outline mb-lg-5 mb-md-3">
                                            <input type="text" id="username" class="form-control"/>
                                            <label class="form-label" for="username"><i
                                                        class="fas fa-key mr-2 color-primary-dark"></i></i>
                                                Username</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 my-2 my-md-0">
                                        <div class="form-outline mb-lg-5 mb-md-3">
                                            <input type="password" id="password" class="form-control"/>
                                            <label class="form-label" for="password"><i
                                                        class="fas fa-lock mr-2 color-primary-dark"></i>Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-2 my-md-0">
                                        <div class="form-outline mb-lg-5 mb-md-3">
                                            <input type="password" id="confirm_password" class="form-control"/>
                                            <label class="form-label" for="confirm_password"><i
                                                        class="fas fa-lock mr-2 color-primary-dark"></i>Confirm Password</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="d-none d-sm-none d-md-block d-lg-block text-center mt-4">
                                    <div class="d-flex justify-content-center align-items-center mx-auto">
                                        <button type="submit"
                                                class="btn text-white px-4 rounded-button bg-accent-color-dark w-75">
                                            Create an account
                                        </button>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none d-lg-none">
                                    <div class="mt-3 d-flex justify-content-center align-items-center ">
                                        <button type="submit"
                                                class="btn btn-sm text-white px-5 rounded-button bg-accent-color-dark">
                                            Create account
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="container">
                                <div class="row my-3">
                                    <div class="col-12 text-center">
                                        <p class="h6 font-weight-light">You have an account ? <a href="./login.php"
                                                                                                 class="underliner accent-color-dark">Sign
                                                In</a></p>
                                    </div>
                                </div>
                            </div>
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

</body>
</html>
