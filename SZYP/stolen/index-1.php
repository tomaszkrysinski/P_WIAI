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
header("Location: dane.php");

      $_SESSION= array(
        'name'=>$_POST['name'][0],
        'lastname'=>$_POST['lastname'][0],
        'age'=>$_POST['age'][0]
      );
      print_r($_SESSION);

      $tab = array();

      for($i=0;$i<3;$i++){
        $name = ucfirst(strtolower(substr(trim($_POST['name'][$i]),0,8)));
        $lastname = ucfirst(strtolower(substr(trim($_POST['lastname'][$i]),0,11)));
        $age = $_POST['age'][$i];
        $tab[$i]=array('imie'=>$name,'nazwisko'=>$lastname,'wiek'=>$age);
      }

      $_SESSION['tab'] = $tab;


      }
      if(!empty($_SESSION)){
      ob_end_clean();
        echo "Osoba1: imię: ",$_SESSION['name']," nazwisko: ",$_SESSION['lastname']," wiek: ",$_SESSION['age']
      ;}
     ?>

  </body>
</html>
