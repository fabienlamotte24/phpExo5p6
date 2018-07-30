<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>
<?php
/*Vérfication des parametre*/
if(isset($_GET['week'])){
  /*Affichage des paramètres*/
    echo $_GET['week'];
}
?>
    </p>
  </body>
</html>
