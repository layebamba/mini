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
          </nav> <br>
          <table class="table table-dark">
               <?php $colore = "rgb(94, 132, 192)"; ?>
               <tr style='background-color:<?php echo $colore; ?>'>
                    <th>Nom</th>
                    <th>login</th>
                    <th>Mot de Passe</th>
                    <th>telephone</th>
                    <th>adresse</th>
                    <th>Role</th>
                    <th>statu</th>
               </tr>

               <?php

               $mylist = fopen('listeuser.txt', 'ab+');

               if (!$mylist)
                    exit("imposible d ouvrir");
               while (!feof($mylist)) {
                    $az = trim(fgets($mylist));
                    $c = explode(' ', $az);
                    //  echo $c[0].' '.$c[1].' '.$c[2].' '.$c[3].' '.$c[4].'</br>';

                    echo "<tr>
                              <td>" . $c[0] . "</td>
                              <td>" . $c[1] . "</td>
                              <td>" . "*****" . "</td>
                              <td>" . $c[3] . "</td>
                              <td>" . $c[4] . "</td>
                              <td>" . $c[5] . "</td>
                              <td>
                              <a href='traitement.php?login=" . $c[1] . " '>"
                         . "<button class='btn btn-danger'>"
                         . $c[6] . "</button>" .
                         "</a>
                                </td>
                          </tr>";
               }
               /*ajouter le statut
                  changer dans le link actif par $c[6]
                  nouvelle page de traitement
                  apprendre comment envoyer une information via URL        

                         

*/
               ?>
          </table>

     </div>

</body>

</html>