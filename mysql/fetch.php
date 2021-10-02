<?php
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");


$row = mysqli_fetch_assoc($result);
echo "<pre>";
print_r($row);
echo "</pre>";

echo $row['first_name'] . " " . $row['last_name'] . "<br><br>";

/*------------Fetch Associative -------------- */
while ($row = mysqli_fetch_assoc($result)) {
  echo $row['first_name'] . " " . $row['last_name'] . "<br><br>";
}

/* ------------Fetch ROW -------------- */
$row = mysqli_fetch_row($result);
echo "<pre>";
print_r($row);
echo "</pre>";

echo $row[1] . " " . $row[2] . "<br>";

while ($row = mysqli_fetch_row($result)) {
  echo $row['1'] . " " . $row['2'] . "<br>";
}


/* ------------Fetch Array -------------- */
$row = mysqli_fetch_array($result);
echo "<pre>";
print_r($row);
echo "</pre>";

echo $row[1] . " " . $row[2] . "<br>";

echo $row["first_name"] . " " . $row["last_name"] . "<br>";


$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
echo "<pre>";
print_r($row);
echo "</pre>";


$row = mysqli_fetch_array($result, MYSQLI_NUM);
echo "<pre>";
print_r($row);
echo "</pre>";


$row = mysqli_fetch_array($result, MYSQLI_BOTH);
echo "<pre>";
print_r($row);
echo "</pre>";

/* ------------ Fetch All-------------- */
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo "<pre>";
print_r($row);
echo "</pre>";

$row = mysqli_fetch_all($result, MYSQLI_NUM);
echo "<pre>";
print_r($row);
echo "</pre>";


$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo "<pre>";
print_r($row);
echo "</pre>";
foreach ($row as $data) {
  echo $data['id'] . " " . $data['first_name'] . $data['last_name'] . " " . "<br>";
}

/* ------------See the Columns information of Database Tables -------------- */
$row = mysqli_fetch_field($result);
echo "<pre>";
print_r($row);
echo "</pre>";


while ($fieldinfo = mysqli_fetch_field($result)) {
  echo "<pre>";
  print_r($fieldinfo);
  echo "</pre>";
}

/* ------------Only Works with Object Method -------------- */
while ($fieldinfo = mysqli_fetch_field($result)) {
  echo $fieldinfo->name . "-" . $fieldinfo->max_length . "<br>";
}
