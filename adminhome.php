<?php
	include 'conn.php';
	include 'admindb.php';
?>
<br/><br/>
<center>
	<span style="color:#0CF;font-size:36px">Welcome to Exam Cell </span>
    <div id="notifications" style="width:60%;margin-left:80px">
		<?php
			include 'conn.php';
			$q=mysql_query("SELECT *FROM faculty_notifications ORDER BY date DESC");
			
			echo "<table class='table table-bordered'>";
			echo "<tr style='color:red'><th>Posted Date</th><th>Posted By</th><th>Notification</th></tr>";
			$c=0;
			
			
			while($r=mysql_fetch_array($q))
			{
				$dept_id=$r['dept'];
				$q1=mysql_query("SELECT *FROM dept WHERE dept_id=$dept_id");	
				$r1=mysql_fetch_array($q1);
				$dept_name=$r1['dept_name'];
				echo "<tr><td>".$r['date']."</td><td>".$r['postby']."</td><td>".$r['subject']." of ".$r['year']."th Year of ".$dept_name." Department ".$r['message'];
				if($c<3)
				{
					echo " <img src='images/new.gif'/></td></tr>";
					$c++;
				}
			}
			echo "</table>";
		?>
    </div>
</center>