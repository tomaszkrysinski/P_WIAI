<?php
include './class/pet.php';
$pet = new pet();
$pet->set_all('Puszek','Goryl','Masywne bicepsy','Banany');
// $wynik = $pet->get_all();
// echo $wynik;
echo $pet->get_all();
 ?>
