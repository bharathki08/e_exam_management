<?php	
	include 'conn.php';			
	include 'staffhome.php';
	
?>


        <style>
			.err{
				color:#F00;
				font-size:18px;
				font-style:italic;
			}			
			td{
				width:10%;
			}
		</style>
        <body>
        	<div class="container" style="width:70%">
            	<center>
                
                	<p><h1>View Internal Marks Here</h1></p>
                    <form method="post" action="view_internals.php" role="form">
                    <div class="form-group">
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
                    <div class="col-xs-2">
                    <label for="reg">Regulation</label>
                    <select name="reg" class="form-control">
						<option>Select Reg</option>
						<option value="r09">R09</option>
						<option value="r13">R13</option>
						<option value="r15">R15</option>
					</select></div>
                    <div class="col-xs-2">
                    <label for="year">Year</label>
                    <select name="year" class="form-control">
							<option>Select Year</option>
							<option value="1">1</option>				
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select></div>
                        <div class="col-xs-2">
                        <label for="sem">Sem</label>
                        <select name="sem" class="form-control">
							<option>Select sem</option>
							<option value="1">1</option>				
							<option value="2">2</option>				
						</select></div>
                        <div class="col-xs-2">
                        <label for="mtype">
						Mid Type</label><select name="mid_no" class="form-control">
                        			<option>Select Mid-Type</option>
                                    <option value="1">Mid1</option>
                                    <option value="2">Mid2</option>
                        		</select></div>                               
								<div>
		                        <button id="submit" name="submit" class="btn btn-success" style="margin-top:30px;">Click Here to Select Subjects</button>
                                </div>
                        </form>
    <center>
         			<?php
						if(isset($_POST['submit']))
						{							
							extract($_POST);
							$_SESSION['reg']=$reg;
							$_SESSION['dept']=$dept;
							$_SESSION['sem']=$sem;
							$_SESSION['year']=$year;
							//$_SESSION['date']=$mid_date;
							$_SESSION['mid_no']=$mid_no;							
						?>
                        <center>
							<form method='post' action='view_internals.php' role="form">
                            <div class="col-xs-2" style="margin-left:400px;margin-top:30px;">
                            <center>
							<label for="subj">Select Subject:</label><select name='sub' class="form-control">				
							<option>Select</option>
                           <?php
							$sub_q=mysql_query("SELECT *FROM subjects WHERE dept_id=$dept AND sem=$sem AND year=$year AND reg='$reg'");
							while($r=mysql_fetch_array($sub_q))
							{
								$sub_id=$r['subid'];
								$sub_name=$r['subname'];
								echo "<option value='$sub_id'>$sub_name</option>";
							}
							?>
							</select>
							<input type='submit' name='sel' class="btn btn-primary"></div>
							</form></center></center>
                            <?php																		
						}
					
					?>
                    </center></div>
                    <div class="container-fluid">
                    
                    <?php
					if(isset($_POST['sel']))
					{					                    
						extract($_POST);
							$_SESSION['subid']=$sub;
							$s=$_SESSION['subid'];
							$q1=mysql_query("SELECT subname FROM subjects WHERE subid=$s");
							$r2=mysql_fetch_array($q1);
							$_SESSION['subname1']=$r2['subname'];
							echo "<center><b>Subject Name: ".$r2['subname']."</center>";
							$reg1=$_SESSION['reg'];
							$dept1=$_SESSION['dept'];
							$sem1=$_SESSION['sem'];
							$year1=$_SESSION['year'];							
							$stu_q=mysql_query("SELECT *FROM students WHERE dept_id=$dept1 AND sem=$sem1 AND year=$year1 AND reg='$reg1' AND status=1");							
							echo "<table class='table table-bordered' align='center'><thead>";
							echo "<tr><th class='col-md-2'>Roll Number</th><th class='col-md-2'>Name of  The Student</th><th class='col-md-2'>Objective</th><th class='col-md-2'>Descriptive</th><th>Mid Total</th><th>Grand Total Of Two Mids</th></tr></thead><tbody>";
							?>
        
                            <?php
							$count=0;
							$tbl_name="internal".$year1.$sem1;
							$obj="mid".$_SESSION['mid_no']."_obj";
							$des="mid".$_SESSION['mid_no']."_des";
							$tot="mid".$_SESSION['mid_no']."_tot";
							$stat="mid".$_SESSION['mid_no']."_status";
							while($r1=mysql_fetch_array($stu_q))
							{								
								$sid=$r1['stu_id'];
								$q2=mysql_query("SELECT *FROM $tbl_name WHERE sid=$sid AND subid=$s");	
								$r3=mysql_fetch_array($q2);
								if($r3[$stat]==0)																				
								{
									$r3[$obj]=$r3[$des]=$r3[$tot]="AB";
								}
								echo "<tr><td class='col-md-2'>". $r1['rollno'] ."</td><td class='col-md-2'>".$r1['sname'];
								echo "</td>";
								echo "<td class='col-md-2'>".$r3[$obj]."</td>";
								echo "<td class='col-md-2'>".$r3[$des]."</td>";
								echo "<td class='col-md-2'>".$r3[$tot]."</td>";
								echo "<td class='col-md-2'>".$r3['final_tot']."</td>";
								echo "</tr>";					
							}
							echo "</tbody></table>";
							
					}
					?>
					</div>                               
