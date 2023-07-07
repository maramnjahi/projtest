<?php
	class livreur{
		private $numlivreur=null;
		private $nom=null;
		private $prenom=null;
		private $email=null;
		private $adresse=null;
		private $cin=null;
		
		
		
		
		private $dateins;
		
		
		 public function __construct($numlivreur, $nom, $prenom, $email, $adresse, $cin, $dateins){
			$this->numlivreur=$numlivreur;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->adresse=$adresse;
			$this->cin=$cin;
			
			$this->dateins=$dateins;
		}
		 public function getnumlivreur(){
			return $this->numlivreur;
		}
		
	 public	function getcin(){
			return $this->cin;
		}
		 public function getnom(){
			return $this->nom;
	 	}
	 public	function getprenom(){
			return $this->prenom;
		}
	public	function getadresse(){
			return $this->adresse;
		}
	public	function getemail(){
			return $this->email;
		}
	public	function getdateins(){
			return $this->dateins;
		}
	public	function setcin( $cin){
			$this->cin=$cin;
		}
	public 	function setnom( $nom){
			$this->nom=$nom;
		}
	public 	function setprenom($prenom){
			$this->prenom=$prenom;
		}
	public 	function setadresse( $adresse){
			$this->adresse=$adresse;
		}
		function setemail($email){
			$this->email=$email;
		}
		function setdateins( $dateins){
			$this->dateins=$dateins;
		}
		
	}