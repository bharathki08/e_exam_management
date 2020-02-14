<?php
	include 'conn.php';				
	session_start();
	if(!isset($_SESSION['role']) && !isset($_SESSION['user']) && !isset($_SESSION['dept']))
	{
		header('Location:index.php');
	}		
	if($_SESSION['role']!="hod")
	{
		header('Location:index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
	<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="jquery-1.12.0.min.js"></script>
	<link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
		<title>Geethanjali Institute of Science & Technology</title>
<style>
.dropdown-  a:hover {
    display: block;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#339;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color:#FFF;
	color: #339;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<div class="header" align="left">
<img src="images/logo.png" width="500" height="80">
<div style="float: right;"><span style="color:#060;font-size:25px">Welcome 
<?php 
	echo "<span style='color:red'>".$_SESSION['user']."</span>";	
?>
<br/>
<a href="logout.php"><img src="images/logout.png" width="140" height="40"></a>
</span>
<span style="color:red;font-size:25px">


</span>
</div>
</div>
<br/><br/>
<div class= "nav nav-tabs">
<ul>
  <li><a class="active" href="hodhome.php">Home</a></li>
  <li><a class="active" href="viewdeptstu.php">View Student List</a></li>
  <li><a class="active" href="view_internals.php">View Internal Marks</a></li>
<!--<li><a class="active" href="#">Upload Question Paper</a></li> -->
<li><a class="active" href="fac_settings.php">Settings</a></li>
<li><a class="active" href="logout.php">Logout</a></li>

</ul>
</div>
</head>
<body>
<center>
<div style="float:left"></div>
<div style="float:right;margin-right:20px">
<div style="color:#D00207;font-size:24px;" align="center">Promoted student List </div>
<div style="width:60%">
<style>
	th{
		color:#060;
	}
</style>
	<?php
		include 'conn.php';
		$query=mysql_query("SELECT *FROM promiting_notif");
		echo "<table class='table table-bordered'><tr>";
		echo "<tr><th>Roll Number</th><th>Name Of The Student</th><th>Department</th><th>Year</th><th>Semester</th><th>Regulation</th><th>Year of Joined</th><th>Status</th></tr>";
		while($row=mysql_fetch_array($query))
		{
			$id=$row['stu_id'];
			$q=mysql_query("SELECT *FROM students WHERE stu_id=$id");
			$r=mysql_fetch_array($q);
			$deptid=$r['dept_id'];

			$q1=mysql_query("SELECT *FROM dept where dept_id=$deptid");
			$r1=mysql_fetch_array($q1);
			
			echo "<tr><td>".$r['rollno']."</td><td>".$r['sname']."</td><td>".$r1['dept_name']."</td><td>".$r['year']."</td><td>".$r['sem']."</td><td>".$r['reg']."</td><td>".$r['year_of_join']."
			</td><th>Promoted</th></tr>";
		}
		echo "</table>";
	?>
    </div>
</div>
</center>
</body>
</html>