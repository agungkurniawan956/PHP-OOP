<?php

class Zero
{
  private array $properties = [];

  public function __get($name)
  {
    return $this->properties[$name];
  }

  public function __set($name, $value)
  {
    $this->properties[$name] = $value;
  }

  public function __isset($name)
  {
    return isset($this->properties[$name]);
  }

  public function __unset($name)
  {
    unset($this->properties[$name]);
  }

  public function __call($name, $arguments)
  {
    $join = join(",", $arguments);
    echo "Call function $name with argument $join" . PHP_EOL;
  }

  public static function __callStatic($name, $arguments)
  {
    $join = join(",", $arguments);
    echo "Call static function $name with arguments $join" . PHP_EOL;
  }
}

$zero = new Zero();
$zero->firstname = "Agung" . PHP_EOL;
$zero->pass = "makan bang" . PHP_EOL;
$zero->addres = "tangerang" . PHP_EOL;

echo "Name : $zero->firstname";
echo "Password : $zero->pass";
echo "Address : $zero->addres";

$zero->sayHello("agung", "Kurniawan");
Zero::sayHello("agung", "Kurniawan");
