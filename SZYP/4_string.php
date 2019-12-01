<?php
  $text = <<< TEKST
  zsk - Zespół
  Szkół
  Komunikacji
TEKST;
  echo "Przed wywołaniem funkcji nl2br: <br> $text";
  echo "<br>Po wywołaniu funkcji nl2br: <br> $text";
  echo nl2br($text),'<br>';

  $test="jAnUsZ";
  echo strtolower($test),'<br>';
  echo strtoupper($test),'<br>';

  $test = "jAnUsZ Tomasz agata";
  echo ucfirst($test),'<br>';
  echo ucwords($test),'<br>';

  ################################

  $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';



  //$col = wordwrap($lorem,40,'<br>');
  //echo $col;
  $col = wordwrap($lorem,40,'<hr>');
  echo $col;
  ob_clean();

  $name0 = 'Kasia';
  $name1 = '   Kasia      ';
  echo 'Długość zmiennej $name0: ',strlen($name0),'<br>';
  echo 'Długość zmiennej $name1: ',strlen($name1),'<br>';

  echo strlen(ltrim($name1)),'<br>';
  echo strlen(rtrim($name1)),'<br>';
  echo strlen(trim($name1)),'<br>';

  $address = 'Poznan, ul. Fredry 13, tel. (61) 445-44-58';

  $search = strstr($address, 'tel');
  echo $search,'<br>';

  $search = strstr($address, 'tel', true);
  echo $search,'<br>';

  $search = stristr($address, 'Tel', true);
  echo $search,'<br>';

  $search = strstr($address, 'Tel', true);
  echo $search,'<br>';

  $mail = strstr('zsk@gmail.com', '@');
  echo $mail,'<br>';

  $mail = strstr('zsk@gmail.com', 64);
  echo $mail,'<br>';

  #####################################

  $ciag0 = 'a';
  $ciag1 = 'aa';

  echo strcmp($ciag0,$ciag1),'<br>';
  echo strcmp('zzz','zzz'),'<br>';
  echo strcmp('zzz','zza'),'<br>';
  echo strcmp('zza','zzz'),'<br>';
  echo strcmp('zzza','zza'),'<br>';

  $pos = strpos('abcdefg','cde');
  echo $pos,'<br>';

  $pos = strpos('abcabc','abc');
  echo $pos,'<hr>';

  $text0 = 'abcdabcd';
  $text1 = 'ab';

  if (strpos($text0,$text1) === false) {
    echo "Ciąg nie został znaleziony w ciągu $text0<br>";
  }else {
    echo "Ciąg $text1 został znaleziony w ciągu $text0<br>";
  }

  $replace = str_replace('%name%','Janusz', 'Mam na imię: %name%');
  echo $replace,'<br>';

  $surname = substr('Janusz Kowalski', 7, 5);
  echo $surname,'<br>';

  $login = 'bączekł';
  $censore = array('ą','ę','ś','ż','ź','ć','ó','ń','ł');
  $replace = array('a','e','s','z','z','c','o','n','l');

  $newLogin = str_replace($censore,$replace,$login);
  echo $newLogin,'<hr>';

  ###############################

  echo <<<FORM
  <form method="post">
    <input type="text" name="dane" placeholder="wpisz zdanie"><br><br>
    <input type="submit" value="zatwierdź">
  </form>
FORM;
  if (isset($_POST['dane'])) {
    $data = $_POST['dane'];
    echo $data;
  }
?>
