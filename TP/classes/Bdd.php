<?php

	class Bdd{

		private $_dbmysql;

		public function __construct(){
			try {
 				$connect_str = "mysql:host=localhost;dbname=clicom";
           	 	$connect_user="root";
          		$connect_pass="";
            	$options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            	$this-> _dbmysql = new PDO($connect_str, $connect_user, $connect_pass, $options);
			}catch (Excption $e){
				throw new Exception("Erreur à la connexion \n". $e->getMessage());
				
			}
		}
		public function requeteSQL($sql){
			
		}
	}?>