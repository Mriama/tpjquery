<?php
try{
    $bdd = new PDO('mysql:host=;dbname=Jquery;charset=utf8', 'root', 'jinadiallo',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="tpjquery.css">
  </head>
  <body>
  <div class="container">
    <div id="diallo" class="row">
        <div  class="card" id="c1">
  <div class="card-header bg-primary text-white">
    <h4 class="card-title">Se Connecter</h4>
  </div>
  <div class="card-body cb1">
    <div id="d1">
    <div id="submiterreur" class="alert alert-danger erreur" idalert="submiterreur">
      <!-- <h4 class="alert-heading"></h4> -->
      <ul>
      </ul>
    </div>
      <form method="POST" id="f1">
        <div class="row">
        <label class="col-md-3" for="">Login</label>
        <i class="fa fa-user-circle"></i><input  id="int1" class="col-lg-6" type="text" name="login" value="" val-champ="login">
        <p class="errorr"></p>
      </div><br>
      <div class="row">
        <label class="col-md-3" for="">Mot passe </label>
        <i class="fa fa-lock"></i><input id="int2" class="col-lg-6" type="password" name="" value="" val-champ="password">
      </div>
      <!-- <button id="reset" class="col-md-3 bg-danger" type="reset"><a href="#">Annuler</a></button> -->
        <!-- <input class="col-md-3" id="submit" type="submit" name="" value="Connecter"> -->
        <a id="reset" class="col-md-3 btn btn-danger pl" href="#">Annuler</a>
        <button id="button" class="col-md-3 btn btn-primary pl etape_2"  idform="f1">Connecter</button>
      </form>
  </div>
  <div class="card-footer text-muted ft1">
    <a id="oublier" href="#" class="col-md-4">Mot de passe oublié</a>
    <a id="ins" href="#" class="col-md-4">inscrire</a>
  </div>
</div>
   </div>


     <div id="coumba" class="row r2"  >
    <div class="card" id="c2">
  <div class="card-header bg-primary text-white">
    <h4 class="card-title">Recuperer un mot de passe</h4>
  </div>
  <div class="card-body">
            <!-- <img class="card-img-top" src="holder.js/100x180/" alt=""> -->
        <div class="card-body" id="c2">
           <div id="oublierreur" class="alert alert-danger erreur" idalert="oublierreur">
      <!-- <h4 class="alert-heading"></h4> -->
      <ul></ul>
    </div>
      <form method="POST" id="f2">
        <div class="row">
        <label class="col-md-3" for="">Login</label>
        <input id="int3" class="col-lg-6" type="text" name="" value="" val-champ="login">
        <p class="errorr"></p>
      </div><br>
      <div class="row">
        <label class="col-md-3" for="">Mot passe </label>
        <input id="int4" class="col-lg-6" type="password" name="" value="" val-champ="password">
      </div>
        <a class="col-md-3 btn btn-danger" href="">Annuler</a>
        <a id="oublie" class="col-md-3 btn btn-success etape_2" href="#" idform="f2">Connection</a>
      </form>
      </div>
  </div>

  <div class="card-footer text-muted">
    Footer
  </div>
    </div>


      <div  id="maria" class="row r3" >
      <div class="card" id="c3">
          <!-- <img class="card-img-top" src="holder.js/100x180/" alt=""> -->
          <div class="card-body">
              <h4 class="card-title bg-primary text-white">Inscription</h4>
          <div id="erreur" class="alert alert-danger erreur" idalert="erreur">
           <h4 class="alert-heading"></h4>
           <ul></ul>
           </div>
          <form id="f3" method="post" action="userinsert.php">
          <div class="row">
        <label class="col-md-3" for="">Nom</label>
        <input class="col-lg-6" type="text" name="nomuser" id="nom" value="" val-champ="nom">
      </div><br>
      <div class="row">
        <label class="col-md-3" for="">Prenom</label>
        <input class="col-lg-6" type="text" name="prenomuser" id="prenom" value="" val-champ="prenom">
      </div><br>
      <div class="row">
        <label class="col-md-3" for="">Login</label>
        <input id="int5" class="col-lg-6" type="text" name="log" id="log" value="" val-champ="login">
        <p class="errorr"></p>
      </div><br>
      <div class="row">
        <label class="col-md-3" for="">password</label>
        <input class="col-lg-6" type="password" name="pwd" id="pwd" value="" val-champ="password">
      </div>
      <input type="reset" name="" class="col-md-3" value="Annuler">
      <input id="btn-ins" type="submit" name="btn_ins"  class="col-md-3 etape_2" value="Enregister" idform="f3">
      </form>
          <a id="conn" href="#">Se Connecter</a>
          </div>
      </div>

</div>

<div id="charge">

</div>




</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.js"integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
     <script src="tpjquery.js"></script>
 </body>
</html>