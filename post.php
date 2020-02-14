
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
    </select>	Grand Total<input type="number" name="grand" placeholder="Groand Total of this semester">
                            <br/><br/>
    <button id="submit" name="submit">Submit</button>
    </form>
    </center>
    </div>
    <center>
    <div id="display" align="center" style="width:60%">
<?php
if(isset($_POST['submit']))
{
	extract($_POST);
	$_SESSION['year']=$year;
	$_SESSION['sem']=$sem;
	$_SESSION['reg1']=$reg;
	$_SESSION['grand']=$grand;
	echo "<form method='post' action='post.php'>";
	echo "<table class='table table-bordered'>";
	$stu=mysql_query("SELECT *FROM students WHERE dept_id=$dept AND sem=$sem AND year=$year AND reg='$reg' AND status=1");
	$sub=mysql_query("SELECT *FROM subjects WHERE dept_id=$dept AND sem=$sem AND year=$year AND reg='$reg'");
	$sub_ids=array();	
	
	$credits=0;
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
		$sub_id=$sub_id."&".$row1['credits'];
		$credits=$credits+$row1['credits'];	
		$sub_ids[$sub_id]=$subname;
	}
	$_SESSION['credit']=$credits;
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
	$main_tot=array();
	$s_credits=array();
	$stu_bl=array();
	$bl_sub=array();
	$str="";
	$count=$acredits=$blcount=0;
	foreach($_POST as $key1 => $value1)
	{
		if($key1=="post_ext")
		{
			break;
		}
		$id=explode("_",$key1); //sid - sub-d|l&credits										
		$sid=$id[0];	 //sid								
		$temp=explode("-",$id[1]);  //sub  -   d|l & credits																	
		$subid=$temp[0];
		$temp1=explode("&",$temp[1]); // d|l -  credits																			
		$status=1;
		$int=mysql_query("SELECT *FROM $int_tablename WHERE sid=$sid AND subid=$subid");
		$r1=mysql_fetch_array($int);
		$mid_tot=$r1['final_tot'];
		$final_tot=$value1+$mid_tot;				
		if($temp1[1]!=0)
		{
			if($count==0)
			{
				$temp2=$subid;
				$count=1;
			}
			
			if($temp2!=$subid)
			{
				$sum=$sum+$final_tot;
				$main_tot[$sid]=$sum;
			}
			else
			{
				$sum=0;
				$sum=$sum+$final_tot;
				$acredits=0;				
				$blcount=0;
				$str="";
			}			
		}
				
		if($_SESSION['reg1']=="r15")										
		{
			if($value1>=25)
			{ 
				if($final_tot>=40)
				{ 
					$p_f="P"; 
					$acredits=$acredits+$temp1[1];					
				} 
				else 
				{ 
					$p_f="F"; 
					$temp1[1]=0; $acredits=$acredits+$temp1[1]; 
					$blcount++;
					$str .=$subid."+";
				}	
			}																				
			else  
			{ 
				 $p_f="F"; 
				 $temp1[1]=0; $acredits=$acredits+$temp1[1]; 
				 $blcount++;
				 $str .=$subid."+";				 				
			}											
		}
		else
		{
			if($temp1[0]=="l")
			{
				if($value1>=18)
				{
					if($final_tot>=25)
					{ 
						$p_f="P"; 
						$acredits=$acredits+$temp1[1];
						
					} 
					else 
					{ 
						$p_f="F"; 
						 $temp1[1]=0; $acredits=$acredits+$temp1[1]; 
						 $blcount++;
						$str .=$subid."+";
					}	
				}
				else
				{
					$p_f="F";
					$temp1[1]=0;
					$acredits=$acredits+$temp1[1];
					$blcount++;
					$str .=$subid."+";
				}
			}
			else
			{
				if($value1>=25)
				{
					if($final_tot>=40)
					{
						 $p_f="P"; 
						 $acredits=$acredits+$temp1[1];
					}
					 else 
					 { 
					 	$p_f="F"; 
						$temp1[1]=0; 
						$acredits=$acredits+$temp1[1];
						$blcount++;
						$str .=$subid."+";						
					 }																								
				}
				else
				{
					$p_f="F";
					$temp1[1]=0;
					$acredits=$acredits+$temp1[1];
					$blcount++;
					$str .=$subid."+";
				}
			} 
				
		} 
		
		if($value1=="AB")
		{	
			$value1=0;
			$status=0;	
			$p_f="AB";							
			$temp1[1]=0;
			$acredits=$acredits+$temp1[1];		
			$blcount++;
			$str .=$subid."+";			
		}		
		$s_credits[$sid]=$acredits;
		$stu_bl[$sid]=$blcount;
		$bl_sub[$sid]=$str;
$q_i=mysql_query("INSERT INTO $table_name (sid,marks,sub_id,main_tot,forabsent,p_f) VALUES ($sid,$value1,$subid,$final_tot,$status,'$p_f')") or die("Sry");											
		
	}
	$master_tot=$_SESSION['year'].$_SESSION['sem']."_tot";
	$master_credits=$_SESSION['year'].$_SESSION['sem']."_credits";
	$master_blcount=$_SESSION['year'].$_SESSION['sem']."_blcount";
	$master_blsub=$_SESSION['year'].$_SESSION['sem']."_bl";
	foreach($main_tot as $k => $v)
		{
			$mas=mysql_query("SELECT *FROM master WHERE stu_id=$k");
			$present=$s_credits[$k];
			$total=$main_tot[$k];
			$bls=$stu_bl[$k];
			$blsubs=$bl_sub[$k];
			$grand=$_SESSION['grand'];
			$per=($total/$grand)*100;
			while($r2=mysql_fetch_array($mas))
			{
				$f_credits=$r2['11_credits']+$r2['12_credits']+$r2['21_credits']+$r2['22_credits']+$r2['31_credits']+$r2['32_credits']+$r2['41_credits']+$r2['42_credits']+$present;
				$total_blgs=$r2['11_blcount']+$r2['12_blcount']+$r2['21_blcount']+$r2['22_blcount']+$r2['31_blcount']+$r2['32_blcount']+$r2['41_blcount']+$r2['42_blcount']+$bls;					
				mysql_query("UPDATE master SET $master_tot=$total, $master_credits=$present, total_credits=$f_credits, percentage=$per,tot_bl=$total_blgs, $master_blcount=$bls, $master_blsub='$blsubs' WHERE stu_id=$k");
			}
		}																												
	if($q_i==true)	
	{															
		echo "<span style='color:green;font-size:25px;'>Posted Successfully</span>";
	}
}
?>
</div>
</center>
</body>
</html>