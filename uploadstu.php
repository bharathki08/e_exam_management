	<?php
		session_start();
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
		<title>Geethanjali Institute of Science & Technology</title>	              
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/form.js" type="text/javascript"></script>
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
	<center>
		<div style="width:400px;height:50px;color:#063;font-size:18px">
	<marquee behavior="alternate" scrollamount="3"><b>Please Refresh The page for every upload</b></marquee>
    </div>
</div>	
	 <style>
	   	.loadgif{
			position:absolute;
			top:15%;
			left:15%;
			z-index:1000;
		}
		#result{
			padding:20px;
			text-align:center;
		}
	   </style>
	  <script>
	  	$(document).ready(function()
		{
			//form submission code
			
			$("#addform").submit(function(){
				v=true;
				
				ext = $('#xls').val().split('.').pop();
				if(ext!="")
				{
					if(!(ext=="xls" || ext=="xlsx")){
						$(".upload_err").html("Upload Excel file");
						v=false;	
						return false;
					}
				}
				else
				{
					$(".upload_err").html("Upload Excel file");
					v=false;
				}
				

				if(v==true){
					var options = {
                    url:        'uploadstudents.php',
                    beforeSend: function(){
							$("#result").html("<center><div class='loadgif'><img src='images/status_processing.gif'/></div></center>");
						},
						success: showResponse
               	 	};
					 $(this).ajaxSubmit(options);
					
				}
		
				return false;
			});
			
			
		});
		function showResponse(data) 
		{              
			   $("#result").html(data);
			   $('#addform').each (function(){
  					this.reset();
				});
	
           }
		
	  </script>
	  <style>
	  	.help-inline{
			color:red;
		}
		#result{
			color:green;
		}
		#extra_info{
		}
	  </style>
        </head>
        <body>
<center>
<div class="container" align="center">
	<span style="color:#90C;font-size:35px">Upload Students</span>
<div class="container-fluid">
	<span style="color:#000;font-size:24px">The model of the Excel</span>
    <div>
    	<img src="images/upload_students.png" width="600" height="300">
        <br/>
        	
        <a href="docs/sample students.xlsx"><img src="images/Excel-icon.png" width="40" height="40">Download Sample Excel Sheet</a></div>
    </div>
</div>
<div style="padding-left:30px" align="center">                                            
<form method="post" action="#" id="addform" enctype="multipart/form-data" class="form-horizontal" role="form">
                                              
       <div class="form-group">
       		<label for="upload">Upload Your excel Sheet Here</label>
       </div>
          <div class="form-group">
          <label class="control-label">
            <input type="file" name="xls" id="xls" class='req xls'/></label>
</div>
       <div class="form-group">
          <button class="btn btn-success" id="submit" style="width:200px">Submit</button>
       </div>
</form>					

</div>
<span class="help-inline upload_err"></span>
<div id="result" style="padding:10px; width:300px;font-size:24px"></div>
	</div>
	</center>
    
</body>
<!-- END BODY -->
</html>