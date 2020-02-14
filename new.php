<?php
	$sub=strtoupper("Engineering Physics & Engineering Chemistry Lab *");
	$s=ereg(("(LAB)"), $sub, $regs);
	if($s==true)
	{
		echo "Found ",$regs[0];
	}
	else
	{
		echo "Not found";
	}
?>