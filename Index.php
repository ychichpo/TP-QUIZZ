<?php

include "Organisation.php";
include "Users.php";
include "Questionnaire.php";
include "Data.php";




foreach ($Questionnaire as $key => $questionnaire) {
    echo "Le questionnaire <b>" . $key . "</b> est destiné à l'organisation <b>" . $questionnaire->getOrganisation()->getNom() . "</b><br>";
    echo "L'organisation <b>" . $questionnaire->getOrganisation()->getNom() . "</b> est située à " . $questionnaire->getOrganisation()->getAdresse() . " et compte <b>" . $questionnaire->getOrganisation()->getNbUser() . "</b> utilisateur" . (($questionnaire->getOrganisation()->getNbUser() > 1 ) ? "s" : " ") . "<br>";
    echo "Liste des utilisateurs du questionnaire : <br>";
    foreach ($questionnaire->getOrganisation()->getUsers() as $user) {
        echo "- " . $user->getPrenom() . " " . $user->getNom() . " (" . $user->getEmail() . ")<br>";
    }
    echo "<br>";
}





