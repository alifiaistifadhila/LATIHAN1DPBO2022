<?php

include "mahasiswa.php";

$kmahasiswa = new mahasiswa();
$kmahasiswa->setNama("Alifia Isti Fadhila");
$kmahasiswa->setNim("2000049");
$kmahasiswa->setJenisKelamin("Perempuan");
$kmahasiswa->setProgramStudi("Ilmu Komputer");
$kmahasiswa->setSemester("Semester 4");
$kmahasiswa->setTahunAngkatan("2020");

echo "<b><u>DAFTAR MAHASISWA UPI</u></b>"."<br/>";
echo "<br/>"."<b>Mahasiswa 1</b>"."<br/>";
echo "Nama Lengkap : ".$kmahasiswa->getNama()."<br/>";
echo "NIM : ".$kmahasiswa->getNim()."<br/>";
echo "Jenis Kelamin : ".$kmahasiswa->getJenisKelamin()."<br/>";
echo "Program Studi : ".$kmahasiswa->getProgramStudi()."<br/>";
echo "Semester : ".$kmahasiswa->getSemester()."<br/>";
echo "Angkatan : ".$kmahasiswa->getTahunAngkatan()."<br/>";

$kmahasiswa2 = new mahasiswa();
$kmahasiswa2->setNama("Riski Fauzi Amelia");
$kmahasiswa2->setNim("2008259");
$kmahasiswa2->setJenisKelamin("Perempuan");
$kmahasiswa2->setProgramStudi("PGSD Kampus Cibiru");
$kmahasiswa2->setSemester("Semester 4");
$kmahasiswa2->setTahunAngkatan("2020");

echo "<br/>"."<b>Mahasiswa 2</b>"."<br/>";
echo "Nama Lengkap : ".$kmahasiswa2->getNama()."<br/>";
echo "NIM : ".$kmahasiswa2->getNim()."<br/>";
echo "Jenis Kelamin : ".$kmahasiswa2->getJenisKelamin()."<br/>";
echo "Program Studi : ".$kmahasiswa2->getProgramStudi()."<br/>";
echo "Semester : ".$kmahasiswa2->getSemester()."<br/>";
echo "Angkatan : ".$kmahasiswa2->getTahunAngkatan()."<br/>";

?>