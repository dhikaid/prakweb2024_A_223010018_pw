<?php
// constatnta = konstanta = konstant tidak berubah
// define(nama, value) WAJIB KAPITAL

// // tidak bisa masuk ke kelas, dan itu GLOBAL
// define('NAMA', 'Bhadrika A');
// echo NAMA;
// echo "<br>";

// // CONST
// // bisa masuk ke kelas
// const UMUR = 32;
// echo UMUR;


// class Coba
// {
//     // aksesnya seperti static Coba::NAMA
//     const NAMA = "Bhadrika";
// }

// echo Coba::NAMA;

// magic constant
// echo __FILE__;


// function Coba()
// {
//     return __FUNCTION__;
// }

// echo Coba();


class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
