<?php

class Manager
{
  var string $name;

  function sayHello(string $name): void
  {
    echo "Hi $name, I am Manager $this->name" . PHP_EOL;
  }
}

class VicePresident extends Manager
{
  function sayHello(string $name): void
  {
    echo "Hi $name, I'am Vice President $this->name" . PHP_EOL;
  }
}
