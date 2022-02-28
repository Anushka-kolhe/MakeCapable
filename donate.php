<?php
include_once 'database.php';
if(isset($_POST['save']))
{
	$name = $_POST['name'];
	$email=$_POST['email']; 
	$mobile=$_POST['phone']; 
	$amount=$_POST['amount']; 

	$sql = "INSERT INTO details (name,email,phone,amount)VALUES('$name','$email','$phone','$amount')";
	if (mysqli_query($conn, $sql)){
		
		echo '<script>window.location.href ="https://rzp.io/l/5z90H7CW";</script>';
	}
	else{
		echo "Error:" .$sql ."" .mysqli_error($conn);
	}
}mysqli_close($conn);
?>