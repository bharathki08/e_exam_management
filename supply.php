<?php
	session_start();
	include 'conn.php';
	include 'admindb.php';
?>
      <body>
        	<div id="details" >
            	<center>
                	<p><h1>Post Externals Marks Here</h1></p>
                    <form method="post" action="post.php">
                    Department:<select name="dept">
                    	<option>Select Dept</option>
                        <option value="1">Civil</option>
                        <option value="2">EEE</option>
                        <option value="3">Mechanical</option>
                        <option value="4">ECE</option>
                        <option value="5">CSE</option>
                    </select>
                    Regulation<select name="reg">
						<option>Select Reg</option>
						<option value="r09">R09</option>
						<option value="r13">R13</option>
						<option value="r15">R15</option>
					</select>
                    Year
                    <select name="year">
							<option>Select Year</option>
							<option value="1">1</option>				
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
                        Sem
                        <select name="sem">
							<option>Select sem</option>
							<option value="1">1</option>				
							<option value="2">2</option>				
						</select>						
                                                <br/><br/>
                        <button id="submit" name="submit">Submit</button>
                        </form>
                        </center>
                        </div>
                        <center>
                        <div id="display" align="center" style="width:60%;margin-right:90px;">
                        		<?php
									if(isset($_POST['submit']))
									{
										extract($_POST);
										$_SESSION['year']=$year;
										$_SESSION['sem']=$sem;
										$_SESSION['reg1']=$reg;
										echo "<form method='post' action='post.php'>";
										echo "<table class='table table-bordered'>";
										$stu=mysql_query("SELECT *FROM students WHERE dept_id=$dept AND sem=$sem AND year=$year AND reg='$reg'");
										$sub=mysql_query("SELECT *FROM subjects WHERE dept_id=$dept AND sem=$sem AND year=$year AND reg='$reg'");
										$sub_ids=array();
										while($row1=mysql_fetch_array($sub))											
										{
											$sub_id=$row1['subid'];
											$subname=strtoupper($row1['subname']);
											$s=ereg(("(LAB)"), $subname);
											if($s==true)
											{
												$sub_id=$sub_id."-l";
											}
											else
											{
												$sub_id=$sub_id."-d";
											}
											$sub_ids[$sub_id]=$subname;
										}
										echo "<th>Roll Number</th><th>Name</th>";
										foreach($sub_ids as $key => $value)
										{											
											echo "<th>".$value."</th>";										
										}
										echo "</tr>";
										while($row=mysql_fetch_array($stu))											
										{
											$roll=$row['stu_id'];
											echo "<tr><td>".$row['rollno']."</td><td>".$row['sname']."</td>";
											foreach($sub_ids as $key => $value)
											{
												$name=$roll."_".$key;											
												echo "<td><input type='text' size='3' name='$name'></td>";	
											}
											echo "<tr/>";
										}
										echo "</table>";
										echo "<input type='submit' name='post_ext' value='Post Externals' required></form>";
									}
								?>                                                               
                        </div> <!-- display div end-->
                        <div>
                        	<?php
								if(isset($_POST['post_ext']))
								{
									include 'conn.php';
									$table_name="external".$_SESSION['year'].$_SESSION['sem'];		
									$int_tablename="internal".$_SESSION['year'].$_SESSION['sem'];	
									$main_tot=0;	
									foreach($_POST as $key1 => $value1)
									{
										if($key1=="post_ext")
										{
											break;
										}
										$id=explode("_",$key1);										
										$sid=$id[0];										
										$temp=explode("-",$id[1]);																	
										$subid=$temp[0];
										$status=1;
										$int=mysql_query("SELECT *FROM $int_tablename WHERE sid=$sid AND subid=$subid");
										$r1=mysql_fetch_array($int);
										$mid_tot=$r1['final_tot'];
										$final_tot=$value1+$mid_tot;
										if($_SESSION['reg1']=="r15")										
										{
											if($value1>=25)
											{ if($final_tot>=40){ $p_f="P"; } else { $p_f="F"; }	}																				
											else  {  $p_f="F"; }											
										}
										else
										{
											if($temp[1]=="l")
											{
												if($value1>=18)
												{
													if($final_tot>=25){ $p_f="P"; } else { $p_f="F"; }	
												}
												else
												{
													$p_f="F";
												}
											}
											else
											{
												if($value1>=25)
												{
													if($final_tot>=40){ $p_f="P"; } else { $p_f="F"; }																								
												}
												else
												{
													$p_f="F";
												}
											}
										}
										if($value1=="AB")
										{	
											$value1=0;
											$status=0;	
											$p_f="AB";									
										}
										//$main_tot=$main_tot+$final_tot;
											$q_i=mysql_query("INSERT INTO $table_name (sid,marks,sub_id,main_tot,forabsent,p_f) VALUES ($sid,$value1,$temp[0],$final_tot,$status,'$p_f')") or die("Sry");											
									}							
									if($q_i==true)										
									echo "<span style='color:green;font-size:25px;'>Posted Successfully</span>";
								}
							?>
                        </div>
                        </center>
                        </body>
                        </html>