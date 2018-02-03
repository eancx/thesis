<?php

include("db_connect.php");
session_start();

if(isset($_POST['roomschedule'])){

	$truncate = "TRUNCATE table roomschedule";
    mysqli_query($conn, $truncate) or die(mysqli_error());

	$tmpfile = $_FILES["file"]["tmp_name"];
	    foreach ($tmpfile as $key => $filename) {

	        if ($_FILES["file"]["size"] > 0) {
	            $file = fopen($filename, "r");
	            $count = 0;

	            while (($emapData = fgetcsv($file, 1000, ",")) !== FALSE) {

	                $count++;

	                $time = $emapData[0];
	                $monday = $emapData[1];
	                $tuesday = $emapData[2];
	                $wednesday = $emapData[3];
	                $thursday = $emapData[4];
	                $friday = $emapData[5];
	                $saturday = $emapData[6];

	                if ($count > 1) {

	                    $sql = "INSERT into roomschedule(time, monday, tuesday, wednesday, thursday, friday, saturday)
	                    						 values ('$time','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday')";

	                    mysqli_query($conn,$sql) or die(mysqli_error());
	                }
	            }

	            fclose($file);
	            echo 'CSV File has been successfully Imported';
	            header('Location: roomschedule.html');
	        } else {
	            echo 'Invalid File:Please Upload CSV File';
	        }
	    }
	}

	?>