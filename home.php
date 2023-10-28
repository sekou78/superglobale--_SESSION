<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceuil</title>
</head>
<body>
  <header>
  <h2>Bienvenue sur la page d'ACCUEIL</h2>

  <?php if (isset($_SESSION['admin']) AND $_SESSION['admin'] == true) { ?>
    <nav>
      <ul>
        <a href="#"><li>Gestion des utlisateurs</li></a>
        <a href="#"><li>Gestion des produits</li></a>
        <a href="#"><li>Deconnexion</li></a>
        <p>Vous êtes connecté en tant qu'admin</p>
      </ul>
    </nav>
    <?php
  } else { ?>
    <nav>
      <ul>
        <a href="#"><li>Accueil</li></a>
        <a href="#"><li>Produits</li></a>
        <a href="#"><li>Deconnexion</li></a>
        <p>Vous êtes connecté en tant qu'utilisateur</p>
      </ul>
    </nav>
    <?php
  }
    ?>
  </header>
</body>
</html>