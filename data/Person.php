<?php
class Person
{
  const AUTHOR = "Agung Kurniawan";

  var string $name;
  var ?string $address = null;
  var string $country = "Indonesia";

  function __construct(string $name, ?string $address)
  {
    $this->name = $name;
    $this->address = $address;
  }

  function sayHello(?string $name)
  {
    if (is_null($name)) {
      echo "Hi My name is $this->name" . PHP_EOL;
    } else {
      echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
  }

  function info()
  {
    echo "Author :" . self::AUTHOR . PHP_EOL;
  }

  function __destruct()
  {
    echo "Object person $this->name is destroyed" . PHP_EOL;
  }
}
