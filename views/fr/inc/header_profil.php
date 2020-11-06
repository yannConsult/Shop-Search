<?php
/**
 * Created by PhpStorm.
 * User: SMART 2
 * Date: 06/08/2020
 * Time: 18:46
 */

?>

<!--NAVBAR-->
<div class="gradient-primary-color-dark shadow-sm d-none d-sm-none d-md-none d-lg-block">
    <div class="d-none d-sm-none d-md-none d-lg-block py-3 pl-3">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-inline-flex justify-content-center align-items-center">
                <a class="navbar-brand mx-3" href="./index.php">
                    <img src="../../assets/images/smart.png" width="55" height="55" alt="Smart Consulting Logo"
                         loading="lazy">
                </a>
                <div class="d-inline-flex justify-content-start align-items-center mr-4">
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <h6 class="text-white h6-responsive font-weight-bold">Smart Consulting Inc <span
                                    class="accent-color"> .</span></h6>
                        <h6 class="text-white h6-responsive font-weight-light">Clients satisfaction is our priority</h6>
                    </div>
                </div>
            </div>
            <div class="d-inline-flex">
                <?php
                $nbre = $db->query('SELECT * FROM `customer_notifications` WHERE status=?', 1)->numRows();
                ?>
                <div class="dropdown">
                    <a
                            type="button"
                            id="dropdownMenuButton"
                            data-toggle="dropdown"
                            aria-expanded="false"
                            class="no-deco round-button-menu text-white
                        d-flex justify-content-center align-items-center shadow-sm icon-menu-color mr-4 ">
                        <i class="fas fa-bell fa-1x"> </i>
                        <?php if($nbre != 0){ ?>
                            <span class="badge rounded-pill badge-notifications bg-danger"><?php echo $nbre ?></span>
                        <?php } ?>
                        
                    </a>
                    <?php
                    $notifs = $db->query('SELECT * FROM `customer_notifications` WHERE status=?', 1)->fetchAll();
                    if ($notifs != null) {
                        ?>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <ul class="mr-4" >
                                <?php
                                foreach ($notifs as $notif) {
                                    ?>
                                    <li class="dropdown-item text-wrap"><?php echo $notif['notification'] ?></li>
                                    <div class="divider"></div>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        
                        <?php
                    } else { ?>
                        <ul class="dropdown-menu mr-3" aria-labelledby="dropdownMenuButton">
                            <li class="dropdown-item text-wrap">No Notification</li>
                        </ul>
                        <?php
                    } ?>
                </div>


                <?php if (isset($_SESSION["id"])) {
                    ?>
                    <a href="../../../back-end/en/c_logout.php" class=" mr-4 no-deco round-button-menu text-white opacity-40
                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                        <i class="fas fa-sign-out-alt fa-1x"> </i>
                    </a>
                    <?php
                }
                ?>
            </div>


        </div>

    </div>
</div>
<!--.NAVBAR-->

<!--NAVBAR MOBILE-->
<div class="gradient-primary-color-dark shadow-sm d-block d-sm-block d-md-block d-lg-none py-3">
    <div class="d-flex justify-content-between align-items-center ">
        <div>
            <a href="#" data-target="slide-out" class="sidenav-trigger d-none d-sm-none d-md-block">
                <div class="mx-3"><i class="fas fa-bars text-white fa-2x"></i></div>
            </a>
            <a href="#" data-target="slide-out-mobile" class="sidenav-trigger d-block d-sm-block d-md-none">
                <div class="mx-3"><i class="fas fa-bars text-white"></i></div>
            </a>
        </div>
        <div>
            <a href="#" type="button" class="no-deco round-button-menu text-white
                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color mr-4">
                <i class="fas fa-bell fa-1x"> </i>
                <span class="badge rounded-pill badge-notifications bg-danger">1</span>
            </a>
        </div>
    </div>

</div>
<!--.NAVBAR MOBILE-->

<!--SIDENAV MOBILE-->
<ul id="slide-out" class="sidenav d-none d-sm-none d-md-block">
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
    <li><a href="./product.php" class="primary-color"><i class="fas fa-gift primary-color"></i>Product</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="./services.php" class="primary-color"><i class="fab fa-servicestack primary-color"></i>Service</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <!-- <li><a href="#" class="primary-color"><i class="fas fa-dollar-sign primary-color"></i>Princing</a></li> -->
    <li><a href="./team.php" class="primary-color"><i class="fas fa-users primary-color"></i>Our team</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="#" class="primary-color"><i class="fas fa-file-contract primary-color"></i>Porfolio</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="../fr/index.php" class="primary-color"><i class="fas fa-file-contract primary-color"></i>Version
            Française</a></li>
    <li><div class="divider"></div></li>
        <?php if(!isset($_SESSION["id"])){ ?>
        
            <li><a href="./login.php" class="primary-color"><i class="fas fa-sign-in-alt primary-color"></i>Sign in</a></li>
        <?php }else{ ?>
            
            <li>
               <a  href="../../../back-end/en/c_logout.php" class="primary-color"><i class="fas fa-sign-out-alt primary-color"></i>Profil</a>
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a  href="../../../back-end/en/c_logout.php" class="primary-color"><i class="fas fa-sign-out-alt primary-color"></i>Sign out</a></li>
        <?php } ?>
    
        <li><div class="divider"></div></li>
    <li><a target="_blank" href="https://emailmg.ipage.com/roundcube/" class="primary-color"><i
                    class="fas fa-envelope primary-color"></i>Mail</a></li>
</ul>

<ul id="slide-out-mobile" class="sidenav d-block d-sm-block d-md-none">
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
    <li><a href="./product.php" class="primary-color"><i class="fas fa-gift primary-color"></i>Product</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="./product.php" class="primary-color"><i class="fab fa-servicestack primary-color"></i>Service</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <!-- <li><a href="#" class="primary-color"><i class="fas fa-dollar-sign primary-color"></i>Princing</a></li> -->
    <li><a href="./team.php" class="primary-color"><i class="fas fa-users primary-color"></i>Our team</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="#" class="primary-color"><i class="fas fa-file-contract primary-color"></i>Porfolio</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="../fr/index.php" class="primary-color"><i class="fas fa-file-contract primary-color"></i>Version
            Française</a></li>

    <li><div class="divider"></div></li>
        <?php if(!isset($_SESSION["id"])){ ?>
        
            <li><a href="./login.php" class="primary-color"><i class="fas fa-sign-in-alt primary-color"></i>Sign in</a></li>
        <?php }else{ ?>
            
            <li>
               <a  href="../../../back-end/en/c_logout.php" class="primary-color"><i class="fas fa-sign-out-alt primary-color"></i>Profil</a>
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a  href="../../../back-end/en/c_logout.php" class="primary-color"><i class="fas fa-sign-out-alt primary-color"></i>Sign out</a></li>
        <?php } ?>
    
        <li><div class="divider"></div></li>
    <li><a target="_blank" href="https://emailmg.ipage.com/roundcube/" class="primary-color"><i
                    class="fas fa-envelope primary-color"></i>Mail</a></li>
</ul>

<!--.SIDENAV MOBILE-->