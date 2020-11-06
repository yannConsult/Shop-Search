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
include 'inc/header.php';
?>


<div class="container-fluid p-0">

    <div class="container-fluid">
         <div class="row p-5">
            <!-- <div class="col-md-8 col-sm-8 col-xs-12 mx-auto ">
                <div class="create_account_area">
                    <h2 class="caa_heading">Sign In</h2>
                    <div class="caa_form_area">
                        <div class="caa_form_group">
                            <form action="back-end/c_login.php" method="post">
                                <div class="login_email">
                                    <label>Username </label>
                                    <div class="input-area"><input type="text" name="username" id="username" required/>
                                    </div>
                                </div>
                                <div class="login_password">
                                    <label>Password</label>
                                    <div class="input-area"><input type="password" name="password" id="password"
                                                                   required/></div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="forgot_password">
                                            <a href="./register.php" rel="">Not a member? Create an account</a>
                                        </p>
                                    </div>
                                    <div class="col-6 text-right">
                                        <p class="forgot_password">
                                            <a href="./forget_password.php" rel="">I Forget my password</a>
                                        </p>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="submit" class="btn btn-default acc_btn">
                                    <span> <i class="fa fa-lock btn_icon"></i> Sign in </span>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div> -->
            <div class="col-12 col-sm-8 col-md-8 col-lg-6 mx-auto mb-4 py-5">
                <div class="card mx-auto py-5">
                    <div class="py-lg-4 py-3 text-center">
                        <h2 class="h2-responsive dark-text d-none d-sm-block d-md-block d-lg-block">SUBMIT FORM</h2>
                        <h3 class="h3-responsive dark-text d-block d-sm-none d-md-none d-lg-none">SUBMIT FORM</h3>
                        <div class="divider border mt-4"></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-10 mx-auto px-lg-5">
                            <form action="back-end/c_login.php" method="POST" class="py-md-2 py-lg-2 py-2">
                                <div class="form-outline">
                                <input type="email" id="forEmail" name="forEmail" class="form-control input-value"
                                       required/>
                                <label class="form-label" for="forEmail"><i
                                            class="fas fa-envelope-open-text mr-2 color-primary-dark"></i>Email <span
                                            class="text-danger">*</span></label>
                            </div>
                                <!-- <div class="form-outline mb-lg-5 mb-md-3 mt-4">
                                <label class="form-label" for="password"><i
                                                class="fas fa-lock mr-2 color-primary-dark"></i>Password</label>
                                    <input type="password" id="password" name="password" class="form-control"/>
                                    
                                </div> -->
                                <div class="d-none d-sm-block d-md-block d-lg-block text-center mt-4">
                                    <div class="d-flex justify-content-center align-items-center mx-auto">
                                        <button type="submit" name="submit" id="submit" value="submit"
                                                class="btn text-white px-4 rounded-button bg-primary-color w-75 d-none d-sm-block d-md-block d-lg-none">
                                            Submit <i class="fas fa-paper-plane"></i>
                                        </button>
                                        <button type="submit" name="submit" id="submit" value="submit"
                                                class="btn btn-lg text-white px-4 rounded-button bg-primary-color w-50 d-none d-sm-none d-md-none d-lg-block">
                                            Submit <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="d-block d-sm-none d-md-none d-lg-none">
                                    <div class="mt-3 d-flex justify-content-center align-items-center ">
                                        <button type="submit" name="submit" id="submit" value="submit"
                                                class="btn btn-sm text-white px-5 rounded-button bg-primary-color">
                                            Submit <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- <div class="container">
                                <div class="row my-2 ">
                                    <div class="col-12 text-center">
                                        <a href="./register.php" class="h6 accent-color-dark hightlight forgot_password">Not a member? Create
                                                 account</a>
                                    </div>
                                </div>
                                <div class = "row my-2">
                                    <div class="col-12 mb-3 text-center">
                                        <a href="./forget_password.php" class="h6 underliner accent-color-dark hightlight forgot_password">Forget password</a></p>
                                    </div>
                                </div>
                            </div> -->

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
