<?php

include ('databaseconnection.php');
$user = new db;
$link = $user->connect();

if(isset($_POST['submit'])){
    $acno = $_REQUEST['acno'];
    $tam = $_REQUEST['tam'];
    $op = $_REQUEST['op'];
    $cidresult = $user->getcid($acno);
    $ci =mysqli_fetch_row($cidresult);
    $cid = $ci[0];
    $result = $user->inibal($acno);
    $ibal = mysqli_fetch_row($result);
    $inibal = $ibal[0];
    $currbal = 0;

    if($op ==('deposite')){ 
        $currbal = $inibal + $tam;
        echo $op;

        }
        else{
            $currbal = $inibal - $tam;
            echo $op;

            }
    
    echo 'the current balance is : '.$currbal;

    $transaction = $user->transaction($tam,$op,$currbal,$acno,$cid);
  
    if ($transaction){
        $msg = 'Transaction made';
        echo "<script> window.location.href='final.php?msg=$msg'</script>";
        }
        else{
            echo'not inserted !';
        }
}
elseif(isset($_POST['delete']))
    {
    $del = $user->deletedata($acno);
    if($del){
        $msg = urlencode("data deleted");
        header("location: final.php?msg=$msg");
        exit();
    }
}
?>