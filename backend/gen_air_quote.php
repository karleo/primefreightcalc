<?php
include 'conn.php';

$service_type =$_REQUEST['service_type'];
$m_type =$_REQUEST['m_type'];
$orgin_country =$_REQUEST['orgin_country'];
$orgin_city =$_REQUEST['orgin_city'];
$orgin_airport =$_REQUEST['orgin_airport'];
$destination_country =$_REQUEST['destination_country'];
$destination_city =$_REQUEST['destination_city'];
$destination_airport =$_REQUEST['destination_airport'];

$cus_id = $_SESSION['cus_id'];

$sqlAdd = "INSERT INTO tbl_quote (c_id,q_service) VALUES ('$cus_id','$service_type')";
$rsAdd = $conn->query($sqlAdd);

$sqlAdd = "INSERT INTO tbl_customer_odm
            (odm_mtype,odm_orgin_country,odm_orgin_city,odm_orgin_a_s_b,odm_desti_country,odm_desti_city,odm_desti_a_s_b,c_id)
            VALUES
            ('$m_type',
              '$orgin_country','$orgin_city','$orgin_airport',
              '$destination_country','$destination_city','$destination_airport',
              '$cus_id')";
$rsAdd = $conn->query($sqlAdd);

if($rsAdd > 0){
  header('location:../website_quote_requested.php');
}
else{
  header('location:../website_quote_requested.php');
}


 ?>