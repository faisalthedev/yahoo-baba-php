<?php
include "config.php";

if (empty($_FILES['new-image']['name'])) {
  $file_name = $_POST['old-image'];
} else {
  $errors = array();

  $file_name = $_FILES['new-image']['name'];
  $file_size = $_FILES['new-image']['size'];
  $file_tmp = $_FILES['new-image']['tmp_name'];
  $file_type = $_FILES['new-image']['type'];
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

// Validation
$post_title = mysqli_real_escape_string($conn, $_POST["post_title"]);
$post_description = mysqli_real_escape_string($conn, $_POST["postdesc"]);

$sql = "UPDATE post SET title='{$post_title}', description='{$post_description}', category={$_POST["category"]}, post_img='{$file_name}' WHERE post_id={$_POST["post_id"]}";

$result = mysqli_query($conn, $sql) or die("Query Failed." . mysqli_error($conn));

if ($result) {
  header("Location: {$hostname}/admin/post.php");
} else {
  echo "Query Failed.";
}
