<html>
<head></head>
<body>
<div align="center">
<h1 style="text-align:center"><u>Insert Data</u></h1>
<form method="post" action="sample1.php" >
<input type="text" name="name">
<input type="submit" value="submit" name="submit">
</div>
<div align="center">
<form method="post" action="sample1.php">
<h1 style="text-align:center"><u>UPDATE DATA</u></h1>
<input type="text" name="search_id" onfocus="this.value=''" value="id please">
<input type="submit" name="search" value="Search">
<input type="submit" name="view" value="view">
</form>
</div>
<?php
$con=mysqli_connect("localhost","20mca017","2414","20mca017");
if(isset($_POST["submit"]))
{
if($con)
{
echo $name=$_POST["name"];

$qry="INSERT INTO Student(name) VALUES ('$name')";

if(mysqli_query($con, $qry))
{
echo "  Data inserted successfully<br>";

}
}
}
if(isset($_POST["search"]))
{
$id=$_POST["search_id"];
$qry="select * from Student where id='$id'";
$data=mysqli_query($con, $qry);

?>
<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>ID</th>
<th>Name</th>
</tr>
<?php
$res=mysqli_fetch_array($data);
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['name'];?></td>
<td><a href="sample1_update.php?id=<?php echo $res['id'];?>">update</a></td>
<td><a href="sample1_delete.php?id=<?php echo $res['id'];?>">Delete</a></td>
</tr>
</table>
<?php
}
if(isset($_POST["view"]))
{
$qry="select * from Student";

$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>id</th>
<th>name</th>
</tr>
<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['name'];?></td>
</tr>

<?php
}
}
?>
</table>
</body>
</html>