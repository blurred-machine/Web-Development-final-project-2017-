

<?php
if(!isset($_SESSION['id'])){  ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  
</head>
<body>
<footer>
	<div class="container">
		<div class="row" >
			<div class=" col-md-4 col-xs-12" >
				<h3>Information</h3>
				<ul>
					<li><a href="about_us.php">About Us</a></li>
					<li><a href="contact_us.php">Contact Us</a></li>
				</ul>
			</div>

			<div class=" col-md-4  col-xs-12">
				<h3>My Account</h3>
				<ul>
					<li ><a  data-toggle="modal" data-target="#pz">Login</a></li>
					<li><a href="signup.php">Sign Up</a></li>
				</ul>
			</div>

			<div class=" col-md-4  col-xs-12">
				<h3>Contact Us</h3>
				<ul>
					<li>+91-735-0000000</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<nav class="footer-copyright">
	<div class="container-fluid" style="background-color: black; color: #888">
		<p><center>Copyright © E-Store. All Rights Reserved | Contact Us: +91 7358337024 | Developed By:  Paras Varshney | <a href="mailto:paras.varshney97@gmail.com">paras.varshney97@gmail.com</a></center></p>
	</div>
</nav>
</body>
</html>

<?php require 'login_modal.php'; ?>

<?php } ?>

