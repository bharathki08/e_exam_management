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
				$subcode=$allDataInSheet[$i]["B"];
				$deptid=$allDataInSheet[$i]["C"];
				if(!empty($subcode)){
					mysql_query("SELECT * FROM subjects WHERE subcode='".$subcode."' AND dept_id='".$deptid."'");
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
				for($i=1;$i<=$arrayCount;$i++)
				{					
					$subname=$allDataInSheet[$i]["A"];					
					$subcode=$allDataInSheet[$i]["B"];
					$dptid=$allDataInSheet[$i]["C"];
					$sem=$allDataInSheet[$i]["D"];
					$year=$allDataInSheet[$i]["E"];
					$reg=$allDataInSheet[$i]["F"];
					mysql_query("INSERT INTO subjects VALUES (NULL,'$subname','$subcode',$dptid,$sem,$year,'$reg')"); 
					
				}
				if(mysql_affected_rows()>0)
				{
					echo "Successfully Uploaded";
				}
			}
		}
?>