<?php
/**
 * Created by PhpStorm.
 * User: SMART 2
 * Date: 07/08/2020
 * Time: 12:19
 */
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'inc/head.php' ?>

    <title>SMART Consulting - Documentation</title>
</head>
<body>

<!--NAVBAR-->
<?php
include 'inc/header_small.php' ;
?>

<div class="container-fluid p-0">

    <div class="container-fluid">
        <div class="container">
        <div class="row">
                <div class="col-6 mt-4 mb-3 mx-auto">
                    <h2 class="h2-responsive font-weight-bold text-primary-color-dark text-uppercase text-center">modules</h2>
                </div>
            </div>
            <div class="documentation-page">
                <div class="container">
                <div class="table-responsive">
                        <table class="table cart-table cart_prdct_table text-center">
                            <thead>
                                <tr>
                                    <th class="cpt_img text-uppercase">Modules</th>
                                    <th class="cpt_desc text-uppercase">Description</th>
                                    <th class="cpt_func text-uppercase">Fonctionnalité</th>
                                    <th class="cpt_sub_func text-uppercase">Sous-Fonctionnalité</th>
                                    <th class="cpt_module_lm text-uppercase">Modules Liés</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-inline-flex justify-content-around align-items-center">
                                            <i class="fas fa-file-invoice-dollar cp_img fa-2x align-self-center"></i>
                                            <p class="ml-1 my-auto text-uppercase text-primary-color-dark font-weight-bold align-self-center">My Sales</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-primary-color-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officiis quae provident similique repudiandae maiores expedita, dolor aut distinctio, asperiores ut debitis. Odio vel quaerat, earum sed accusamus tempora minus!
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="fas fa-shopping-bag fa-2x mr-3"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-inline-flex justify-content-around align-items-center">
                                            <i class="fas fa-shopping-bag cp_img fa-2x align-self-center"></i>
                                            <p class="ml-1 my-auto text-uppercase text-primary-color-dark font-weight-bold my-auto">My Expenses</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-primary-color-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officiis quae provident similique repudiandae maiores expedita, dolor aut distinctio, asperiores ut debitis. Odio vel quaerat, earum sed accusamus tempora minus!
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="fas fa-file-invoice-dollar fa-2x mr-3"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-inline-flex justify-content-around align-items-center">
                                            <i class="fas fa-cash-register cp_img fa-2x align-self-center"></i>
                                            <p class="ml-1 text-uppercase text-primary-color-dark font-weight-bold my-auto">My Cashiers</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-primary-color-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officiis quae provident similique repudiandae maiores expedita, dolor aut distinctio, asperiores ut debitis. Odio vel quaerat, earum sed accusamus tempora minus!
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="fas fa-file-invoice-dollar fa-2x mr-3"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-inline-flex justify-content-around align-items-center">
                                            <i class="fas fa-money-check-alt cp_img fa-2x align-self-center"></i>
                                            <p class="ml-1 text-uppercase text-primary-color-dark font-weight-bold my-auto">My Banks</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-primary-color-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officiis quae provident similique repudiandae maiores expedita, dolor aut distinctio, asperiores ut debitis. Odio vel quaerat, earum sed accusamus tempora minus!
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="fas fa-shopping-bag fa-2x mr-3"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-inline-flex justify-content-around align-items-center">
                                            <i class="fas fa-layer-group cp_img fa-2x align-self-center"></i>
                                            <p class=" ml-1 text-uppercase text-primary-color-dark font-weight-bold">My Stocks</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-primary-color-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officiis quae provident similique repudiandae maiores expedita, dolor aut distinctio, asperiores ut debitis. Odio vel quaerat, earum sed accusamus tempora minus!
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="fas fa-file-invoice-dollar fa-2x mr-3"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-inline-flex justify-content-around align-items-center">
                                            <i class="fas fa-database cp_img fa-2x align-self-center"></i>
                                            <p class="ml-1 text-uppercase text-primary-color-dark font-weight-bold my-auto">My data</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-primary-color-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officiis quae provident similique repudiandae maiores expedita, dolor aut distinctio, asperiores ut debitis. Odio vel quaerat, earum sed accusamus tempora minus!
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="fas fa-file-invoice-dollar fa-2x mr-3"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-inline-flex justify-content-around align-items-center">
                                            <i class="fas fa-spinner cp_img fa-2x align-self-center"></i>
                                            <p class="ml-1 text-uppercase text-primary-color-dark font-weight-bold my-auto">My Tracking</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-primary-color-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officiis quae provident similique repudiandae maiores expedita, dolor aut distinctio, asperiores ut debitis. Odio vel quaerat, earum sed accusamus tempora minus!
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="fas fa-file-invoice-dollar fa-2x mr-3"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-inline-flex justify-content-around align-items-center">
                                            <i class="fas fa-server cp_img fa-2x align-self-center"></i>
                                            <p class="ml-1 text-uppercase text-primary-color-dark font-weight-bold my-auto">My Views</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-primary-color-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officiis quae provident similique repudiandae maiores expedita, dolor aut distinctio, asperiores ut debitis. Odio vel quaerat, earum sed accusamus tempora minus!
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="fas fa-file-invoice-dollar fa-2x mr-3"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-inline-flex justify-content-around align-items-center">
                                            <i class="fas fa-building cp_img fa-2x align-self-center"></i>
                                            <p class="ml-1 text-uppercase text-primary-color-dark font-weight-bold my-auto">My company</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-primary-color-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officiis quae provident similique repudiandae maiores expedita, dolor aut distinctio, asperiores ut debitis. Odio vel quaerat, earum sed accusamus tempora minus!
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                               <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="fas fa-file-invoice-dollar fa-2x mr-3"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-inline-flex justify-content-around align-items-center">
                                            <i class="fas fa-user-cog cp_img fa-2x align-self-center"></i>
                                            <p class="ml-1 text-uppercase text-primary-color-dark font-weight-bold my-4">My Administrator</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="text-primary-color-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officiis quae provident similique repudiandae maiores expedita, dolor aut distinctio, asperiores ut debitis. Odio vel quaerat, earum sed accusamus tempora minus!
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                                <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <ul class="align-self-center">
                                               <li class="text-capitalized">
                                                    Function Un
                                                </li>
                                                <li class="text-">
                                                    Function Deux
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="fas fa-file-invoice-dollar fa-2x mr-3"></i>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
    $(document).ready(function(){
        $('.collapsible').collapsible();
    });
</script>
</body>
</html>