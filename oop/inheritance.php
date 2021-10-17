<?php
class employee
{
  public $name;
  public $age;
  public $salary;

  function __construct($n, $a, $s)
  {
    $this->name = $n;
    $this->age = $a;
    $this->salary = $s;
  }

  function info()
  {
    echo "Employee Profile: \n";
    echo "Employee Name: " . $this->name . "\n";
    echo "Employee Age: " . $this->age . "\n";
    echo "Employee Salary: " . $this->salary . "\n";
  }
}

class manager extends employee
{
  public $ta = 1000;
  public $phone = 300;
  public $totalSalary;

  function info()
  {
    $this->totalSalary = $this->salary + $this->ta + $this->phone;

    echo "Manager Profile: \n";
    echo "Employee Name: " . $this->name . "\n";
    echo "Employee Age: " . $this->age . "\n";
    echo "Total Salary: " . $this->totalSalary . "\n";
  }
}

// $faisal = new employee("Faisal", 27, 50000);
$faisal = new manager("Faisal", 27, 50000);
$manager = new manager("Kamal Ahmed", 31, 450000);

$manager->info();
