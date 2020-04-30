<?php
    try{
       $pdo=new PDO("mysql:host=localhost;port=3308;dbname=gestion_st","root",""); 
    }catch(Exception $e){
        die('Erreur de connexion :' .$e->getMessage());
    }
        
?>
