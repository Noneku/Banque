<?php
class compteManager extends manager
{

  //recupérer touts les comptes.
  public function getComptes(){
    $query = $this->getDb()->query('SELECT * FROM compte');
    $data = $query->fetchAll(PDO::FETCH_CLASS, "Compte");
    return $data;
  }

  //ajouter un nouveau compte

  public function addCompte($comptes) {
    var_dump($comptes);
    $request = $db->prepare("INSERT INTO Copmte (nom, somme) VALUES(:nom, :somme)");
    $result = $request->execute([
      "nom" => $user["nom"] ,
      "somme" => $user["somme"]
    ]);
    $request->closeCursor();
    return $result;
  }

  //modifier un comptes

  function updateCompte($id) {
    $request = $db->prepare("UPDATE Compte SET nom = :somme WHERE id = :id");
    $result = $request->execute([
      "nom" => $user["nom"] ,
      "somme" => $user["somme"]
      "id" => $id
    ]);
    $request->closeCursor();
    return $result;
  }

  //supprimer un comptes
  function deleteCompte($id) {
    $request = $db->prepare("DELETE FROM Compte WHERE id = ?");
    $request->execute([$id]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
  }
}

?>
