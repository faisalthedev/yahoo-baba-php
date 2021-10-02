<?php
// Get the form data
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

$conn = mysqli_connect('localhost', 'root', 'root', 'crud') or die('Connection Failed!');
// Insert into database
$sql = "INSERT INTO student(sname, saddress, sclass, sphone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die('Query unsuccessful!' . mysqli_error($conn));

// redirect to the home page
header("Location: http://localhost/yahoo-baba-php/mysql_crud/index.php");

mysqli_close($conn);
