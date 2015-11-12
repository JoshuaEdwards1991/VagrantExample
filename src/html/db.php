<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
</head>
<body>
<h2>Database page</h2>
<?php
$conn = mysqli_connect("mysql", "root", "root");

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$result = mysqli_query($con,"SELECT * FROM Person");
echo "<ol>";
while ($row = $result->fetch_array()) {
    echo '<li>'.$row["firstname"].' '.$row["lastname"].'</li>';
}
echo "</ol>"
?>
</body>
</html>