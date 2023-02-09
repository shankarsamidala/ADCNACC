<?php
session_start();
//include_once ('dbclass.php');
//$mydb = new dbc();
$data = json_decode(file_get_contents("php://input"), true);


 
 if($_GET['action']=="blogposts"){
   // echo "test";
 //$amount =$mydb->qry("SELECT * FROM busroute GROUP BY town");
  $amount =$mydb->qry("SELECT * FROM wp_posts,wp_users WHERE wp_posts.post_author=wp_users.ID and post_type='post' AND post_status='publish' ORDER BY wp_posts.ID DESC LIMIT 8");
  
 
 
  echo json_encode($amount);
 
 }
 
 if($_GET['action']=="getstudentlist"){
	//extract($_POST);

	 $targetpath = "projects/2022-23/csvfiles/".$_GET['course'].".csv";	
	if (($handle = fopen($targetpath, "r")) !== FALSE) {
    $csvs = [];
    while(! feof($handle)) {
       $csvs[] = fgetcsv($handle);
    }
    $datas = [];
    $column_names = [];
    foreach ($csvs[0] as $single_csv) {
        $column_names[] = $single_csv;
    }
    foreach ($csvs as $key => $csv) {
        if ($key === 0) {
            continue;
        }
        foreach ($column_names as $column_key => $column_name) {
            $datas[$key-1][$column_name] = $csv[$column_key];
        }
    }
	
}
//print_r($datas[0]);
echo json_encode($datas);

}

 

?>