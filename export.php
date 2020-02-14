<?php
 include 'conn.php';
 session_start();

if(isset($_POST['submit']))
{
	$table_name=$_SESSION['table'];
	$name=$_SESSION['nameof'];
	$mname="mid".$_SESSION['midno']."_tot";
	$SQL="SELECT a.sid, a.final_tot, b.subname, a.$mname FROM $table_name a, subjects b WHERE (a.subid=$name) AND (a.subid=b.subid)";
	$filename=$_SESSION['donwload'];
}
else
{
 $year=$_SESSION['year1'];
 $sem=$_SESSION['sem1'];
 $reg=$_SESSION['reg1'];
 $SQL = "SELECT  * from students WHERE year=$year AND sem=$sem AND reg='$reg'";
 $filename="Students".$_SESSION['year1'].$_SESSION['sem1'];
}
$header = '';
$result ='';
$exportData = mysql_query ($SQL ) or die ( "Sql error : " . mysql_error( ) );
$fields = mysql_num_fields ( $exportData );
for ( $i = 0; $i < $fields; $i++ )
{
    $header .= mysql_field_name( $exportData , $i ) . "\t";
}
while( $row = mysql_fetch_row( $exportData ) )
{
    $line = '';
    foreach( $row as $value )
    {                                            
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $result .= trim( $line ) . "\n";
}
$result = str_replace( "\r" , "" , $result );
 
if ( $result == "" )
{
    $result = "\nNo Record(s) Found!\n";                        
}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$result";
 
?>