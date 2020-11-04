<?php
/**
 * Created by PhpStorm.
 * User: SMART 2
 * Date: 07/08/2020
 * Time: 12:20
 */
session_start();
$page = 'team';
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'inc/head.php' ?>

    <title>SMART Consulting - Our Team</title>
</head>
<body>

<!--NAVBAR-->
<?php
include 'inc/header.php';
?>

<div class="container-fluid">
    <!--CARD TEAM-->
    <div class="container p-3 mt-5">
          <div class="row pt-5">
            <div class="col-12 col-sm-12 col-md-6">
                <img src="../../assets/images/about_us.png" alt="about us pic" class="img-fluid">
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-12">
                        <h2 class="accent-color-dark text-uppercase">ABOUT THE COMPANY</h2>
                    </div>
                    <div class="col-12">
                        <p class="primary-color mt-3">SMART Consulting is a Canadian IT
                            consulting company. Providing various information technologies services
                            and software solution products. SMART Consulting has been building himself since 2009 until today that it feel ready than never and, still has lot of surprise coming over to improve ower society and organizations in IT.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="accent-color-dark text-uppercase">OUR VISION</h2>
                    </div>
                    <div class="col-12">
                        <p class="primary-color mt-3">Leading IT services market in next coming years
                            is our main goals. We keep updating owerself, making research and contributing
                            on IT practices and process continuous improvement. We are planning to cover
                            world wide with our software products and with our expertises through our
                            specialists. We will keep providing you with the best services and clients
                            satisfactions will remain our values.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="accent-color-dark text-uppercase">THE TEAM</h2>
                    </div>
                    <div class="col-12">
                        <p class="primary-color mt-3">More and more bigest, our team is compose with high
                            educated and impresive backgroung specialists in various domain such as sofware
                            engineering, digital marketing, law, accounting and many others.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include 'inc/footer.php';
?>


<?php
include 'inc/foot.php';
?>

