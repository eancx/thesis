<?php

include("db_connect.php");
session_start();

if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contactnumber = $_POST['contactnumber'];

	$query = "SELECT * from login where username = '$username'";
	$result= mysqli_query($conn, $query);
	if(mysqli_num_rows($result) != 0){
        echo "<script type='text/javascript'>alert('Username already existed.'); window.history.back();</script>"; // ERROR POPUP HERE IF EXISTING USERNAME IS ENTERED BY USER
	} else{
		if(!empty($username) && !empty($password) && !empty($repassword) && !empty($name) && !empty($email) && !empty($contactnumber)){
			if($password == $repassword){
				$insertquery = "INSERT into login(username, password, name, email, contactnumber) 
										  values ('$username', md5('$password'), '$name', '$email', '$contactnumber')";
				mysqli_query($conn, $insertquery) or die(mysqli_error());
                header('Location: newuser.html');
			}
		} else{
            echo "<script type='text/javascript'>alert('Fill all fields.'); window.history.back();</script>";
		}
	}
}
?>