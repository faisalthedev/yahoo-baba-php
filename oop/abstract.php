<?php
abstract class parentClass
{

  public $name;

  abstract protected function calc($a, $b);
}

class childClass extends parentClass
{

  public function  calc($c, $d)
  {
    //echo $c + $d;
    echo "Hello";
  }
}

$test = new childClass();

$test->calc(10, 20);
