<?php

declare(strict_types=1);

require_once 'Rosary.php';
require_once 'Mysteries.php';
#  TODO: Delete prayer class
require_once 'Prayer.php';
require_once 'Glorious.php';

#  TODO: REDO Classes

$rosary = new Rosary();

$prayer = new Prayer("Apostles Creed","I believe.....Amen");

$rosary->add_prayers($prayer);

//var_dump($rosary->prayer_order);

 $mystery = new Glorious("Title","Citation","Text","Date");

print $mystery->get_author(); 
