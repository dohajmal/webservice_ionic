<?php

function connecter(){

header("Content-type:application/json");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$connect = @mysql_connect($servername, $username, $password);

// Check connection
if (!$connect) {
    echo "Connection failed ";
    exit;
} 
$select=@mysql_select_db('projet');
if(!$select)
{
echo "Connected failed";
exit;
}


$query="SELECT * FROM `user`" ;


$result=mysql_query($query);
$etudiant_data=array();
//$num=mysql_num_rows($result);
while($row=mysql_fetch_array($result)){
$user_data[]=array(
'id' =>$row["id"],
	'nom' =>$row["nom"],
	'email' =>$row["email"],
	'login' =>$row["login"],
	'password' =>$row["password"]);
}
//return json_encode($user_data);
return '{"user":'.json_encode($user_data).'}';

}
print_r(connecter())
?> 