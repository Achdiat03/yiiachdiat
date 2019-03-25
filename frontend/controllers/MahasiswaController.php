<?php

namespace frontend\controllers;
use frontend\models\NilaiSiswa;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$prodi1 = "Sistem Informasi";
    	$prodi2 = "Teknik Informatika";

    	$mahasiswa1 = "Rifky Chairil";
    	$mahasiswa2 = "Nur Fauziah";
    	$mahasiswa3 = "Muhammad Achdiat Fata";
    	$mahasiswa4 = "Nihlah Karimah";
    	$mahasiswa5 = "Sela Rabila Maudy";

    	$semester2 = "2";
    	$semester4 = "4";
    	$semester6 = "6";

        return $this->render('index', [
        	'si' => $prodi1,
        	'ti' => $prodi2,
        	'rc' => $mahasiswa1,
        	'nf' => $mahasiswa2,
        	'maf' => $mahasiswa3,
        	'nk' => $mahasiswa4,
        	'n' => $mahasiswa5,
        	'smstr2' => $semester2,
        	'smstr4' => $semester4,
        	'smstr6' => $semester6
        ]);
    }
    public function actionNilai()
    {
    	$mhs1 = new NilaiSiswa("Farah Shofiyah", "0110117009");
    	$mhs1->nilai=84.1;
    	return $this->render('nilai', [
    		'mhs1'=>$mhs1,
    	]);
    }
}
