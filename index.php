<?php
// création d'un tableau associatif departments avec comme index le numéro des départements des Hauts de France et en valeur leu nom
$departments = array('Aisne','Somme','Oise');
// ajout du nom du département au tableau
$departments[] = 'Aisne';
$departments[] = 'Somme';
$departments[] = 'Oise';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <title>Partie 3 exo 4</title>
  <?php { echo $departments[0]; }?>
  <?php { echo $departments[1]; }?>
  <?php { echo $departments[2]; }?>
</head>
<body>
</body>
</html>
