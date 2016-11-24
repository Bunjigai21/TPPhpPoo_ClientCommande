<!DOCTYPE html>
<html>
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <?php
    try {

        include_once("AutoLoader.php");
        AutoLoader::register();
        require_once('trait/iMetier.php');
        ?>
    <body>
        <?php 
        $cliRepo = new ClientRepository();
        print_r($cliRepo ->findById(1,'Client')); ?>
       
    </body>
    <?php
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
    ?>
    </body>
    
</html>
