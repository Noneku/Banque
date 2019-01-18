<form method = "post">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Selectionner un compte :</label>
    <select class="form-control" id="exampleFormControlSelect1" name = "nom">
      <?php foreach ($comptes as $key => $value) { ?>
        <option><?php echo $value->getNom(); ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Montant :</label>
    <input type="number" class="" name = "ajout">
    <button type="submit" class="btn btn-primary mb-2">Valider !</button>
  </div>
</form>
