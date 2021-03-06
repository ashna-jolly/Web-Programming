<?php
$servername = "localhost";
$username = "20mca017";
$password = "2414";
$dbname = "20mca017";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE Customer (
c_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
c_name VARCHAR(40) NOT NULL,
item_purchased VARCHAR(30) NOT NULL,
mob_no INT(15)NOT NULL
)";
if (mysqli_query($conn, $sql)) {
echo "Table Customer created successfully";
} else {
echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>