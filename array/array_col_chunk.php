<?php

$mul_array = array(
  array(
    'id' => 2201,
    'first_name' => 'Anil',
    'last_name' => 'Kapoor',
  ),
  array(
    'id' => 2202,
    'first_name' => 'Salman',
    'last_name' => 'Khan',
  ),
  array(
    'id' => 2203,
    'first_name' => 'John',
    'last_name' => 'Abraham',
  )
);

// first name based array
// $first_name = array_column($mul_array, 'first_name');

// last name & id based assoc array
$first_name = array_column($mul_array, 'last_name', 'id');

// print_r($first_name);

/* -------Array chunk------- */
$cars = ["Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel"];

// $arrayChunk = array_chunk($cars, 3);

$age = array(
  "Mohan" => "35",
  "Aman" => "37",
  "Ram" => "43",
  "Salman" => "25"
);

$arrayChunk = array_chunk($age, 2, true);

print_r($arrayChunk);
