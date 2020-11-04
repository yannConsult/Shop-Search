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



    <title>SMART Consulting - Report de Problèmes</title>
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
                        <h3 class="h3-responsive">FORMULAIRE DE PROBLEMES</h3>
                    </div>
                    <div class="p-4 d-none d-sm-none d-md-block d-lg-block">
                        <img src="../../assets/images/contact_img.png" alt="Smart Consulting Contact" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-5">
                <div class="d-flex flex-column justify-content-center align-items-center py-md-5">
                    <form class="w-100" action="../../../back-end/fr/c_issues.php" method="POST"
                          enctype="multipart/form-data">
                        <div class="py-3 w-100">
                            <div class="form-outline">
                                <label class="form-label" for="forRelatedTo"> <i
                                            class="fab fa-servicestack mr-2 primary-color"></i>Problèmes liés à <span
                                            class="text-danger">*</span></label>
                                <select class="primary-color form-select" id="forRelatedTo" name="forRelatedTo"
                                        required>
                                    <option class="primary-color" id="select-first-choice" disabled
                                            selected></option>
                                    <?php
                                    include '../../../back-end/en/db.php';
                                    $db = new db();
                                    $items = $db->query('SELECT * FROM items ORDER by Names asc')->fetchAll();
                                    // je complète dynamiquement la liste
                                    foreach ($items as $item) {
                                        $id = $item['Items_Numbers'];
                                        $name = $item['Names'];
                                        ?>

                                        <option class="primary-color"
                                                value="<?php echo $name; ?>"><?php echo $name; ?></option>

                                    <?php }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="py-3 w-100 ">
                            <div class="form-outline">
                                <label class="form-label" for="forPriority"> <i
                                            class="fab fa-servicestack mr-2 primary-color"></i> Impacte <span
                                            class="text-danger">*</span></label>
                                <select class="primary-color form-select" id="forPriority" name="forPriority" required>
                                    <option class="primary-color" id="select-first-choice" disabled value="0"
                                            selected></option>
                                    <option class="primary-color" value="1">Faible</option>
                                    <option class="primary-color" value="2">Moyen</option>
                                    <option class="primary-color" value="3">Elevée</option>
                                </select>
                            </div>
                        </div>

                        <div class="py-3 ">
                            <div class="form-outline">
                                <textarea class="form-control input-value" id="forDescription" name="forDescription"
                                          rows="2"
                                          required></textarea>
                                <label class="form-label txt" for="forDescription">Parlez nous de votre problème <span
                                            class="text-danger">*</span></label>
                            </div>
                        </div>

                        <div class="py-3 w-100">
                            <div class="form-file form-file-lg">
                                <input type="file" class="form-file-input" id="customFile" name="customFile"/>
                                <label class="form-file-label" for="customFile">
                                    <span class="form-file-text" id="choose-file">Soumettre le formulaire descriptif</span>
                                    <span class="form-file-button">Parcourir</span>
                                </label>
                            </div>
                        </div>

                        <span class="text-danger">* Champ requis</span>

                        <div class="container-fluid mb-4 p-4">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center justify-content-md-end">
                                    <button type="submit" name="submit" id="submit" value="submit"
                                            class="btn text-white bg-accent-color-dark text-capitalize rounded-button ">
                                        Envoyer
                                        <i class="fas fa-paper-plane mx-2"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
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
