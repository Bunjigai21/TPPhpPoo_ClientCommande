<!DOCTYPE html>

<html>

	<head>
		<title>PHPPOO2</title>
		<meta charset="utf-8">
	</head>

	<body>


		<?php

			// Autoload de toutes les classes
			require 'autoloader.php';
			AutoLoader::register();

	

				// TEST POUR LES FINDBYID
				$cliRepo = new ClientRepository();
				$client = $cliRepo->findById(1);
				insert($cliRepo);

				echo '<br>';

				$comRepo = new CommandeRepository();
				//echo $comRepo->findById(1); 

				echo '<br>';


				//TEST POUR LES FINDALL
				$allRepo = new ClientRepository();
				//print_r($allRepo->findAll()); 

				$allCommande = new CommandeRepository();
				//print_r($allCommande->findAll()); 
		
		?>


	</body>

</hmtl>