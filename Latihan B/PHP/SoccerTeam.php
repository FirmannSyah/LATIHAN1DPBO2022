<?php

class SoccerTeam{


	private $nameteam, $country, $est, $nickname , $player = array();


	//konstruksi
	public function __construct($nameteam = "0", $country = "0", $est = "0", $nickname = "0"){
			$this->nameteam = $nameteam;
			$this->country = $country;
			$this->est= $est;
			$this->nickname = $nickname;
	}


	//get dan set semua variabel
 
	public function setNameTeam($nameteam){
			$this->nameteam = $nameteam;
	}
	
	public function setCountry($country){
			$this->country = $country;
	}

	public function setEst($est){
			$this->est= $est;
	}

	public function setNickname($nickname){
			$this->nickname = $nickname;
	}

	public function setPlayer($player, $idx){
			$this->player[$idx] = $player;
	}

	public function getNameTeam(){
			return $this->nameteam;
	}
		
	public function getCountry(){
			return $this->country;
	}

	public function getEst(){
			return $this->est;
	}

	public function getNickname(){
			return $this->nickname;
	}

	public function getPlayer($idx){
			return $this->player[$idx];
	}

	//destruktor
	public function __destruct(){

	}

}

?>