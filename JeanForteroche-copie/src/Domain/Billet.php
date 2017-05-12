<?php
namespace JeanForteroche\Domain;

class Billet {

	/**
	 *Article id
	 *
	 *@var int
	 */
	private $id;


	/**
	 *Article titre
	 *
	 *@var int
	 */
	private $titre;

	/**
	 *Article contenu
	 *
	 *@var int
	 */
	private $contenu;


	//GETTERS
	public function getId() { return $this->id; }
	public function getTitre() { return $this->titre; }
	public function getContenu() { return $this->contenu; }


	//SETTERS
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	public function setTitre($titre) {
		$this->titre = $titre;
		return $this;
	}

	public function setContenu($contenu) {
		$this->contenu = $contenu;
		return $this;
	}


}