<?php
	trait traitRepository{
		public function findById($id, $table){
			$bdd = new Bdd();
			$requete = $bdd->getPDO()->prepare('SELECT * FROM :? WHERE ID=1');
			$requete->execute(array($id,$table
				));
		}
		public function findAll($table){
			$bdd = new Bdd();
			$requete = $bdd->prepare('SELECT * FROM :table');
			$requete->execute(array(
				':table'=>$table
				));
		}
		public function insert($objet){

		}

	}

?>