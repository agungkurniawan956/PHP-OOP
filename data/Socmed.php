<?php

class Socmed
{
  public string $name;
}

class Meta extends Socmed
{
  final public function login(string $username, string $password): bool
  {
    return true;
  }
}

class Facebook extends Meta // this class will error if the meta class is final class
{
  public function login(string $username, string $password): bool // this function will error if function on meta is final function
  {
    return false;
  }
}
