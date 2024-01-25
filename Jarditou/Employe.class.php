<?php

class Employe 

{

    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $fonction;
    private $salaireBrut;
    private $service;
    private $IdMagasin;
    private $Enfants;


    public function __construct($nom,$prenom,$dateEmbauche,$fonction,$salaireBrut,$service,$IdMagasin,$Enfants)
    {
        
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateEmbauche = $dateEmbauche;
    $this->fonction = $fonction;
    $this->salaireBrut = $salaireBrut;
    $this->service = $service;
    $this->IdMagasin = $IdMagasin;
    $this->Enfants = $Enfants;
    
    }

    public function getNom()
    {

        return $this->nom;

    }

    public function setNom($NewNom)
    
    {

        $this-> nom = $NewNom;
    
    }

    public function getPreom()
    {

        return $this->prenom;

    }

    public function setPrenom($NewPrenom)
    
    {

        $this-> prenom = $NewPrenom;
    
    }
    

    public function getDateEmbauche()
    {

        return $this->dateEmbauche;

    }

    public function setDateEmbauche($NewDateEmbauche)
    
    {

        $this-> dateEmbauche = $NewDateEmbauche;
    
    }

    public function getFonction()
    {

        return $this->fonction;

    }

    public function setFonction($NewFonction)
    
    {

        $this-> fonction = $NewFonction;
    
    }

    public function getSalaireBrut()
    {

        return $this->salaireBrut;

    }

    public function setSalaireBrut($NewSalaireBrut)
    
    {

        $this-> salaireBrut = $NewSalaireBrut;
    
    }

    public function getService()
    {

        return $this->service;

    }

    public function setService($NewService)
    
    {

        $this-> service = $NewService;
    
    }

    public function getIdMagasin()
    {

        return $this->IdMagasin;

    }

    public function setIdMagasin($NewIdMagasin)
    
    {

        $this-> IdMagasin = $NewIdMagasin;
    
    }

    public function getEnfants()
    {

        return $this->Enfants;

    }

    public function setEnfants($NewEnfants)
    
    {

        $this-> Enfants = $NewEnfants;
    
    }


    public function anciennete() {

        $dateEmbauche = new DateTime($this->dateEmbauche);

        $dateActuelle = new DateTime();

        $difference = $dateActuelle->diff($dateEmbauche);

        return $difference->y;
    }

    public function calculerPrime() {

            $prime = $this->salaireBrut * 0.05; 

            $prime += $this->salaireBrut * 0.02 * $this->anciennete();
        

        return $prime;
    }

    public function ordreTransfert() {

        $prime = $this->calculerPrime();
        $dateActuelle = new DateTime();
        $dateVersement = new DateTime("2023-11-30");

        if ($dateActuelle >= $dateVersement) {

            $message = "Ordre de transfert de prime de $prime euros envoyé à la banque pour l'employé $this->nom.";
            return $message;
        } else {
            return "Pas de prime à verser à la date actuelle.";
        }
    }

    public function ChequesVacances()
    {
        $anciennete = $this->anciennete();
        return $anciennete >= 1;
    }

    public function ChequesNoel()
    {
        $enfants = $this->getEnfants(); 

        $chequesNoel = [
            '0-10' => 20,
            '11-15' => 30,
            '16-18' => 50,
        ];

        $totalChequesNoel = 0;

        foreach ($enfants as $enfant) {
            $age = $enfant->getAgeEnfant();

            foreach ($chequesNoel as $trancheAge => $montant) {
                list($minAge, $maxAge) = explode('-', $trancheAge);

                if ($age >= $minAge && $age <= $maxAge) {
                    $totalChequesNoel += 1;
                    echo "L'employé a droit à un chèque Noël de $montant € pour un enfant de $age ans.\n";
                    break;
                }
            }
        }

        return $totalChequesNoel > 0;
    }
}

