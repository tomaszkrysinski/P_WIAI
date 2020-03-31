<?php
class User{
  public $name;
  public $surname;

  public function setName($name){
    // $this -> name = "Krystyna";
    $this -> name = $name;
  }

  function getName(){
    return $this -> name;
  }

  public function setUser($name, $surname){
    $this -> name = $name;
    $this -> surname = $surname;
  }

  public function show(){
    echo <<<SHOW
    <hr>
    Imię: $this->name<br>
    Nazwisko: $this->surname<br>
SHOW;
  }

}

$person1 = new User();
$person1 -> name = "Anna";
echo $person1 -> name;

$person1 -> setName("Paweł");
echo $person1 -> name;

echo "<br>Imię:".$person1 -> getName();

$person1 -> setUser("Krystyna","Czubówna");
$person1 -> show();
 ?>
