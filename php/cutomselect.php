<?php
$servername = "localhost";
$username = "20mca017";
$password = "2414";
$dbname = "20mca017";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM Customer";
$result = mysqli_query($conn, $sql);
echo "<table border = '1'>
<tr>
<th>c_no</th>
<th>c_name</th>
<th>item_purchased</th>
<th>mob_no</th>
</tr>";
if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result))
{
 echo "<tr>";
 echo "<td>".$row['c_no']."</td>";
 echo "<td>".$row['c_name']."</td>";
 echo "<td>".$row['item_purchased']."</td>";
 echo "<td>".$row['mob_no']."</td>";
 echo "</tr>";
}
} else {
echo "0 results";
}
mysqli_close($conn);
 ?>
