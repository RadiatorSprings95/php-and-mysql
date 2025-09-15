<?php  
if (isset($_GET['msg'])){
    echo $_GET['msg'];
}
else{
    echo '<a href="register.php">register </a>';
}


?>
<html>
<form action="welcome.php" method="post">

	<label for="uemail">Enter customerEmail: </label>
    <input type="text" name="uemail"> <br>

    <label for="cpass">Enter customerpass: </label>
    <input type="password" name="cpass"> <br>
    
    <input type="submit" name="submit" value="Login">


</form>