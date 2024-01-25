<?php

require_once 'Employe.class.php';

$employe = new Employe("Lebowski","Jeff","2010-01-15","caissier","15k","Commercial","5","3");
$anciennete = $employe->anciennete();

echo $employe->getNom() . " est dans l'entreprise depuis " . $anciennete . " ans.";
