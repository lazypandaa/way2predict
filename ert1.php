<html>
<head>

<style>
header{
position:fixed;
top:0;
left:0;
right:0;
background-color: rgba(22,34,57,0.95);
box-shadow:0 5px 10px rgba(0,0,0,l.1);
padding:4px 5%;
display:flex;
align-items:center;
height:53px;
justify-content:space-between;
}
.logo{
font-weight:bolder;
font-size:30px;
color:#333;
margin-left:10px;
cursor:pointer;
color:white;

}
header .navbar ul {
position:relative;
float:left;

}
header .navbar ul  a{
font-size:20px;
padding:20px;
color:#333;
display:inline-block;
text-decoration:none;
color:white;
}
header .navbar ul  a:hover{
background:#333;color:#fff;
}

   table.auto{
  border: 1px solid black;
  background-color: #ffff;
  width: 100%;
  text-align: left;
  margin-top:5px;
    border-collapse: collapse;
}
table.auto td, table.auto th {
  border:  1.5px solid black;
  padding: 3px 2px;
  text-align:center;
}
table.auto tbody td {
  font-size: 15px;
}
table.auto tr:nth-child(even) {
  background: #CED5D5;
}
table.auto #header {
  background: orange;
  border-bottom: 0px solid #CDCDCD;
    cursor:pointer;
}
table.auto #header td {
  font-size:20px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 1px solid #D0E4F5;
  text-align:center;
}
table.auto thead th:first-child {
  border-left: none;
}
   
</style>
</head>


<body>
    <header>

<h1 class="logo">way2predict</h1>
<nav class="navbar">
<ul>
<a href="ergcd1.html">Back</a>
</ul>
</header>
<center>
   <h1 style="margin-top:80px;">Predicted Colleges</h1>
</center>
     <table align="center" border="0.5" style="width:auto; line-height:auto; font-size:20px; font-weight:bold" class="auto" >
        
	<tr id="header" height="40px">
	    <th>College Code</th>
		<th>College Name</th>
		<th>Location</th>
		<th>District</th>
		<th>Region</th>
		<th>Collegetype</th>
		 <th>Minority</th>
		<th>Co-Edu</th>
		<th>Branch Code</th>
		<th>Branch Name</th>
		<th>gender</th>
		<th>caste</th>
		<th>Max.Rank</th>
	</tr>
<?php
error_reporting(0);
$connection=mysqli_connect('localhost','root','');
mysqli_select_db( $connection,'collegedb');

if(isset($_POST['predict']))
{

	$rank=$_POST['rank'];
	$gender=$_POST['gender'];
	$caste=$_POST['caste'];
	$district=$_POST['district'];
	$collegetype=$_POST['collegetype'];
	$region=$_POST['region'];
	$branchname=$_POST['branchname'];

	$query="SELECT * from btech where ('$rank'<=rank and gender='$gender' and caste='$caste' and location='$district' AND branchname='$branchname' AND collegetype='$collegetype' AND region='$region') order by rank";
    $query_run=mysqli_query($connection,$query);
    while($row=mysqli_fetch_array($query_run))
		    {?>
		
						<tr>
						    <td id="col1"><?php echo $row['collegecode']?></td>
						    <td><?php echo $row['collegename']?></td>
						    <td><?php echo $row['location']?></td>						
						    <td><?php echo $row['district']?></td>
						    <td><?php echo $row['region']?></td>
						    <td><?php echo $row['collegetype']?></td>
						    <td><?php echo $row['minarity']?></td>
						    <td><?php echo $row['coedu']?></td>
						    <td><?php echo $row['branch code']?></td>
						    <td><?php echo $row['branchname']?></td>
						    <td><?php echo $row['gender']?></td>
						    <td><?php echo $row['caste']?></td>
						    <td><?php echo $row['rank']?></td>
						</tr>
			
		
	   <?php }

	
}?>



	</table>
<center><h4>No Other Data Found  </h4></center>
</body></html>
