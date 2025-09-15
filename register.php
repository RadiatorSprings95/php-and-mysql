<html>
<form action="usercode.php" method="post">
    
    <label for="uname"> Username : </label>
    <input type="text" name="uname"><br>

    <label for="uemail"> Email : </label>
    <input type="text" name="uemail"><br>

    <label for="ucontact"> Contact : </label>
    <input type="number" name="ucontact"><br>

    <label for="upassword"> password : </label>
    <input type="password" name="upassword"><br>

    <label for="busnat">Bussiness nature : </label>
    <input type="checkbox" name="nat[]" value="manufacturing"> Manufacturing &nbsp;
    <input type="checkbox" name="nat[]" value="trade"> trade &nbsp;
    <input type="checkbox" name="nat[]" value="ngo"> ngo &nbsp;
    <input type="checkbox" name="nat[]" value="finance"> finance <br>

    <label for="CustCity">City :</label>
    <select name="CustCity" id="CustCity" >
    <option value="surat">Surat</option>
    <option value="ahmedabad">Ahmedabad</option>
    <option value="rajkot">Rajkot</option>
    </select><br>

    <label for="CustAddress">Customer Address :</label>
    <input type="text" name="CustAddress"><br>

    <label for="CustState">State :</label>
    <select name="CustState" id="CustState" >
    <option value="gujarat">Gujarat</option>
    <option value="rajasthan">Rajasthan</option>
    <option value="jk">JK</option>
    </select><br>

    <label for="CustKYC">KYC :</label>
    <input type="radio" name="ukyc" value="yes">yes
    <input type="radio" name="ukyc" value="no">no<br>





    <input type="submit" name="submit" value="register">


</form>
</html>


