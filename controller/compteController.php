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
      if(!empty($_POST)){
      $compteManager = new compteManager();
      $compte = new compte($_POST);
      $compteManager->addCompte($compte);

      redirectTo("gestionCompte");
    }

      require "view/ajoutCompteView.php";

  }

    public function crediterCompte(){
      //Instancie l'objet
      $compteManager = new compteManager();
      $comptes = $compteManager->getComptes();
      if(!empty($_POST))
      {
        $ajout = $_POST['ajout'];
        $nom = $_POST['nom'];

        //Je vérifie si mes deux variables existe
        if(isset($ajout) && isset($nom)){
          //Je recupère un compte, grâce à son nom et je stock dans $compte
          $compte = $compteManager->getCompte($nom);
          //$compte devien l'objet compte et verses la l'ajout à la somme
          $compte->verserSommes($ajout);

          //Aprés ça je update la BDD avec la nouvelle somme
          $compteManager->updateSomme($compte);

        }
      }
      require "view/versementView.php";
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
