<?php

require_once 'Employe.class.php';

$employe = new Employe("Rambo","John","2010-01-15","Jardinier","50000","Entretient","1","0");

if ($employe->ChequesVacances()) {
    echo "L'employé peut bénéficier de chèques-vacances.";
} else {
    echo "L'employé ne remplit pas les conditions pour bénéficier de chèques-vacances.";
}