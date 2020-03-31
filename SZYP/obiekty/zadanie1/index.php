<?php
include './class/Zwierze.php';
$zebra =new Zwierze('','','','');
$zebra->set_all('zebra','Equus quagga','Afryka','roślinożerca');
echo $zebra->get_all();

$grizli = new Zwierze('grizli','Ursus arctos horribilis','Ameryka Północna','');
$grizli->set_type_of_food('wszytskożerne');
echo $grizli->get_all();

$orka = new Zwierze('orka','','','');
$orka->set_species('Orcinus orca');
$orka->set_all('','','Oceany','mięsożerne');
$orka->set_name('orka');
$orka->set_species('Orcinus orca');
echo $orka->get_all();
 ?>
