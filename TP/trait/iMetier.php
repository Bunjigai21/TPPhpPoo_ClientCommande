<?php
	trait traitRepository{
		public function findById($id, $table){
			$bdd = new Bdd();
			$requete = $bdd->prepare('SELECT * FROM :table WHERE ID=:id');
			$requete->execute(array(
				':id'=>$id,
				':table'=>$table
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