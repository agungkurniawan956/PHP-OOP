<?php
class Student
{
  public string $id;
  public string $name;
  public int $value;
  private string $pass;

  public function setPass(string $pass): void
  {
    $this->pass = $pass;
  }

  public function __clone()
  {
    unset($this->pass);
  }

  public function __toString()
  {
    return "Data Student= id: $this->id, name: $this->name, value: $this->value";
  }

  public function __invoke(...$argument): void
  {
    $joni =  join(",", $argument);
    echo "Magic Function invoke with arguments $joni " . PHP_EOL;
  }

  public function __debugInfo()
  {
    return [
      "id" => $this->id,
      "name" => $this->name,
      "value" => $this->value,
      "pass" => $this->pass,
      "author" => "Kurniawan"
    ];
  }
}
