<?php
require_once "../../bdd/BDD.php";
require_once "../../modele/Etudiant.php";

$bdd = new BDD();
$etudiant = new Etudiant(array(
    "nom"=>$_POST['nom'],
    "prenom"=>$_POST['prenom'],
    "mail"=>$_POST['mail'],
    "mdp"=>$_POST["mdp"],
    "ref_classe"=>$_POST['ref_classe'],
));

$etudiant->ajout($bdd);
header("Location: ../../index.php");