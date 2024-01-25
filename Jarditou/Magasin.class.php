<?php

class Magasin 

{

    private $MagasinID;
    private $Nom;
    private $Adresse;
    private $CodePostal;
    private $Ville;
    private $Restauration;

    public function __construct($MagasinID, $Nom, $Adresse, $CodePostal, $Ville, $Restauration) 
    {

        $this->MagasinID = $MagasinID;
        $this->Nom = $Nom;
        $this->Adresse = $Adresse;
        $this->CodePostal = $CodePostal;
        $this->Ville = $Ville;
        $this->Restauration = $Restauration;
    }

    public function getMagasinID() 
    {

        return $this->MagasinID;

    }

    public function setMagasinID($NewMagasinId) 
    {

        $this->MagasinID = $NewMagasinId;

    }

    public function getNom() 
    {

        return $this->Nom;

    }

    public function setNom($NewNom) 
    {

        $this->Nom = $NewNom;

    }

    public function getAdresse() 
    {

        return $this->Adresse;

    }

    public function setAdresse($NewAdresse) 
    {

        $this->Adresse = $NewAdresse;

    }

    public function getCodePostal() 
    {

        return $this->CodePostal;

    }

    public function setCodePostal($NewCodePostal) 
    {

        $this->CodePostal = $NewCodePostal;

    }

    public function getVille() 
    {

        return $this->Ville;

    }

    public function setVille($NewVille) 
    {

        $this->Ville = $NewVille;

    }

    public function getRestauration() 
    {

        return $this->Restauration;

    }

    public function setRestauration($NewRestaration) 
    {

        $this->Restauration = $NewRestaration;

    }
}