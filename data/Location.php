<?php

namespace Data;

abstract class Location
{

  public string $location;

  abstract public function loc(): void;
}

class Kota extends Location
{
  public function loc(): void
  {
    echo "Kota/Kab $this->name, ";
  }
}

class Kecamatan extends Location
{
  public function loc(): void
  {
    echo "Kecamatan $this->name, ";
  }
}

class Kelurahan extends Location
{
  public function loc(): void
  {
    echo "Kelurahan $this->name";
  }
}
