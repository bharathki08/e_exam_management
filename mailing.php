<?php
	include 'conn.php';
	include 'admindb.php';
?>
<br/><br/>
<center>
	<span style="color:#F90;font-size:24px"><b>Post Notifications</b></span>
    <br/><br/>
    <form method="post" action="mailing.php" role="form">
		<div class="form-group">
        	<label for="name">Title</label>
            <input type="text" name="title" placeholder="Enter title for the post" size="30" required="Mandatory" />         
        </div>
        <div class="form-group">
        	<label for="texting">Detailed Data:</label>
            <textarea name="detail" required="required" cols="50" rows="3"></textarea>
        </div>
<input type="submit" name="submit" value="POST" />
    </form>
</center>
<?php
	if(isset($_POST['submit']))
	{
		include 'conn.php';
		extract($_POST);		
		mysql_query("INSERT INTO mailings (title,message) VALUES('$title','$detail')") or die("Not Posted");
		echo "<center><span style='color:green;font-size:20px;font-style:italic'>Posted Successfully</span></center>";
	}
?>