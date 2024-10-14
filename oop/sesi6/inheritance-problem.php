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
    public $tipe;


    // constructor, untuk menambahkan objek tanpa $produk1, $produk2 dll. Ini otomatis jalan
    public function __construct($tipe, $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
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

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } elseif ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
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


$produk1 = new Produk("Komik", "Naruto", "Masashi Kishimoto", "Ganesha", 30000, 100, 0);
$produk2 = new Produk("Game", "Valorant", "Riot Games", "Riot Games", 0, 0, 40);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();



// Komik : Masashi Kishimoto, Ganesha
// Game : Riot Games, Riot Games
// Valorant | Riot Games, Riot Games (Rp. 0)
