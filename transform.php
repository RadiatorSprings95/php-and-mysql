<?php
include('databaseconnection.php');
$obj = new db;
$link = $obj->connect();
$result = mysqli_query($link, "SELECT cid,name FROM customertable");
$acno = $_REQUEST['acno'];  
$inibalresult = $obj->inibal($acno);
$ibal = mysqli_fetch_row($inibalresult);
$inibal = (float)$ibal[0];



?>

<html>
    <form action="insert1.php" method="post">
        <label>the initibal is <?php echo ($inibal); ?></label><br>


        
        <input type="hidden" name="acno" value="<?php echo($acno); ?>">

        <label for="transamm">transaction ammount : </label>
        <input type="int" name="tam" ><br>

        <label>operation : </label>
        <select name="op">
            <option>deposite</option>
            <option>withdraw</option>
        </select><br>

        <input type="submit" name="submit" value="submit"><br><br>

        <label>to delete the data press delete</label><br>


        <input type="submit" name="delete" value="delete">
    </form>
</html>









