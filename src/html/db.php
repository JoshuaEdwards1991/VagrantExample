<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/main.css" />
    <meta charset="UTF-8">
    <title>About</title>
</head>
<body>
<h2>Database page</h2>
<?php
$conn = mysqli_connect("mysql", "root", "root", "test");

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$result = mysqli_query($conn,"SELECT * FROM Person");
echo "<ol>";
while ($row = mysqli_fetch_array($result)) {
    echo '<li>'.$row["firstname"].' '.$row["lastname"].'</li>';
}
echo "</ol>";
?>
</body>
</html>