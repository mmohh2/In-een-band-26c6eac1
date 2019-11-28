<?php
$naam = array("Citizen of Glass"=>"€4.5", "Night"=>"€9", "New Eyes"=>"€5", "Strange Trails"=>"€10", "Het totaalbedrag van alle albums"=>"€28.5", "De gemiddelde prijs van alle albums"=>"€7.125");


foreach($naam as $item => $price) {
    echo $item . " kost " . $price . PHP_EOL;
}
