
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="lib/jquery-3.6.0.slim.js"></script>
        <title> Accueil </title>
        <link rel="stylesheet" href="bootstrap.css"/>
<?php
if(isset($_GET['dark_mode'])){
?>
        <link rel="stylesheet" href="dark_mode.css"/>
<?php
}
?>

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
                    <a class="nav-link active" href="Recherche.php">Recherche</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Ajouter.php">Ajouter</a>
                </li>


		<li class="nav-item mr-sm">
			<a href="./Recherche.php?dark_mode"><button>MODE DARK</button></a>
		</li>



              </ul>
            </div>
        </nav>

        <img src="img/BANNIERE-COMPLETE-2048x679-1.jpg" class="img-fluid">

        <div style="height: 25px;"></div>
<?php

    

if( isset($_POST['Nom'])){
            $nom = $_POST['Nom'];
            $prenom = $_POST['Prenom'];
            if($nom && $prenom){
                rechercher($nom, $prenom);
            }else{
                echo "Erreur : vous devez entrer une valeur dans chaque champ ! <br/><br/>";
            }
        }

    ?>
        <div style="margin-left:50px; margin-right: 50px;">

            <h1>Recherchez</h1>
            <form method="POST">
                <div class="row">
                    <div class="form-group col-md-2">
                      <label for="inputNom">Nom</label>
                      <input name="Nom" type="Nom" class="form-control" id="inputNom" placeholder="Nom">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputPrenom">Prenom</label>
                      <input name="Prenom" type="Prenom" class="form-control" id="inputPrenom" placeholder="Prenom">
                    </div>
                    <div class="form-group col-md-2">
                      <div style="height: 25px;"></div>
                      <button type="submit" class="btn btn-primary">Rechercher</button>
                    </div>
                </div>
            </form>
        </div>
<?php
function liste($nom, $prenom){
  echo'<li>';
  $string = $nom.$prenom;
  echo '<a href='.'"/'.$string.'.php" style="text-decoration:none;color:black">';
  echo $nom.' '.$prenom;
  echo '</a>';
  echo '</li>';
}


function rechercher($nom, $prenom){
$host = 'mysql-esit.alwaysdata.net';
    $dbname = 'esit_nuit';
    $username = 'esit';
    $password = ':6jMPZu2^(h2';
    
try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";
  $query = "SELECT * FROM Sauveur WHERE Nom='$nom' AND Prenom='$prenom'";
$q = $conn->query($query);
$q->setFetchMode(PDO::FETCH_ASSOC);

echo '<ul>';

//$resultat = mysqli_query($conn, $query);
    while ($r = $q->fetch()) {
        //echo sprintf('%s %s <br/>', $r['Prenom'] , $r['Nom']);
  echo liste($r['Prenom'] , $r['Nom']);
  //echo sprintf('%s <br/>', $r['Text']);
    }
echo '</ul>';
  //echo "okay :)";
}catch(PDOException $e){
die("Could not connect to the database $dbname :" . $e->getMessage());
}
}
?>
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
