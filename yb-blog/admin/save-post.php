<?php
include "config.php";
session_start();

if (isset($_FILES['fileToUpload'])) {
  $errors = array();

  $file_name = $_FILES['fileToUpload']['name'];
  $file_size = $_FILES['fileToUpload']['size'];
  $file_tmp = $_FILES['fileToUpload']['tmp_name'];
  $file_type = $_FILES['fileToUpload']['type'];
  $file_ext = strtolower(end(explode('.', $file_name)));
  $extensions = array('jpeg', 'jpg', 'png', 'webp', 'gif');

  // check file type
  if (in_array($file_ext, $extensions) == false) {
    $errors[] = "This extension file not allowed, please choose a JPG or PNG file";
  }

  // check file size
  if ($file_size > 2 * 1024 * 1024) {
    $errors[] = "File is larger than 2mb, please choose smaller image.";
  }

  // check error
  if (empty($errors) == true) {
    move_uploaded_file($file_tmp, "upload/" . $file_name);
  } else {
    print_r($errors);
    die();
  }
}

$title = mysqli_real_escape_string($conn, $_POST['post_title']);
$description = mysqli_real_escape_string($conn, $_POST['postdesc']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$date = date("d M, Y");
$author = $_SESSION['user_id'];

// Post sql
$sql = "INSERT INTO post(title, description, category, post_date, author, post_img)
        VALUES('{$title}', '{$description}', {$category}, '{$date}', {$author}, '{$file_name}');";
$sql .= "UPDATE category SET post=post+1 WHERE category_id={$category}";

if (mysqli_multi_query($conn, $sql)) {
  header("Location: {$hostname}/admin/post.php");
} else {
  echo "<div class='alert alert-danger'>Query Failed.</div>";
}
