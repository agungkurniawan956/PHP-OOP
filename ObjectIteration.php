<?php 

class Data implements IteratorAggregate{
  var string $name = "Agung";
  public string $password = "Kurniawan";
  protected int $tlp = 8954398728;
  private string  $mom = "Rochmawati";

  // public function getIterator(){
  //   $array = [
  //     "name" => $this->name,
  //     "password" => $this->password,
  //     "tlp" => $this->tlp,
  //     "mom" => $this->mom,
  //   ];
  //   return new ArrayIterator($array);
  // }

  public function getIterator(){
    yield "name" => $this->name;
    yield "tlp" => $this->tlp;
  }
}

$data = new Data();

foreach ($data as $property => $value) {
  echo "$property : $value" . PHP_EOL;
}

?>