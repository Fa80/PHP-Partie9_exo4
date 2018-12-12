<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Partie9_exo4</title>
</head>
<body>
  <h1>Exo4:</h1>
  <p>Afficher le timestamp du jour.</p>
  <p>Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
  <div class="container" id="date">
    <?php
    $timestamp = mktime();
    /*Le timestamp représente le nombre de secondes écoulées depuis le 1er janvier 1970 à minuit GMT.
    La fonction  mktime() permet de retourner une date et une heure au format timestamp de unix.
    Si aucun paramètre n'est passé dans cette fonction, mktime retournera la date/heure du jour en cours.*/?>
    <p><?php echo $timestamp; ?></p>
  </div>

  <div class="container" id="time">
    <p><?php
    $time = mktime(15,00,8,2,2016);// Je passe la date du 2 aout 2016 en parametre.
    echo $time;//J'affiche la date passé en paramétre.

  //  echo strtotime("02 august 2016 15:00"), "\n" 2ème méthode avec strtotime

    ?></p>




  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
