<?php
class Mahasiswa{

	private $NIM = "0";
	private $Nama = "0";
	private $J_kelamin = "0";
	private $Prodi = "0";
	private $Semester= "0";

	public function __construct($NIM = 2010021	, $Nama = "Firman" , $J_kelamin = 'L', $Prodi = "Ilkom" , $Semester = 4){
		$this->NIM = $NIM;
		$this->Nama = $Nama;
		$this->J_kelamin = $J_kelamin;
		$this->Prodi = $Prodi;
		$this->Semester = $Semester;

	}

	public function setNIM($NIM){
		$this->NIM = $NIM;
	}
	public function setNama($Nama){
		$this->Nama = $Nama;
	}
	public function setJ_Kelamin($J_kelamin){
		$this->J_kelamin = $J_kelamin;

	}
	public function setProdi($Prodi){
		$this->Prodi = $Prodi;
	}
	public function setSemester($Semester){
		$this->Semester = $Semester;
	}

	public function getNIM(){
		return $this->NIM;
	}
	public function getNama(){
		return $this->Nama;
	}
	public function getJ_Kelamin(){
		return $this->J_kelamin;

	}
	public function getProdi(){
		return $this->Prodi;
	}
	public function getSemester(){
		return $this->Semester;
	}

	public function __destruct(){
	}
}

?>

