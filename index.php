<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<script src="outils.js"></script>
  </head>
  <body>
	<div class="page">
	<h1>Bonjour et bienvenue</h1>
	<p>Afin de valider que vous n'êtes pas un robot,
    <form method="POST">
      <p> Veuillez saisir le code de sécurité !</p>
	  <div class="inform">
	  <div id="captcha1">
	  
<?php
    SESSION_START();

/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */

echo "<img src='script-captchas.php' alt='captchas' />";

?>
	</div>
    </div>
      <p>
	  <input type="text" name="captcha2" id="captcha2" required onkeyup="verif('captcha2', 'captcha1')">
	  
	  <?php
	  
	  if(isset($_SESSION['$code']))
	  {
		if($code!=value.input)
		{echo"Code de sécurité non valide";}
		else
		{echo"Code validé avec succès";}
	  }
	  ?>
      <input type="submit" name="envoyer" class="envoi">
    </form>
	
	</div>
  </body>
</html>
