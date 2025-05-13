<?php

$conn = mysqli_connect("localhost", "username", "password", "videoteka");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM table_name";
$result = mysqli_query($conn, $sql);

echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "
    </td><td>" . $row["email"] . "</td></tr>";
}
echo "</table>";
8

mysqli_close($conn);

$con = mysqli_connect("localhost","root","","ime_baze");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
die();
}

?>

