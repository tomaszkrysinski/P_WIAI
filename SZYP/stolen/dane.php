<?php
session_start();
$amount = $_SESSION['amount'];
echo "Ilość członków rodziny: $amount<br>";
function Jędrzejewski(){
foreach ($_SESSION['tab'] as $value) {
  foreach ($value as $key => $data) {
    echo "$key: <span style='color:green;'>$data</span> ";
  }
  echo "<br>";
}
}
echo Jędrzejewski();

echo "<a href='index.php'>Index.php</a>";
?>
