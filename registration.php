<?php
	
include "connection.php";
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// $sql_query = "select count(*) as cntUser from details where username='".$username."'";
	// $result = mysqli_query($con,$sql_query);
	// $row = mysqli_fetch_array($result);

	// $count = $row['cntUser'];

	// if($count > 0){
	// 	echo '<script>alert("username already in use.")</script>';
	// }

	// $sql_query = "select count(*) as cntUser from details where emailid='".$email."'";
	// $result = mysqli_query($con,$sql_query);
	// $row = mysqli_fetch_array($result);

	// $count = $row['cntUser'];

	// if($count > 0){
	// 	echo '<script>alert("email id  already in use.")</script>';
	// }
		$stmt = "insert into details(name, username,emailid, password) values('$name', '$username', '$email', '$password')";
        $result = mysqli_query($con,$stmt);
		echo "Registration successfully...";
		header("location: index.html");
?>