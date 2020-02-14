<?php
	include 'conn.php';
	include 'admindb.php';
?>

<br/><br/>
<center>
    <div id="notifications" style="width:60%;margin-left:80px">
		<?php
			include 'conn.php';
			$q=mysql_query("SELECT *FROM faculty_notifications ORDER BY date DESC");
			$count=mysql_affected_rows();
			echo "<form method='post' action='manage_fac_not.php'>";
			echo "<table class='table table-bordered'>";
			echo "<tr style='color:red'><th></th><th>Posted Date</th><th>Posted By</th><th>Notification</th></tr>";
			
			while($r=mysql_fetch_array($q))
			{			
				$name=$r['sno'];					
				echo "<tr><td><input type='checkbox' name='accept.$name' value='1'></td><td>".$r['date']."</td><td>".$r['postby']."</td><td>".$r['subject']." of ".$r['year']."th Year of ".$r['dept']." Department ".$r['message']." <img src='images/new.gif'/></td></tr>";				
			}
			echo "</table><input type='submit' name='submit' value='Delete'></form>";
			
		?>
        <?php
			if(isset($_POST['submit']))
			{
				foreach($_POST as $key => $value)
				{
					if($key=="submit")
					{
						break;
					}
					$id=explode("_",$key);
					$q=mysql_query("DELETE FROM faculty_notifications WHERE sno=$id[1]") or die("Not Deleted");				
				}
				
			}
		?>
    </div>
</center>