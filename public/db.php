<?php
$conn = mysqli_connect("localhost", "root", "", "videoteka");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Code</th><th>Price</th><th>Image</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["code"] . "</td><td>" . $row["price"] . "</td><td>" . $row["image"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "No products found.";
}

mysqli_close($conn);
?>
