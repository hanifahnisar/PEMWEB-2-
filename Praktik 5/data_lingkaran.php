<?php
require_once('class_lingkaran.php');
echo "Nilai PHI" . Lingkaran::PHI;

// Instansiasi object Lingkaran
$Lingkar1 = new Lingkaran(10);
$Lingkar2 = new Lingkaran(8);

// panggil method 
echo "<br> Luas Lingkar 1: " . $Lingkar1->getLuas();
echo "<br> Luas Lingkar 2: " . $Lingkar2->getLuas();

echo "<br> Keliling Lingkar 1: " . $Lingkar1->getKeliling();
echo "<br> Keliling Lingkar 2: " . $Lingkar2->getKeliling();