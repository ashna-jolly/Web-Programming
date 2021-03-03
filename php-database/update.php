<?php
$servername = "localhost";
$username = "20mca017";
$password = "2414";
$dbname = "20mca017";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed; " . mysqli_connect_error());
}
$sql = "UPDATE Student SET Mark='81' WHERE ID='03'";
if (mysqli_query($conn, $sql)) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>