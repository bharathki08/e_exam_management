<?php
	include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
	<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="jquery-1.12.0.min.js"></script>
	<link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
		<title>Geethanjali Institute of Science & Technology</title>
        </head>
<style>       
 body
{
    text-align:center;	
    padding:5px; 
}
h1
{
    color : #000000;
    text-align : center;
    font-family: "SIMPSON";
}
form
{
    align:"center";
}
#left{
	float:left;
	width:600px;
	height:320px;
	margin-left:70px;
	border:none;
	overflow:scroll;
}
</style>
</head>
<body>
<div class="page-header">
	<div align="center"><img src="images/logo.png" alt="Geethanjali Institute of Science & Technology"></div>
    <center><span style="color:#F00;font-size:25px;font-family:'Times New Roman', Times, serif;font-style:italic">e - EXAM CELL MANAGEMENT</span></center>
</div>
     <div id="left" align="left">
     	<div align="center" style="background-color:#006;color:#FFF"><marquee behavior="alternate" scrollamount="5"><b>* * * Notifications Here * * *</b></marquee></div>
			<?php
				$q=mysql_query("SELECT *FROM mailings ORDER BY pid DESC");
				echo "<table class='table table-bordered'>";
				while($row=mysql_fetch_array($q))
				{
					echo "<tr><td><div style='border:solid silver 1px;margin-top:10px'><span style='color:red;font-style:underline'><b>".$row['title']."</span></b><br/>";
					echo "<span style='color:blue'>".$row['message']."</td></tr></div>";
				}
				echo "</table>";
			?>
     </div>
     <div id="body" align="center" style="float:right;margin-right:80px;">
     	<span style="color:#006;font-style:italic;font-size:25px;font-family:'Times New Roman', Times, serif"><b>Login Here</b></span>
      <form name="login" method="post" action="index.php" class="form-inline" role="form">
       <div class="form-group">
       <table align="center" cellpadding="5" cellspacing="5">
        <tr>
         <td><br>Username</td> <td><br><input type="text" name="uname" placeholder="Enter Username"  autocomplete="off" class="form-control" required></tr>
         <tr><td><br>Password </td> <td><br><input type="password" name="pass" placeholder="Enter Password" class="form-control" 
         required><span style="color:#FF0000">*</span></td>
        </tr>
        <tr>
         <td><br><br>Security Question:</td> <td>
				<br><br><select name="sq" class="form-control" class="form-control">
					<br><option>Select Question</option>
					<br><option value="What is your college name?">What is your college name?</option>
					
        </tr>
        <tr>
         <td><br>Confirm Answer</td> <td><br><input type="text" name="sa"  autocomplete="off" placeholder="Enter Answer" class="form-control" required/><span style="color:#FF0000">*</span><br>
        </tr>
        
        <tr>
         <td><br><input type="submit" value="Login" class="btn btn-default" name="submit"></td>
         
         <td><br><input type="reset" value="Reset" class="btn btn-default"></td>
        </tr>
        
       </table>
      </div>
      </form>
      	
      <div>
</body>

</html>

<?php
	if(isset($_POST['submit']))
	{
		extract($_POST);		
		include 'conn.php';
		$q=mysql_query("SELECT *FROM users WHERE username='".mysql_real_escape_string(trim($uname))."' AND password='".md5($pass)."' AND sq='$sq' AND sa='$sa'");		
		$count=mysql_affected_rows();
		if($count==1)
		{
			$r=mysql_fetch_array($q);
			session_start();
			$_SESSION['user']=$uname;
			$_SESSION['role']=$r['role'];
			$_SESSION['dep']=$r['dept'];		
			if(($r['role'])=="admin")
			{
				header('Location:adminhome.php');
			}
			else
			{
				if(($r['role'])=="faculty")
				{
					header('Location:home.php');
				}	
				else
				{
					if(($r['role'])=="hod")
					{
						header('Location:hodhome.php');
					}
					else
					{
						echo "<center><span style='color:red;font-size:30px;'>Please Enter Correct Details</span></center>";	
					}
				}
			}
			
		}
		else
		{
			echo "<center><span style='color:red;font-size:30px;'>Please Enter Correct Details</span></center>";	
		} 
	
	}
?>
