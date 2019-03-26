
<form>
  <div>
    <label for="nom">Nom&nbsp;:</label>
    <input type="text" name="nom" value="<?=$nom?>">
  </div>
  <div>
    <label for="prenom">Prénom&nbsp;:</label>
    <input type="text" name="prenom" value="<?=$prenom?>">
  </div>
  <div>
    <label for="mail">Adresse mail&nbsp;:</label>
    <input type="text" name="mail" value="<?=$mail?>">
  </div>
  <div>
    <input type="reset" name="Effacer" />
    <input type="submit" name="S'inscrire"/>
  </div>
  <input type="hidden" name="inscription" />
</form>
