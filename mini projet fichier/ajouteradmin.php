<!doctype html>
<html lang="en">
  <head>
    <title>ajouterproduit</title>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  
    
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
        </nav> <br>

 <!--    <h1>ajouterProduit</h1> -->
    <form action="" method="post"> 
         <input type="text" name="Designation" placeholder="Designation"> 
        <input type="number" name="Quantite" placeholder="Qantite "> 
       <input type="number" name="prixunitaire" placeholder="  Prix-unitaire  " > 
        <input type="submit" value="validez pour ajoutez" name="ok" id="okk">
       <!--  <button class="b1">
            <a class="cl" href="accueil.php" target="_blank" rel="noopener noreferrer"> Go out</a> 
        </button> -->
    </form>
   <br> 
    <table class="table table-bordered table-dark" >
        
        <tr>
        <th>Designation</th>
        <th>Quantite</th>
        <th>Prix unitaire</th>
        <th>Montant</th>
        </tr>  
        <?php
      // 1 : on ouvre le fichier
    /*   $monfichier = fopen('tableau.txt', 'r'); */

      // 2 : on fera ici nos opérations sur le fichier...
      // 3 : quand on a fini de l'utiliser, on ferme le fichier
     /*  $texte = 'bonjour tout le monde';
      fwrite($monfichier, $texte); */

      $monfichier = fopen('tableau.txt', 'a+');
      if (isset($_POST['ok'])) {
      while ($str = fgets($monfichier)) {
        //echo $str;
        $l = explode(' ', $str);
        //echo $l[0].'<br>'.$l[1].'<br>'.$l[2].'<br>'.$l[3].'<br>';
        $Designation = $l[0];
        $Quantite = $l[1];
        $prixunitaire = $l[2];
        $Montant = $l[3];
        //var_dump ($l);

        if ($Quantite <= 10) {
          $color = "rgb(214, 18, 44)";
        } else {
          $color = "";
        }

        ?>

        <tr style='background-color: <?php echo $color; ?>'>
          <td> <?php echo $Designation; ?></td>
          <td> <?php echo $Quantite; ?></td>
          <td> <?php echo $prixunitaire; ?></td>
          <td> <?php echo $Montant; ?></td>
        </tr>

      <?php
    }
    ?>
      <?php

     
        if (!empty($_POST["Designation"])) {
          $l1 = htmlspecialchars($_POST["Designation"]);
        } else {
          # code...
        }
        if (!empty($l[1] = $_POST['Quantite'])) {
          $l2 = htmlspecialchars($_POST['Quantite']);
        } else {
          # code...
        }
        if (!empty($l[2] = $_POST['prixunitaire'])) {
          $l3 = htmlspecialchars($_POST['prixunitaire']);
        } else {
          # code...
        }
      }
      if (isset($l1, $l2, $l3)) {
        $mtn = $l2 * $l3;
        $valeur = $l1 . " " . $l2 . " " . $l3 . " " . $mtn;
        fwrite($monfichier, $valeur . "\n");
        echo "enregistré";
      }
      ?>
      <!-- <tr>
        <td>  <?php echo $l[0]; ?> </td>
        <td>  <?php echo $l[1]; ?> </td>
        <td>  <?php echo $l[2]; ?> </td>
        <td>  <?php echo $l[3]; ?> </td>
  
  
    </tr> -->



    </table>

    <?php
    fclose($monfichier);
    ?>

  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

















































