<?php
include("dbconfig.php");



if(isset($_POST['Submit'])){
extract($_POST);

	//echo $yearid; exit;

$target_path = $_FILES["file"]["tmp_name"];
 

$handle = fopen("$target_path", "r");
while (($data = fgetcsv($handle, 1000000, ",")) !== FALSE)
{
	
 $import = "INSERT INTO placements_info (student_name,year_id,industry_id,company_id,course,stream,college,mobile,email,gender) VALUES ('$data[0]','$yearid','$industryid','$campanyid','$data[1]','$data[2]','$campusid','$data[3]','$data[4]','$data[5]');";

	mysql_query($import) or die("mysql_error()");

}
fclose($handle);

}
?>
