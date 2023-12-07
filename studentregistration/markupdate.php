<?php
$con=mysqli_connect('localhost','root','','registration');
if($con)
{
//echo "connected";
}
?>
<html>
<head>
<title>MARK UPDATE</title>
</head>
<body>
<form action="searching.php" method="POST">
KTUID
<select name="ktuid"><option>select</option>
<?php
//$ktuid=$_POST['ktuid'];
$q="select * from marks";
$qc=mysqli_query($con,$q);
if(mysqli_num_rows($qc))
{
while($row=mysqli_fetch_assoc($qc))
{
echo "<option>".$row['ktuid']."</option>";
}
}
?>
</select>
<br><br>SUBJECT
<select name="subject"><option>select</option>
<?php
$q="select * from marks";
$qc=mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($qc))
{
echo "<option>".$row['subject']."</option>";
}
?>
</select><br><br>
<input type="submit" name="search" value="search"></input>
</form>
</body>
</html>