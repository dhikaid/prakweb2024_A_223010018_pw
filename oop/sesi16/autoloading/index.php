<?php


require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Ganesha", 30000, 100);
$produk2 = new Game("Grand Therf Auto V", "Rockstar Game", "Rockstar Game", 250000, 40);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();
