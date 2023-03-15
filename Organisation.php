<?php

class Organisation
{


    private $nom;
    private $adresse;
    private $nbUsers;
    private $users;

    public function __construct($nom, $adresse, $nbUsers) {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->nbUsers=$nbUsers;
        $this->users = array();
    }

    public function getNom() {
        return $this->nom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getNbUser() {
        return $this->nbUsers;
    }


    public function getUsers() {
        return $this->users;
    }


    public function setUser($user) {
        $this->users[] = $user;
    }









}