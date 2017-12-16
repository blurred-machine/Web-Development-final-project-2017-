
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

<?php 
$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
 session_start();

 if(isset($_SESSION['id']))
 {
    $user_id= $_SESSION['id'];
    $prod_id= $_POST['prodno'];

    if($prod_id <= 6)
    {
    	$user_reg="insert into users_products(user_id, product_id) values('$user_id','$prod_id')";
    	$result=mysqli_query($con, $user_reg) or die(mysqli_error($con));
    	echo "<center>Product Successfully Added to Cart</center>";
?>
	<div align="center" style="font-size: 18px;">
		<br><br>
	<p>
	<a href="index.php"><button class="btn btn-primary">Continue Shopping</button> <br></a> or<br> <a href="cart.php" class="btn btn-primary">Move to Cart</a>
	</p>
	</div>
<?php } 
	   else
	{ 
		echo "<center>Wrong Product ID <br> Please check user ID before entering.</center>"; ?><br><br>
		<a href="index.php"><center><button class="btn btn-primary">Try again</button></center> <br></a>
<?php } } ?>

</body>
</html>
