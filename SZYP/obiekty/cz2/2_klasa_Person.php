<?php
require_once './class/Person.php';
$osoba = new Person();
$osoba->setAll('Janusz','Nowak','20-02-1990','Poznań');
echo $osoba->getAll();

?>
