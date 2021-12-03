<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="lib/jquery-3.6.0.slim.js"></script>
        <title> Accueil </title>
        <link rel="stylesheet" href="bootstrap.css"/>
        <style>
            body{
                background-color:#e3f2fd;
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="index.html">Acceuil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sauveurs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sauvetages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Recherche.php">Recherche</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="Ajouter.php">Ajouter</a>
                </li>
              </ul>
            </div>
        </nav>

        <img src="img/BANNIERE-COMPLETE-2048x679-1.jpg" class="img-fluid">

        <div style="height: 25px;"></div>

        <div style="margin-left:50px; margin-right: 50px;">

        <div style="margin-left:50px; margin-right: 50px;">

          <h1>Ajouter</h1>
          <form method="POST">
              <div class="row">
                  <div class="form-group col-md-2">
                    <label for="inputNomAdd">Nom</label>
                    <input name="Nom" type="Nom" class="form-control" id="inputNomAdd" placeholder="Nom">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputPrenomAdd">Prenom</label>
                    <input name="Prenom" type="Prenom" class="form-control" id="inputPrenomAdd" placeholder="Prenom">
                  </div>
                  <div class="form-group col-md-2">
                    <div style="height: 25px;"></div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                  </div>
              </div>
          </form>
      </div>

      <div style="height: 50px;"></div>


        
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; border-top: 1px solid black;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="Qui.html">Qui sommes-nous</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Presse.html">Presse</a>
                </li>
              </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/groups/938396409644949">Facebook</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://twitter.com/boutelierphili1">Twitter</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" itemprop="email" href="mailto:sauveteurdudunkerquois@gmail.com">E-mail</a>
                  </li>
                </ul>
              </div>
        </nav>
    </body>
</html>