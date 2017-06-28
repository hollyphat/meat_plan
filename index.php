<?php
/**
 * Created by PhpStorm.
 * User: Hollyphat
 * Date: 6/22/2017
 * Time: 8:39 PM
 */
    require_once "core/all.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="lib/font-awesome/font-awesome.min.css">
        <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/slick.css">
        <title><?php echo site_name();?> - Home</title>
    </head>

    <body data-unit="metric">

    <header>
        <nav>
            <div class="container">
                <div class="social clearfix">
                    <ul>
                        <li><a href="contacts">Contacts</a></li>
                    </ul>
                </div>

                <div class="mobileMenu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>

            </div>
        </nav>
        <div class="imageHolder home step headerImage10" style="background: url('img/lazarbackground.jpg') no-repeat center center; background-size: cover;">

        </div>
        <div class="headings">
            <a href="">
                <div class="logo home">
                    <img src="img/logo.png" alt="<?php echo site_name();?>" title="<?php echo site_name();?> Meal Plan">
                </div>
            </a>
            <h1>

                We believe  meal plan should be personal since our body type, body composition and goals are all different
                <span>Start Your Quiz</span>
            </h1>
        </div>
    </header>
        <section id="home">
            <div class="myProgress">
                <div class="myProgressBar" style="width: 11.090909090909%"></div>
                <div class="progressIndicator" style="left: 11.090909090909%">
                    <div>Question 1</div>
                </div>
            </div>
            <section class="gender">
                <div class="container">
                    <h2>Please specify your gender</h2>
                    <div class="genderChoice">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <div class="choiceInfo">
                                    <ul class="clearfix">
                                        <li><i class="fa fa-exclamation-circle" aria-hidden="true"></i></li>
                                        <li>Please enter your information and you will receive <?php echo site_name();?> meal plan.</li>
                                    </ul>
                                </div>
                            </div>
                            <form action="step2.php" method="POST" id="genderForm" style="display: none;">
                                <input name="gender" value="<?php echo @$_SESSION['gender'];?>" id="genderInput" type="hidden">
                                <input name="type" value="gender" type="hidden">
                                <input name="_token" value="" type="hidden">
                            </form>
                            <div class="col-sm-6">
                                <div class="col-sm-6">
                                    <div class="male genderChoiceElem" data-gender="Male" style="height: 244px;">
                                        <?php echo file_get_contents("img/male.svg");?>
                                        <span>Male</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="female genderChoiceElem" data-gender="Female" style="height: 244px;">
                                        <?php echo file_get_contents("img/female.svg");?>
                                        <span>Female</span>
                                    </div>
                                </div>

                            </div>
                            <?php include_once "inc/steps.php";?>
                        </div>
                    </div>

                    <div class="genderChoiceMobile">
                        <div class="male genderChoiceElem" data-gender="Male" style="height: 200px;">
                            <?php echo file_get_contents("img/male.svg");?>
                            <div>Male</div>
                        </div>

                        <div class="female genderChoiceElem" data-gender="Female" style="height: 200px;">
                            <?php echo file_get_contents("img/female.svg");?>
                            <div>Female</div>
                        </div>


                        <div class="choiceInfo">
                            <ul class="clearfix">
                                <li><i class="fa fa-exclamation-circle" aria-hidden="true"></i></li>
                                <li>Please enter your information and you will receive <?php echo site_name();?> meal plan.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="choiceInfo mobile">
                        <ul class="clearfix">
                            <li><i class="fa fa-exclamation-circle" aria-hidden="true"></i></li>
                            <li>Please enter your information and you will receive <?php echo site_name();?> meal plan.</li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>


        <?php include_once("inc/foot.php");?>
    </body>
</html>