</body>
</html>

        <!-- <div class="row py-3">
            <div class="col-md-6 col-lg-4 d-flex">
               
                <div class="card flex-fill">
                    <div class="container-fliuid bg-wave-deco rounded-top p-0">
                        <div class="d-flex flex-column justify-content-between p-3">
                            <div class="d-flex justify-content-center">
                                <img src="../../assets/images/founder_profil.png" style="width: 170px; height: 170px;"
                                     alt="Smart Consulting Team" class="img-flui">
                            </div>
                            <div class="d-flex justify-content-start">
                                <h3 class="text-capitalize text-white font-weight-bold">Yves Lionel K. T.</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card-body bg-primary-color-opacity10 py-4">
                        <div class="opacity-100">
                            
                            <h4 class="card-title text-uppercase opacity-100 py-3">Founder & CEO</h4>
                           
                            <p class="card-text py-2">M. Ing. in software engineering and owning lot of
                                certifications in various skills, Lionel has being operating in various
                                companies around the 4 continents before he quit and focus on rising up
                                SMART Consulting Inc.</p>

                        </div>
                    </div>
                    <div class="gradient-primary-color-dark d-flex justify-content-between align-items-end t-4 py-2 rounded-bottom">
                        <div class="d-flex justify-content-start align-items-center">
                            <p class="h6 font-italic text-white opacity-60 ml-3">Follow me on</p>
                        </div>
                        <div class="d-inline-flex justify-content-start align-items-end mr-2 p-1">
                            <ul class="list-unstyled align-self-center m-0">
                                <li class="list-inline-item mr">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                     d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                     d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                     d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                     d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
             
            </div>

           
            <div class="col-md-6 col-lg-4 d-flex">
          
                <div class="card flex-fill">
                    <div class="container-fliuid bg-wave-deco rounded-top p-0">
                        <div class="d-flex flex-column justify-content-between p-3">
                            <div class="d-flex justify-content-center">
                                <img src="../../assets/images/software_manager_profil.png"
                                     style="width: 170px; height: 170px;" alt="Smart Consulting Team" class="img-flui">
                            </div>
                            <div class="d-flex justify-content-start">
                                <h3 class="text-capitalize text-white font-weight-bold">Vishal Dhaduk</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card-body bg-primary-color-opacity10 py-4">
                        <div class="opacity-100">
                        
                            <h4 class="card-title text-uppercase opacity-100 py-3">Software Dev. Manager</h4>
                      
                            <p class="card-text py-2">Ing. in software engineering and owning various IT
                                certifications, he has took lot of bankrupt IT companies and rise them up
                                in few years due to his amazing experiences and background in IT domain.</p>
                        </div>
                    </div>
                    <div class="gradient-primary-color-dark d-flex justify-content-between align-items-end t-4 py-2 rounded-bottom">
                        <div class="d-flex justify-content-start align-items-center">
                            <p class="h6 font-italic text-white opacity-60 ml-3">Follow me on</p>
                        </div>
                        <div class="d-inline-flex justify-content-start align-items-end mr-2 p-1">
                            <ul class="list-unstyled align-self-center m-0">
                                <li class="list-inline-item mr">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
       
            </div>
  
            <div class="col-md-6 col-lg-4 d-flex">
   
                <div class="card flex-fill">
                    <div class="container-fliuid bg-wave-deco rounded-top p-0">
                        <div class="d-flex flex-column justify-content-between p-3">
                            <div class="d-flex justify-content-center">
                                <img src="../../assets/images/manager_profil.png" style="width: 170px; height: 170px;"
                                     alt="Smart Consulting Team" class="img-flui">
                            </div>
                            <div class="d-flex justify-content-start">
                                <h3 class="text-capitalize text-white font-weight-bold">Elizabeth Mai</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card-body bg-primary-color-opacity10 py-4">
                        <div class="opacity-100">
                 
                            <h4 class="card-title text-uppercase opacity-100 py-3">Marketing and Com. Manager</h4>
                 
                            <p class="card-text py-2">Digital Marketing and international relationship
                                specialist, Elizabeth has being traveling around over 35 countries in
                                the globe for international cooperation and marketing purpose.
                                She is able to speak over 5 languages herself.</p>


                        </div>
                    </div>
                    <div class="gradient-primary-color-dark d-flex justify-content-between align-items-end t-4 py-2 rounded-bottom">
                        <div class="d-flex justify-content-start align-items-center">
                            <p class="h6 font-italic text-white opacity-60 ml-3">Follow me on</p>
                        </div>
                        <div class="d-inline-flex justify-content-start align-items-end mr-2 p-1">
                            <ul class="list-unstyled align-self-center m-0">
                                <li class="list-inline-item mr">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="no-deco team-social-icon text-white opacity-40
                                    d-flex justify-content-center align-items-center shadow-sm icon-menu-color">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div> -->
        <!-- <div class="container">
            <?php
            /*$info = $db->query('SELECT * FROM `website_info`')->fetchArray();
            if ($info != null) {*/
                ?>
                <div class="row about_inner">
                    <div class="about_img_area col-lg-6 col-md-12 col-xs-12">
                        <div>
                            <img src="data:image/png;base64,<?php/* echo base64_encode($info['presentation_photo'])*/ ?>"
                                alt="" class="rounded">
                        </div>
                    </div>

                    <div class="about_content_area col-lg-6  col-md-12 col-xs-12">
                        <?php /*echo $info['presentation_text']*/ ?> 
                    </div>

                </div>
                <?php
        /*    }*/
            ?>

            <div class="team_area">
                <?php
                /*$teams = $db->query('SELECT * FROM `web_about_us_team`')->fetchAll();
                if ($teams != null) {*/
                    ?>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="section_title">
                                <h2>Our <span>Team</span></h2>
                                <div class="divider"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <?php
                        /*foreach ($teams as $team) {*/
                            ?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="data:image/png;base64,<?php /*echo base64_encode($team['photo'])*/ ?>" alt="">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title"><?php /*echo $team['name']*/ ?></h3>
                                        <span class="post"><?php /*echo $team['role']*/ ?></span>
                                        <ul class="social">
                                            <?php
                                            /*if ($team['facebook_link'] != null) {*/
                                                ?>
                                                <li><a href="<?php /*echo $team['facebook_link'] */?>" target="_blank"><i
                                                                class="fa fa-facebook"></i></a></li>
                                                <?php
                                            /*} if ($team['twitter_link'] != null) {*/
                                                ?>
                                                <li><a href="<?php /*echo $team['twitter_link']*/ ?>" target="_blank"><i
                                                                class="fa fa-twitter"></i></a></li>
                                                <?php
                                            /*} if ($team['google_link'] != null) {*/
                                                ?>
                                                <li><a href="<?php /*echo $team['google_link']*/ ?>" target="_blank"><i
                                                                class="fa fa-google-plus"></i></a></li>
                                                <?php
                                            /*} if ($team['instagram_link'] != null) {*/
                                                ?>
                                                <li><a href="<?php /*echo $team['instagram_link']*/ ?>" target="_blank"><i
                                                                class="fa fa-instagram"></i></a></li>
                                                <?php
                                            /*}*/
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                        /*}*/
                        ?>
                    </div>
                    <?php
               /* }*/
                ?>

            </div>
        </div> -->
      