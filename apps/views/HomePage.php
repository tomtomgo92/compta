
<div class="container-fluid">
  <div class="row">
      <?php //require _VIEWS . '/common/Nav.php'; ?>

<div class="container">



<form action="/home" method="post">
  <div class="imgcontainer">
    <img src="/imgs/user.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Entrer votre username" name="email" required>

    <label for="password"><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer votre mot de passe" name="password" required>

    
    <div class="row">

    <div class="col">
    <button type="submit" name="signinForm" class="btn btn-success">Connexion</button> 
    </div>
    <div class="col">
    <button type="submit" name="signupForm" class="btn btn-secondary">Nouvel utilisateur</button>
    </div>

   

   
    </div>
    <label><input type="checkbox" checked="checked" name="remember"> Se souvenir de moi !</label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Mot de passe <a href="#">oublié ?</a></span>
  </div>
</form>


</div>

