<?php

include "TimBola.php";

$ktim = new TimSepakbola();
$ktim->setNama("Real Madrid C.F.");
$ktim->setNegara("Spanyol");
$ktim->setTahun("1902");
$ktim->setPemain("<br> - Karim Benzema</br> - Mariano Diaz<br/> - Toni Fuidias Ribera");

echo "<b><u>DAFTAR TIM SEPAKBOLA</u></b>"."<br/>";
echo "<br>"."<b>Tim 1</b>"."<br/>";
echo "Nama Tim : ".$ktim->getNama()."<br/>";
echo "Negara Asal : ".$ktim->getNegara()."<br/>";
echo "Tahun Berdiri : ".$ktim->getTahun()."<br/>";
echo "Pemain : ".$ktim->getPemain()."<br/>";

$ktim2 = new TimSepakbola();
$ktim2->setNama("Arsenal F.C.");
$ktim2->setNegara("Inggris");
$ktim2->setTahun("1886");
$ktim2->setPemain("<br> - Bukayo Saka</br> - Takehiro Tomiyasu<br/> - Arthur Okonkwo");

echo "<br>"."<b>Tim 2</b>"."<br/>";
echo "Nama Tim : ".$ktim2->getNama()."<br/>";
echo "Negara Asal : ".$ktim2->getNegara()."<br/>";
echo "Tahun Berdiri : ".$ktim2->getTahun()."<br/>";
echo "Pemain : ".$ktim2->getPemain()."<br/>";
?>