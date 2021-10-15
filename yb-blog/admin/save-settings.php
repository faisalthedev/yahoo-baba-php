<?php
include "config.php";

if (empty($_FILES['site_logo']['name'])) {
  $file_name = $_POST['old_image'];
} else {
  $errors = array();

  $file_name = $_FILES['site_logo']['name'];
  $file_size = $_FILES['site_logo']['size'];
  $file_tmp = $_FILES['site_logo']['tmp_name'];
  $file_type = $_FILES['site_logo']['type'];
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
    move_uploaded_file($file_tmp, "images/" . $file_name);
  } else {
    print_r($errors);
    die();
  }
}

// Validation
$site_title = mysqli_real_escape_string($conn, $_POST["site_title"]);
$footer_description = mysqli_real_escape_string($conn, $_POST["footer_desc"]);

$sql = "UPDATE settings SET site_title='{$site_title}', footer_desc='{$footer_description}', site_logo='{$file_name}'";

$result = mysqli_query($conn, $sql) or die("Query Failed." . mysqli_error($conn));

if ($result) {
  header("Location: {$hostname}/admin/settings.php");
} else {
  echo "Query Failed.";
}
