<?php
include ('databaseconnection.php');
session_start();
$obj = new db;
$link = $obj->connect();

echo urldecode($_GET['msg']);
$email =urldecode($_GET['email']);
$data=$obj->displayaccinfo($email);


?>
<html>
    <form action="transform.php" method="post">
        <select name="acno">
            <?php 
            while ($res=mysqli_fetch_row($data)) {?>
            <option value="<?php echo $res[0];?>">
            <?php echo $res[0]; ?>
        </option>
        <?php }?>
        </select><br>
        <input type="submit" value="submit" name="submit">
    </form>
</html>