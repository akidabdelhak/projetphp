

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My TodoBest</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
    <main>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">about us <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Connexion
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">login</a>
                <a class="dropdown-item" href="#">inscription</a>

              </div>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0" action="accueil.html" method="post">

            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Deconnexion</button>
          </form>
        </div>
      </nav>
      <form class="form-inline my-2 my-lg-0" action="newListe.php" method="post">

        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">New List</button>
      </form>
      <div class="listes">
        <ul>
          <li><a title="Titre du lien" href="http://www.adresse-du-lien.fr">ma premiere liste</a></li>
          <li><a title="Titre du lien" href="http://www.adresse-du-lien.fr">ma seconde liste</a></li>
          <li><a title="Titre du lien" href="http://www.adresse-du-lien.fr">ma troisieme liste</a></li>
        </ul>


      </div>
    </main>



  </body>
</html>




<?php
 ?>
