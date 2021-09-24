<?php

session_start();

print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session view</title>
</head>

<body>
  <h1>
    <?php

    if (isset($_SESSION['favcolor'])) {
      echo "My fav color: " . $_SESSION['favcolor'];
    }

    ?>
  </h1>
</body>

</html>