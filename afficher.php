<body>
  <?php

  /*

  $erreur = false; {
    $exp_Nom = "#^[A-Z]$#";
    if (!preg_match($exp_Nom, $_POST['Nom'])) {
      echo "corriger votre nom <br>";
      $erreur = true;
    }
  }
  $erreur = false; {
    $exp_Prenom = "#^[A-Z][A-Za-z]{2}$#";
    if (!preg_match($exp_Nom, $_POST['Prenom'])) {
      echo "corriger votre prenom <br>";
      $erreur = true;
  }}*/

 
    echo "Bienvenue ";
    if ($_POST['genre'] == 'masculin') echo 'MR ';
    elseif ($_POST['sitiation'] == 'c') echo 'Mell ';
    else echo 'mme';
  
  echo $_POST['Nom']," ",$_POST['Prenom'], "<br>";

  echo "I'am a  <br>";
  echo $_POST['genre'], "<br>";

  echo $_POST['sitiation'], "<br>";


  foreach ($_POST['lange'] as $val) {
    echo '- ' . $val . '<br>';
  }

  echo "pays: ";
  switch ($_POST['pays']) {
    case 1:
      echo "alger";
      break;
    case 1:
      echo "alger";
      break;
    case 1:
      echo "alger";
      break;
  }



  ?>
</body>