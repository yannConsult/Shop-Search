<?php
/**
 * Created by PhpStorm.
 * User: SMART2
 * Date: 21/07/2020
 * Time: 15:43
 */
session_start();
if (!isset($_SESSION["id"])) {
    header("Location:login.php");
}

include '../../../back-end/en/db.php';
$db = new db();
$id = $_SESSION["id"];
$email = $_SESSION["E-mails"];
$name = $_SESSION["Name"];
$amountdue = 0;
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Client satisfaction is our priority"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/mdb.css">
    <link rel="stylesheet" href="../../assets/css/mdb.lite.css">
    <link rel="stylesheet" href="../../assets/css/mdb.min.css">
    <link rel="stylesheet" href="../../assets/css/mdb.lite.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../../assets/css/materialize.min.css">
    <link rel="stylesheet" href="../../assets/css/materialize.css">
    <link rel="icon" type="image/png" href="../../assets/images/smart.png"/>

    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <!-- MDB -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/2.0.0/mdb.min.css"
          integrity="sha512-PNlERqGVA+h/CLlkBXUuTQtbcYyG2B73irA82Z1A6iOSuU+e/4IBOub6URRWVckbfkcUemnOOkMW7tHJhyAEUQ=="
          crossorigin="anonymous"/>

    <title>SMART Consulting - Profile</title>
</head>

<body>

<!--NAVBAR-->
<?php
include 'inc/header_profil.php';
include('message.php');
?>
<!-- Content -->

