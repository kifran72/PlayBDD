<style>
    form{
        width: 50%;
        margin: auto;
    }
    .form-control{
        height: 50px;
    }
    .btn{
        display: block;
        margin: auto;
        margin-top: 50px;
        width: 50%;
    }
</style>

<form action="index.php?page=signin-mod">
  <div class="form-group">
    <label for="mail">Address email</label>
    <input type="email" class="form-control" name="mail" id="mail" placeholder="Entrer votre email">
  </div>
  <div class="form-group">
      <label for="speudo">Speudo</label>
      <input type="text" class="form-control" name="speudo" id="speudo" placeholder="Entrer votre speudo">
  </div>
  <div class="form-group">
    <label for="pass">Mot de passe</label>
    <input type="password" class="form-control" name="pass" id="pass" placeholder="Entrer votre mot de passe">
  </div>
  <div class="form-group">
    <label for="pass-verif">vérification mot de passe</label>
    <input type="password" class="form-control" id="pass-verif" name="pass-verif" placeholder="Retaper votre Mot de passe">
  </div>
  <button type="submit" class="btn btn-success">Inscription</button>
</form>