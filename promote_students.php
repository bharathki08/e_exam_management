
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
<body>
<center>
<form method="post" action="promote_students.php" role="form">
<div  style="margin-left:400px">
	<div class="form-group col-xs-2"><select name="dept" class="form-control">
    	<option>Select Branch</option>
        <option value="1">CIVIL</option>
        <option value="2">EEE</option>
        <option value="3">MECHANICAL</option>
        <option value="4">ECE</option>
        <option value="5">CSE</option>
    </select>
    </div>
    <div class="form-group col-xs-4">
	<button type="submit" name="promote" class="form-control btn btn-success">Click here to Promote</button></div>
</form>
</div>
<?php
	include 'conn.php';
	if(isset($_POST['promote']))
	{
		extract($_POST);
		$count=0;
		$query=mysql_query("SELECT *FROM students where dept_id=$dept AND status=1 ");

		while($row=mysql_fetch_array($query))
		{					
			$db_year=$row['year'];
			$db_sem=$row['sem'];	
		
			if(($db_year==4) && ($db_sem==1))
			{						
				mysql_query("UPDATE students SET sem=2, year=4 WHERE year=$db_year AND sem=$db_sem");
			}
			if(($db_year==4) && ($db_sem==2))
			{						
				mysql_query("UPDATE students SET sem=0, year=0 WHERE year=$db_year AND sem=$db_sem");

			}					
			if(($db_year==3) && ($db_sem==1))
			{						
				mysql_query("UPDATE students SET sem=2, year=3 WHERE year=$db_year AND sem=$db_sem");

			}	
			if(($db_year==3) && ($db_sem==2))
			{						
				mysql_query("UPDATE students SET sem=1, year=4 WHERE year=$db_year AND sem=$db_sem");

			}	
			if(($db_year==2) && ($db_sem==1))
			{						
				mysql_query("UPDATE students SET sem=2, year=2 WHERE year=$db_year AND sem=$db_sem");

			}	
			if(($db_year==2) && ($db_sem==2))
			{						
				mysql_query("UPDATE students SET sem=1, year=3 WHERE year=$db_year AND sem=$db_sem");

			}	
			if(($db_year==1) && ($db_sem==2))
			{						
				mysql_query("UPDATE students SET sem=1, year=2 WHERE year=$db_year AND sem=$db_sem");
			}	
			if(($db_year==1) && ($db_sem==1))
			{						
				mysql_query("UPDATE students SET sem=2, year=1 WHERE year=$db_year AND sem=$db_sem");
			}  		
			//echo $row['year']."--".$row['sem'];					
		}

	}
?>
</center>
</body>
</html>
