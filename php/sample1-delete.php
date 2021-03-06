<?php
$conn=mysqli_connect("localhost","20mca017","2414","20mca017");
$id=$_GET["ID"];
if($conn)
{

$qry1="delete from Student where ID='$ID'";
if(mysqli_query($conn, $qry1))
{
echo "  Data Removed<br>";
}
}
?>