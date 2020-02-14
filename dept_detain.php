<?php
include 'conn.php';
include 'admindb.php';
session_start();
?>
<center>
<div style="margin-left:300px;" align="center">
<h1 style="color:#03C">View Detained Students</h1>


<?php

	include 'conn.php';
$query = mysql_query("SELECT * FROM students WHERE dept_id=status=0") or die("Sorry");
?>
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
	$depid=$row['dept_id'];
	$q=mysql_query("SELECT *FROM dept WHERE dept_id=$depid");
	$r=mysql_fetch_array($q);
	if($row['status']==0)
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
</div></center>