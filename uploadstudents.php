<?php
	
		include_once "conn.php";
		$target_dir = "docs/";
		$target_file = $target_dir . basename($_FILES["xls"]["name"]);
		if (move_uploaded_file($_FILES["xls"]["tmp_name"], $target_file)) {
			set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
			include 'Classes/PHPExcel/IOFactory.php';
			try {
					$objPHPExcel = PHPExcel_IOFactory::load($target_file);
			} 
			catch(Exception $e) {
						die('Error loading file "'.pathinfo($target_file,PATHINFO_BASENAME).'": '.$e->getMessage());
			}
			$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
			$arrayCount = count($allDataInSheet);
			$count=0;
			$exist="<ul>";
			for($i=2;$i<=$arrayCount;$i++){
				$rollno=$allDataInSheet[$i]["A"];
				$deptid=$allDataInSheet[$i]["D"];
				if(!empty($rollno)){
					mysql_query("SELECT * FROM students WHERE rollno='".$rollno."' AND dept_id='".$deptid."'");
					if(mysql_affected_rows()>0){
						$exist.="<li>".$subcode." already exists"."</li>";
						$count++;
					}
				}	
			}
			$exist.="</ul>";
			echo $exist; 
			if($count==0)
			{
				for($i=2;$i<=$arrayCount;$i++)
				{					
					$sname=$allDataInSheet[$i]["B"];					
					$rollno=$allDataInSheet[$i]["A"];
					$reg=$allDataInSheet[$i]["C"];
					$deptid=$allDataInSheet[$i]["D"];
					$year=$allDataInSheet[$i]["E"];
					$sem=$allDataInSheet[$i]["F"];
					$year_of_join=$allDataInSheet[$i]["G"];
					$status=$allDataInSheet[$i]["H"];
					$mobile=$allDataInSheet[$i]["I"];
					$qn=mysql_query("INSERT INTO students VALUES (NULL,'$rollno','$sname','$reg',$deptid,$year,$sem,$year_of_join,$status,$mobile)"); 
					
				}
				if($qn==true)
				{
					echo "Successfully Uploaded";
				}
			}
		}
?>