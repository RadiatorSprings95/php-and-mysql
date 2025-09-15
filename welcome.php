<?php

session_start();
include ('databaseconnection.php');
$user = new db;
$link =$user->connect();

if (isset($_POST['submit'])){
    $nemail = $_POST['uemail'];
    $npass = $_POST['cpass'];

    $result = $user->displaylogin($nemail,$npass);
    print_r($result);

    $data = mysqli_fetch_row($result);

    if (empty($data)){
        echo ('<br>'.'login failed !');
    }
    else{
        $msg =  $data[1]. ', you have successfully logined '.'<br>';
        $_SESSION ['EMAIL']=$data[2];
        echo "<script> window.location.href='transaction.php?msg=".urlencode($msg)."&email=".urlencode($nemail)."'</script>";
    }

}
?>