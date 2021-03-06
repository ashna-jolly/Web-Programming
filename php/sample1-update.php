<html>
<head></head>
<title<Student Registration</title>
<body>

<?php
$id=$_GET['ID'];
$con=mysqli_connect("localhost","20mca017","2414","20mca017");
$qry="select * from Student where ID='$ID'";
$res=mysqli_query($con, $qry);
$r=mysqli_fetch_array($res);
?>
<form method="post" action="sample1-update.php" >
<h1 style="text-align:center"><u>UPDATE</u></h1>
<input type="hidden" name="ID" value="<?php echo $_GET['ID']; ?>">
<table align="center">
<tr>
<td>Student ID</td>
<td>:</td>
<td><input type="text" name="sid" value="<?php echo $r['ID'];?>"></td></tr>
<tr>
<td>Name of Student</td>
<td>:</td>
<td><input type="text" name="name" value="<?php echo $r['Name'];?>"></td></tr>
<tr>
<td colspan="2" style="text-align:right"><input type="submit" value="update"
name="update"></td></tr>
</table>
</form>
<?php
if(isset($_POST["update"]))
{
$ID=$_POST["ID"];
$Name=$_POST["Name"];
$qry1="update Student set Name='$Name' where ID='$ID'";

if(mysqli_query($con, $qry1))
{
echo "  Data updated successfully<br>";
}
}
?>
</body>
</html>