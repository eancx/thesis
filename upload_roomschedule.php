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

	                $startTime = date('h:iA', strtotime($uploadData[0]));
	                $endTime = date('h:iA', strtotime($uploadData[1]));
	                $monday = $uploadData[2];
	                $tuesday = $uploadData[3];
	                $wednesday = $uploadData[4];
	                $thursday = $uploadData[5];
	                $friday = $uploadData[6];
	                $saturday = $uploadData[7];

	                if ($count > 1) {

	                    $sql = "INSERT into roomschedule(startTime, endTime, monday, tuesday, wednesday, thursday, friday, saturday)
	                    	   values ('$startTime', '$endTime','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday')";

	                    mysqli_query($conn, $sql) or die(mysqli_error());
	                }
	            }
	            fclose($file);
	            echo 'CSV File has been successfully uploaded';
	            header('Location: roomschedule.php');
	        } else {
	            echo "<script type='text/javascript'>alert('Please upload CSV File.'); window.history.back();</script>";
	        }
	    }
	}

	?>