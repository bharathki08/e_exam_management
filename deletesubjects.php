<?php
	include 'conn.php';	
?>
<form method="post" action="deletesubjects.php">
	<input type="submit" name="delete_all" value="Delete All Subjects" />
</form>

<?php
	if(isset($_POST['delete_all']))
	{
		mysql_query("TRUNCATE subjects");
	}
?>