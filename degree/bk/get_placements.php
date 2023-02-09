<?php
session_start();
include_once ('dbclass.php');
$mydb = new dbc();


if($_GET['action']=="company"){
    
 $amount =$mydb->qry("select company_name,company.id as compid,count(student_degree.company_id) as students,logo,priority_order from student_degree,company where student_degree.company_id=company.id   group by student_degree.company_id order by count(student_degree.company_id) desc");
 
  echo json_encode($amount);
 
 }if($_GET['action']=="companystd"){
    
 $amount =$mydb->qry("select * from student_degree,degree_college where student_degree.college=degree_college.id and company_id=".$_GET['company_id']."");
 
  echo json_encode($amount);
 
 }if($_GET['action']=="programlist"){
    
 $amount =$mydb->qry("select * from student_report where selected_program='".$_GET['course']."'");
 
  echo json_encode($amount);
 
 }if($_GET['action']=="campusreport"){
    
 $amount =$mydb->qry("select * from student_report where campus_name='".$_GET['campus']."'");
 
  echo json_encode($amount);
 
 }
 if($_GET['action']=="collegelist"){
    
 $amount =$mydb->qry("select * from degree_college");
 
  echo json_encode($amount);
 
 }
 if($_GET['action']=="collegewiselist"){
    
 $amount =$mydb->qry("select company_name,company.id as compid,count(student_degree.company_id) as students,logo,priority_order,college from student_degree,company where student_degree.company_id=company.id and college=".$_GET['college_id']."  group by student_degree.company_id order by count(student_degree.company_id) desc");
 
  echo json_encode($amount);
 
 }if($_GET['action']=="colg_companystd"){
    
 $amount =$mydb->qry("select * from student_degree,degree_college where student_degree.college=degree_college.id and company_id=".$_GET['company_id']." and college=".$_GET['colg_id']."");
 
  echo json_encode($amount);
 
 }

?>