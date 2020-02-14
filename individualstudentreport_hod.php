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
	echo "<span style='color:red'>Principal</span>";
?>
</span>
<br/><a href="adminhome.php"><img src="images/home.png" width="100" height="40" alt="HOME" title="Click Here to Go Home"></a> &nbsp;
<a href="logout.php"><img src="images/logout.png" width="100" height="40" alt="LOGOUT" title="Click Here to Logout"></a> &nbsp;
</div>
</div>
</div>
<body>
<form method="post" action="individualstudentreport_hod.php" role="form">
	<label>Enter Student Roll No:</label><br/><input type="text" name="rollno" class="col-lg-3" placeholder="Enter Roll Number Of a Student"><br /></br>
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
</form>
<?php
	include 'conn.php';
	if(isset($_POST['submit']))
	{
			extract($_POST);
			$roll=strtoupper($rollno);
			$query=mysql_query("SELECT *FROM students WHERE rollno='$roll'");
			if(mysql_affected_rows()==1)
			{
				$row=mysql_fetch_array($query);
				$sid=$row['stu_id'];
				$q=mysql_query("SELECT *FROM master WHERE stu_id=$sid");
				$r=mysql_fetch_array($q);
				echo "<table ><tr><td><b>Name of The Student</b></td><td>".$row['sname']."</td></tr>";
				echo "<tr><td><b>Roll Number</b></td><td>".$row['rollno']."</br></td></tr>";
				echo "<tr><td></br><b>Year</td><td><b>Semester</b></td><td><b>Regulation</b></td></tr><tr><td>".$row['year']."</td><td>".$row['sem'].
				"</td><td>".strtoupper($row['reg'])."</td></tr></table></br></br>";
				echo "<table class='table table-bordered'><tr><td><b>Year and Semester</b></td><td><b>Total Credits For the semester</b></td><td><b>Total Marks for the semester</b></td><td>No of Backlogs</td></b></tr>";
				echo"<td><b>1st Year 1st Semester</b></td><td>".$r['11_tot']."</td><td>".$r['11_credits']."</td><td>".$r['11_blcount']."</td></tr>";
				echo "<tr><td><b>1st Year 2nd Semester</b></td><td>".$r['12_tot']."</td><td>".$r['12_credits']."</td><td>".$r['12_blcount']."</td></tr>";
				echo "<tr><td><b>2nd Year 1st Semester</b></td><td>".$r['21_tot']."</td><td>".$r['21_credits']."</td><td>".$r['21_blcount']."</td></tr>";
				echo "<tr><td><b>2nd Year 2nd Semester</b></td><td>".$r['22_tot']."</td><td>".$r['22_credits']."</td><td>".$r['22_blcount']."</td></tr>";
				echo "<tr><td><b>3rd Year 1st Semester</b></td><td>".$r['31_tot']."</td><td>".$r['31_credits']."</td><td>".$r['31_blcount']."</td></tr>";
				echo "<tr><td><b>3rd Year 2nd Semester</b></td><td>".$r['32_tot']."</td><td>".$r['32_credits']."</td><td>".$r['32_blcount']."</td></tr>";
				echo "<tr><td><b>4th Year 1st Semester</b></td><td>".$r['41_tot']."</td><td>".$r['41_credits']."</td><td>".$r['41_blcount']."</td></tr>";
				echo "<tr><td><b>4th Year 2nd Semester</b></td><td>".$r['42_tot']."</td><td>".$r['42_credits']."</td><td>".$r['42_blcount']."</td></tr>";
				echo "<tr><td><b>Grand Total Marks</b></td><td>".$r['marks']."</td></tr>";
				echo "<tr><td><b>Grand Total Percentage</b></td><td>".$r['marks']."</td></tr>";

			}
			echo "</table>";
	}
?>