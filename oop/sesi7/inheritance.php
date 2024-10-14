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
    public $jmlHalaman;
    public $waktuMain;


    // constructor, untuk menambahkan objek tanpa $produk1, $produk2 dll. Ini otomatis jalan
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
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

    public function getInfoProduk()
    {
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}


// child class dari produk karena extends
class Komik extends Produk
{

    // method, ambil kelas produk
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{

    // method, ambil kelas produk
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} jam.";
        return $str;
    }
}


// Buatnampilin semua info
class CetakInfoProduk
{

    // hanya menerima class Produk
    public function cetak(Produk $produk)
    {
        // ini ambil yang diatas, seperti paramater function tersebut
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Ganesha", 30000, 100, 0);
$produk2 = new Game("Valorant", "Riot Games", "Riot Games", 0, 0, 40);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();



// Komik : Masashi Kishimoto, Ganesha
// Game : Riot Games, Riot Games
// Valorant | Riot Games, Riot Games (Rp. 0)
