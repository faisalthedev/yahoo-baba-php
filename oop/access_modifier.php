<?php
class base
{
  private $name;

  public function __construct($n)
  {
    $this->name = $n;
  }

  public function show()
  {
    echo "Your Name : " . $this->name . "\n";
  }
}

class derived extends base
{
  public function get()
  {
    echo "Your Name : " . $this->name . "\n";
  }
}

$test = new base("Yahoo baba");

// $test->name = "baba Yahoo";

$test->show();
