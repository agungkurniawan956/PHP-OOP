<?php

trait A
{
  function doA()
  {
    echo "A" . PHP_EOL;
  }

  function doB()
  {
    echo "B" . PHP_EOL;
  }
}

trait B
{
  function doA()
  {
    echo "a" . PHP_EOL;
  }
  function doB()
  {
    echo "b" . PHP_EOL;
  }
}

class Run
{
  use A, B {
    A::doA insteadof B; // mengunakan trait A
    B::doB insteadof A; //menggunakan trait B
  }
}

$run = new Run();
$run->doA();
$run->doB();
