<?php
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

/* -------Mysqli Connect Error Function-------*/
$conn = mysqli_connect("localhost1", "root", "", "test") or die("Connection Failed: " . mysqli_connect_error());


/* -------Mysqli Connect Errorno Function-------*/
$conn = mysqli_connect("localhost", "root", "", "test1") or die("Connection Failed: " . mysqli_connect_errno());

$sql = "SELECT * FROM students";

/* -------Check SQL Command Error Function-------*/
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful : " . mysqli_error($conn));


/* -------Check SQL Command error with ERROR Number etc-------*/
$sql = "SELECT * FROMs students";

$result = mysqli_query($conn, $sql);
print_r(mysqli_error_list($conn));
die();


$str = "";
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
  }
}
