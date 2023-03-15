<?php



$henri = new Users("Lecompte", "Henri", "h.L@laposte.net");
$paul = new Users("Bocusse", "Paulo", "paulo@bocusse.jambon");
$nathan = new Users("Zag", "Nathan", "nathan@zag.fr");
$beni = new Users("La Tour", "Beni", "latour@free.fr");
$yael = new Users("Rousse", "Yael", "rousse@free.fr");
$celine = new Users("Labelle", "Celine", "celine@senane.net");
$albane = new Users("Camille", "Albane", "camille@albane.com");


$listOrganisation[] = new Organisation("TF1", "Issy les moulineaux",3);
$listOrganisation[] = new Organisation("France 2", "Paris",2);
$listOrganisation[] = new Organisation("CanalPlus", "Boulogne",1);
$listOrganisation[] = new Organisation("Netflix", "Los Gatos" ,3);


$listOrganisation[0]->setUser($celine);
$listOrganisation[0]->setUser($albane);
$listOrganisation[0]->setUser($paul);
$listOrganisation[1]->setUser($beni);
$listOrganisation[1]->setUser($albane);
$listOrganisation[2]->setUser($yael);
$listOrganisation[3]->setUser($henri);
$listOrganisation[3]->setUser($nathan);
$listOrganisation[3]->setUser($celine);



$Questionnaire["RH"] = new Questionnaire($listOrganisation[3]);
$Questionnaire["CUISINE"] = new Questionnaire($listOrganisation[2]);
$Questionnaire["VOITURE"] = new Questionnaire($listOrganisation[1]);
$Questionnaire["ENTREPRISE"] = new Questionnaire($listOrganisation[0]);
