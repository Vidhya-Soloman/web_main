<html>
<head>
<title></title>
<body>
<h1>Student Registration</h1>
<form method="POST" action="studtest.php">
<table border=1>
<tr><th>KTUID</th><td>
<select name="ktuid"><option>select</option>
<?php
for($i=2000;$i<2061;$i++)
{
echo "<option>TVE".$i."</option>";
}
?>
</select></td></tr>
</select></td></tr>
<tr>
<th>ROLLNO</th>
<td><input type="textbox" name="rollno"></input>
</td></tr>
<tr>
<th>NAME</th>
<td><input type="textbox" name="name"></input></td></tr>
<tr>
<th>GENDER</th>
<td>Female<input type="radio" name="gender" value="female"></input>
Male
<input type="radio" name="gender" value="male"></input>
</td>
</tr>
<tr><th>SEMESTER</th>
<td>
<select name="semester"><option>select</option>
<?php
for($i=1;$i<10;$i++)
echo "<option>semester".$i."</option>";
?>
</select></td></tr>
<tr><th>ADDRESS</th>
<td>
<textarea name="address"></textarea></td></tr>
<tr>
<th>PHONE NO</th>
<td><input type="textbox" name="phone"></input></td></tr>
<tr><td colspan=2 align="center">
<input type="submit" name="register" value="Register"></input>
<input type="button" name="update" value="update"></input>
</td></tr>
</form>
</body>
</html>