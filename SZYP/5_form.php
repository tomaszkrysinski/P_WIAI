<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <form action="index.html" method="post">
      <input type="text" name="name" placeholder="Podaj imię" autofocus><br><br> <!-- 10 max znaków, pierwsza liera jest duża pozotałe małe -->
      <input type="text" name="age" placeholder="Podaj wiek" autofocus><br><br>
      <input type="submit" name="button" value="Zatwierdź" autofocus><br><br>
    </form>

    <?php
    if (!empty($_POST['name']) && !empty($_POST['age']))

    {
      $name = $_POST['name'];
      $age = $_POST['age'];

      $s_name = $name;

      $s_name = ucfirst(strtolower(substr(trim($name),0,10)));

      echo "Imię: $name <br> Wiek: $age <br>";
    ?>
    <table>
      <tr>
        <td>Imię</td>
        <td>Wiek</td>
      </tr>
    <table>
      <tr>
        <td><?php echo "$s_name" ?></td>
        <td><?php echo "$s_age" ?></td>
      </tr>
    </table>
    <?php
    }
    else
    {
    echo 'wypełnij oba pola formularza';
    }

    ?>
  </body>
</html>
