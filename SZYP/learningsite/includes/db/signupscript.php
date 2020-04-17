<?php
$accDuplicateFlag = 'hidden';
try {
  $stmt = $mysqli->prepare("INSERT INTO myTable (name, age) VALUES (?, ?)");
  $stmt->bind_param("si", $_POST['name'], $_POST['age']);
  $stmt->execute();
  $stmt->close();
} catch(Exception $e) {
  if($mysqli->errno === 1062) $accDuplicateFlag = '';
}
?>
