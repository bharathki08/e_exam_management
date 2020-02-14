<?php
	include 'conn.php';				
	session_start();
	if(!isset($_SESSION['role']) && !isset($_SESSION['user']) && !isset($_SESSION['dept']))
	{
		header('Location:index.php');
	}		
	if($_SESSION['role']!="admin")
	{
		header('Location:index.php');
	}
?>
<html>
<head>
<title>Geethanjali Institute of Science & Technnology</title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
	<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="jquery-1.12.0.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        </head>
<div class="container">
<div class="page-header" align="center">

<img src="images/logo.png" width="600" height="90">
<div style="float: right;"><span style="color:#060;font-size:25px">Welcome
<?php 	
	echo "<span style='color:red'>".$_SESSION['role']."</span>";
?>
</span>
<br/><a href="adminhome.php"><img src="images/home.png" width="100" height="40" alt="HOME" title="Click Here to Go Home"></a> &nbsp;
<a href="logout.php"><img src="images/logout.png" width="100" height="40" alt="LOGOUT" title="Click Here to Logout"></a> &nbsp;
</div>
</div>
</div>

<center>
<div align="center">
<h1 style="color:#03C">View Detained Students</h1>


<?php
{
	include 'conn.php';
$query = mysql_query("SELECT * FROM students WHERE status=0") or die("Sorry");
?>
<div style="width:80%">
<?php
 echo "<table class='table table-bordered'>

  <tr>
  <th></th>
    <th>Student ID</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>Regulation</th>
	<th>Department</th>
	<th>Year Of Join</th>
	<th>Status</th>
  </tr><form method='post' action='promotingofdetainstudents.php'>";

while ($row = mysql_fetch_array($query)){
	$depid=$row['dept_id'];
	$q=mysql_query("SELECT *FROM dept WHERE dept_id=$depid");
	$r=mysql_fetch_array($q);
	if($row['status']==0)
	{
		$status="DETAINED";
	}	
	$s=$row['stu_id'];
 echo "<tr><td><input type='checkbox' name='$s'></td><td>".$row['stu_id']."</td>";
  echo "<td>".$row['sname']."</td>";
  echo "<td>".$row['rollno']."</td>";
  echo "<td>".$row['reg']."</td>";
  echo "<td>".$r['dept_name']."</td>";
  echo "<td>".$row['year_of_join']."</td>";
  echo "<td>".$status."</td>";  
  echo "</tr>";

}
echo"<tr><td></td><td></td><td><input type='submit' name='submit' value='Promote the detain students'></td></tr>";
 
 echo "</table></form>";
}
if(isset($_POST['submit']))
{
	foreach($_POST as $key => $value)
	{
		if($key!='submit')
		{
			$q=mysql_query("UPDATE students SET status=1 WHERE stu_id=$key");
			if($q==true)
			{
				$q1=mysql_query("select *from students where stu_id=$key");
				$r1=mysql_fetch_array($q1);
				$dept=$r1['dept_id'];
				$year=$r1['year'];
				$sem=$r1['sem'];
				$reg=$r1['reg'];
				mysql_query("INSERT INTO promiting_notif (stu_id,dept_id,year,semester,reg) VALUES($key,$dept,$year,$sem,'$reg') ");
			}
			else
			{
				echo "Not Promoted";
			}
		}
	}
}
?>
</div>
</div></center>