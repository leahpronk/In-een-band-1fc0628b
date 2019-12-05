<?php

$albums = array('Citizen of Glass' => 4.5,'Night kost' => 9,'New Eyes' => 5,'Strange Trails' => 10);
echo "het albumoverzicht:" . PHP_EOL;

foreach ($albums as $album => $prijs) {
	echo $album . " kost €" . $prijs . PHP_EOL;
}

$totaal = array_sum ($albums);
echo "Het totaalbedrag van alle albums is: €" . $totaal . PHP_EOL;

$gemiddelde = $totaal /= 4;
echo "De gemiddelde prijs van alle albums is €" . $gemiddelde . PHP_EOL;

	 
	 
	 
	 