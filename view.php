<?php
	include 'conn.php';
	session_start();

	extract($_POST);
	echo "<br/><div style='margin-left:50px'>";
	$table_name=$_SESSION['table'];
	$_SESSION['nameof']=$name;
	$midno=$_SESSION['midno'];
	$mname="mid".$_SESSION['midno']."_tot";
	$query=mysql_query("SELECT a.sid, a.final_tot, b.subname, a.$mname FROM $table_name a, subjects b WHERE (a.subid=$name) AND (a.subid=b.subid)");
	if(mysql_affected_rows()>0)
	{
	echo "<center><table class='table table-bordered'>";
	echo "<tr><th>Roll No</th><th>Student Name</th><th>Mid".$_SESSION['midno']." Marks</th><th>Average Marks";
	while($row=mysql_fetch_array($query))
	{
		$sid=$row['sid'];
		$students=mysql_query("SELECT *FROM students WHERE stu_id=$sid");
		$r1=mysql_fetch_array($students);
		$rollno=$r1['rollno'];
		$sname=$r1['sname'];
		echo "<tr><td>".$r1['rollno']."</td><td>".$r1['sname']."</td><td>".$row[$mname]."</td><td>".$row['final_tot']."</td></tr>";
		$subname=$row['subname'];
	}
	$_SESSION['donwload']=$subname." of ".$table_name;
	echo "</table>";
	echo "<form method='post' action='export.php' role='form'>";
		echo "<button type='submit' name='submit' class='btn btn-default'>Click Here to Download Marks</button>";
	echo "</form></center></div>";
	}
	else
	{
			echo "<center><span style='color:red;font-size:25px'>No data Found</span></center>";
	}
	
	
?>