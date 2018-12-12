<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form method="POST">
      <p> Veuillez saisir le code de sécurité!</p>
<?php
    $_SESSION_START();

/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */

echo "<img src='script-captchas.php' alt='captchas' />";

?>
      <input type="text" name="captcha">
      <input type="submit" name="envoyer">
    </form>
  </body>
</html>
