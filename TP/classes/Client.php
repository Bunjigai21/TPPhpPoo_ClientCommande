<?php

	class Client {

		private $id;
		private $titre;
		private $nom;
		private $prenom;
		private $adresserue1;
		private $adresserue2;
		private $cp;
		private $ville;
		private $tel;
		private $lesCommandes;

		public function __toString(){
			return "Objet [CLIENT] : [id] = " . $this->id . " - [nom] = " . $this->nom . " - [prenom] = " . $this->prenom;
		}
		public function getParams(){

		}
		public function getId(){
			return $this->id;
		}	
		public function getTitre(){
			return $this->titre;
		}	
		public function getNom(){
			return $this->nom;
		}		
		public function getPrenom(){
			return $this->prenom;
		}	
		public function getAdresseRue1(){
			return $this->adresserue1;
		}	
		public function getAdresseRue2(){
			return $this->adresserue2;
		}	
		public function getCp(){
			return $this->cp;
		}	
		public function getVille(){
			return $this->ville;
		}	
		public function getTel(){
			return $this->tel;
		}	
		public function getILesCommandes(){
			return $this->lesCommandes;
		}	
	}