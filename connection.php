<?php
	$Username = $_POST['Username'];
	$Email Address = $_POST['email'];
	$Password = $_POST['password'];
	$Confirm_password = $_POST['Confirm_password'];

$conn = new mysqli('localhost','root','','signup');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Username, email, password,Confirm_password ) values(?, ?, ?, ?,)");
		$stmt->bind_param("ssss", $Username, $Email Address, $Password, $Confirm password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
		}
?>