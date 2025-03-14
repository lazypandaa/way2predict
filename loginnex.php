<?php

$connection=mysqli_connect('localhost','root','');
mysqli_select_db( $connection,'collegedb');

	$uname=$_POST['uname'];
	$pass=$_POST['pass'];

	$query="SELECT * from login where uname='$uname' AND pass='$pass' ";
        $query_run=mysqli_query($connection,$query);
	if($query_run!=0){
		header("location:polycet1.html");
		$query1="INSERT INTO `login`(`uname`, `pass`) VALUES ('$uname','$pass')";
		}
	else{
		if($connection){
			$query1="INSERT INTO `login`(`uname`, `pass`) VALUES ('$uname','$pass')";
        		$query_run=mysqli_query($connection,$query1);
			header("location:polycet1.html");
		}
	}

mysqli_close($connection);

?>
	 