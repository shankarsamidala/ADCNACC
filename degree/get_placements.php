<?php
session_start();
include_once ('dbclass.php');
$mydb = new dbc();


if($_GET['action']=="company"){
    
 $amount =$mydb->qry("select company_name,company.id as compid,count(student_degree.company_id) as students,logo,priority_order from student_degree,company where student_degree.company_id=company.id  and year_id=50  group by student_degree.company_id order by count(student_degree.company_id) desc");
 
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
    
 $amount =$mydb->qry("select * from degree_college where id in (1,2,3,4,5,6,7,8)");
 
  echo json_encode($amount);
 
 }
 if($_GET['action']=="collegelist20"){
    
 $amount =$mydb->qry("select * from degree_college where id not in (14)");
 
  echo json_encode($amount);
 
 }
 if($_GET['action']=="collegewiselist"){
    
 $amount =$mydb->qry("select company_name,company.id as compid,count(student_degree.company_id) as students,logo,priority_order,college,campus_code from student_degree,company,degree_college where student_degree.company_id=company.id and college=".$_GET['college_id']." and student_degree.college=degree_college.id and year_id=50  group by student_degree.company_id ORDER BY FIELD(compid, '598','514','434','612','452','380','450','610','431','560','613','596','461','512','544','614','608','601','522','617')");
 
  echo json_encode($amount);
 
 }if($_GET['action']=="colg_companystd"){
    
 $amount =$mydb->qry("select * from student_degree,degree_college where student_degree.college=degree_college.id and company_id=".$_GET['company_id']." and college=".$_GET['colg_id']."");
 
  echo json_encode($amount);
 
 }

 
 if($_GET['action']=="industrylist"){
    
 $amount =$mydb->qry("select * from industry order by industry_name");
 
  echo json_encode($amount);
 
 }
 if($_GET['action']=="companylist"){
    
 $amount =$mydb->qry("select * from company where industry_id='".$_GET['industryid']."' order by company_name");
 
  echo json_encode($amount);
 
 }
 

?>