<?php
require "template/header.php";
 ?>
 <a class="btn btn-primary mb-1" <?php setHref("ajouterCompte"); ?> role="button">Ajouter un compte</a>

 <table class="table">
   <thead class="thead-dark">
     <tr>
       <th scope="col">#</th>
       <th scope="col">Nom</th>
       <th scope="col">Somme</th>
       <th scope="col">Options</th>
     </tr>
   </thead>
   <tbody>
     <?php foreach ($comptes as $key => $value){ ?>
     <tr>
       <th scope="row"><?php echo $value->getId(); ?></th>
       <td><?php echo $value->getNom(); ?></td>
       <td><?php echo $value->getSomme(); ?> €</td>
       <td><a <?php setHref("supprimerCompte", ["id" => $value->getId()]) ?> type="button" class="btn btn-danger">Supprimer</a></td>
     </tr>
   <?php } ?>
   </tbody>
 </table>
 <?php

require "template/footer.php";

  ?>
