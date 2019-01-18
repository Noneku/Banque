<?php
class compteManager extends manager
{

  //recupérer touts les comptes.
  public function getComptes(){
    $query = $this->getDb()->query('SELECT * FROM comptes');
    $data = $query->fetchAll(PDO::FETCH_CLASS, "compte");

    $query->closeCursor();
    return $data;
  }

  //recupérer touts les comptes.
  public function getCompte($nom){
    $query = $this->getDb()->prepare('SELECT * FROM comptes WHERE nom = ?');
    $query->execute([$nom]);
    $query->setFetchMode(PDO::FETCH_CLASS, 'compte');
    $compte = $query->fetch();

    $query->closeCursor();

    return $compte;
  }

  //ajouter un nouveau compte

  public function addCompte(compte $compte) {
    $query = $this->getDb()->prepare("INSERT INTO comptes(nom, somme) VALUES(:nom, :somme)");
    $result = $query->execute([
      "nom" => $compte->getNom(),
      "somme" => $compte->getSomme()
    ]);

    return $result;
  }

  //supprimer un comptes
  function deleteCompte($id) {
    $request = $this->getDb()->prepare("DELETE FROM comptes WHERE id = ?");
    $request->execute([$id]);

    $request->closeCursor();
    return $result;
  }

  //modifier Somme
  function updateSomme(compte $compte) {
    $request = $this->getDb()->prepare("UPDATE comptes SET somme = ? WHERE nom = ?");
    $request->execute([$compte->getSomme(), $compte->getNom()]);

    $request->closeCursor();

    return $request;
  }
}

?>