<div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Information</h5>
                <button
                        type="button"
                        class="btn-close"
                        data-dismiss="modal"
                        aria-label="Close"
                ></button>
            </div>
            <div class="modal-body ">
                <form action="../../../back-end/en/c_profil.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body mx-3">
                        <?php
                        $customer = $db->query('SELECT * FROM `customers` WHERE `Customers_Numbers` = ?', $id)->fetchArray();
                        if ($customer != null) {
                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fas fa-user prefix grey-text"></i>
                                        <label class="m-0" data-error="wrong" data-success="right" for="defaultName">
                                            Name</label>
                                        <input type="text" id="name" class="form-control validate" name="name"
                                               value="<?php echo $customer['Names'] ?>" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fas fa-building prefix grey-text"></i>
                                        <label class="m-0" data-error="wrong" data-success="right" for="defaultCountry">
                                            Category</label>
                                        <select class="primary-color form-select" id="category"
                                                name="category"
                                                required>
                                            <option class="primary-color" id="select-first-choice"
                                                    value="<?php echo $customer['Categories'] ?>"
                                                    selected><?php echo $customer['Categories'] ?></option>
                                            <?php
                                            $category = $db->query('SELECT * FROM customer_category ORDER by Names asc')->fetchAll();
                                            // je complète dynamiquement la liste
                                            foreach ($category as $cate) {
                                                $lib = $cate['Names'];
                                                ?>

                                                <option class="primary-color"
                                                        value="<?php echo $lib; ?>"><?php echo $lib; ?></option>

                                            <?php }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fas fa-mobile prefix grey-text"></i>
                                        <label class="m-0" data-error="wrong" data-success="right" for="defaultName">
                                            Phone</label>
                                        <input type="text" id="phone" class="form-control validate" name="phone"
                                               value="<?php echo $customer['Phones'] ?>" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fas fa-envelope-open-text prefix grey-text"></i>
                                        <label class="m-0" data-error="wrong" data-success="right" for="defaultCountry">
                                            E-mail</label>
                                        <input type="email" id="mail" class="form-control validate" name="mail"
                                               value="<?php echo $customer['E-mails'] ?>" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fas fa-flag prefix grey-text"></i>
                                        <label class="m-0" data-error="wrong" data-success="right" for="defaultCompany">
                                            Country</label>
                                        <input type="text" id="country" class="form-control validate" name="country"
                                               value="<?php echo $customer['Country'] ?>" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fas fa-map-marker-alt prefix grey-text"></i>
                                        <label class="m-0" data-error="wrong" data-success="right"
                                               for="defaultProvince">
                                            Province</label>
                                        <input type="text" id="province" class="form-control validate"
                                               value="<?php echo $customer['Province'] ?>" required
                                               name="province">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fas fa-city prefix grey-text"></i>
                                        <label class="m-0" data-error="wrong" data-success="right" for="defaultEmail">
                                            City</label>
                                        <input type="text" id="city" class="form-control validate" name="city"
                                               value="<?php echo $customer['City'] ?>" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fas fa-address-card prefix grey-text"></i>
                                        <label class="m-0" data-error="wrong" data-success="right" for="defaultCity">
                                            Adress</label>
                                        <input type="text" id="adresse" class="form-control validate" name="adresse"
                                               value="<?php echo $customer['Adresses'] ?>" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fas fa-envelope prefix grey-text"></i>
                                        <label class="m-0" data-error="wrong" data-success="right" for="defaultPhone">
                                            Postal
                                            Code</label>
                                        <input type="text" id="code" class="form-control validate" name="code"
                                               value="<?php echo $customer['Postal_Code'] ?>">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fas fa-building prefix grey-text"></i>
                                        <label class="m-0" data-error="wrong" data-success="right"
                                               for="defaultLocation">
                                            Appartment number</label>
                                        <input type="text" id="number" class="form-control validate"
                                               value="<?php echo $customer['Appt'] ?>"
                                               name="number">

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-5">
                                        <i class="fab fa-chrome prefix grey-text"></i>
                                        <label class="m-0" data-error="wrong" data-success="right" for="webSite">
                                            Web Site</label>
                                        <input type="text" id="webSite" class="form-control validate" name="webSite"
                                               value="<?php echo $customer['Website'] ?>">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="py-3 w-100">
                                        <div class="form-file form-file-lg">
                                            <input type="file" class="form-file-input" id="customFile" name="customFile"
                                                   accept="image/png, image/jpeg"/>
                                            <label class="form-file-label" for="customFile">
                                                <span class="form-file-text" id="choose-file">Upload your logo</span>
                                                <span class="form-file-button">Browse</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>

                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn bg-primary-color-dark text-white" type="submit" name="submit" id="submit">
                            Save Modification
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid shadow pb-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="my-2 d-flex flex-column">
                    <h3 class="h3-responsive primary-color-dark">Profil</h3>
                    <hr class="w-25 bg-primary-color-dark">
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $customer = $db->query('SELECT * FROM `customers` WHERE `Customers_Numbers` = ?', $id)->fetchArray();
            if ($customer != null) {
                ?>
                <div class="col-lg-3">
                    <div class="position-relative">
                        <?php
                        if ($customer['Picture'] == NULL) {
                            ?>
                            <img src="../../assets/images/user_picture.png" alt="user picture profil" class="img-fluid">
                            <?php
                        } else {
                            ?>
                            <img alt="user picture profil" class="img-fluid"
                                 src="data:image/png;base64,<?php echo base64_encode($customer['Picture']) ?>"/>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-9 my-auto">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="d-inline-flex justify-content-start">
                                            <i class="fas fa-user primary-color mr-3 my-auto"></i>
                                            <p class="h3 text-capitalize font-weight-bold my-auto"><?php echo $customer['Names'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="d-inline-flex justify-content-start">
                                            <i class="fas fa-building primary-color mr-3 my-auto"></i>
                                            <p class="h5 font-weight-light my-auto"><?php echo $customer['Categories'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="d-inline-flex justify-content-start">
                                            <i class="fas fa-envelope-open-text primary-color mr-3 my-auto"></i>
                                            <p class="h5 font-weight-light my-auto"><?php echo $customer['E-mails'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="d-inline-flex justify-content-start">
                                            <i class="fas fa-mobile primary-color mr-3 my-auto"></i>
                                            <p class="h5 font-weight-light my-auto"><?php echo $customer['Phones'] ?></p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="d-inline-flex justify-content-start">
                                            <i class="fas fa-flag primary-color mr-3 my-auto"></i>
                                            <p class="h3 text-capitalize font-weight-bold my-auto"><?php echo $customer['Country'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="d-inline-flex justify-content-start">
                                            <i class="fas fa-map-marker-alt primary-color mr-3 my-auto"></i>
                                            <p class="h5 text-capitalize font-weight-light my-auto"><?php echo $customer['Province'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="d-inline-flex justify-content-start">
                                            <i class="fas fa-city primary-color mr-3 my-auto"></i>
                                            <p class="h5 text-capitalize font-weight-light my-auto"><?php echo $customer['City'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="d-inline-flex justify-content-start">
                                            <i class="fas fa-address-card primary-color mr-3 my-auto"></i>
                                            <p class="h5 text-capitalize font-weight-light my-auto"><?php echo $customer['Adresses'] ?></p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2">
                            <a href="#exampleModal"
                               id="edit-profil-btn"

                            >
                            <span class="profil-edit-btn d-flex justify-content-center align-items-center">
                            <i class="fas fa-edit text-white"></i></span>
                            </a>
                        </div>

                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mt-4 d-flex flex-column">
                    <h3 class="h3-responsive primary-color-dark">Orders History</h3>
                    <hr class="w-25 bg-primary-color-dark">
                </div>
                <div class="col-lg-12 text-right justify-content-end ">
                    <a href="./contact.php"
                       class="btn bg-primary-color text-white mb-3 waves-effect waves-light"
                    >Request a product/service</a>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="d-flex flex-column justify-content-between mb-4">
                <div>
                    <div class="table-responsive">
                        <table class="table cart-table cart_prdct_table text-center">
                            <thead>
                            <tr>
                                <th class="cpt_img text-uppercase bg-primary-color-dark text-white">Order Number</th>
                                <th class="cpt_desc text-uppercase bg-primary-color-dark text-white">Order Date</th>
                                <th class="cpt_date text-uppercase bg-primary-color-dark text-white">Product Name</th>
                                <th class="cpt_func text-uppercase bg-primary-color-dark text-white">AMOUNT PAID</th>
                                <th class="cpt_sub_func text-uppercase bg-primary-color-dark text-white">AMOUNT TO
                                    PAID
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $bills = $db->query('SELECT * FROM `sales_invoice` WHERE `Customers`=?', $name)->fetchAll();
                            if ($bills != null) {
                                foreach ($bills as $bil) {
                                    $cmd = $db->query('SELECT * FROM `sales` WHERE `Sales_Numbers`=?', $bil['No. Command'])->fetchArray();
                                    if ($cmd != null) {
                                        $item = $db->query('SELECT * FROM `items` WHERE `Items_Numbers`=?', $cmd['Items_Numbers'])->fetchArray();
                                    }
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <p class="ml-1 my-auto text-uppercase text-primary-color-dark font-weight-bold align-self-center">
                                                    <?php echo $bil['No. Command'] ?></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <p class="text-primary-color-dark h6 font-weight-bold">
                                                    <?php echo $bil['Dates'] ?>
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <p class="text-primary-color-dark h6 font-weight-bold">
                                                    <?php echo $item['Names'] ?>
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <p class="text-primary-color-dark font-weight-bold h6">
                                                    <?php echo number_format($bil['Amount Paid'], 2, '.', ' ') . ' $' ?>
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <p class="text-primary-color-dark font-weight-bold h6">
                                                    <?php echo number_format($bil['Balance'], 2, '.', ' ') . ' $' ?>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    $amountdue = $amountdue + $bil['Balance'];
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="5">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p class="ml-1 my-auto text-uppercase text-primary-color-dark font-weight-bold align-self-center">
                                                No data found</p>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row bg-primary-color-dark py-1 mx-1">
            </div>
        </div>
    </div>
    <div class="py3">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6 text-left">
                    <h4 class="primary-color-dark text-uppercase"> TOTAL AMOUNT DUE</h4>
                </div>
                <div class="col-lg-6 text-right">
                    <div class="">
                        <p class="accent-color-dark h3 font-weight-bold"><?php echo number_format($amountdue, 2, '.', ' ') . ' $' ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<hr>

<div class="">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="my-4 d-flex flex-column">
                            <h3 class="h3-responsive primary-color-dark text-capitalize">Available Storage</h3>
                            <hr class="w-25 bg-primary-color-dark">
                        </div>
                    </div>
                </div>
                <div class="card shadow">
                    <div class="row py-5">
                        <div class="col-lg-12 ">
                            <canvas id="doughnutChart"></canvas>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="my-4 d-flex flex-column">
                            <h3 class="h3-responsive primary-color-dark text-capitalize">Repported Issues</h3>
                            <hr class="w-25 bg-primary-color-dark text-left">
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="row py-3">
                            <?php
                            $reports = $db->query('SELECT * FROM `bugs` where `reporters`= ? AND `status` != ?', $id, 5)->fetchAll();
                            if ($reports != null) {
                                ?>
                                <div class="col-lg-12 ">
                                    <?php
                                    foreach ($reports

                                             as $issues) {
                                        ?>
                                        <div class="row repport-highlight">
                                            <div class="col-lg-12 row">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <div class="d-inline-flex justify-content-between">
                                                        <div class="font-weight-light font-italic primary-color-dark">
                                                            Issue id : <span
                                                                    class="font-weight-bold h6 text-uppercase"><?php echo $issues['id_bugs'] ?></span>
                                                        </div>
                                                        <div class="font-weight-light font-italic primary-color-dark">
                                                            Reported on : <span
                                                                    class="font-weight-bold h6 text-uppercase"><?php echo $issues['report_date'] ?></span>
                                                        </div>
                                                        <div class="font-weight-light font-italic primary-color-dark">
                                                            Related to : <span
                                                                    class="font-weight-bold h6 text-uppercase"><?php echo $issues['features'] ?></span>
                                                        </div>
                                                        <div class="font-weight-light font-italic primary-color-dark">
                                                            Impact :
                                                            <?php if ($issues['impact'] == 3) { ?>
                                                                <span class="text-danger font-weight-bold h6">Hight</span>
                                                            <?php } else if ($issues['impact'] == 1) { ?>
                                                                <span class="text-primary font-weight-bold h6">Low</span>
                                                            <?php } else if ($issues['impact'] == 2) { ?>
                                                                <span class="text-warning font-weight-bold h6">Medium</span>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="font-weight-light font-italic primary-color-dark d-inline-flex mr-3">
                                                            Status :

                                                            <?php if ($issues['status'] == 2) { ?>
                                                                <div class="ml-2 status-circle-inprogress mx-auto">
                                                                </div>
                                                            <?php } else if ($issues['status'] == 1) { ?>
                                                                <div class="ml-2 status-circle-open mx-auto">
                                                                </div>
                                                            <?php }
                                                            if ($issues['status'] == 3) { ?>
                                                                <div class="ml-2 status-circle-blocked mx-auto">
                                                                </div>
                                                            <?php } else if ($issues['status'] == 4) { ?>
                                                                <div class="ml-2 status-circle-readyfortest mx-auto">
                                                                </div>
                                                            <?php } ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="font-weight-light font-italic primary-color-dark">
                                                        Summary :
                                                    </div>
                                                    <div class="primary-color ml-3">
                                                        <p class="h5"><?php echo $issues['descriptions'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <hr class=" mt-3 bg-primary-color-dark">
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="col-lg-12 ">
                                    <p class="h5">No records found.</p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="row mx-auto text-center">
                            <!-- <div class="col-lg-6 ">
                                <a href="./issues.php"
                                   class="btn primary-color-dark border  mb-3 waves-effect waves-light btn-report-hover">
                                    Create  </a>
                            </div> -->
                            <div class="col-lg-12 ">
                                <a href="./issues.php"
                                   class="btn bg-primary-color text-white mb-3 waves-effect waves-light"
                                >Repport new issues</a>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="row mt-4">
                    <div class="col-lg-12">
                        <h5 class="h3-responsive primary-color-dark text-capitalize">status legend :</h5>
                        <div class="d-inline-flex justify-content-start">
                            <div class="status-circle-open mx-auto"></div>
                            <div class="primary-color">
                                <p class="text-capitalize ml-2">Open</p>
                            </div>
                        </div>
                        <div class="d-inline-flex justify-content-start ml-2">
                            <div class="status-circle-inprogress mx-auto"></div>
                            <div class="primary-color">
                                <p class="text-capitalize ml-2">In Progress</p>
                            </div>
                        </div>
                        <div class="d-inline-flex justify-content-start ml-2">
                            <div class="status-circle-blocked mx-auto"></div>
                            <div class="primary-color">
                                <p class="text-capitalize ml-2">Blocked</p>
                            </div>
                        </div>
                        <div class="d-inline-flex justify-content-start ml-2">
                            <div class="status-circle-readyfortest mx-auto"></div>
                            <div class="primary-color">
                                <p class="text-capitalize ml-2">Ready for approuve</p>
                            </div>
                        </div>
                        <!-- <div class="d-inline-flex justify-content-start ml-2">
                            <div class="status-circle-closed mx-auto"></div>
                            <div class="primary-color">
                                <p class="text-capitalize ml-2">Closed</p>
                            </div>
                        </div> -->

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- !Content -->

<!-- Footer -->
<?php
include 'inc/footer.php';
?>

<!-- JS SCRIPT  -->
<?php
include 'inc/foot.php';
?>
<!-- MDB -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/2.0.0/mdb.min.js"
        integrity="sha512-vSdibRCasesUi8b6oHWfYPa6LDzzaOXrggmyIebkuybwVF+pKEm3vN8ZDXBYdF93ckvVGePpAA3eMrcxvopWFg=="
        crossorigin="anonymous"></script>

<script>
    $("#customFile").change(function (e) {
        var fileName = e.target.files[0].name;
        $("#choose-file").text(fileName);
    });
</script>

<script>
    const largePopover = document.getElementById('#popover-large');
    const popover = new mdb.Popover(largePopover, options);
</script>
<script>
    //doughnut
    var ctxD = document.getElementById("doughnutChart").getContext('2d');
    var myLineChart = new Chart(ctxD, {
        type: 'doughnut',
        data: {
            labels: ["Storage Used", "Free Storage"],
            datasets: [{
                data: [50, 150],
                backgroundColor: ["#092546", "#A6CEE3"],
                hoverBackgroundColor: ["#1F5EAA", "#C8DDE8"]
            }],
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom'
            }
        }
    });
</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/2.0.0/mdb.min.js"
        integrity="sha512-vSdibRCasesUi8b6oHWfYPa6LDzzaOXrggmyIebkuybwVF+pKEm3vN8ZDXBYdF93ckvVGePpAA3eMrcxvopWFg=="
        crossorigin="anonymous"></script> -->

<script>
    // $("#edit-profil-btn").on(click, function(event){
    //     preventDefault();
    //     console.log("cldeojeoi");
    //     $('#modaluserinfo').modal();
    // });

    // console.log($('#edit-profil-btn'));
    $('#edit-profil-btn').on("click", function (event) {
        event.preventDefault();
        $('#exampleModal').modal({
            backdrop: false
        });
        // const myModal = new mdb.Modal(document.getElementById('myModal')).show();
    });

    $("#dropdownMenuButton").on("click", function (event) {
        event.preventDefault();
        $('#exampleModal').on('show.bs.modal', function (e) {
            $('#exampleModal').hide();
        });
    });


</script>
</body>
</html>
