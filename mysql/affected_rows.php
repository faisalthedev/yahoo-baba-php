<?php
/* -------Affected Rows-------*/
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql = "SELECT * FROM students";

$sql = "SELECT * FROM students WHERE last_name = 'Khan'";

$sql = "UPDATE students SET last_name = 'Malik' WHERE last_name = 'Kapoor'";

$sql = "DELETE FROM students WHERE id > 2";

$result = mysqli_query($conn, $sql) or die("Query Failed");

echo "Total rows: " . mysqli_affected_rows($conn);
