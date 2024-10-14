<?php 
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
