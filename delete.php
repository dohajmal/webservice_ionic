<?php
header("Content-type:application/json");
function connecter(){
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
$nom=$_GET['nom'];
$email=$_GET['email'];
$login=$_GET['login'];
$password=$_GET['password'];
$query="DELETE FROM `user` WHERE `nom`='$nom' AND `email`='$email' AND `login`='$login' AND `password`='$password' ";

$result=mysql_query($query);


return json_encode($result);
}
print_r(connecter());
?> 
