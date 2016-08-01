<?php

$pseudo = $pass = $pass2 = $prenom = $nom = "";
$erreur = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    //Vérification du pseudo
    if (empty($_POST['pseudo'])) {
        $erreur[] = "Vous devez entrer un pseudo";
    }
    else {
        $pseudo = cleanInput($_POST['pseudo']);

        if($manager->exists($pseudo)) 
        {
            $erreur[] = "Pseudo déjà utilsé";
        }
         else if (!valider($pseudo, 'pseudo'))
        {   //Vérification si le pseudo contient uniquement des lettres
            $erreur[] = "Le pseudo doit être formé de caractères alphabétiques (non accentués)";
        }
    }

    //Vérification du prénom
    if (empty($_POST['prenom'])) {
        $erreur[] = "Vous devez entrer votre prenom";
    }
    else {
        $prenom = cleanInput($_POST['prenom']);
        
        if (!valider($prenom, 'nom'))
        {
            $erreur[] = "Le prénom doit contenir uniquement des lettres ou un trait-d'union";
        }
        else {
            $prenom = ucfirst($prenom);
        }
    }

    //Vérification du nom
    if (empty($_POST['nom'])) {
        $erreur[] = "Vous devez entrer votre nom";
    }
    else {
        $nom = cleanInput($_POST['nom']);
        if (!valider($nom, 'nom'))
        {
            $erreur[] = "le nom doit contenir uniquement des lettres ou un trait-d'union";
        }
        else {
            $nom = ucfirst($nom);
        }
    }
    

    //Vérification si le mot de passe a été saisie
    if(empty($_POST['pass'])){
        $erreur[] = "Le mot de passe est requis";
    }
    else {
        $pass = cleanInput($_POST['pass']);
    }

    //Vérification si la confirmation de mot de passe a été saisie
    if(empty($_POST['pass2'])){
        $erreur[] = "Vous devez confirmer le mot de passe";
    }
    else {
        $pass2 = cleanInput($_POST['pass2']);
    }

    //Vérification si les deux mots de passe correspondent
    if($pass != $pass2){
        $erreur[] = "Vous n'avez pas bien retranscrit le mot de passe";
    }

    if (empty($erreur)) {
        $user = new User(['pseudo' => $pseudo, 'prenom' => $prenom, 'nom' => $nom, 'pass' => $pass]);
        $manager->add($user);
        
        echo 'INSCRIPTION RÉUSSI !';
    }
}

include_once('vue/inscription.php');
