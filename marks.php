<html>
<head>
<title></title>
<body>
<h1>Mark entry</h1>
<form method="POST" action="">
<table border='1'>
<tr><th>KTUID</th><td>
<select name="semester"><option>select</option>
<?php
for($i=2000;$i<2061;$i++)
echo "<option>TVE23MCA".$i."</option>";
?>
</select></td></tr>
<td></tr>
<tr>
<th>SUBJECT</th>
<td><input type="textbox" name="subject"></td>
</tr>
<tr>
<th>SERIES</th>
<td><input type="textbox" name="series"></td>
</tr>
<tr>
<th>ASSIGNMENT</th>
<td><input type="textbox" name="assignment"></td>
</tr>
<tr><td colspan=2 align="center">
<input type="submit" name="submit"></input></td>
</tr>
</table>
</body>
</html>