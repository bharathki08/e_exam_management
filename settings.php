<?php
	include 'conn.php';
	include 'admindb.php';
?>
    <body>
    <center>
    <div style="margin-left:300px;margin-right:30px;float:left">
	<p align="center" style="color:#FF0000;font-size:25px;font-style:italic"><b>Change Password</b></p>
	<form method="post" action="settings.php" role="form">
    <div class="form-group">
	<label for="ol_pwd">Old Password:</label>    <input style="width:80%" type="password" name="old_pass" placeholder="Old Password" class="form-control" required/></div>
    <div class="form-group">
    <label for="new_pwd">New Password:</label>    <input style="width:80%" type="password" name="new_pass" placeholder="New Password" class="form-control" required/></div>
    <div class="form-group">
    	<button name="submit" class="btn btn-success">Change Password</button>
    </form>
            </div>
            </div>
    <form action="settings.php" method="post" class="form-inline" role="form">
<div id="select" class="form-group" style="float:right;margin-right:100px">
<p align="center" style="color:#FF0000;font-size:25px;font-style:italic"><b>Change Security Question</b></p>
<table cellpadding="5" cellspacing="5">
<tr><td>Old Security Question:&nbsp;</td><td><br/><input type="text" name="oldsq" class="form-control"/></td></tr>
<tr><td>Old Security Answer: &nbsp;</td><td><br/><input type="tel" name="oldsa" class="form-control"/></td></tr>
<tr><td>New Security Question:&nbsp;</td><td><br/><input type="text" name="newsq" class="form-control"/></td></tr>
<tr><td>New Security Answer: &nbsp;</td><td><br/><input type="tel" name="newsa" class="form-control"/></td></tr></table>
<br/><br/><input type="submit" name="submit1" class="form-control"/></div></form>
            </center>
<?php
	if(isset($_POST['submit']))
	{
		$old_pass=md5($_POST['old_pass']);
		$new_pass=md5($_POST['new_pass']);
		$query=mysql_query("SELECT *FROM users WHERE username='admin'");
		$row=mysql_fetch_array($query);
		if((mysql_affected_rows)==0)
		{
			$db_pass=$row['password'];
			if($old_pass==$db_pass)
			{
				$update=mysql_query("UPDATE user_details SET password='$new_pass' where username='admin'") or die("Wrong query");
				if($update==true)
				{
					echo "<center><p style='color:#009933'>Password Changed Sucessfully</p></center>";
					break;
				}
			}
			else
			{
				echo "<center><p style='color:red'>Wrong Old Password</p></center>";
			}		
		}
	}
?>
<?php
if(isset($_POST['submit']))
{
$uname=$_SESSION['user'];
extract ($_POST);
$old=mysql_query("SELECT *FROM users WHERE username='$uname' AND sq='$oldsq' AND sa='$oldsa'");
if($old == true)
{
$new=mysql_query("UPDATE users SET sq='$newsq',sa='$newsa' WHERE username='$uname'") or die("Not Updated Successfully");
}
}
?>