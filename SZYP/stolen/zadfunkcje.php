<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    ob_start();
 
    <form name="pierwszy" method="post">
      <input type="text" name="input" placeholder="Wpisz liczbę &lt;1;70&gt;" autofocus>
      <br><br>
    </form>
    TEKST;

    echo $form1;

      if (!empty($_POST['input'])&&$_POST['input']>=1&&$_POST['input']<=70)
      {
          $input = $_POST['input'];
          echo ($input);
          pobierz($input);
      }
      else echo("Podaj liczbę z przedziału");

      function pobierz($input)
      {
        ob_end_clean();
        echo ("<form name='drugi' type='submit' method='post'>");
        $i=0;
        for ($i=0; $i < $input ; $i++) {
          $j = $i+1;
          echo ("<input type='text' name='age[]' autofocus placeholder='wiek członka nr $j'><br>");
        }

        echo ("<br><input type='hidden' name='input' value='$input'>");
        echo ("<br><button name='button1'>Wyślij</button>");
        echo ("</form>");
        if (isset($_POST['button1']))
        {

          $check = 0;
          for ($i=0; $i<$input; $i++){
          if (empty($_POST['age'][$i])||$_POST['age'][$i]<0||$_POST['age'][$i]>140)
          {
            $check = 1;
          }
        }
        if($check == 1)
        {
          echo "Wprowadź liczbę z przedziału";
        }
        else {
          for ($i=0; $i<$input; $i++){
          $wiek[$i] = $_POST['age'][$i];
        }
        $avg = 0;
        $min = 140;
        $max = 0;
        for ($i=0; $i < $input ; $i++) {
          if ($wiek[$i] < $min)
          {
            $min = $wiek[$i];
          }
        }
        for ($i=0; $i < $input ; $i++) {
          if ($wiek[$i] > $max)
          {
            $max = $wiek[$i];
          }
        }
        for ($i=0; $i < $input ; $i++) {
          $avg+=$wiek[$i]/2;
        }
        $avg1 = round($avg);
        $wynik = <<< WYNIK
        <ul>
        <li>Średni wiek: $avg1 lat</li>
        <li>Najmłodsza osoba ma $min lat</li>
        <li>Najstarsza osoba ma $max lat</li>
        </ul>
        WYNIK;
        echo ($wynik);
        }
        }
      };

     ?>
  </body>
</html>
