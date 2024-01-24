<?php

class Personnage 

{

    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    public function __construct($nom,$prenom,$sexe)
    
    {
        
    $this-> nom = $nom;
    $this-> prenom = $prenom;
    $this-> age = 0;
    $this-> sexe = $sexe;
    
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
    

    public function getAge()
    {

        return $this->age;

    }

    public function setAge($NewAge)
    
    {

        $this-> age = $NewAge;
    
    }

    public function getSexe()
    {

        return $this->sexe;

    }

    public function setSexe($NewSexe)
    
    {

        $this-> sexe = $NewSexe;
    
    }

    public function __toString()
    {
        return "$this->nom $this->prenom $this->sexe";
    }
}