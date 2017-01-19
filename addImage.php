<?php


$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbdb="projet";
header("Content-type:application/json");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Origin': 'http://eternity-online-game.net/");

$link = @mysql_connect( 'localhost', 'root', '');
$db_selected = mysql_select_db('projet', $link);


         $longitude = $_GET['longitude'];
		 $latitude=$_GET['latitude'];
		 $description=$_GET['description'];
         $image = $_GET['image'];
	
		 // L'utilisateur n'existe pas 
           
			$result = mysql_query("INSERT INTO pollution (`image`, `description`, `longitude`, `latitude`) VALUES ('".$image."','".$description."','".$longitude."','".$latitude."') ;");
           
               echo json_encode("Success registre");
             
		
?>