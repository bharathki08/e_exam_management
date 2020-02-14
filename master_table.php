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
  <h1><p style="color:#0CF">Master table View</p></h1>
<form method="post" action="master_table.php">

Department:<select name="dept">
    <option>Select Dept</option>
    <option value="1">Civil</option>
    <option value="2">EEE</option>
    <option value="3">Mechanical</option>
    <option value="4">ECE</option>
    <option value="5">CSE</option>
</select>
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
</form>
</center>

<?php
if(isset($_POST['submit']))
{
	extract($_POST);

	/*$_SESSION['year']=$year;
	$_SESSION['sem']=$sem;
	$_SESSION['reg1']=$reg;
	$_SESSION['dep']=$dept; */
?>

<?php
	$stu=mysql_query("SELECT *FROM students WHERE dept_id=$dept AND sem=$sem AND year=$year AND reg='$reg' AND status=1");
	echo "<center><div style='width:65%'><table class='table table-bordered'>";
	echo "<tr><th>Roll Number</th><th>Student Name</th><th>1-1	<br/>Total</th><th>1-2<br/>Total</th><th>2-1<br/>Total</th><th>2-2<br/>Total</th><th>3-1<br/>Total</th><th>3-2<br/>Total</th><th>4-1<br/>Total</th><th>4-2<br/>Total</th>";
	
	echo "<th style='width:90%'>1-1	<br/>Credits</th><th>1-2<br/>Credits</th><th>2-1<br/>Credits</th><th>2-2<br/>Credits</th><th>3-1<br/>Credits</th><th>3-2<br/>Credits</th><th>4-1<br/>Credits</th><th>4-2<br/>Credits</th><th>Total Credits<br/>of a student</th>";
	echo "<th style='width:90%'>1-1	<br/>Blgs</th><th>1-2<br/>Blgs</th><th>2-1<br/>Blgs</th><th>2-2<br/>Blgs</th><th>3-1<br/>Blgs</th><th>3-2<br/>Blgs</th><th>4-1<br/>Blgs</th><th>4-2<br/>Blgs</th><th>Total Blgs<br/>of a student</th>";
	while($row=mysql_fetch_array($stu))
	{
		$sid=$row['stu_id'];
		$q=mysql_query("SELECT *FROM master WHERE stu_id=$sid");
		$r2=mysql_fetch_array($q);
		echo "<tr><td>".$row['rollno']."</td><td>".$row['sname']."</td><td>".$r2['11_tot']."</td><td>".$r2['12_tot']."</td><td>".$r2['21_tot']."</td><td>".$r2['22_tot']."</td><td>".$r2['31_tot']."</td><td>".$r2['32_tot']."</td><td>".$r2['41_tot']."</td><td>".$r2['42_tot']."</td>";
		echo "<td>".$r2['11_credits']."</td><td>".$r2['12_credits']."</td><td>".$r2['21_credits']."</td><td>".$r2['22_credits']."</td><td>".$r2['31_credits']."</td><td>".$r2['32_credits']."</td><td>".$r2['41_credits']."</td><td>".$r2['42_credits']."</td><td>".$r2['total_credits']."</td>";
			echo "<td>".$r2['11_blcount']."</td><td>".$r2['12_blcount']."</td><td>".$r2['21_blcount']."</td><td>".$r2['22_blcount']."</td><td>".$r2['31_blcount']."</td><td>".$r2['32_blcount']."</td><td>".$r2['41_blcount']."</td><td>".$r2['42_blcount']."</td><td>".$r2['tot_bl']."</td></tr>";
	}
	echo "</table></div></center>";
}
?>
