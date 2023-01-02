<?php 
    try{
        $con= new PDO('mysql:host=localhost;dbname=crmsystem;charset=utf8', 'root', '');

    }catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
    
    $requete=$con->prepare("SELECT * FROM contacts WHERE id=?");
    $requete->execute(array($_GET['id']));
    $email = $requete->fetch()['email']; 
    echo $email;
?>