<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html class=""> <!--<![endif]-->
<head>

    <?php include 'header.php'; ?>

    <!-- Custom Login Styles -->
    <link rel="stylesheet" href="css/custom_login.css" />
</head>
<body class="soap-login-page style1 body-blank">
    <div id="page-wrapper" class="wrapper-blank">
        <section id="content">
            <div class="container">
                <div id="main">
                    <h1 class="logo block">
                        <a href="" title="">
                            <img src="images/id90_header_logo.png" style="width: 230px;height: auto;" />
                        </a>
                    </h1>
                    <div class="text-center yellow-color box" style="font-size: 4em; font-weight: 300; line-height: 1em;">Welcome</div>
                    <p class="light-blue-color block" style="font-size: 1.3333em;">Please login to your account.</p>
                    <div class="col-sm-8 col-md-6 col-lg-5 no-float no-padding center-block">
                        <?php if(isset($_GET['error'])){echo '<p><h3 style="color:red"> '.$_GET['error'].' </h3></p>';} ?>
                        <form class="login-form" action="phpfunctions/authlogin.php" method="post">
                            <input value="HAWAIIAN AIRLINES (HA)" type="hidden" class="input-text input-large full-width" placeholder="enter your email or username">
                            <div class="selector form-group">
                                <select name="airline" class="full-width" required="">
                                    <option value="">Select Airline</option>
                                    <?php
                                        // Trae las Aerolineas por GET
                                        include 'phpfunctions/getListAirlines.php'; 
                                        echo getAirOptions($airline);
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input name="username" type="text" class="input-text input-large full-width" placeholder="enter your email or username" required="" value="<?php echo $username;?>">
                            </div>
                            <div class="form-group">
                                <input name="password" value="" type="password" class="input-text input-large full-width" placeholder="enter your password" required="">
                            </div>
                            <div class="form-group">
                                <label class="checkbox">
                                    <input type="checkbox" value="" name="remember_me">remember
                                </label>
                            </div>
                            <button type="submit" class="btn-large full-width sky-blue1">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include 'footerjs.php';?>
    
</body>
</html>