<?php
require_once "Produk/Cek.php";
require_once "Produk/Game.php";
require_once "Produk/komik.php";
require_once "Produk/produk.php";
require_once "Produk/User.php";
require "../Service/User.php";

spl_autoload_register(function($class){
    require_once __DIR__ . '/' . '/Produk/' . $class . '/php';
});

new User;