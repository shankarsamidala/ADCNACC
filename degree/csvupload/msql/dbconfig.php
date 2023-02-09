<?php
$db = mysql_connect("localhost", "root", "boss8055") or die("Could not connect.");

        if(!$db) 

	      die("no db");

        if(!mysql_select_db("placements19",$db))

 	      die("No database selected.");
?>
		  