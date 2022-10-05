<?php

class Socmed
{
  public string $name;
}

final class Meta extends Socmed
{
}

class Facebook extends Meta // this code is error because the meta class is final class
{
}
