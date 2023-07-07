<?php


class livraison {
	// properties
	private $id;
	private $typecommande;
	private $nomclient;
	private $numlivraison;
	private $numlivreur;
	private $adresse;
	private $email;
	private $prixtotal;
	private $dateliv;
  
	// constructor
	public function __construct($id,$typecommande,$nomclient,$numlivraison, $numlivreur, $adresse, $email,$prixtotal, $dateliv) {
		$this->id = $id;
		$this->typecommande = $typecommande;
		$this->nomclient = $nomclient;
		$this->numlivraison = $numlivraison;
	   $this->numlivreur = $numlivreur;
	   $this->adresse = $adresse;
	   $this->email = $email;
	   $this->prixtotal = $prixtotal;

	  $this->dateliv = $dateliv;
	}
  
	// methods
	public function getid() {
		return $this->id;
	}
	
	public function gettypecommande() {
		return $this->typecommande;
	}
	
	public function getnomclient() {
		return $this->nomclient;
	}
	
	public function getNumlivraison() {
		return $this->numlivraison;
	}
  
	public function setNumlivraison($numlivraison) {
		$this->numlivraison = $numlivraison;
	}
  
	public function getNumlivreur() {
		return $this->numlivreur;
	}
  
	public function setNumlivreur($numlivreur) {
		$this->numlivreur = $numlivreur;
	}
  
	public function getAdresse() {
		return $this->adresse;
	}
  
	public function setAdresse($adresse) {
		$this->adresse = $adresse;
	}
  
	public function getEmail() {
		return $this->email;
	}
  
	public function setEmail($email) {
		$this->email = $email;
	}
  
	public function getDateliv() {
		return $this->dateliv;
	}
  
	public function setDateliv($dateliv) {
		$this->dateliv = $dateliv;
	}
	
	public function getprixtotal() {
		return $this->prixtotal;
	}
	
	public function setprixtotal($prixtotal) {
		$this->prixtotal = $prixtotal;
	}
	
	public function settypecommande($typecommande) {
		$this->typecommande = $typecommande;
	}
	
	public function setnomclient($nomclient) {
		$this->nomclient = $nomclient;
	}

}
?>
