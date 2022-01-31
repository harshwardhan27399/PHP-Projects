<!doctype html>
<html>
<body>
<center>

<form action="savereg.php" method="GET" style="">
<h1>login page</h1>
<table border="2" align="center" allpadding="20">
<tr><td>username:</td><td><input type="text" name="user" required></td></tr>

<tr><td>password:</td><td><input type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and 
one uppercase and lowercase letter, and at least 8 or more characters" required></td></tr>
<tr><td>address:</td><td><input type="text" name="add" required></td></tr>
<tr><td>mobno:</td><td><input type="text" name="mobno" pattern="[1-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="must be 10 digit no" required></td></tr>
<tr><td>education:</td><td><input type="text" name="edu" required></td></tr>

<tr><td><input type="submit" value="submit" name="submit" style="border-radius: 15px;color: #000123;height: 30px;width:80px; ">  </td>
<td><input type="reset" name="reset" style="border-radius: 15px;color: #000123;height: 30px;width:80px;">
   </td></tr>


</form>
</center>
</body>
</html>

