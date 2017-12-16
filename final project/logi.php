<?php 
	$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));

 	if(isset($_POST['button'])){
		$email=mysqli_real_escape_string($con, $_POST['email']);
		$password=mysqli_real_escape_string($con, $_POST['password']);
		$pass=md5($password);
		$query="select id, name, email, password from users where email = '$email' and password = '$pass' ";
		$result=mysqli_query($con, $query);
		$row=mysqli_fetch_array($result);



		if(mysqli_num_rows($result)==1)
		{
				session_start();
			$_SESSION['id']=$row['id'];
			$_SESSION['name']=$row['name'];
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $pass;


			header("location:/fp/index.php");
		}
		else
		{
?>

	<div style="font-size: 18px;">
	<?php
	echo "<br><br><center>Wrong Username or Password</center><br><br>";  ?>
	</div>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	

</style>
</head>
<body>
	<div align="center" style="font-size: 18px;">
<p>
<a href="index.php"><button class="btn btn-primary">Try Again</button> <br></a> or<br> <a href="signup.php"><button class="btn btn-primary">Sign Up</button></a>
</p>
</div>
</body>
</html>


	<?php 
}
}

?>
<!-- here we are directed after the login page --> 

