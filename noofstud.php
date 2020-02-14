<?php
	include 'conn.php';
?>
<?php
$cse=mysql_query("SELECT *FROM students WHERE dept_id=5 AND status=1");
echo "cse=".$cse_count=mysql_affected_rows()."<br/>";
$eee=mysql_query("SELECT *FROM students WHERE dept_id=2 AND status=1");
echo "eee= ".$eee_count=mysql_affected_rows()."<br/>";
$ece=mysql_query("SELECT *FROM students WHERE dept_id=4 AND status=1");
echo "ece= ".$ece_count=mysql_affected_rows()."<br/>";
$mechanical=mysql_query("SELECT *FROM students WHERE dept_id=3 AND status=1");
echo "mech= ".$mech_count=mysql_affected_rows()."<br/>";
$civil=mysql_query("SELECT *FROM students WHERE dept_id=1 AND status=1");
echo "civil= ".$civil_count=mysql_affected_rows()."<br/>";

?>