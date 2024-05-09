<?php

require_once 'class_persegipanjang.php';

// instansiasi object persegipanjang
$panjang_persegi = 9;
$lebar_persegi = 7;

$persegi = new PersegiPanjang($panjang_persegi, $lebar_persegi);
$luas = $persegi->hitungLuas();
$keliling = $persegi->hitungKeliling();

echo "Luas persegi panjang" . $luas . "\n";
echo "Keliling persegi panjang:". $keliling . "\n";

?>