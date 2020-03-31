<?php
class Zwierze{
  private $name;
  private $species;
  private $location;
  private $type_of_food;

  public function __construct($name='',$species,$location,$type_of_food){
    $this->name = $name;
    $this->species = $species;
    $this->location = $location;
    $this->type_of_food = $type_of_food;
  }

  public function set_name($name){
    $this->name=$name;
  }
  public function set_species($species){
    $this->species=$species;
  }
  public function set_size($location){
    $this->location=$location;
  }
  public function set_type_of_food($type_of_food){
    $this->type_of_food=$type_of_food;
  }

  public function set_all($name,$species,$location,$type_of_food){
    $this->name=$name;
    $this->species=$species;
    $this->location=$location;
    $this->type_of_food=$type_of_food;
  }

  public function get_all(){
    return <<<show
    <hr>Nazwa: $this->name<br>
    Gatunek: $this->species<br>
    Występowanie: $this->location<br>
    Sposób odżywiania: $this->type_of_food<hr>
show;
  }


}
 ?>
