<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Funkcje...bla...bla</title>
  </head>
  <body>

    <?php
    ob_start();
    $form = <<<f
    <form method="post">
      <label for="amount">Podaj ilość osób</label>
     <input type="number" min=1 max=70 name="amount" >
     <input type="submit" name="button" placeholder="Podaj pola do wpisania wieku">
    </form>
f;
    echo $form;
    if(!empty($_POST['amount'])){

      ob_end_clean();



      $amount = $_POST['amount'];

      echo "<form method='post'>";
      for($i = 1; $i<=$amount;$i++){
        echo "Osoba nr $i: wiek <input type='number' name='age[]'> imie: <input type='text' name='name[]'> nazwisko: <input type='text' name='lastname[]'><br><br>";
      }
      echo "<input type='hidden' name='hid' value='$amount'>";
      echo "<button name='btn'>CLICK</button>";
      echo "</form><br>";
    }

    if(isset($_POST['btn'])){
      ob_end_clean();

      $_SESSION= array(
        'name'=>$_POST['name'][0],
        'lastname'=>$_POST['lastname'][0],
        'age'=>$_POST['age'][0]
      );
      //print_r($_SESSION);



    function Jędrzejewski(){
      $amount = $_POST['hid'];

      $tab = array();

      for($i=0;$i<$amount;$i++){
        $name = ucfirst(strtolower(substr(trim($_POST['name'][$i]),0,8)));
        $lastname = ucfirst(strtolower(substr(trim($_POST['lastname'][$i]),0,11)));
        $age = $_POST['age'][$i];
        $tab[$i]=array('imie'=>$name,'nazwisko'=>$lastname,'wiek'=>$age);
      }

      foreach ($tab as $value) {
        foreach ($value as $key => $data) {
          echo "$key: <span style='color:green;'>$data</span> ";
        }
        echo "<br>";
      }
    }
    echo Jędrzejewski();

    


    /*  $amount = $_POST['hid'];
      $max=0;
      $min=200;
      $avg=0;

      for($i=0;$i<$amount;$i++){
        $age = $_POST['age'][$i];
        $avg+=$age;
        $min = minimum($age,$min);
        $max = maximum($age,$max);
      }
      echo "Najstarsza osoba ma: ", $max," lat<br>";
      echo "Najmłodsza osoba ma: ", $min," lat<br>";
      echo "Średnia wieku to: ", $avg/$amount," lat<br>";
    }

    function maximum($age,$max){
      if($age>=$max) $max = $age;
      return $max;
    }
    function minimum($age,$min){
      if($age<=$min) $min = $age;
      return $min;
    */}
     ?>

  </body>
</html>
