<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style type="text/css">
	

</style>
</head>
<body>
<?php
if(isset($_SESSION['id'])){ 
	require 'header_logged_in.php'; 
?>

<div  class="container" style="margin-top: 60px;">
<b>
<?php
echo "Hi ".$_SESSION['name'];
 ?>
</b>
</div>


<div class=" row " >
	<div class=" col-lg-offset-2 col-lg-5 col-md-offset-3 col-md-6 col-xs-offset-2 col-xs-8" style="margin-top: 50px; ">
	
		<h2><strong> Change Password</strong> </h2>
		<form method="post" action="sett.php">
						<div class="form-group">
							<input type="Password" class="form-control" name="old-pwd" placeholder="Old Password">
						</div>

						<div class="form-group">
							<input type="Password" class="form-control" name="new-pwd" placeholder="New Password">
						</div>

						<div class="form-group">	
							<input type="Password" class="form-control" name="re-pwd" placeholder="Re-enter new Password">
						</div>

						<div>
							<button class="btn btn-primary" type="submit" value="submit"  name="button">Change</button>					
						</div>
		</form>
	</div>
</div>
<?php } ?>
</body>
</html>

