<?php
session_start();
	include 'conn.php';			
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
<style>
.w3-btn{width:210px;}
a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}
a:hover {
	text-decoration:none;
}
left {
	align: left;
}
</style>
</head>
<body>

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
<div id="left" align="left">								
					<div class="col-md-1">
					<ul class="nav nav-pills nav-stacked">
					<br><li class="active" id="home"><button class="w3-btn w3-khaki"><a href="adminhome.php">HOME</a></button></li>
					<li><div ><button class="w3-btn w3-gold"><a href="mid_admin.php">POST INTERNALS</a></button></li>
					<li id="post_ext"><button class="w3-btn w3-orange"><a href="post.php">POST EXTERNALS</a></button></li>
                    <li id="view_internals"><button class="w3-btn w3-blue"><a href="view_marks.php">VIEW INTERNAL MARKS</a></button></li>
                    <li><div class="dropdown"><button class="w3-btn w3-gold"><a href="mailing.php">POST NOTIFICATIONS</a></button></li>
                    <li id="View backlogs Wise <br/>List"><button class="w3-btn w3-purple"><a href="backlogswise.php">VIEW BACKLOGS WISE <br/>LIST</a></button></li>
					<li id="upload_stu"><button class="w3-btn w3-red"><a href="uploadstu.php">UPLOAD STUDENTS LIST</a></button></li>
                    <li id="view_stu"><button class="w3-btn w3-green"><a href="viewstudetails.php">VIEW STUDENT DETAILS</a></button></li>
					<li id="upload_sub"><button class="w3-btn w3-purple"><a href="uploadsub.php">UPLOAD SUBJECTS LIST</a></button></li>
                    <li id="add_fac"><button class="w3-btn w3-indigo"><a href="addfaculty.php">ADD FACULTY</a></button></li>
                    <li id="add_fac"><button class="w3-btn w3-red"><a href="view_detain_candidates.php">VIEW DETAIN STUDENTS</a></button></li>
                    <li id="promote_detain"><button class="w3-btn w3-green"><a href="promotingofdetainstudents.php">PROMOTING OF<br/>DETAINED STUDENTS</a></button></li>
                    <li id="Manage"><button class="w3-btn w3-orange"><a href="manage_fac_not.php">MANAGE ADMIN PAGE<br/>NOTIFICATIONS</a></button></li>
                    <li id="promote"><button class="w3-btn w3-green"><a href="promote_students.php">PROMOTE STUDENTS</a></button></li>
                    <li id="Master"><button class="w3-btn w3-skyblue"><a href="master_table.php">MASTER TABLE</a></button></li>
					<li id="sett"><button class="w3-btn w3-sand"><a href="settings.php">SETTINGS</a></button></li>
					<li id="logout"><button class="w3-btn w3-grey"><a href="logout.php">LOGOUT</a></button></</li>
					</ul>
					</div>				
				</div>


</body>
</html>