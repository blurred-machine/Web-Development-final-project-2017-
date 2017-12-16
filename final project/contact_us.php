<?php ?>

<!DOCTYPE html>
<html>
<head>
	<title>E-Store | Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


</head>
<body>
<?php require 'header_logged_out.php' ?>

<div class="row" >
	<div class="container" style="margin-top: 80px; padding: 20px; border: 3px solid #bbb ">
	<div class="row-style-login-page-pannel">
		<div class="col-sm-9 col-xs-12">
			<h2>LIVE SUPPORT</h2>
			<h3>24 hours | 7 days a week | 365 days in a year Live Technical Support</h3>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variants of passaages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
			</div>
			<div class="col-sm-3 col-xs-12">
			<!-- contact us pic-->
			<img src="images\livesupport.png">

			</div>

		</div>
	</div>
</div>





<div class="row">
	<div class="container" style="margin-top: 20px; margin-bottom: 50px;">
	<div class="row-style-login-page-pannel" >
		<div class="col-sm-6 col-xs-12" >
			<h3>CONTACT US</h3>
			<form method="post"  action="cont.php">
				<div class="form-group">
					Name:<input type="text" class="form-control" name="name" >
				</div>

				<div class="form-group">
					Email Id:<input type="email" class="form-control" name="email" >
				</div>

				<div class="form-group">
					Message:<textarea rows="4"  class="form-control" name="message"></textarea>
				</div>

					<button class="btn btn-primary" type="submit" value="Submit"  name="button">Submit</button>						
						</button>

			</form>
			
			</div>
			<div class="col-sm-offset-1 col-sm-5 col-xs-12" style="border-left: 2px solid #ccc">
			<h3>Company Information:</h3>
			<p>500, Lorem Ipsum Dolor Sit,<br>22-56-2-9 Sit Amet, Lorem,<br>USA<br>Phone:(00)22-666-444<br>Fax: (000) 22-444-111<br>Email:info@mycompany.com<br>Follow on:Facebook, Twitter<br></p>
			</div>

		</div>
	</div>
</div>





<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>
</body>
</html>