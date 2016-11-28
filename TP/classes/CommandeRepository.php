<?php

	class CommandeRepository extends AbstractRepository{

		

		public function __construct(){
			parent::__construct();
			$this->classe = 'commande';
		
		}
		public function findByDate($uneDate){

		}
		public function findByIntervalleDate($dateDepart,$dateFin){

		}
	}