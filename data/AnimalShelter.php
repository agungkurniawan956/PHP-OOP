<?php 

namespace Data;

interface AnimalShelter
{
  function adopt(string $name): Animal;
}
