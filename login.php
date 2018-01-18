<!doctype html>
<html lang="en">
  <head>
    <title>Page de connection</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
      <form id="f1">
      <div class="row">
        <label class="col-md-1" for="">Login</label>
        <input id="int1" class="col-md-3" type="text" name="" value="">
        <span class="erreur">erreur</span>
      </div><br><br>
      <div class="row">
        <label class="col-md-1" for="">Mot passe </label>
        <input id="int2" class="col-md-3" type="password" name="" value="">
      </div>
      <button id="reset" class="col-md-1 bt" type="reset">Annuler</button>
      <button id="submit" class="col-md-1 bt" type="submit">Connection</button>
      <!-- <input id="reset" class="col-md-1 bt" type="reset" name="" value="Annuler">
      <input id="submit" class="col-md-1 bt" type="submit" name="" value="connection"> -->
      </form>



       <form id="f2" method="POST" action="#">
          <div class="row">
        <label class="col-md-1" for="">Nom</label>
        <input class="col-md-3" type="text" name="" value="">
      </div><br>
      <div class="row">
        <label class="col-md-1" for="">Prenom </label>
        <input class="col-md-3" type="text" name="" value="">
      </div><br>
      <div class="row">
        <label class="col-md-1" for="">Login</label>
        <input class="col-md-3" type="text" name="" value="">
      </div><br>
      <div class="row">
        <label class="col-md-1" for="">Mot passe </label>
        <input class="col-md-3" type="password" name="" value="">
      </div>
      <input class="col-md-1 tb" type="submit" name="" value="Enregistrer">
      </form>

      <a id="inscrir" class="text-muted a" href="#">S'inscrires</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
  <script>
    $(function() {
        $("#f2").hide();
        $("#inscrir").click(function(){
        $("#f2").show();
        });

          $("#submit").click(function(){
            valid= true;
            if($('#int1').val()==""){
              $('#int1').css("border-color","red");
              $('#int1').next('.erreur').fadeIn('fast').text('veuillez saisir votre login');
              valid= false;
            }
            return valid;
          });
      });
  </script>
  <style>
 #f1{
      margin-left:50px;
      margin-top:20px;
  }
  .bt{
      position:relative;
      left:120px;
      top:30px;
  }
  .tb{
      position:relative;
      left:100px;
      top:30px;
  }
  .a{
    position:absolute;
    left:400px;
    top:200px;
  }
  #f2{
    margin-top:100px;
    margin-left:50px;

  }
  .erreur{ 
    display:none;
    color:red;
    margin-left:30px;
  }
  </style>
</html> 