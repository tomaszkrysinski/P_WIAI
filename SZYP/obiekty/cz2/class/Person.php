<?php
  class Person{
    public $name;
    public $surname;
    public $birthday;
    public $city;

    public function setName($value){
      $this->name = $value;
    }
    public function setsurname($value){
      $this->surname = $value;
    }
    public function setBirthday($value){
      $this->birthday = $value;
    }
    public function setCity($value){
      $this->city = $value;
    }
    public function setAll($name, $surname, $birthday, $city){
      $this->name = $name;
      $this->surname = $surname;
      $this->birthday = $birthday;
      $this->city = $city;
    }
    public function getAll(){
      $show =<<<SHOW
      Imie i nazwisko: $this->name $this->surname <br>
      Data urodzenia: $this->birthday <br>
      Miasto: $this->city  <br>
SHOW;
      return $show;
    }
  }
 ?>
