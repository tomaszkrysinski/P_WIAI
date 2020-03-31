<?php
class pet{
  public $name;
  public $specie;
  public $trait;
  public $favourite_food;

  public function set_name($value){
    $this->name = $value;
  }

  public function set_specie($value){
    $this->specie = $value;
  }

  public function set_trait($value){
    $this->trait = $value;
  }

  public function set_favourite_food($value){
    $this->favourite_food = $value;
  }

  public function set_all($name, $specie, $trait, $favourite_food){
    $this->name = $name;
    $this->specie = $specie;
    $this->trait= $trait;
    $this->favourite_food = $favourite_food;
  }

  public function get_all(){
    $show = <<<SHOW
    Imie pupila: $this->name <br>
    Gatunek: $this->specie <br>
    Wyjątkowa cecha: $this->trait <br>
    Ulubione jedzonko: $this->favourite_food <br>
SHOW;
  return $show;
  }
}
 ?>
