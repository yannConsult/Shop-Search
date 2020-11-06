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
<div class="sc-navbar shadow-sm sticky-top bg-footer">
    <div class="d-flex justify-content-start align-items-center">
        <div class="d-inline-flex justify-content-center align-items-center">
            <a class="navbar-brand mx-3" href="./home.php">
                <img src="../../assets/images/smart.png" width="55" height="55" alt="Smart Consulting Logo"
                     loading="lazy">
            </a>
            <div class="d-inline-flex justify-content-start align-items-center">
                <div class="d-flex flex-column justify-content-center align-items-start">
                    <h6 class="text-white h6-responsive font-weight-bold">SMART Shop</h6>
                    <h6 class="text-white h6-responsive font-weight-light">Sell everything online</h6>
                </div>
            </div>
        </div>

        
        <nav class="navbar navbar-expand-lg d-none d-sm-none d-md-block d-lg-block w-75">
           <form action="" method="POST" class="text-center mx-auto ">
                <div class="input-group md-form form-sm form-2 pl-0 mx-auto  py-2 bg-footer">
                    <div class="d-inline-flex justify-content-between align-items-center border rounded-button w-75 mx-auto">
                        <div class="w-100">
                            <input class="form-control search-result-input my-0 py-3 bg-footer py-4 mx-4 border border-0 text-white" type="text"
                            placeholder="Enter the shop name or category" aria-label="Search">
                        </div>
                        <div>
                            <a type="submit" class="p-3 fas fa-search border border-0 mr-4 text-white"></a>
                        </div>
                    </div>
                                  
                </div>
            </form>

        </nav>
    </div>
</div>
