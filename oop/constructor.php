<?php
class Person
{
  public $name;
  public $age;

  function __construct($name = "Faisal Ahammad", $age = 27)
  {
    $this->name = $name;
    $this->age = $age;
  }

  function show()
  {
    echo $this->name . " " . $this->age;
  }
}

// $faisal = new Person("Faisal Ahammad", 27);
// $faisal = new Person();
$tayeba = new Person("Tayeba Habib", 22);

// $faisal->name = "Faisal Ahammad - ";
// $faisal->age = 28;

$tayeba->show();
