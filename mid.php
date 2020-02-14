<?php	
	include 'conn.php';			
	include 'staffhome.php';
	if(!isset($_SESSION['role']) && !isset($_SESSION['user']) && !isset($_SESSION['dept']))
	{
		header('Location:index.php');
	}	
	if($_SESSION['role']!="faculty")
	{
		header('Location:index.php');
	}
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
                
                	<p><h1>Post Internal Marks Here</h1></p>
                    <form method="post" action="mid.php" role="form">
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
                                <div class="col-xs-2">
						<label for="middate">Mid Date:</label><input type="date" name="mid_date" class="form-control" required></div>
                        </div>
								<div>
		                        <button id="submit" name="submit" class="btn btn-success" style="margin-top:30px;">Click Here to Select Subjects</button>
                                </div>
                        </form>
                        <br/>
                        <span style="color:#093">If any student absent for exam post the mark as <span style="color:#F00"> AB </span> Capitals Only</span>
                        <p><span style="color:#093">If any subject have no Objective Marks keep it as <span style="color:#F00">0</span></span></p>
                </center>

            <center>
         			<?php
						if(isset($_POST['submit']))
						{
							include 'conn.php';
							extract($_POST);
							$_SESSION['reg']=$reg;
							$_SESSION['dept']=$dept;
							$_SESSION['sem']=$sem;
							$_SESSION['year']=$year;
							$_SESSION['date']=$mid_date;
							$_SESSION['mid_no']=$mid_no;							
						?>
                        <center>
							<form method='post' action='mid.php' role="form">
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
						include 'conn.php';
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
							echo "<form method='post' action='mid.php' role='form'>";							
							echo "<table class='table table-hover' align='center'><thead>";
							echo "<tr><th class='col-md-2'>Roll Number</th><th class='col-md-2'>Name of  The Student</th><th class='col-md-2'>Objective</th><th class='col-md-2'>Descriptive</th></tr></thead><tbody>";
							?>
        
                            <?php
							$count=0;
							while($r1=mysql_fetch_array($stu_q))
							{
								$stido=$r1['stu_id']."_o";		
								$stidd=$r1['stu_id']."_d";																
						
								echo "<tr><td class='col-md-2'>". $r1['rollno'] ."</td><td class='col-md-2'>".$r1['sname'];
								echo "</td>";
								echo "<td class='col-md-2'><input type='text' size='3' maxlength='2' name='$stido' class='one' autocomplete='off' ></td>";
								echo "<td class='col-md-2'><input type='text'  size='3' maxlength='2' name='$stidd' class='two' autocomplete='off'></td>";
								echo "<td><div id='$count'></div></td>";
								echo "</tr>";					
							}
							echo "</tbody></table>";
							echo "<center><input type='submit' name='posts' class='btn btn-default'></center></form>"; 
							$count++;
					}
					?>
					</div>       
					<div id="status">
