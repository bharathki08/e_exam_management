<?php
include 'conn.php';
include 'admindb.php';
?>
<body>
<div align="center">
<center><span style="color:#090;font-size:25px;">Add Faculty</span></center>
<form action="addfaculty.php" method="post" class="form-inline" role="form">
<div id="select" class="form-group">

<table cellpadding="5" cellspacing="5">
<tr><td>Name of the faculty:</td>&nbsp; &nbsp;<td><input type="text" name="username" class="form-control"/></td><td>&nbsp;&nbsp;Department:<select name="dept" class="form-control"><option>Select Dept</option><option value="1">Civil</option>
                        <option value="2">EEE</option>
                        <option value="3">Mechanical</option>
                        <option value="4">ECE</option>
                        <option value="5">CSE</option></select></td></tr></table>
                        <br/><br/><input type="submit" name="submit" class="form-control"/>	

</div>
</form>
<?php
if(isset($_POST['submit']))
{
	extract ($_POST);
	$query=mysql_query("INSERT INTO users(username,password,role,sq,sa,dept) VALUES ('$username','827ccb0eea8a706c4c34a16891f84e7b
','faculty','What is your college name?','GIST','$dept')");
	if($query==true)
	{
		echo "<center><span style:font-size:25px;>Added Successfully</span></center>";
	}
	
}

?>



</div>
</body>
</html>