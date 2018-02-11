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

	            while (($uploadData = fgetcsv($file, 1000, ",")) !== FALSE) {

	                $count++;

	                $time = $uploadData[0];
	                $monday = $uploadData[1];
	                $tuesday = $uploadData[2];
	                $wednesday = $uploadData[3];
	                $thursday = $uploadData[4];
	                $friday = $uploadData[5];
	                $saturday = $uploadData[6];

	                if ($count > 1) {

	                    $sql = "INSERT into roomschedule(time, monday, tuesday, wednesday, thursday, friday, saturday)
	                    						 values ('$time','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday')";

	                    mysqli_query($conn,$sql) or die(mysqli_error());
	                }
	            }

	            fclose($file);
	            echo 'CSV File has been successfully uploaded';
	            header('Location: roomSchedule.php');
	        } else {
	            echo "<script type='text/javascript'>alert('Please upload CSV File.'); window.history.back();</script>";
	        }
	    }
	}

	?>