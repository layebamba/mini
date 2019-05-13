<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Liste </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <style>
    td {
      width: 150px;
    }
  </style>
</head>

<body class="userac">
  <div class="container"> 
    <br> <br>
    <nav id="colorenav" class="navbar navbar-light bg-light">
      <a id="colorelink" class="navbar-brand" href="ajouuser.php">Ajoutez user</a>
      <a id="colorelink" class="navbar-brand" href="infouser.php">Info user</a>
      <a id="colorelink" class="navbar-brand" href="listeadmin.php"> Liste des Produit</a>
      <a id="colorelink" class="navbar-brand" href="ajouteradmin.php">Ajoutez Produit</a>
      <a id="colorelink" class="navbar-brand" href="modifieradmin.php">Modifier </a>
      <a id="colorelink" class="navbar-brand" href="suppadmin.php">Supprimer </a>
      <a id="colorelink" class="navbar-brand" href="rechercheadmin.php">Rechercher</a>
      <a id="colorelink" class="navbar-brand" href="index.php">Deconnexion</a>
    </nav> <br> <br>
    <table class="table table-dark">
      <tr>
        <th> Nom </th>
        <th>Quantite</th>
        <th>Prix</th>
        <th>Montant</th>
      </tr>

      <?php
      $myFile = fopen('tableau.txt', 'ab+');
      if (!$myFile)
        exit("on a pas pu ouvir le fichier");
      while ($str = fgets($myFile)) {
        $l = explode(' ', $str);
        $nom = $l[0];
        $quant = $l[1];
        $prix = $l[2];
        $montant = $l[3];

        if ($quant <= 10) {
          $colore = "rgb(214, 18, 44)";
        } else {
          $colore = " ";
        }
        ?>
        <tr style='background-color:<?php echo $colore; ?>'>
          <td> <?php echo $nom; ?></td>
          <td> <?php echo $quant; ?></td>
          <td> <?php echo $prix; ?></td>
          <td> <?php echo $montant; ?></td>
        </tr>
      <?php } ?>
    </table>
  </div>

</body>

</html>