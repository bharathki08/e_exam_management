	<?php
		include 'conn.php';
	?>
	
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
                    url:        'uploadsubjects.php',
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
	<span style="color:#90C;font-size:35px">Upload Faculty List Here</span>
<div class="container-fluid">
	<span style="color:#000;font-size:24px">The model of the Excel</span>
    <div>
    	<img src="images/upload_subjects.png" width="600" height="300">
        <br/>
        	
        <a href="docs/upload_subjetcs.xlsx"><img src="images/Excel-icon.png" width="40" height="40">Download Sample Excel Sheet</a></div>
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