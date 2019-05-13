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

<body class="body4">
   <div class="container"> <br> <br>
      <nav id="colorenav" class="navbar navbar-light bg-light">
         <a id="colorelink" class="navbar-brand" href="ajouuser.php">Ajoutez user</a>
         <a id="colorelink" class="navbar-brand" href="infouser.php">Info user</a>
         <a id="colorelink" class="navbar-brand" href="listeadmin.php"> Liste des Produit</a>
         <a id="colorelink" class="navbar-brand" href="ajouteradmin.php">Ajoutez Produit</a>
         <a id="colorelink" class="navbar-brand" href="modifieradmin.php">Modifier </a>
         <a id="colorelink" class="navbar-brand" href="suppadmin.php">Supprimer </a>
         <a id="colorelink" class="navbar-brand" href="rechercheadmin.php">Rechercher </a>
         <a id="colorelink" class="navbar-brand" href="index.php">Deconnexion</a>
      </nav>
      <h1 class="h1admin">ajouter user</h1>
      <form action="" method="POST">
         <input type="text" name="nomuser" placeholder="nom"> <br> <br>
         <input type="text" name="loginuser" placeholder="login"> <br> <br>
         <input type="password" name="pasworduser" placeholder="pasword"> <br> <br>
         <input type="tel" name="teluser" placeholder="telephone"> <br> <br>
         <input type="text" name="adresse" placeholder="adresse"> <br> <br>
         <input type="submit" name="crer" value="creer un user"name="ok" id="okk"> <br> <br>
      </form>
      <?php
      $mylist = fopen('listeuser.txt', 'ab+');

      if (!$mylist)
         exit("imposible d ouvrir");
      while (!feof($mylist)) {
         $az = trim(fgets($mylist));
         $c = explode(' ', $az);
         // echo $c[0].' '.$c[1].' '.$c[2].' '.$c[3].' '.$c[4].'</br>';
      }
      if (isset($_POST['crer'])) {

         // if (!empty($_POST['nomuser'])) 
         //{
         $c[0] = htmlspecialchars($_POST['nomuser']);

         // }
         //   else if (!empty($_POST['loginuser'])) 
         // {
         $c[1] = htmlspecialchars($_POST['loginuser']);
         // }
         //  elseif (!empty($_POST['pasworduser']))
         // {
         $c[2] = htmlspecialchars($_POST['pasworduser']);
         //  }
         //  elseif (!empty($_POST['teluser']))
         // {
         $c[3] = htmlspecialchars($_POST['teluser']);
         // }
         //  elseif (!empty($_POST['adresse']))
         // {
         $c[4] = htmlspecialchars($_POST['adresse']);
         // }
         //  } 
         // if (isset($c[0],$c[1],$c[2],$c[3],$c[4])) {
         $c[5] = "user";
         $c[6] = "actif";
         $ligne = $c[0] . ' ' . $c[1] . ' ' . $c[2] . ' ' . $c[3] . ' ' . $c[4] . ' ' . $c[5] . ' ' . $c[6];
         //  echo $ligne;
         fwrite($mylist, trim($ligne . "\n"));



         if (!fclose($mylist))
        
            exit("impossible de fermer");
      }


      ?>
   </div>
</body>

</html>