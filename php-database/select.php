<?php
$servername = "localhost";
$username = "20mca017";
$password = "2414";
$dbname = "20mca017";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed:" . mysqli_connect_error());
}
$sql = "SELECT * FROM Student";
$result = mysqli_query($conn, $sql);
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>
</tr>";
if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>".$row['ID']."</td>";
echo "<td>".$row['Name']."</td>";
echo "<td>".$row['Branch']."</td>";
echo "</tr>";
}
} else {
echo "0 results";
}
mysqli_close($conn);
?>