<?php

namespace Data\Traits;

trait sayWellcome
{
  public function welcome(?string $name): void
  {
    if (is_null($name)) {
      echo "Welcome Bro" . PHP_EOL;
    } else {
      echo "Welcom $name " . PHP_EOL;
    }
  }
}

trait sayGoodBye
{
  public function goodbye(?string $name): void
  {
    if (is_null($name)) {
      echo "Good bye Bro" . PHP_EOL;
    } else {
      echo "Good bye $name" . PHP_EOL;
    }
  }
}

trait callName
{
  public string $name;
}

/**
 * Can run
 */
trait CanRun
{
  public abstract function run(): void;
}


class Person
{
  use sayWellcome, sayGoodBye, callName, CanRun;

  public function run(): void
  {
    echo "Hi $this->name Dont Run " . PHP_EOL;
  }
}
