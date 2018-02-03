<?php

include("db_connect.php");
session_start();


if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == "" || $password == "") {
     	echo "Either username or password field is empty.";
        echo "<br/>";
        echo "<input type='submit' name='cancel' value='Back' onclick='goBack()'>";
    }else{

    	$query = "SELECT * from login where username = '$username' AND password = md5('$password')";
    	$result = mysqli_query($conn, $query);

    	$row = mysqli_fetch_assoc($result);

        if (is_array($row) && !empty($row)) {
            $_SESSION['username'] = $row['username'];

            header('Location: attendance.html');
        } else {
            header('Location: loginFailed.html');
        }
    }
}

?>
