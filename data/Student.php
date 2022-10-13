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
}
