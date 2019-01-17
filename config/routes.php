<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "status" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "compte",
      "compteList"
    ],
    "gestionCompte" => [
      "compte",
      "compteList"
    ],
    "ajouterCompte" => [
      "compte",
      "formAjoutCompte"
    ],
    "supprimerCompte" => [
      "compte",
      "supprimerCompte",
      [
        "id" =>["int"]
      ]
    ]
  ];
}

 ?>
