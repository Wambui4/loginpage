<?php  
 $servername = "localhost";
 $dbname="loginusers";
 $username = "Loise";
 $password = "Wambui2004";

 try{
    $conn= new PDO("mysql:host=$servername","Loise", "Wambui2004");
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ("Connected succesfully");
    }catch(PDOException $e){
        die("An error occured" .$e->getMessage());
    }

?>