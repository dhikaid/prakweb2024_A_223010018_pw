<?php


// kapan?
// Fungsi bantuan / helper
// class ContohStatic
// {

//     public static $angka = 1;

//     public static function halo()
//     {
//         // self untuk tanpa instansiasi
//         // this untuk instansiasi 
//         return "Halo " . self::$angka++ . " kali";
//     }
// }

// // static tanpa instansiasi (new Class)

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh
{
    public static $angka = 1;

    public function halo()
    {
        // nilai static akan selalu tetap, meski instansiasii berkali kali
        return "Halo " . self::$angka++ . " kali";
    }
}

$obj = new Contoh();
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";

echo "<hr>";

$obj2 = new Contoh();
echo $obj2->halo();
echo "<br>";
echo $obj2->halo();
echo "<br>";
