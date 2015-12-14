<?php
class TopicModel extends ModelCore{
	private $idTop;
	private $libTop;
	private $categorie;


	//GETTERS
	public function getIdTop(){
		return $this->idTop;
	}
	public function getLibTop(){
		return $this->libTop;
	}
	public function getCategorie(){
		return $this->categorie;
	}
	//SETTERS
	public function setIdTop($idTop){
		$this->idTop = $idTop;
	}
	public function setLibTop($libTop){
		$this->libTop = $libTop;
	}
	public function setCategorie($categ){
		$this->categorie = $categ;
	}
}