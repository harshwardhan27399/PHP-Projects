<!doctype html>
<html>
<body>
<center>

<form action="b.php" method="GET" style="">
<h1>login page</h1>
<table border="2" align="center" allpadding="20">
<tr><td>username:</td><td><input type="text" name="uername" required></td></tr>

<tr><td>password:</td><td><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and 
one uppercase and lowercase letter, and at least 8 or more characters" required></td></tr>
<tr><td>address:</td><td><input type="text" name="address" required></td></tr>

<tr><td><input type="submit" value="submit" name="submit" style="border-radius: 15px;color: #000123;height: 30px;width:80px; ">  </td>
<td><input type="reset" name="reset" style="border-radius: 15px;color: #000123;height: 30px;width:80px;">
   </td></tr>
</form>
</center>
</body>
</html>

