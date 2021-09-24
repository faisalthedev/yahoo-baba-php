<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Cookies</title>
</head>

<body>
  <h1>PHP Cookies</h1>

  <?php
  if (!isset($_COOKIE['visited'])) {
    setcookie('visited', '1', time() + 86400, './') or die("Could not set cookie");
    echo "You're new visitor";
  } else {
    echo "You're our old visitor.";
  }
  ?>
</body>

</html>