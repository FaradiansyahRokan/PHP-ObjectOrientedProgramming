<?php
require "init.php";

$game = new Game("Valorant", "orang", "Riot Games", "free", "20");
$komik = new komik("Naruto", "Masashi Kishimoto", "gtw", 20000, "100");
echo $game->getInfo() . PHP_EOL; 
echo $komik->getInfo();