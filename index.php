<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>
  <?php
  $gender = 'homme'; // variable de type string
  $age = 32; // variable de type interger
  function info($gender, $age){
    if ($gender == "homme" && $age < 18){
      echo 'Vous etes un homme êtes vous etes mineur';
    }// sinon si votre age est superieur ou egal a 18 alors vous etes majeur
    else{
      echo 'Vous êtes un homme et vous etes majeur';
    }
  }
  echo info($gender, $age)//  affichage de mes paramètres
  ?>
</body>
</html>
