<?php
$linie_pliku=file("lista.txt");
$ile_linii=count($linie_pliku);
$ile=($ile_linii - 1);
$ktora_linia=rand(0,$ile);
$str = str_replace("\n", "", $linie_pliku[$ktora_linia]);
echo $str;
?>
