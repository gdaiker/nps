<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		
        <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$dropdown = $POST['dropdown'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "greg@bigmpg.com";
$subject = "Inquiry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo 
"<body>
    	<!--[if lt IE 7]>
        	<p class='browsehappy'>You are using an <strong>outdated</strong> browser. Please <a href='http://browsehappy.com/'>upgrade your browser</a> to improve your experience.</p>
    	<![endif]-->

   		<header class='thanks-page'>
                <a href='index.html' >
                    <img src='img/header-logo.svg' />
				</a>	
    	</header>
		
		<section class='thanks'>
			<div class='page-width'>
				<img src='img/logo.svg' />
				<h1>Thank You for Contacting <b>Non-Profit Solutions</b></h1>
				<p>We will get back to you shortly.</p>
				<a href='index.html'><button class='large-button'>Back to our Website</button></a>
			</div>
		</section>

<!-- FOOTER --> 
			<footer>
            <img class='footer-logo' src='img/header-logo.svg' />
            <h1>Non-Profit <b>Solitions</b></h1>
            <ul class='clearfix'>
            	<li>2715 Tyein Place</li>
            	<li>Brookfield, Wisconsin 53045</li>
            	<li><b>Phone:</b> 262.501.1509</li>
            	<li><b>Email:</b> <a href='mailto:erictillich@yahoo.com'>erictillich@yahoo.com</a></li>
            </ul>
            <div class='social clearfix'>
            	<a href='https://plus.google.com/113298514500220019844/about' target='_blank' ><img src='img/google-icon.svg' /></a>
                <a href='https://www.facebook.com/nonprofitsolutionsllc' target='_blank' ><img src='img/facebook-icon.svg' /></a>
            </div>
        </footer>
        
        <div id='fade'></div> 
       
        <script>window.jQuery || document.write('<script src='js/vendor/jquery-1.10.2.min.js'><\/script>')</script>
        <script src='js/plugins.js'></script>
        <script src='js/main.js'></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>"
?>
