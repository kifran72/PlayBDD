<style>
    form{
        width: 50%;
        margin: auto;
    }
    .form-control{
        height: 50px;
    }
    .signin{
        color: #333;
        text-align: center;
    }
    .btn{
        display: block;
        margin: auto;
        margin-top: 50px;
        width: 50%;
    }
</style>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Identifiant</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="login" placeholder="Entrer votre email ou speudo">
  </div>
  <div class="form-group">
      <label for="pass">Mot de passe</label>
      <input type="password" class="form-control" id="pass" name="password" placeholder="Entrer votre mot de passe">
  </div>
  <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox"> Se souvenir de moi
        </label>
      </div>
    <div class="signin">
        <a href="index.php?page=signin" class="signin"> Pas encore inscrit?</a>
    </div>
  <button type="submit" class="btn btn-success">Connexion</button>
</form>