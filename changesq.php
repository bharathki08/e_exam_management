<?php
include 'conn.php';
?>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
	<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="jquery-1.12.0.min.js"></script>
	<link rel="stylesheet" href="style.css" type="text/css"/>
		<title>Change Security Question</title>
<style>
#heading {
	color:#F06;
}

</style>
</head>
<body>
<div align="center">
<div id="heading">
<img src="logo.png"/>
<h1>Change Security Question</h1>
</div>
<form action="changesq.php" method="post" class="form-inline" role="form">
<div id="select" class="form-group">
<table cellpadding="5" cellspacing="5">
<tr><td>Old Security Question:&nbsp;</td><td><br/><input type="text" name="oldsq" class="form-control"/></td></tr>
<tr><td>Old Security Answer: &nbsp;</td><td><br/><input type="tel" name="oldsa" class="form-control"/></td></tr>
<tr><td>New Security Question:&nbsp;</td><td><br/><input type="text" name="newsq" class="form-control"/></td></tr>
<tr><td>New Security Answer: &nbsp;</td><td><br/><input type="tel" name="newsa" class="form-control"/></td></tr></table>
<br/><br/><input type="submit" name="submit" class="form-control"/></div></form>
<?php
if(isset($_POST['submit']))
{
$unmae=$_SESSION['username'];
extract ($_POST);
$old=mysql_query("SELECT *FROM users WHERE username='$uname' AND sq='$oldsq' AND sa='$oldsa'");
if($old == true)
{
$new=mysql_query("UPDATE users SET sq='$newsq',sa='$newsa' WHERE username='$uname'");


}
}
?>
</div>
</body>
</html>