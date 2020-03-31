<?php
//Destruktory

class Person{
  private $name;

  function __construct($name=null){ // dzięku nullowi można nie wprowadzać zmiennej podczas definiowania nowego obiektu
    echo "konstruktor<br>";
    $this->name = $name;
  }

  function __destruct(){//nie przyjmuje argumentów
    echo "destruktor<br>";
  }

  public function get_name(){
    return $this->name;
  }

  public function set_name($x){
    $this->name = $x;
  }
}

  echo "Linia pierwsza<br>";
  $obj = new Person();
  if(!empty($_GET['name'])){
    @$obj->set_name($_GET['name']);
  }
  if($obj->get_name() == null){
    echo "Nie podałeś imienia<br>";
    echo <<<form
    <form>
      <input type="text" name="name"><br>
      <input type="submit" value="Dodaj imie"><br>
    </form>
form;

  }else{
echo "Twoje imię:".$obj->get_name()."<br>";
  }




  unset($obj);//bez tego "destruktor" wyświetli się po "Linia ostatnia"
  echo "Linia ostatnia<br>";

 ?>
