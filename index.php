<?php
require_once "Produk/Cek.php";
require_once "Produk/Game.php";
require_once "Produk/komik.php";
require_once "Produk/produk.php";

$game = new Game("Valorant", "orang", "Riot Games", "free", "20");
$komik = new komik("Naruto", "Masashi Kishimoto", "gtw", 20000, "100");
echo $game->getInfoProduct(); 