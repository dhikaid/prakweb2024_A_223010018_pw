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

    public function getInfoProduk()
    {
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}


// child class dari produk karena extends || OVERRIDING : PARENT
class Komik extends Produk
{

    // proporty
    public $jmlHalaman;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    // method, ambil kelas produk
    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    // proporty
    public $waktuMain;
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    // method, ambil kelas produk
    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} jam.";
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


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Ganesha", 30000, 100);
$produk2 = new Game("Valorant", "Riot Games", "Riot Games", 0, 40);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();



// Komik : Masashi Kishimoto, Ganesha
// Game : Riot Games, Riot Games
// Valorant | Riot Games, Riot Games (Rp. 0)
