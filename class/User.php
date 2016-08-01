<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author ahudon
 */
class User {
    private $id,
            $pseudo,
            $pass,
            $prenom,
            $nom,
            $date_inscription,
            $droit;
    
    // Constructeur
    
    public function __construct($donnees)
    {
        $this->hydrate($donnees);
    }
    
    // Hydratation
    
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    // Setters
    
    public function setPseudo($pseudo)
    {
        if (preg_match("#^[a-z]+$#i", $pseudo))
        {
            $this->pseudo = $pseudo;
        }
    }
    
    function setPass($pass) {
        $this->pass = $pass;
    }
    
    public function setPrenom($prenom)
    {
        if (preg_match("#^[a-zéèûùàîïçÛÙÎÏÀÉÈÇ-]+$#i", $prenom))
        {
            $this->prenom = $prenom;
        }
    }

    public function setNom($nom)
    {
        if (preg_match("#^[a-zéèûùàîïçÛÙÎÏÀÉÈÇ-]+$#i", $nom))
        {
            $this->nom = $nom;
        }
    }

    public function setDateInscription($date_inscription)
    {
        $this->date_inscription = $date_inscription;
    }
    
    function setDroit($droit) {
        $this->droit = $droit;
    }
    
    // Getters

    public function getDateInscription()
    {
        return $this->date_inscription;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }
    
    function getPass() {
        return $this->pass;
    }
    
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }
    
    function getDate_inscription() {
        return $this->date_inscription;
    }
    
    function getDroit() {
        return $this->droit;
    }
}
