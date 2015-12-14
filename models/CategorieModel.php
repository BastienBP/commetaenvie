<?php
class CategorieModel extends ModelCore{
	private $idCat;
	private $libCat;



	//METHODS
	public function save(){
		CategorieDao::add($this);
	}

	// GETTERS
	public function getIdCat(){
		return $this->idCat;
	}
	public function getLibCat(){
		return $this->libCat;
	}
	
	//SETTERS
	public function setIdCat($idCat){
		$this->idCat = $idCat;
	}
	public function setLibCat($libCat){
		$this->libCat = $libCat;
	}

}