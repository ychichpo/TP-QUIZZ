<?php

class Users
{
    private $nom;
    private $prenom;
    private $email;

    public function __construct($nom, $prenom, $email) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }
    public function getEmail() {
        return $this->email;
    }

}