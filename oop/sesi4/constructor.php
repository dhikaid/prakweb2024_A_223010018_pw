<?php

// Jualan Produk

// Produknya :
// Komik
// game

// kita buat class nya produk

class Produk
{

    // property, data yang nempel pada objek. Ada contoh default
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;


    // constructor, untuk menambahkan objek tanpa $produk1, $produk2 dll. Ini otomatis jalan
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

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

// catatan sebelumnya:

// // tambah propery, karena visible
// $produk2->tambahProperty = "Properi Baru";
// // Kalo method panggil kaya function
// echo $produk3->getLabel();

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Ganesha", 30000);
$produk2 = new Produk("Valorant", "Riot Games", "Riot Games", 0);
$produk3 = new Produk("MLBB");


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
var_dump($produk3);
