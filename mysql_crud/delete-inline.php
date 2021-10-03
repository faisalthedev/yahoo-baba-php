<?php
$stu_id = $_GET['id'];

// include config
include 'config.php';

$sql = "DELETE FROM student WHERE sid={$stu_id}";
$result = mysqli_query($conn, $sql) or die('Query uncessful!');

// redirect to the home page
header("Location: http://localhost/yahoo-baba-php/mysql_crud/index.php");

mysqli_close($conn);
