<?php
 
//$db = mysqli_connect("localhost", "root", "Boss@8055","placements19") or die("Could not connect.");

$db = mysqli_connect("localhost", "root", "Boss@8055","placements19");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
        
		  



$target_path = "downloads/degree-wkkd2.csv";


 // $target_path = $target_path.$_FILES['uploadedfile']['name'];
 
//echo $target_path; exit;

//if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
//   $success = 'Success fully uploaded';
//} else{
//    echo "There was an error uploading the file, please try again!";
//}

$handle = fopen("$target_path", "r");
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
{
	
  $import = "INSERT ignore INTO student_degree (student_name,year_id,industry_id,company_id,course,stream,degree_type,college) VALUES ('$data[0]','$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]')";

	mysqli_query($db, $import) or die("mysqli_error()");

}
fclose($handle);

$send = 'yes';

?>




