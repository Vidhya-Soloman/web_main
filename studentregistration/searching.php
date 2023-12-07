<?php
$con=mysqli_connect('localhost','root','','registration');
if($con)
{
echo "connected";
}
if(isset($_POST['search']))
{
echo "<form method='POST' action='searching.php'>";
$ktuid=$_POST['ktuid'];
$subject=$_POST['subject'];
$q="select * from marks where ktuid='$ktuid' and subject='$subject'";
$qc=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($qc);
echo "KTU ID<input type='text' value='".$row["ktuid"]."'  name='ktuid'>";
echo "SUBJECT<input type='text' value='".$row["subject"]."'  name='subject'>";
echo "SERIES<input type='text' value='".$row["series"]."' name='series'>";
echo "ASSIGNMENT<input type='text' value='".$row['assignment']."' name='assignment'>";
?>
<input type="submit" name="update" value="update"></input>
</form>
<?php
}

?>

<?php
if(isset($_POST['update']))
{
$series=$_POST['series'];
$assignment=$_POST['assignment'];
$ktuid=$_POST['ktuid'];
$subject=$_POST['subject'];
echo $series;
echo $assignment;
$q="update marks set series='$series',assignment='$assignment' where ktuid='$ktuid' and subject='$subject'";
$cq=mysqli_query($con,$q);
if($cq)
{
echo "updated";
}
}
?>
</body>
</html>