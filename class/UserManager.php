<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserManager
 *
 * @author ahudon
 */
class UserManager {
    private $_db;
    
    // Constructeur
    
    public function __construct($db)
    {
        $this->setDb($db);
    }

    // Getter and setter

    public function setDb($db)
    {
        $this->_db = $db;
    }
    
    function get_db() {
        return $this->_db;
    }

    // Methods
    
    public function add(User $user)
    {
        $query = $this->_db->prepare('INSERT INTO user(pseudo, pass, prenom, nom) VALUES(:pseudo, :pass, :prenom, :nom)');
        $query->execute([':pseudo' => $user->getPseudo(),
            ':pass' => $user->getPass(),
            ':prenom' => $user->getPrenom(),
            ':nom' => $user->getNom()]);
        
        $user->hydrate(['id' => $this->_db->lastInsertId()]);
    }
    
    public function delete(User $user)
    {
        
    }
    
    public function exists($pseudo)
    {
        $query = $this->_db->prepare('SELECT COUNT(*) AS count FROM user WHERE pseudo = :pseudo');
        $query->bindValue(':pseudo', $pseudo);
        $query->execute();
        
        $donnee = $query->fetch();
        
        if ($donnee['count'] == 0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    
    public function update(User $user)
    {
        
    }
}
