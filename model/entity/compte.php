<?php

  class compte extends entity {

    //Attributs
    protected $nom;
    protected $somme;

    //Constructeur
    public function __construct($data = null){
      //Permet d'hydrater mon objet
      if($data){
        $this->hydrate($data);
      }
    }

    //Methodes

    //Setter

    public function setNom($nom){
      $this->nom = $nom;
    }

    public function setSomme($somme){
      $this->somme = $somme;
    }

    //Getter

    public function getNom(){
      return $this->nom;
    }

    public function getSomme(){
      return $this->somme;
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
