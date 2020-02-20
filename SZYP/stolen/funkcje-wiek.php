<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    ob_start();
    $form = <<< F
    <form method="post">
        <label for="osoby">Podaj liczbę osób: </label>
        <input type="text" name="osoby"><br><br>
    </form>
F;
    echo $form;

    if (!empty($_POST['osoby'])) {
        $osoby = $_POST['osoby'];
        //echo $osoby;

        if ($osoby < 1 || $osoby > 70) {
            header("Location: zadanie - funkcje.php");
        } else {
            ob_end_clean();
            echo "<form method='post' action=''>";
            for ($i = 1; $i <= $osoby; $i++) {
                echo "<label for='osoba[]'>Podaj osobę nr $i:</label>
                <input type='text' name='osoba[]'><br><br>";
            }
            echo "<input type='hidden' name='hid' value='$osoby'>";
            echo "<button name='btn'>CLICK</button>";
            echo "</form><br>";
        }
    }



    if (isset($_POST['btn'])) {
        ob_end_clean();

        $osoby = $_POST['hid'];
        $max = 0;
        $min = 200;
        $avg = 0;

        for ($i = 0; $i < $osoby; $i++) {
            $wiek = $_POST['osoba'][$i];
            $avg += $wiek;
            //echo $_POST['osoba'][$i],"<br>";
            $max = maximum($wiek, $max);
            $min = minimum($wiek, $min);
        }
        echo "Najstarsza osoba ma: ", $max, " lat<br><br>";
        echo "Najmłodsza osoba ma: ", $min, " lat<br><br>";
        echo "Średnia wieku wynosi: ", $avg / $osoby, " lat<br><br>";
    }
    function maximum($wiek, $max)
    {
        if ($max <= $wiek) $max = $wiek;
        return $max;
    }

    function minimum($wiek, $min)
    {
        if ($min >= $wiek) $min = $wiek;
        return $min;
    }
    ?>
</body>

</html>