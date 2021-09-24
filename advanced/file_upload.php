<?php
if (isset($_FILES['image'])) {
  // echo "<pre>";
  // print_r($_FILES);
  // echo "</pre>";

  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_type = $_FILES['image']['type'];
  $file_tmp = $_FILES['image']['tmp_name'];

  $file_move = move_uploaded_file($file_tmp, "files/" . $file_name);

  if ($file_move) {
    echo "<h2>File upload successful.</h2>";
  } else {
    echo "<h2>File uploaded failed!</h2>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
  <style>
    body {
      margin: 100px auto;
      max-width: 1200px;
    }
  </style>
</head>

<body>
  <h2>Upload Files</h2>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image"> <br><br>
    <input type="submit" value="Upload">
  </form>
</body>

</html>