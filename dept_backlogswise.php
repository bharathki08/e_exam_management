<?php
	include 'conn.php';
	include 'staffhome.php';
?>
<center>
<h1><p style="color:#0CF">View Backlogs Wise List Of a Students</p></h1>
<form method="post" action="dept_backlogswise.php">


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
<style>
	th { width:80%;}
</style>
<?php
if(isset($_POST['submit']))
{
	extract($_POST);

	/*$_SESSION['year']=$year;
	$_SESSION['sem']=$sem;
	$_SESSION['reg1']=$reg; */
	$dept=5;
?>
	<center> 
<?php
	$stu=mysql_query("SELECT *FROM students WHERE dept_id=$dept AND sem=$sem AND year=$year AND reg='$reg' AND status=1");
	echo "<center><div style='width:65%'><table class='table table-bordered'>";
	echo "<tr><th>Roll Number</th><th>Student Name</th><th style='width:90%'>1-1	<br/>blgs</th><th>1-2<br/>blgs</th><th>2-1<br/>blgs</th><th>2-2<br/>blgs</th><th>3-1<br/>blgs</th><th>3-2<br/>blgs</th><th>4-1<br/>blgs</th><th>4-2<br/>blgs</th><th>Total blgs<br/>of a student</th><th>Toatal Credits</th></tr>";
	while($row=mysql_fetch_array($stu))
	{
		$sid=$row['stu_id'];
		$q=mysql_query("SELECT *FROM master WHERE stu_id=$sid");
		$r2=mysql_fetch_array($q);
		echo "<tr><td>".$row['rollno']."</td><td>".$row['sname']."</td><td width='80%'>".$r2['11_blcount']."</td><td>".$r2['12_blcount']."</td><td>".$r2['21_blcount']."</td><td>".$r2['22_blcount']."</td><td>".$r2['31_blcount']."</td><td>".$r2['32_blcount']."</td><td>".$r2['41_blcount']."</td><td>".$r2['42_blcount']."</td><td>".$r2['tot_bl']."</td><td>".$r2['total_credits']."</td></tr>";
	}
	echo "</table></div></center>";
}
?>
</center>