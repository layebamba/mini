<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
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
      <a id="colorelink" class="navbar-brand" href="rechercheadmin.php">Rechercher </a>
      <a id="colorelink" class="navbar-brand" href="index.php">Deconnexion</a>
    </nav> <!-- <h1>recherche</h1> -->


    </nav> <br>
    <form action="ajouteradmin.php" method="post">
      <input type="number" name="qt" placeholder="Quantite">
      <input type="number" name="min" placeholder="prix min">
      <input type="number" name="max" placeholder="  Prix max  ">
      <input type="submit" value="Recherchez" id="okk">

    </form>
    <br> <br>
    <table class="table table-bordered table-dark">

      <tr>
        <th>Designation</th>
        <th>Quantite</th>
        <th>Prix unitaire</th>
        <th>Montant</th>

      </tr>
      <?php
      $quantite = $_POST['quantite'];
      $pmin = $_POST['pmin'];
      $pmax = $_POST['pmax'];
      if (isset($_POST['ok'])) {
        echo "<table class='table table-bordered table-dark'>";
        echo "<tr>
    <th>Designation</th>
    <th>quantite</th>
    <th>prix unitaire</th>
    <th>montant</th>
    </tr>";
        $tab = fopen('tableau.txt', 'ab+');
        while (!feof($tab)) {
          $line = fgets($tab);
          $col = explode(' ', $line);
          if ($quantite >= $col[1] && $quantite != '' && $pmin == '' && $pmax == '' && $quantite > 0) {
            $mtn = $col[2] * $col[1];
            if ($col[1] < 10) {

              echo "<tr class='p-3 mb-2 bg-danger text-white'>
            <td>$col[0]</td>
            <td>$col[1]</td>
            <td>$col[2]</td>
            <td>$mtn</td>
             </tr>";
            } else
              echo "<tr>
            <td>$col[0]</td>
            <td>$col[1]</td>
            <td>$col[2]</td>
            <td>$mtn</td> 
             </tr>";
          } elseif ($pmin <= $col[2] && $pmin != '' && $pmax == '' && $quantite == '' && $pmin > 0) {
            $mtn = $col[2] * $col[1];
            if ($col[1] < 10) {

              echo "<tr class='p-3 mb-2 bg-danger text-white'> 
                         
                <td>$col[0]</td>
                <td>$col[1]</td>
                <td>$col[2]</td>
                <td>$mtn</td>  </tr>";
            } else {
              echo "<tr>
                <td>$col[0]</td>
                <td>$col[1]</td>
                <td>$col[2]</td>
                <td>$mtn</td> 
                 </tr>";
            }
          } elseif ($pmax >= $col[2] && $pmax != '' && $pmin == '' && $quantite == '' && $pmax > 0) {
            $mtn = $col[2] * $col[1];
            if ($col[1] < 10) {

              echo "<tr class='p-3 mb-2 bg-danger text-white'> 
                <td>$col[0]</td>
                <td>$col[1]</td>
                <td>$col[2]</td>
                <td>$mtn</td>  </tr>";
            } else {
              echo "<tr>
                <td>$col[0]</td>
                <td>$col[1]</td>
                <td>$col[2]</td>
                <td>$mtn</td> 
                 </tr>";
            }
          } elseif ($pmin <= $col[2] && $pmax > $col[2] && $pmax > $pmin && $pmin != '' && $pmax != '' && $quantite == '') {
            $mtn = $col[2] * $col[1];
            if ($col[1] < 10) {

              echo "<tr class='p-3 mb-2 bg-danger text-white'> 
                <td>$col[0]</td>
                <td>$col[1]</td>
                <td>$col[2]</td>
                <td>$mtn</td> 
                </tr>";
            } else {
              echo "<tr>
                <td>$col[0]</td>
                <td>$col[1]</td>
                <td>$col[2]</td>
                <td>$mtn</td> 
                 </tr>";
            }
          } elseif ($quantite <= $col[1] && $pmin <= $col[2] && $pmax >= $col[2] && $pmax > $pmin && $pmin != '' && $pmax != '' && $quantite != '') {
            $mtn = $col[2] * $col[1];
            if ($col[1] < 10 && $color = red) {

              echo "<tr $color>
                    <td>$col[0]</td>
                    <td>$col[1]</td>
                    <td>$col[2]</td>
                    <td>$mtn</td> 
                    </tr>";
            } else {
              echo "<tr>
                    <td>$col[0]</td>
                    <td>$col[1]</td>
                    <td>$col[2]</td>
                    <td>$mtn</td> 
                     </tr>";
            }
          }
        }
        echo " </table>";
        fclose($tab);
      }

      ?>
    </table>
  </div>
</body>

</html>