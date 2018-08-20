<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>
        <?php
            //Vérfication des parametre
            if(!empty($_GET['week'])){
              //Affichage des paramètres
                echo $_GET['week'];
            } else {
                echo 'Il manque un paramètre';
            }
        ?>
    </p>
  </body>
</html>
