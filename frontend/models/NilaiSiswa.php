<?php 
namespace frontend\models;
/**
 * 
 */
class NilaiSiswa{
	public $nama;
	public $nim;
	public $nilai;

	//konstruktor class
	public function __construct($nama, $nim){
		$this -> nama = $nama;
		$this -> nim = $nim;
	}

	//method kelulusan
	public function kelulusan()
	{
		if ($this -> nilai > 55) {
			return "LULUS";
		} else{
			return "TIDAK LULUS";
		}
	}
}
?>