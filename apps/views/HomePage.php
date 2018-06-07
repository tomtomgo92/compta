
<div class="container-fluid">
  <div class="row">
      <?php //require _VIEWS . '/common/Nav.php'; ?>

<div class="container">



<form action="/action_page.php">
  <div class="imgcontainer">
    <img src="/compta/Assets/imgs/user.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Entrer votre username" name="uname" required>

    <label for="psw"><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer votre mot de passe" name="psw" required>

    
    <div class="row">

    <div class="col">
    <button type="submit" class="btn btn-success">Connection</button> 
    </div>
    <div class="col">
    <button type="submit" class="btn btn-secondary">Nouveau utilisateur</button>
    </div>

   

   
    </div>
    <label><input type="checkbox" checked="checked" name="remember"> Se souveneir de moi !</label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Mot de passe <a href="#">oublié ?</a></span>
  </div>
</form>


</div>

