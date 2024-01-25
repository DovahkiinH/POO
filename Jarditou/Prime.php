<?php

require_once 'Employe.class.php';

$employe1 = new Employe("Rambo","John","2010-01-15","Jardinier","50000","Entretient","1","0");
$employe2 = new Employe("Depardieu","Gerard","2015-03-20","Vendeur","60000","Commercial","3","2");
$employe3 = new Employe("Smith","Agent","2018-08-10","Agent de securite", "75000","Securite","2","1");
$employe4 = new Employe("Cerf","Pierre","2019-11-05","Agent d'entretient", "55000","Entretient","8","3");
$employe5 = new Employe("Crabs","Eugene","2020-07-01","Comptable","70000","Comptabilite","12","1");

$employes = [$employe1, $employe2, $employe3, $employe4, $employe5];

foreach ($employes as $employe) {
    $prime = $employe->calculerPrime();
    echo $employe->getNom() . " a une prime de $prime euros. ";
    echo $employe->ordreTransfert() . "<br>";
}