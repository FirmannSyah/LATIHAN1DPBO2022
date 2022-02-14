<?php
include "SoccerTeam.php";

$team1 = new SoccerTeam($nameteam = "Udin FC", $country = "Indonesia", $est = "2022", $nickname = "Penakluk Senja");
$team1->setPlayer("Abang Udin", 0);
$team1->setPlayer("Udin", 1);
$team1->setPlayer("Temennya Udin", 2);

$team2 = new SoccerTeam($nameteam = "Ghozali FC", $country = "Indonesia", $est = "2021", $nickname = "RichTeam");
$team2->setPlayer("Cristiano Ronaldo", 0);
$team2->setPlayer("Messi", 1);

echo "==== DATA TIM SEPAK BOLA ====" . "<br/>";
echo "<br/>" . "TIM KE 1 :" . "<br/>";
echo "Nama Tim       :" . $team1->getNameTeam() . "<br/>";
echo "Negara        :" . $team1->getCountry() . "<br/>";
echo "Tahun Berdiri :" . $team1->getEst() . "<br/>";
echo "Julukan		:" . $team1->getNickname() . "<br/>";
//tampil list pemain
echo "List Pemain:"."<br/>";
for($i = 0; $i < 3; $i++) {
  echo $i+1 . ". ".$team1->getPlayer($i)."<br/>";
}

echo "<br/>" . "TIM KE 2 :" . "<br/>";
echo "Nama Tim      :" . $team2->getNameTeam()."<br/>";
echo "Negara       :" . $team2->getCountry()."<br/>";
echo "Tahun Berdiri:" . $team2->getEst()."<br/>";
echo "Julukan		:" . $team2->getNickname() . "<br/>";

//tampil list pemain
echo "List Pemain:"."<br/>";
for($i = 0; $i < 2; $i++) {
  echo $i+1 . ". ".$team2->getPlayer($i)."<br/>";
}

?>