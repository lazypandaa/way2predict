<?php
$connection=mysqli_connect('localhost','root','');
mysqli_select_db( $connection,'collegedb');

	$uname=$_POST['uname'];
	$pass=$_POST['pass'];

	$query="INSERT INTO login VALUES('$uname','$pass')";
        $query_run=mysqli_query($connection,$query);
	if($query_run>0){
		//INSERT INTO login VALUES('$uname','$pass');
		header("location:polycet1.html");
		}

mysqli_close($connection);

?>