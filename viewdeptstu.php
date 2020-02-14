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
  <li><a class="active" href="home.php">Home</a></li>
  <li><a class="active" href="viewdeptstu.php">View Student List</a></li>
  <li><a class="active" href="view_internals.php">View Internal Marks</a></li>
<!--<li><a class="active" href="#">Upload Question Paper</a></li> -->
<li><a class="active" href="fac_settings.php">Settings</a></li>
<li><a class="active" href="logout.php">Logout</a></li>

</ul>
</div>
</head><div align="center">
<h1 style="color:#03C">View Students List</h1>

<form method="post" action="viewdeptstu.php">
                
                    Regulation<select name="reg">
						<option>Select Reg</option>
						<option value="r09">R09</option>
						<option value="r13">R13</option>
						<option value="r15">R15</option>
					</select>
                    Year
                    <select name="year">
							<option>Select Year</option>
							<option value="1">1</option>				
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
                        Sem
                        <select name="sem">
							<option>Select sem</option>
							<option value="1">1</option>				
							<option value="2">2</option>				
						</select>						
                                                <br/><br/>
                        <button id="submit" name="submit">Submit</button>
                        </form>
                        </div>

<?php
if(isset($_POST['submit']))
{
	include 'conn.php';
	extract($_POST);	
	$dept=$_SESSION['dep'];
	$q1=mysql_query("SELECT *FROM dept WHERE dept_name='$dept'");
	$r1=mysql_fetch_array($q1);
	$deptid=$r1['dept_id'];
$query = mysql_query("SELECT * FROM students WHERE dept_id=$deptid AND year=$year AND sem=$sem AND reg='$reg'") or die("Sorry");
?>
<center>
<div style="width:80%">
<?php
 echo "<table class='table table-bordered'>

  <tr>
    <th>Student ID</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>Regulation</th>
	<th>Department</th>
	<th>Year Of Join</th>
	<th>Status</th>
  </tr>";

while ($row = mysql_fetch_array($query)){
	$q=mysql_query("SELECT *FROM dept WHERE dept_id=$deptid");
	$r=mysql_fetch_array($q);
	if($row['status']==1)
	{
		$status="Live";
	}
	else
	{
		$status="DETAINED";
	}
 echo "<tr><td>".$row['stu_id']."</td>";
  echo "<td>".$row['sname']."</td>";
  echo "<td>".$row['rollno']."</td>";
  echo "<td>".$row['reg']."</td>";
  echo "<td>".$r['dept_name']."</td>";
  echo "<td>".$row['year_of_join']."</td>";
  echo "<td>".$status."</td>";  
  echo "</tr>";
 

}

 echo "</table>";
echo "
<form action='export.php' method='post' name='export_excel'>
 
			<div class='control-group'>
				<div class='controls'>
					<button type='submit' id='export' name='export' class='btn btn-primary button-loading' data-loading-text='Loading...'>Click Here To Download Students List</button>
				</div>
			</div>
		</form>";

}
?>
</div>
</center>