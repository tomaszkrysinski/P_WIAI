<?php
  function show($a):string{
    if ($a < 0) {
      return "ujemna";
    }
    elseif ($a == 0) {
      return "zero";
    }
    else {
      return "dodatnia";
    }
  }

  echo show(4),"<br>";

  function getValue():int {
    return 10.55;
  }

  echo getValue(),"<br>";

  //zasięg zmienych
  $x=10;
  function wyswietl(){
    //echo "wartosc zmiennej \$x wynosi: $x"; // BUG: x nie jest zm globalną
    //echo "wartosc zmiennej \$x wynosi: $globals['x']"; // BUG: <--- dwa błędy
    echo "wartosc zmiennej \$x wynosi: $GLOBALS[x]";
  }

  wyswietl();
  $y=5;
  function wyswietly(){
    global $y;
    echo "wartosc zmiennej \$y wynosi: $y <br>"
  }

  ################################################

  function sum() {
    $liczba = 10;
    echo "\$liczba wynosi: $liczba <br>";
    $liczba += 10;
  }

  sum(); //10
  sum(); //10

  ################################################

  function sum1() {
    static $liczba = 10;
    echo "\$liczba wynosi: $liczba <br>";
    $liczba += 10;
  }

  sum1(); //10
  sum1(); //20
  sum1(); //30

  ################################################
  //argumenty

  function dodaj($x, $y = 1) {
    return $x + $y;
  }

  $z = 20;

  //echo dodaj();
  echo dodaj($z);//21
  echo dodaj($z,5);//25

  //argumenty i typy danych

  
 ?>
