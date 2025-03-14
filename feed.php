<?php
$connection=mysqli_connect('localhost','root','');
mysqli_select_db( $connection,'collegedb');

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$query="INSERT INTO feed VALUES('$fname','$lname','$email','$message')";
        $query_run=mysqli_query($connection,$query);
	if($query_run>0){
		echo 'alert("JavaScript Alert Box by PHP")';
		header("location:index1.html");
		}

mysqli_close($connection);

?>