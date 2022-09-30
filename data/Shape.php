<?php

namespace data;

class Shape
{
  public function getCorner()
  {
    return -1;
  }
}

class Rectangel extends Shape
{
  public function getCorner()
  {
    return 3;
  }

  public function getPerentCorner()
  {
    return parent::getCorner();
  }
}
