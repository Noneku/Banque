<?php

  class compteController{

    //Function qui affiche la vue de compteView
    public function compteList(){
      //Instancie l'objet
      $compteManager = new compteManager();
      $comptes = $compteManager->getComptes();
      require "view/compteView.php";
    }

    //Function qui affiche la vue du formulaire d'ajout de compte
    public function formAjoutCompte(){
      var_dump($_POST);
      $compteManager = new compteManager();
      $compte = new compte($_POST);
      $compteManager->addCompte($compte);

      require "view/ajoutCompteView.php";

  }

    //Options
    public function supprimerCompte(){
      $id = $_GET['id'];
      $compteManager = new compteManager();
      $compteManager->deleteCompte($id);

      redirectTo("gestionCompte");
    }

  }

 ?>
