<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Quantex - Creative Coming Soon Template
        </title>
        <meta content="" name="description">
        <meta content="" name="author">
        <meta content="" name="keywords">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <!-- Quantex v1.0 || ex nihilo || June 2019 -->
        <!-- style start -->
        <link href="css/plugins.css" media="all" rel="stylesheet" type="text/css">
        <link href="css/style.css" media="all" rel="stylesheet" type="text/css"><!-- style end -->
        <!-- google fonts start -->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900%7COswald:300,400,700" rel="stylesheet" type="text/css"><!-- google fonts end -->
    </head>
    <body>
        <!-- preloader start -->
        <div class="preloader-bg"></div>
        <div id="preloader">
            <div id="preloader-status">
                <div class="preloader-position loader">
                    <span></span>
                </div>
            </div>
        </div><!-- preloader end -->
        <!-- top element start -->
        <div class="top-element top-position">
            <img style=" width: 200px; height: 200px;" src="img/page-title/page-title-home.png" alt="">
        </div><!-- top element end -->
        <!-- left element start -->
        <div class="left-element left-position">
            <!-- social icons start -->
            <ul>
                <li>
                    <a class="ion-social-facebook" href="#"><span>Facebook</span></a>
                </li>
                <li>
                    <a class="ion-social-instagram" href="#"><span>Instagram</span></a>
                </li>
                <li style="visibility: hidden;">
                    <a class="ion-social-twitter d-none" href="#"><span>Twitter</span></a>
                </li>
                
            </ul><!-- social icons end -->
        </div><!-- left element end -->
        <!-- right element start -->
        <div class="right-element right-position" id="open-newsletter">
            <span class="ion-ios-paperplane"></span>Newsletter sign up
        </div><!-- right element end -->
        <!-- bottom element start -->
        <div class="bottom-element bottom-position">
            <!-- countdown start -->
            <div class="center-space-bottom">
                <span id="countdown">This is placeholder data</span>
            </div><!-- countdown end -->
        </div><!-- bottom element end -->
        <!-- overlay start -->
        <div id="overlay"></div><!-- overlay end -->
        <!-- home start -->
        <section class="upper-page">
            <!-- center container start -->
            <div class="center-container-home fadeIn-element">
                <!-- center block start -->
                <div class="center-block-home">
                    <!-- page title wrapper start -->
                    <div class="page-title page-title-home">
                        <!-- page title start -->
                        <div class="page-title-content page-title-content-dark">
                          
                        </div><!-- page title end -->
                    </div><!-- page title wrapper end -->
                    <!-- play video button start -->
                        <div style="height: 500px;width: 100%;background-image: url('img/background/corp.jpg');background-position: center;background-size: contain;background-repeat: no-repeat;">
                        </div>
                    </div><!-- play video button end -->
                </div><!-- center block end -->
            </div><!-- center container end -->
        </section><!-- home end -->
        <!-- newsletter start -->
        <div id="panel-newsletter">
            <div class="panel-all">
                <!-- right element newsletter start -->
                <div class="right-element-newsletter">
                    Close
                </div><!-- right element newsletter end -->
                <!-- lower page start -->
                <div class="lower-page">
                    <div class="panel-all-inner">
                        <!-- center container start -->
                        <div class="center-container">
                            <!-- center block start -->
                            <div class="center-block">
                                <!-- lower content start -->
                                <div class="lower-content">
                                    <!-- container start -->
                                    <div class="container sections">
                                        <!-- row start -->
                                        <div class="row">
                                            <!-- col start -->
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <!-- page title wrapper start -->
                                                <div class="page-title page-title-subscribe">
                                                    <!-- page title start -->
                                                    <div class="page-title-content page-title-newsletter">
                                                        Contact Us
                                                    </div><!-- page title end -->
                                                </div><!-- page title wrapper end -->
                                                <!-- divider start -->
                                                <div class="inner-divider-post"></div><!-- divider end -->
                                                <!-- page subtitle start -->
                                                <div class="panel-all-subtitle">
                                                    Stay in the know
                                                </div><!-- page subtitle end -->
                                            </div><!-- col end -->
                                            <!-- col start -->
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <!-- divider start -->
                                                <div class="inner-divider-post-mobile"></div><!-- divider end -->
                                                <!-- newsletter form start -->
                                                <div id="subscribe-wrapper">
                                                    <div id="newsletter">
                                                        <div class="newsletter">
                                                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="subscribe" method="POST" >
                                                            <?php 
                                                                $firstName = ""; 
                                                                // $lastName = ""; 
                                                                // $userEmail = ""; 
                                                                $phoneNumber = ""; 
                                                                $message = ""; //first we leave email field blank
                                                                if(isset($_POST['contact'])){ //if subscribe btn clicked
                                                                $firstName = $_POST['name']; 
                                                                // $lastName = $_POST['lname'];
                                                                // $userEmail = $_POST['email']; //getting user entered email
                                                                $phoneNumber = $_POST['number']; 
                                                                $message = $_POST['message']; 
                                                                $new_message = filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

                                                                if(filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH)){ //validating user email
                                                                    $to = "info@propertymap.com.eg";
                                                                    $subject = "Message From PropertyMap Website";
                                                                    $txt ="Customer Name: ". $firstName. "\r\n Phone Number : ". $phoneNumber . "\r\n  Message : ". $new_message; 
                                                                    $headers = "From: noreply@Propertymap.com" . "\r\n" .
                                                                                "CC: ";                        //php function to send mail
                                                                    if(mail($to, $subject, $txt, $headers)){
                                                                    ?>
                                                                    <!-- show sucess message once email send successfully -->
                                                                    <script>
                                                                        const sucssess = Swal.mixin({
                                                                        sucssess: true,
                                                                        position: 'center',
                                                                        showConfirmButton: false,
                                                                        timer: 3000,
                                                                        timerProgressBar: true,
                                                                        didOpen: (sucssess) => {
                                                                            sucssess.addEventListener('mouseenter', Swal.stopTimer)
                                                                            sucssess.addEventListener('mouseleave', Swal.resumeTimer)
                                                                        }
                                                                        })

                                                                        sucssess.fire({
                                                                        icon: 'success',
                                                                        title: 'Thank You Message Sent Successfully !'
                                                                        })
                                                                    </script>
                                                                    <?php
                                                                    $userEmail = "";
                                                                    }else{
                                                                    ?>
                                                                    <!-- show error message if somehow mail can't be sent -->
                                                                    <script>
                                                                        const Toast = Swal.mixin({
                                                                        toast: true,
                                                                        position: 'center',
                                                                        showConfirmButton: false,
                                                                        timer: 3000,
                                                                        timerProgressBar: true,
                                                                        didOpen: (toast) => {
                                                                            toast.addEventListener('mouseenter', Swal.stopTimer)
                                                                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                                                                        }
                                                                        })

                                                                        Toast.fire({
                                                                        icon: 'error',
                                                                        title: 'Something Went wrong'
                                                                        })
                                                                    </script>
                                                                    <?php
                                                                    }
                                                                    }else{
                                                                    ?>
                                                                    <!-- show error message if user entered email is not valid -->
                                                                    <div class="alert alert-danger">
                                                                    <?php echo "$userEmail is not a valid email address!" ?>
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                }
                                                            ?>
                                                                <input class="subscribe-requiredField subscribe-email" id="subscribe-email" name="subscribe-email" placeholder="Name" type="text"> 
                                                                <input class="subscribe-requiredField subscribe-email" id="subscribe-email" name="subscribe-email" placeholder="Phone Number" type="text"> 
                                                                <input class="subscribe-requiredField subscribe-email" id="subscribe-email" name="subscribe-email" placeholder="Email" type="text"> 
                                                                <!-- newsletter submit button start -->
                                                                <div class="the-button-wrapper">
                                                                    <button class="the-button the-button-submit" id="submit-2" type="submit"><span>Subscribe</span></button>
                                                                </div><!-- newsletter submit button end -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!-- newsletter form end -->
                                                <!-- divider start -->
                                                <div class="inner-divider-post"></div><!-- divider end -->
                                                <!-- page subtitle start -->
                                                <div class="panel-all-subtitle">
                                                    We don't spam
                                                </div><!-- page subtitle end -->
                                            </div><!-- col end -->
                                        </div><!-- row end -->
                                    </div><!-- container end -->
                                </div><!-- lower content end -->
                            </div><!-- center block end -->
                        </div><!-- center container end -->
                    </div>
                </div><!-- lower page end -->
            </div>
        </div><!-- newsletter end -->
        <!-- scripts start -->
        <script src="js/plugins.js">
        </script> 
        <script src="js/quantex.js">
        </script><!-- scripts end -->
    </body>
</html>