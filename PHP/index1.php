<?php

include "Latihan_Program_1_poinA.php";

$Mahasiswa = new Mahasiswa();

echo "Mahasiswa 1 : <br>";
echo "Nama = ". $Mahasiswa->getNama(). "<br>";
echo "NIM = ". $Mahasiswa->getNIM(). "<br>";
echo "Prodi = ". $Mahasiswa->getProdi(). "<br>";
echo "J_kelamin = ". $Mahasiswa->getJ_Kelamin(). "<br>";
echo "Semester = ". $Mahasiswa->getSemester(). "<br>";

$Mahasiswa2 = new Mahasiswa($NIM = 2010020	, $Nama = "Temennya Firman" , $J_kelamin = 'L', $Prodi = "Ilkom" , $Semester = 4);
echo "<br>Mahasiswa 2 : <br>";
echo "Nama = ". $Mahasiswa2->getNama(). "<br>";
echo "NIM = ". $Mahasiswa2->getNIM(). "<br>";
echo "Prodi = ". $Mahasiswa2->getProdi(). "<br>";
echo "J_kelamin = ". $Mahasiswa2->getJ_Kelamin(). "<br>";
echo "Semester = ". $Mahasiswa2->getSemester(). "<br>";


?>