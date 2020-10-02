<?php

class Motoeny{

	public $color ="noir";
	public $speed =400;
	public $nom ="Tmax";

	public function __construct($aColor,$aSpeed,$aNom){
		$this->color = $aColor;
		$this->speed = $aSpeed;
		$this->nom = $aNom;
		echo "je construis <br>";
	}
	public function __destruct(){
		echo "je me detruis <br>";
	}

	public function deuxroues(){

		echo "la moto lève";
	}


}
class CarteBleue{

	public $numerocarte;
	public $datefin;
	public $crypto;
	public $nomcarte;
	public $soldecompte;

	public function __constructcb($aNumerocarte,$aDatefin,$aCrypto,$aNomcarte,$aSoldeCompte){
		$this->numerocarte = $aNumerocarte;
		$this->datefin = $aDatefin;
		$this->crypto = $aCrypto;
		$this->nomcarte = $aNomcarte;
		$this->soldecompte = $aSoldeCompte;
		}

	public function getSolde(){
		return $this->soldecompte;
	}
	public function setSolde(){
		return $this->soldecompte = $aSoldeCompte;
	}
	public function getnumerocarte(){
		return $this->numerocarte;
	}
}

$carte = new CarteBleue("5689 5689 2423 8754","02/21","567","SHIFTERPRO","700 000€");
echo $carte->getnumerocarte();

//$tmax = new Motoeny("noir",450,"Tmax");

//echo $tmax->color,"<br>";
//$tmax->deuxroues()."<br>";
// $couleur =$tmax->color;
// 	echo $couleur;