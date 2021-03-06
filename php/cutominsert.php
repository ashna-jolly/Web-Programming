<?php
$servername = "localhost";
$username = "20mca017";
$password = "2414";
$dbname = "20mca017";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die ("Connection failed: " . mysqli_conect_error());
}
$sql = "INSERT INTO Customer (c_no, c_name, item_purchased, mob_no)
VALUES ('23', 'Athira', 'toys', '9870764638')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO Customer (c_no, c_name, item_purchased, mob_no)
VALUES ('25', 'Akhila', 'chocolates', '8970567893')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO Customer(c_no, c_name, item_purchased, mob_no)
VALUES('27', 'Rohit', 'books', '9078563789')";
if(mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO Customer(c_no, c_name, item_purchased, mob_no)
VALUES('29', 'Varun', 'cookies', '9087564953')";
if(mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO Customer(c_no, c_name, item_purchased, mob_no)
VALUES('31', 'Liya', 'bottle', '8576569545')";
if(mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>