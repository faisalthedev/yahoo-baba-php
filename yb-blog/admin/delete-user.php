<?php

if ($_SESSION['user_role'] == 0) {
  header("Location: {$hostname}/admin/post.php");
}

include 'config.php';

$userid = $_GET['id'];

$sql = "DELETE FROM user WHERE user_id='{$userid}'";

if (mysqli_query($conn, $sql)) {
  header("Location: {$hostname}/admin/users.php");
} else {
  echo "<p class='form-warning'>Can't delete the user record.</p>";
}

mysqli_close($conn);
