<?php
class Person{
  // public $name;
  // public $surname;

  private $name;
  private $surname;
  private $city;

  function __construct($name,$surname){
    $this->name = $name;
    $this->surname = $surname;
  }
  public function getName(){
  return $this->name;
  }

  public function setCity($city){
   $this ->city=$city;
  }

  public function show(){
    return <<<SHOW
    <hr>Imię nazwisko: $this->name $this->surname<br>
    Miasto: $this->city<hr>
SHOW;

  }

}
  $osoba = new Person('Janusz','Nowak');
  // echo $osoba -> name;
  echo $osoba -> getName();
  $osoba -> setCity("Poznań");

  echo $osoba->show();

//Napisz metodę wyświetlającą wszytskie dane klasy Person
 ?>
