<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
</head>
<body>
  <pre>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <label for="usermane">Nom d'utilisateur</label>
      <input type="text" name="usermane" id="usermane">
      <label for="password">Mot de passe</label>
      <input type="password" name="password" id="password"><br>
      <input type="submit" value="Se connecter">
    </form>
  </pre>
</body>
</html>

<?php
  if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if(isset($_POST['username']) && isset($_POST['password'])) {
      $username  = $_POST['username'];
      $password  = $_POST['password'];
    if ($username === 'admin' AND $password === 'admin') {
      //Initialisation de notre session en tant qu'administrateur
      $_SESSION['admin'] = true;
      $_SESSION['username'] = $username;
      //Creation du cookie admin
      setcookie('user', 'admin', time() + 3600, '/');
      //redirection
      // header("location:home.php");
      echo "Bienvenue à toi, $username";
    } 
    
    if ($username === 'user' AND $password === 'user') {
      //Initialisation de notre session en tant qu'administrateur
      $_SESSION['admin'] = false;
      $_SESSION['username'] = $username;
      //Creation du cookie admin
      setcookie('user', 'user', time() + 3600, '/');
      //redirection
      // header("location:home.php");
      echo "Bienvenue toi, $username";
    }
  }}
?>


