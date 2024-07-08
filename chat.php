<?php 
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Coming Soon Page">
        <meta name="keywords" content="coming soon, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Your Company">
        <meta name="robots" content="noindex, nofollow">
        <title>Coming Soon - LAK Internship</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo_lak.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<style>
			body, html {
				height: 100%;
				margin: 0;
				font-family: Arial, Helvetica, sans-serif;
			}

			.bgimg {
				background-image: url('assets/img/coming_soon_bg.jpg');
				height: 100%;
				background-position: center;
				background-size: cover;
				position: relative;
				color: black;
				font-family: 'Courier New', Courier, monospace;
				font-size: 25px;
			}

			.topleft {
				position: absolute;
				top: 0;
				left: 16px;
			}

			.bottomleft {
				position: absolute;
				bottom: 0;
				left: 16px;
			}

			.middle {
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				text-align: center;
			}

			hr {
				margin: auto;
				width: 40%;
			}

			.countdown {
				font-size: 100px;
			}
		</style>
	</head>
    <body>
		<div class="bgimg">
			<div class="topleft">
				<img src="assets/img/logo_lak.png" alt="logo" width="200">
			</div>
			<div class="middle">
				<h1>COMING SOON</h1>
				<hr>
				<p id="countdown" class="countdown"></p>
			</div>
			<div class="bottomleft">
				<p>Contact dev at: joelaran1302@gmail.com</p>
			</div>
		</div>

		<script>
			// Set the date we're counting down to
			var countDownDate = new Date("Sept 31, 2024 15:37:25").getTime();

			// Update the count down every 1 second
			var x = setInterval(function() {

				// Get today's date and time
				var now = new Date().getTime();
				
				// Find the distance between now and the count down date
				var distance = countDownDate - now;
				
				// Time calculations for days, hours, minutes and seconds
				var days = Math.floor(distance / (1000 * 60 * 60 * 24));
				var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				var seconds = Math.floor((distance % (1000 * 60)) / 1000);
				
				// Display the result in the element with id="countdown"
				document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
				+ minutes + "m " + seconds + "s ";
				
				// If the count down is over, write some text 
				if (distance < 0) {
					clearInterval(x);
					document.getElementById("countdown").innerHTML = "EXPIRED";
				}
			}, 1000);
		</script>
    </body>
</html>
