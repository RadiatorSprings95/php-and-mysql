<?php
        
require_once ('databaseconnection.php');
$db = new db;
$link=$db->connect();

$ename = $_REQUEST['uname'];
$eemail = $_REQUEST['uemail'];
$econtact = $_REQUEST['ucontact'];
$eadd = $_REQUEST['CustAddress'];
$estate = $_REQUEST['CustState'];
$ecity = $_REQUEST['CustCity'];
$ekyc = $_REQUEST['ukyc'];
$epassword = $_REQUEST['upassword'];

$bussiness = $_REQUEST['nat'];

$strbus = implode(',',$bussiness);

$ins=$db->insertcustomer($ename,$econtact,$estate,$ecity,$eadd,$ekyc,$eemail,$strbus,$epassword);
if ($ins){
    $msg = 'you have successfully registered you may now login';
    echo "<script> window.location.href='login.php?msg=$msg'</script>";
}
else{
    echo'not inserted !';
}
?>
