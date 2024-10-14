<?php

// Jualan Produk

// Produknya :
// Komik
// game

// kita buat class nya produk

class Produk
{

    // property, data yang nempel pada objek. Ada contoh default
    public $judul = "Judul";
    public $penulis = "Penulis";
    public $penerbit = "Penerbit";
    public $harga = 0;


    // method, objeknya bisa diapain

    public function sayHello()
    {
        return "Hello World~!";
    }

    public function getLabel()
    {
        // kalo mau ngambil variable diluar function pake $this
        return "$this->penulis, $this->penerbit";
    }
}


// instance / objeknya
// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Valorant";
// // tambah propery, karena visible
// $produk2->tambahProperty = "Properi Baru";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Ganesha";
$produk3->harga = 30000;

// echo "Komik: $produk3->penulis, $produk3->penerbit";
// echo "<br>";

// // Kalo method panggil kaya function
// echo $produk3->getLabel();

// echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Valorant";
$produk4->penulis = "Riot Games";
$produk4->penerbit = "Riot Games";
$produk4->harga = 0;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
