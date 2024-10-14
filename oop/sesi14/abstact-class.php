<?php

// Jualan Produk

// Produknya :
// Komik
// game

// kita buat class nya produk
// tidak akan instansiasi class ini
abstract class Produk
{

    // property, data yang nempel pada objek. Ada contoh default
    private $judul;
    private $penulis;
    private $penerbit;

    // protected = akses clas parent dan child
    // protected $harga;
    // private = oleh class tertentu aja, kalo disini di produk jadi class produk aja
    private $harga;
    private $diskon = 0;



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

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    // ambil harga dari protected/private

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->diskon * $this->harga / 100);
    }

    public function getLabel()
    {
        // kalo mau ngambil variable diluar function pake $this
        return "$this->penulis, $this->penerbit";
    }

    // hanya interface tanpa isi
    abstract public function getInfoProduk();

    public function getInfo()
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
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
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
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} jam.";
        return $str;
    }
}


// Buatnampilin semua info
class CetakInfoProduk
{

    // property
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    // hanya menerima class Produk
    public function cetak()
    {
        // ini ambil yang diatas, seperti paramater function tersebut
        $str = "DAFTAR PRODUK : <hr>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }


        return $str;
    }
}




$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Ganesha", 30000, 100);
$produk2 = new Game("Grand Therf Auto V", "Rockstar Game", "Rockstar Game", 250000, 40);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
