<?php
/**
 * Created by PhpStorm.
 * User: SMART2
 * Date: 21/07/2020
 * Time: 15:43
 */
session_start();
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
<link rel="icon" type="image/png" href="../../assets/images/smart.png" />

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>



    <title>SMART Consulting - Contact</title>
</head>

<body>

<!--NAVBAR-->
<?php
include 'inc/header_small.php';
include('message.php');
?>


<div class="container-fluid p-0">

    <div class="container-fluid">
        <div class="row mx-1 d-flex justify-content-between ">
            <div class="col-md-4 col-lg-5">
                <div class="d-flex flex-column justify-content-around align-items-center py-3 py-md-5">
                    <div class="primary-color p-4 text-center">
                        <h3 class="h3-responsive">Nous sommes à l'écoute de votre requête</h3>
                    </div>
                    <div class="p-4 d-none d-sm-none d-md-block d-lg-block">
                        <img src="../../assets/images/contact_img.png" alt="Smart Consulting Contact" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-5">
                <div class="d-flex flex-column justify-content-center align-items-center py-md-5">
                    <form class="w-100" action="../../../back-end/fr/c_request.php" method="POST"
                          enctype="multipart/form-data">
                        <div class="py-3 ">
                            <div class="form-outline">
                                <input type="text" id="forName" name="forName" class="form-control input-value"
                                       required/>
                                <label class="form-label" for="forName"> <i
                                            class="fas fa-user mr-2 color-primary-dark"></i>Votre nom <span
                                            class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="py-3 ">
                            <div class="form-outline">
                                <input type="tel" id="forTel" name="forTel" class="form-control input-value"
                                       required/>
                                <label class="form-label" for="forTel">
                                    <i class="fas fa-mobile mr-2 color-primary-dark"></i>Numéro de téléphone <span
                                            class="text-danger">*</span></label>

                            </div>
                        </div>
                        <div class="py-3 w-100">
                            <div class="form-outline">
                                <input type="email" id="forEmail" name="forEmail" class="form-control input-value"
                                       required/>
                                <label class="form-label" for="forEmail"><i
                                            class="fas fa-envelope-open-text mr-2 color-primary-dark"></i>Email <span
                                            class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="py-3 w-100">
                            <div class="form-outline">
                                <input type="text" id="forAddress" name="forAddress" class="form-control input-value"
                                       required/>
                                <label class="form-label" for="forAddress"><i
                                            class="fas fa-address-card mr-2 color-primary-dark"></i>Addresse <span
                                            class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="py-3 w-100">
                            <div class="form-outline">
                                <label class="form-label" for="forBusinessType"> <i
                                            class="fab fa-servicestack mr-2 primary-color"></i>Type de Business <span
                                            class="text-danger">*</span></label>
                                <select class="primary-color form-select" id="forBusinessType" name="forBusinessType"
                                        required>
                                    <option class="primary-color" id="select-first-choice" disabled value="0"
                                            selected></option>
                                    <?php
                                    include '../../../back-end/fr/db.php';
                                    $db = new db();
                                    $category = $db->query('SELECT * FROM customer_category ORDER by Names asc')->fetchAll();
                                    // je complète dynamiquement la liste
                                    foreach ($category as $cate) {
                                        $id = $cate['Category_id'];
                                        $name = $cate['Names'];
                                        ?>

                                        <option class="primary-color"
                                                value="<?php echo $id; ?>"><?php echo $name; ?></option>

                                    <?php }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="py-3 w-100 ">
                            <div class="form-outline">
                                <label class="form-label" for="selectType"> <i
                                            class="fab fa-servicestack mr-2 primary-color"></i>  Type Requête <span
                                            class="text-danger">*</span></label>
                                <select class="primary-color form-select" id="selectType" name="selectType" required>
                                    <option class="primary-color" id="select-first-choice" disabled value="0"
                                            selected></option>
                                    <option class="primary-color" value="Products">Produits</option>
                                    <option class="primary-color" value="Services">Services</option>
                                </select>
                            </div>
                        </div>
                        <div class="py-3 w-100 ">
                            <div class="form-outline" id="formItem">
                                <label class="form-label" for="selectItem"><i
                                            class="fas fa-tasks mr-2 primary-color"></i>L'article que vous souhiatez <span
                                            class="text-danger">*</span></label>
                                <div>
                                    <span id="msgerror" class="text-danger"> </span>
                                </div>
                                <div>
                                    <table data-name="selectItem">
                                        <tbody data-name="selectItem" id="selectItem">
                                        <tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="py-3 w-100">
                            <div class="form-file form-file-lg">
                                <input type="file" class="form-file-input" id="customFile" name="customFile"/>
                                <label class="form-file-label" for="customFile">
                                    <span class="form-file-text" id="choose-file">Envoyer les documents requis</span>
                                    <span class="form-file-button">Browse</span>
                                </label>
                            </div>
                        </div>


                        <div class="py-3 w-100 ">
                            <div class="form-outline">
                                <textarea class="form-control input-value" id="textAreaForm" name="textAreaForm"
                                          rows="2"
                                          required></textarea>
                                <label class="form-label txt" for="textAreaForm">Dites nous ce que vous voulez <span
                                            class="text-danger">*</span></label>
                            </div>

                        </div>

                        <span class="text-danger">* Champs requis</span>

                        <div class="container-fluid mb-4 p-4">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center justify-content-md-end">
                                    <button type="submit" name="submit" id="submit" value="submit"
                                            onclick="return checkb()"
                                            class="btn text-white bg-accent-color-dark text-capitalize rounded-button ">
                                        Send Request
                                        <i class="fas fa-paper-plane mx-2"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <script type="text/javascript">
                // ajout dynamique des options de sélection
                $('#selectType').on('change', function () {
                    // initialiser la liste dynamique confert champ service groupe
                    $('#selectItem').empty();
                    var type = $(this).val();
                    var i = 0;

                    //alert('oui');

                    if (type === 'Services') {
                        <?php
                        $db = new db();
                        $type = 'Services';
                        //$available1 = 'Oui';
                        //$available2 = 'Yes';
                        $items = $db->query('SELECT * FROM items where Types= ?', $type)->fetchAll();
                        // je complète dynamiquement la liste
                        foreach ($items as $item) {
                        $available1 = $item['Available'];
                        if ($available1 != "No" AND $available1 != "Non" ){
                        $id = $item['Items_Numbers'];
                        $name = $item['Names'];
                        ?>
                        // récupérer l'id pour traitement
                        var identifiant = '<?php echo $id; ?>';
                        var item = '<?php echo $name; ?>';
                        i = i + 1;
                        identifiant = parseInt(identifiant);

                        // je complète dynamiquement la liste
                        $('#selectItem').append(
                            '<td class="p-0">' +
                            '<div class="form-check form-check-inline mb-4">' +
                            '<input class="form-check-input selectItem" type="checkbox" name="selectItem[]" id="selectItem[]" value="' + identifiant + '">' +
                            '<label class="form-check-label" for="inlineCheckbox1">' + item + '</label>' +
                            '</div>' +
                            '</td>');
                        if (i === 3) {
                            $('#selectItem').append('<tr>');
                            i = 0;
                        }

                        <?php }}
                        ?>
                    } else if (type === 'Products') {

                        <?php
                        $db = new db();
                        $type = 'Products';
                        //$available1 = 'Oui';
                        //$available2 = 'Yes';
                        $items = $db->query('SELECT * FROM items where Types= ?', $type)->fetchAll();
                        // je complète dynamiquement la liste
                        foreach ($items as $item) {
                        $available2 = $item['Available'];
                        if ($available2 != "Non" And $available2 != "No"){
                        $id = $item['Items_Numbers'];
                        $name = $item['Names'];
                        ?>
                        // récupérer l'id pour traitement
                        var identifiant = '<?php echo $id; ?>';
                        var item = '<?php echo $name; ?>';
                        i = i + 1;
                        identifiant = parseInt(identifiant);

                        // je complète dynamiquement la liste
                        $('#selectItem').append(
                            '<td class="p-0">' +
                            '<div class="form-check form-check-inline mb-4">' +
                            '<input class="form-check-input selectItem" type="checkbox" name="selectItem[]" id="selectItem[]" value="' + identifiant + '">' +
                            '<label class="form-check-label" for="inlineCheckbox1">' + item + '</label>' +
                            '</div>' +
                            '</td>');
                        if (i === 3) {
                            $('#selectItem').append('<tr>');
                            i = 0;
                        }

                        <?php }}
                        ?>
                    }

                });

            </script>

            <script type="text/javascript">

                function checkb() {
                    var checkBoxes = document.getElementsByTagName('input');
                    var param;
                    for (var counter = 0; counter < checkBoxes.length; counter++) {
                        if (checkBoxes[counter].type.toUpperCase() == 'CHECKBOX' && checkBoxes[counter].checked == true) {
                            param += checkBoxes[counter].value + "\n";
                        }
                    }
                    if (param === undefined) {
                        document.getElementById('msgerror').innerHTML = "Veuillez cocher au moins une case";
                        //$('#msgerror').append('<span> Veuillez cocher au moins une case. </span>');
                        return false;
                    } else
                        document.getElementById('msgerror').innerHTML = "";
                    return true;
                }

            </script>

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
