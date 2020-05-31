<?php
//Calling the Global Configuration file
require_once 'app/config/global.config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Section -->
    <?php
    //Calling Meta Section
    include 'app/assets/templates/template-meta.php';
    ?>
    <title> <?= $title_constant; ?> | Error 404</title>
    <!-- Header Section -->
    <?php
    //Calling Header Section
    include 'app/assets/templates/template-header.php';
    ?>

</head>

<body class="bg-purple">
    <div class="wrapper">
        <!-- =========================
        Header
    =========================== -->
        <!-- Navigation Section -->
        <?php
        //Calling Main Navigation Section
        include 'app/assets/templates/template-navigation.php';
        ?>

        <!-- ========================
       page title 
    =========================== -->
        <section id="page-title" class="page-title bg-overlay bg-parallax bg-img" style="background-image: url(&quot;assets/images/page-titles/5.jpg&quot;); background-size: cover; background-position: center center;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h1 class="pagetitle__heading">Rates &amp; Pricing</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.html">Fetures</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Rates</li>
                            </ol>
                        </nav>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <!-- ============================
        404 Error
    ============================== -->

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <center>
                        <div class="stars">
                            <div class="custom-navbar">
                                <div class="central-body">
                                    <img class="image-404" src="https://drafticode.com/error/pages/404/assets/images/404.svg" width="300px">
                                </div>
                                <div class="objects">
                                    <img class="object_rocket" src="https://drafticode.com/error/pages/404/assets/images/rocket.svg" width="40px">
                                    <div class="earth-moon">
                                        <img class="object_earth" src="https://drafticode.com/error/pages/404/assets/images/earth.svg" width="100px">
                                        <img class="object_moon" src="https://drafticode.com/error/pages/404/assets/images/moon.svg" width="80px">
                                    </div>
                                    <div class="box_astronaut">
                                        <img class="object_astronaut" src="https://drafticode.com/error/pages/404/assets/images/astronaut.svg" width="140px">
                                    </div>
                                </div>
                                <div class="glowing_stars">
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                </div>
                            </div>
                        </div>
                        <a href="./" class="btn btn__secondary module__btn-request">GO BACK HOME</a>
                        </br></br>
                        <div class="clearfix"></div>
                    </center>
                </div>
            </div>
        </div>

        <!-- ========================
            Footer
    ========================== -->
        <!-- Footer Setion -->
        <?php
        //Calling footer section
        include 'app/assets/templates/template-footer.php';
        ?>
</body>

</html>

<!-- Scripts Section -->
<?php
//Calling Scripts Section
include 'app/assets/templates/template-scripts.php';
?>