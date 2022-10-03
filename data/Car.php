<?php

namespace Data;

interface Brand
{
  function getBrand(): string;
}

interface Maintenance
{
  function getMaintenance(): bool;
}

interface Car extends Brand
{
  function drive(): void;

  function rate(): int;
}

class Pajero implements Car, Maintenance
{
  public function getBrand(): string
  {
    return "brand Toyota" . PHP_EOL;
  }

  public function drive(): void
  {
    echo "Tipe Pajero" . PHP_EOL;
  }

  public function getMaintenance(): bool
  {
    return false;
  }

  public function rate(): int
  {
    return 4;
  }
}
