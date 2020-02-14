<?php
	include 'conn.php';				
	session_start();
	if(!isset($_SESSION['role']) && !isset($_SESSION['user']) && !isset($_SESSION['dept']))
	{
		header('Location:index.php');
	}		
	if($_SESSION['role']!="admin")
	{
		header('Location:index.php');
	}
?>
<html>
<head>
<title>Geethanjali Institute of Science & Technnology</title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
	<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="jquery-1.12.0.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        </head>
<div class="container">
<div class="page-header" align="center">

<img src="images/logo.png" width="600" height="90">
<div style="float: right;"><span style="color:#060;font-size:25px">Welcome
<?php 	
	echo "<span style='color:red'>".$_SESSION['role']."</span>";
?>
</span>
<br/><a href="adminhome.php"><img src="images/home.png" width="100" height="40" alt="HOME" title="Click Here to Go Home"></a> &nbsp;
<a href="logout.php"><img src="images/logout.png" width="100" height="40" alt="LOGOUT" title="Click Here to Logout"></a> &nbsp;
</div>
</div>
</div>

<div style="width:80%;margin-left:100px;">
<center>
	<h1>View Student Marks</h1>
 <form method="post" action="view_marks.php">
                  <form method="post" action="mid.php" role="form">
                    <div class="form-group" style="margin-left:120px">
                    <div class="col-xs-2">
                     <label for="Dept">Department:</label>
                    <select name="dept" class="form-control">	
                    	<option>Select Dept</option>
                        <option value="1">Civil</option>
                        <option value="2">EEE</option>
                        <option value="3">Mechanical</option>
                        <option value="4">ECE</option>
                        <option value="5">CSE</option>
                    </select>
                    </div>
                    <div class="col-xs-2" style="margin-left:20px">
                    <label for="reg">Regulation</label>
                    <select name="reg" class="form-control">
						<option>Select Reg</option>
						<option value="r09">R09</option>
						<option value="r13">R13</option>
						<option value="r15">R15</option>
					</select></div>
                    <div class="col-xs-2" style="margin-left:20px">
                    <label for="year">Year</label>
                    <select name="year" class="form-control">
							<option>Select Year</option>
							<option value="1">1</option>				
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select></div>
                        <div class="col-xs-2" style="margin-left:20px">
                        <label for="sem">Sem</label>
                        <select name="sem" class="form-control">
							<option>Select sem</option>
							<option value="1">1</option>				
							<option value="2">2</option>				
						</select></div>
                        <div class="col-xs-2" style="margin-left:20px;width:20%">
                        <label for="mtype">
						Mid Type</label><select name="mid_no" class="form-control">
                        			<option>Select Mid-Type</option>
                                    <option value="1">Mid1</option>
                                    <option value="2">Mid2</option>
                        		</select></div>
                                                <br/><br/>
                                                <div style="margin-top:50px">
                        <button id="submit" name="submit" class="btn btn-success">Select Subjects</button>
                        </div>
                        </form>

<?php
	if(isset($_POST['submit']))
	{
		extract($_POST);
		$_SESSION['table']="internal".$year.$sem;
		$_SESSION['midno']=$mid_no;
		$query=mysql_query("SELECT *FROM subjects WHERE dept_id=$dept AND sem=$sem AND year=$year AND reg='$reg'");
		echo "<br/><br/>";
		echo "<form method='post' action='view_marks.php'>";
		echo "<select name='subname'  class='subname'><option>Select Name</option>";
		while($row=mysql_fetch_array($query))
		{
			$subid=$row['subid'];
			$subname=$row['subname'];
				echo "<option value='$subid'>$subname</option>";
		}
		echo "</select></form>";
	}
?>
    <script src="jquery-1.12.0.min.js"></script>
<script>
$(document).ready(function(){
		$(".subname").on('change', function() {
  		var value = $(this).val();
		$.post("view.php", {name:value},function(data){
				$("p").html(data);
			});			
	});
	});
	
</script>

<p></p>
</div>