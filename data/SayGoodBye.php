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

class ParentPerson
{
  public function goodbye(?string $name): void // parent override by => Trait override=> child class
  {
    echo "This good bye from parent person" . PHP_EOL;
  }

  public function welcome(?string $name): void
  {
    echo "This Welcome from parent Person" . PHP_EOL;
  }
}

class Person extends ParentPerson
{
  use sayWellcome, sayGoodBye, callName, CanRun {
    // welcome as private; // <= This code is visbility override
    // goodbye as private;
  }

  public function run(): void
  {
    echo "Hi $this->name Dont Run " . PHP_EOL;
  }
}
