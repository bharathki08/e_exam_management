<?php
session_start();
print_r($_SESSION);
print_r($_POST);
include_once "connect.php"; 
if(isset($branch))
{
	$s2=mysql_query("SELECT * FROM answers".$_SESSION['startedtest']." as a, students as s WHERE a.status=2 and a.uid=s.id order by s.rollno ASC");
	echo "branch";
}
else if(isset($rollno))
{
	$s2=mysql_query("SELECT * FROM answers".$_SESSION['startedtest']." as a, students as s WHERE a.status=2 and a.uid=s.id order by s.rollno ASC");
	echo "rollno";
}	
if(mysql_affected_rows()>0)
{
	
	echo "<table>
			<tr><td>Sno</td><td>Name</td><td>Rollno</td><td>Remaining Time</td></tr>";
			$i=1;
			while($r2=mysql_fetch_array($s2)){
				echo "<tr><td>$i</td><td>".$r2['name']."</td><td>".$r2['rollno']."</td><td>".date('i:s',strtotime($r2['time']))."</td></tr>";
				$i++;
			}
	echo "</table>";
}
else
{
	echo "No records found";
}

?>