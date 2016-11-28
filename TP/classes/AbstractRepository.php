<?php
	


	abstract class AbstractRepository{

		protected $classe;
		private $bdd;

		public function __construct(){
			$this->bdd = new Bdd();
		}

		public function findById($id){

			$req = $this->bdd->requeteSQL('SELECT * FROM ' . $this->classe . ' WHERE ID=?', array($id));

			return $req->fetchObject($this->classe);

		}

		public function findAll(){

			$req = $this->bdd->requeteSQL('SELECT * FROM ' . $this->classe);
			$clients = array();

			while($data = $req->fetchObject($this->classe)){
				$clients[] = $data;
			}

			return $clients;

		}

		public function insert($objet, $params){

			$req = $this->bdd->requeteSQL('INSERT INTO ' . $this->classe . ' (ID, TITRE, NOM, PRENOM, ADRESSERUE1, ADRESSERUE2, CP, VILLE, TEL) VALUE (null,?, ?, ?, ?, ?, ?, ?, ?)',$params);
		}

	}