<?php
session_start();
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
   $login = $_GET['login'];
   $password = $_GET['password'];

	$user = mysql_query("SELECT * FROM user WHERE login = '$login' AND password= '$password' ;") or die(mysql_error());
  $num=mysql_num_rows($user); 

 if ($num ==0){
	echo json_encode("password ou login incorrect");
}
else if($num =!0){
while($list=mysql_fetch_assoc($user)){
$output=$list;
$_SESSION["id"] = $list["id"];
	$id= $_SESSION["id"];
}
echo json_encode("accees login");
}

	
?>