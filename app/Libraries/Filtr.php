<?php
namespace App\Libraries;

class Filtr {
 function __construct() {

 }
 /**
  * filtruje
  * @param $pole - obsah tabulky typy komponent
  */
 function tabFormater($pole, $komponent) {
    $result = [];
    foreach($pole as $row) {
        $result[$row->idKomponent] = [];
    }
    foreach($komponent as $row2) {
        $result[$row2->typKomponent_id][] = $row2;
    }

    return $result;
 }

}

