<?php

class Product
{
  protected string $name; // kode visibility public(var), protected and private
  protected int $price;

  public function __construct(string $name, int $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName(): string
  {
    return $this->name . PHP_EOL;
  }

  public function getPrice(): string
  {
    return $this->price . PHP_EOL;
  }
}

class dummy extends Product
{
  public function info()
  {
    echo "Name : $this->name" . PHP_EOL;
    echo "Price : $this->price" . PHP_EOL;
  }
}
