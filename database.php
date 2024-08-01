<?php 
require_once 'db_connector.php';

 $servername = "localhost";
 $username = "Loise";
 $password = "Wambui2004";
 
try{
$conn= new PDO("mysql:host=$servername","Loise", "Wambui2004");
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="CREATE DATABASE loginusers";
$conn->exec($sql);
}catch(PDOException $error){
    echo ("An error occured" .$error);
}
 
echo ("Connected succesfully");

$conn= null;


?>