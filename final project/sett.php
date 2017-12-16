

<!-- settings page's main php file -->
<?php 
$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
session_start();
 
$old_password=mysqli_real_escape_string($con, $_POST['old-pwd']);
$new_password=mysqli_real_escape_string($con, $_POST['new-pwd']);
$re_password=mysqli_real_escape_string($con, $_POST['re-pwd']);
$old_pass=md5($old_password);
$new_pass=md5($new_password);
$re_pass=md5($re_password);

$user_id= $_SESSION['id'];
$user_pass= $_SESSION['password'];

if($old_pass == $user_pass)
{
	if($new_pass == $re_pass)
	{
		$update_query="update users set password = '$new_pass' where id = '$user_id'";
		$update_result=mysqli_query($con, $update_query) or die(mysqli_error($con));
		$_SESSION['password']= $new_pass;
		echo "Password Updated Successfully<br>";
?>
<a href="index.php">Continue Shopping.</a>
<?php
	}
	else
	{
		echo "Re-Entered password didn't match the newly entered password.";
	}
}
else
{
	echo "Old Password entered is wrong.";
}
?>