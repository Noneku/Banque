<?php

  class Compte {

    //Attributs
    protected $id;
    protected $nom;
    protected $somme;

    //Constructeur
    public function __construct(){
      
    }

    //Methodes

    //Setter
    public function setId(int $id){
      $this->id = $id;
    }

    public function setNom(string $nom){
      $this->nom = $nom;
    }

    public function setSomme(int $somme){
      $this->somme = $somme;
    }

    //Getter
    public function getId(){
      $this->id;
    }

    public function getNom(){
      $this->nom;
    }

    public function getSomme(){
      $this->somme;
    }

    //Methodes Actions

    public function retraitSommes(){

    }

    public function verserSommes(){

    }

    public function virerSommes(){

    }

  }



 ?>
