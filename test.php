<?php
	include 'conn.php';
	
	/*if($r['marks']>=25)
	{
		if($total>=40)
		{
			echo "P";
		}
		else
		{
			echo "F";
		}
	}
	else
	{
		echo "F";
	}*/
	$query=mysql_query("SELECT b.rollno, b.sname, a.mid1_tot FROM internal42 a, students b, subjects c WHERE (a.subid=c.subid) AND (a.doe1='2016-03-01')");
	while($row = mysql_fetch_array($query))
	{
		echo $row['rollno']."--".$row['sname']."--".$row['mid1_tot']."<br/>";
	}
?>