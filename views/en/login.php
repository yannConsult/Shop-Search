<?php
/**
 * Created by PhpStorm.
 * User: SMART 2
 * Date: 07/08/2020
 * Time: 09:51
 */
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'inc/head.php' ?>

    <title>SMART Consulting - Login</title>
</head>
<body>

<!--NAVBAR-->
<?php
include 'inc/header_small.php';
include('message.php');
?>

<div class="container-fluid  my-3">
    <div class="row p-4">
        <div class="d-md-12 col-md-6 text-center p-md-5 p-lg-5 text-left">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="h1-responsive color-primary-dark mb-5 text-uppercase">IDENTIFY YOU FIRST</h1>
                <div class="container my-4 d-none d-sm-none d-md-block d-lg-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img src="../../assets/images/login_img.png" alt="Smart Consulting Login" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-12 col-md-6 py-md-5 py-lg-5">
            <div class="card w-75 mx-auto">
                <div class="py-3 gradient-primary-color-dark text-center">
                    <h3 class="h3-responsive text-white">SIGN IN</h3>
                </div>
                <div class="row">
                    <div class="col-12 p-lg-5 p-md-4">
                        <form action="../../../back-end/en/c_login.php" method="POST" class="py-md-4 py-lg-4 p-4">
                            <div class="form-outline mb-lg-5 mb-md-3">
                                <input type="email" id="mail" name="mail" class="form-control" required/>
                                <label class="form-label" for="mail"><i
                                            class="fas fa-envelope-open mr-2 color-primary-dark"></i>E-mail</label>
                            </div>
                            <!--<div class="form-outline mb-lg-5 mb-md-3 mt-4">
                                <input type="password" id="password" name="password" class="form-control" required/>
                                <label class="form-label" for="password"><i
                                            class="fas fa-lock mr-2 color-primary-dark"></i>Password</label>
                            </div>-->
                            <div class="d-none d-sm-none d-md-block d-lg-block text-center mt-4">
                                <div class="d-flex justify-content-center align-items-center mx-auto">
                                    <button type="submit" name="submit" id="submit" value="submit"
                                            class="btn text-white px-4 rounded-button bg-accent-color-dark w-75 d-none d-sm-none d-md-block d-lg-none">
                                        Sign In
                                    </button>
                                    <button type="submit" name="submit" id="submit" value="submit"
                                            class="btn text-white px-4 rounded-button bg-accent-color-dark w-50 d-none d-sm-none d-md-none d-lg-block">
                                        Sign In
                                    </button>
                                </div>
                            </div>
                            <div class="d-block d-sm-block d-md-none d-lg-none">
                                <div class="mt-3 d-flex justify-content-center align-items-center ">
                                    <button type="submit" name="submit" id="submit" value="submit"
                                            class="btn btn-sm text-white px-5 rounded-button bg-accent-color-dark">
                                        Sign In
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="container">
                            <div class="row my-3">
                                <div class="col-12 text-center">
                                    <p class="h6 font-weight-light">Not yet a client ? <a href="./contact.php"
                                                                                          class="underliner accent-color-dark">Subscribe to our products or services</a></p>
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
<?php include 'inc/footer.php' ?>

<!-- JS SCRIPT  -->
<?php include 'inc/foot.php' ?>

</body>
</html>
