<?php
namespace frontend\models;

class DataDosen{
	public $nidn;
	public $nama;
	public $idprodi

	//konstruktor class
	public __function($nidn, $nama){
		$this -> nidn = $nidn;
		$this -> nama = $nama;
	}
	//method
	public function idprodi{
		if ($this -> idprodi == 1) {
			return "Sistem Informasi";
		} else ($this -> idprodi == 2){
			return "Teknik Infromatika";
		}
	}
}
?>