<?php
	include 'conn.php';	
	include 'staffhome.php';
?>
<div style="margin-left:100px;">
	 <form method="post" action="questions.php" role="form">
                    <div class="form-group">
    				                    <div class="col-xs-2">
                     <label for="Name">Name Of the Subject</label>
						<input type="text" name="nameofsubject" class="form-control" placeholder="Enter Name Of The Subject"/>
                    </div>
                
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
                        <div class="col-xs-2">                        	
                        </div>
                        </div>
								<div>
		                        <button id="submit" name="submit" class="btn btn-success" style="margin-top:30px;">Click Here to Select Subjects</button>
                                </div>
                        </form>
    
<?php
	for($i=1;$i<=20;$i++)
	{
		echo "<p> <b>$i </b><input type='text' name='$i' placeholder='Enter question no $i' size='150'></p>";
		echo "<table class='table'><tr>";
		for($j=1;$j<=4;$j++)
		{
			$name=$i."_".$j;
			echo "<td><input type='4' name='$name' placeholder='Option $j'></td>";
		}
		echo "</tr></table></tr>";
	}
?>
</form>
</div>