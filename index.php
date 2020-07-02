<?php

require_once 'Libro.php';
require_once 'Manuale.php';
//creazione di un oggetto
$libro1 = new Libro('La Divina Commedia', 'Dante Alighieri');
//$libro1->titolo ='La divina commedia';
$libro1->numero_pagine = 300;

$libro2 = new Libro('I promessi sposi', 'Alessandro Manzoni');
// $libro2->titolo = 'I promessi sposi';
$libro2->numero_pagine = 250;

echo '<pre>';
var_dump($libro1);
var_dump($libro2);
echo '<pre>';

$tempo_libro1 = $libro1->tempo_lettura(5); //5 è il tempo impiegato per leggere una pagina 1 minuto per pagina
$tempo_libro2 = $libro2->tempo_lettura(3); //parametro effettivo della funzione
echo "Per leggere " . $libro1->titolo . " impieghi " . $tempo_libro1 . ' minuti, ';
echo "per leggere " .$libro2->titolo . " impieghi " . $tempo_libro2 . ' minuti.';

$manuale1 = new Manuale ('Programmare in Php', 'Pippo', 'PHP');
$manuale1->numero_pagine = 150;

$manuale2 = new Manuale ('Programmare in Javascript', 'Pluto', 'Javascript');
$manuale2->numero_pagine = 100;

echo '<pre>';
var_dump($manuale1);
var_dump($manuale2);
echo '<pre>';

$tempo_manuale1 = $manuale1->tempo_lettura(2);
echo "Per leggere " . $manuale1->titolo . " scritto da " . $manuale1->autore . " impieghi " . $tempo_manuale1 . " minuti, ";


$tempo_manuale2 = $manuale2->tempo_lettura(2);
echo "per leggere " . $manuale2->titolo . " scritto da " . $manuale2->autore . " impieghi " . $tempo_manuale2 . " minuti.";

?>
