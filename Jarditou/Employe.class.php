<?php

class Employe 

{

    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $fonction;
    private $salaire;
    private $service;

    public function __construct($nom,$prenom,$dateEmbauche,$fonction,$salaire,$service)
    
    {
        
    $this-> nom = $nom;
    $this-> prenom = $prenom;
    $this-> dateEmbauche = $dateEmbauche;
    $this-> fonction = $fonction;
    $this-> salaire = $salaire;
    $this-> service = $service;
    
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

    public function getSalaire()
    {

        return $this->salaire;

    }

    public function setSalaire($NewSalaire)
    
    {

        $this-> salaire = $NewSalaire;
    
    }

    public function getService()
    {

        return $this->service;

    }

    public function setService($NewService)
    
    {

        $this-> service = $NewService;
    
    }

    public function anciennete() {

        $dateEmbauche = new DateTime($this->dateEmbauche);

        $dateActuelle = new DateTime();

        $difference = $dateActuelle->diff($dateEmbauche);

        return $difference->y;
    }
}