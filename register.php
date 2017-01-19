<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);

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
         $name = $_GET['name'];
		 $email=$_GET['email'];
		 $login=$_GET['login'];
         $password = $_GET['password'];
	
		 $user = mysql_query("SELECT nom from user WHERE email = '".$email."' ; ");
		   $no_of_rows = mysql_num_rows($user);
		    if ($no_of_rows > 0) 
         {
		 // Utilisation existe déjà 
          
            echo json_encode("utilisateur exist");
		 }
		 else{
		 // L'utilisateur n'existe pas 
           
			$result = mysql_query("INSERT INTO user (`nom`, `email`,`login`, `password`) VALUES ('".$name."','".$email."','".$login."','".$password."') ;");
           
               echo json_encode("Success inscription");
             
		 }		 
?>