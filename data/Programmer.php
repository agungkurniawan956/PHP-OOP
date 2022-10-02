<?php

class Programmer
{

  public string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }
}

class BackendProgrammer extends Programmer
{
}

class ForntendProgrammer extends Programmer
{
}

class Company
{
  public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{
  if ($programmer instanceof BackendProgrammer) {
    echo "Hi, I'm $programmer->name as Backend Programmer" . PHP_EOL;
  } elseif ($programmer instanceof ForntendProgrammer) {
    echo "Hi, I'm $programmer->name as Frontend Programmer" . PHP_EOL;
  } elseif ($programmer instanceof Programmer) {
    echo "Hi, I'm $programmer->name as Fullstack Programmer" . PHP_EOL;
  }
}
