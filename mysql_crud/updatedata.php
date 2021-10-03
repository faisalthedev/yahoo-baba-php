<?php
// Get the form data
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

$conn = mysqli_connect('localhost', 'root', 'root', 'crud') or die('Connection Failed!');
// Insert into database
$sql = "UPDATE student SET sname='{$stu_name}', saddress= '{$stu_address}', sclass='{$stu_class}', sphone='{$stu_phone}' WHERE sid={$stu_id}";
$result = mysqli_query($conn, $sql) or die('Query unsuccessful!' . mysqli_error($conn));

// redirect to the home page
header("Location: http://localhost/yahoo-baba-php/mysql_crud/index.php");

mysqli_close($conn);
