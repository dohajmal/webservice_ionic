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


$query="SELECT * FROM `pollution`" ;

;
$result=mysql_query($query);

while($row=mysql_fetch_array($result)){
$user_data[]=array(
'id' =>$row["id"],
	'longitude' =>$row["longitude"],
	'latitude' =>$row["latitude"],
	'description' =>$row["description"],
	'image' =>$row["image"]);
}
//return json_encode($user_data);
echo (json_encode($user_data));

}
print_r(connecter())
?> 