<?php
if(isset($_POST['posts']))
{	
	include 'conn.php';							
	$sub_id=$_SESSION['subid'];
	$year=$_SESSION['year'];
	$sem=$_SESSION['sem'];								
	$date=$_SESSION['date'];
	$doe="doe".$_SESSION['mid_no'];
	$reg=$_SESSION['reg'];
	$_SESSION['tab']="internal".$year.$sem;
	$table_name=$_SESSION['tab'];
	$t_mid_obj="mid".$_SESSION['mid_no']."_obj";
	$t_mid_des="mid".$_SESSION['mid_no']."_des";
	$t_mid_tot="mid".$_SESSION['mid_no']."_tot";
	$mid=$_SESSION['mid_no'];								
	$obj_array=array();
	$des_array=array();
	$count=$br=$br1=1;
	$temp=$temp1=$temp2=$temp3=1;
		foreach($_POST as $key => $value)
		{																										
			if(($count%2)==0)
			{
				$e=explode("_",$key);
				$stid=$e[0];										
				$des_array[$stid]=$value;											
				$count++;
			}
			else
			{
				$e=explode("_",$key);
				$stid=$e[0];										
				$obj_array[$stid]=$value;
				$count++;
			}
		}			
									
//Array for Objective marks			
$test=1;
foreach($obj_array as $k => $v)
{										
foreach($des_array as $k1 => $v1)   //Array for Objective marks
{
if($k1==$k)
{	
$status_n="mid".$_SESSION['mid_no']."_status";	
$status_v=1;
if(($v=="AB")||($v1=="AB"))
{	
	$v=$v1=0;
	$status_v=0;
}
if($v=="") { $v=0; }
		if($v1=="") { $v1=0; }
	$total=$v+$v1;		
	if($_SESSION['mid_no']==1)
	{
	$query=mysql_query("SELECT *FROM $table_name WHERE sid=$k AND subid=$sub_id AND $doe='$date'");
	$c=mysql_affected_rows();
		//echo $k."--".$test."--".$c."<br/>";
		$test++;
		
		//$postby=$_SESSION['user'];
		if($c==0)
		{			
			mysql_query("INSERT INTO $table_name (sid,$t_mid_obj,$t_mid_des,$t_mid_tot,subid,$doe,$status_n) VALUES($k,$v,$v1,$total,$sub_id,'$date',$status_v)") or die("Sry");
			echo "<center><span style='color:red;font-size:25px'>Successfully</span></center>";		
			if($br1==1) {
			echo "<center><span style='color:green;font-size:25px'>Posted Successfully</span></center>"; $br1=0;}							
		}
		else
		{	
			if($br==1) {
			echo "<center><span style='color:red;font-size:25px'>Data Already Exists</span></center>"; $br=0;}
		}
		
	}
	if($_SESSION['mid_no']==2)
	{		
		mysql_query("UPDATE $table_name SET             
		$t_mid_obj=$v, $t_mid_des=$v1, $t_mid_tot=$total, subid=$sub_id, $doe='$date', $status_n=$status_v WHERE sid=$k") or die("Sry");	
		if($br1==1) {
			echo "<center><span style='color:green;font-size:25px'>Posted Successfully</span></center>"; $br1=0;}															
	}	

}
}										
}	//end foreach of descriptive							
$q=mysql_query("SELECT *FROM $table_name WHERE subid='$sub_id' AND $doe='$date'");											
while($row=mysql_fetch_array($q))
{	
$sid=$row['sid'];
$m1=$row['mid1_tot'];
$m2=$row['mid2_tot'];
if($_SESSION['reg']=='r09')
{
	$tot=(max($m1,$m2));
	mysql_query("UPDATE $table_name SET final_tot=$tot WHERE sid=$sid AND subid=$sub_id AND $doe='$date'");
	if($temp2==1)
	{
		$subject=$_SESSION['subname1'];
		$msg="Mid ".$_SESSION['mid_no']." Posted";
		$d=date("d-m-Y");
		$y=$_SESSION['year'];
		$dept=$_SESSION['dept'];
		echo "<div style='color:green'><center>Posted Sucessfully</center></div>";
		mysql_query("INSERT INTO faculty_notifications (postby,dept,year,subject,message,date)VALUES('$role',$dept,$y,'$subject','$msg','$d')") or die("Hayyo");	
		$temp2=0;
	}
}
if(($_SESSION['reg']=='r13') || ($_SESSION['reg']=='r15'))
{
	$max=((max($m1,$m2))*0.8);
	$min=((min($m1,$m2))*0.2);
	$tot=$max+$min;		
	mysql_query("UPDATE $table_name SET final_tot=$tot WHERE sid=$sid AND subid=$sub_id AND $doe='$date'");	
	if($temp3==1)
	{
		$temp3=0;
		$subject=$_SESSION['subname1'];
		$msg="Mid ".$_SESSION['mid_no']." Posted";
		$d=date("d-m-Y");
		$y=$_SESSION['year'];
		$role=$_SESSION['user'];
		$dept=$_SESSION['dept'];				
		mysql_query("INSERT INTO faculty_notifications (postby,dept,year,subject,message,date)VALUES('$role',$dept,$y,'$subject','$msg','$d')") or die("Hayyo");														
	}
}
}	
}
?>

</div></center>
</div>
 </body>
        </html>