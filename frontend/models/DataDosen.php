<?php
namespace frontend\models;

class DataDosen{
	public $nidn;
	public $nama;
	public $idprodi;

	//konstruktor class
	public function __construct($nidn, $nama){
		$this -> nidn = $nidn;
		$this -> nama = $nama;
	}
	//method
	public function idprodi(){
		if ($this -> idprodi == 1) {
			return "Sistem Informasi";
		} elseif ($this -> idprodi == 2){
			return "Teknik Informatika";
		} else{
			return;
		}
	}
}
?>