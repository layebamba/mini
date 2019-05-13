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
    <style>
                   td{
                     width:150px;
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
  <a id="colorelink" class="navbar-brand" href="rechercheadmin.php">Rechercher </a>
  <a id="colorelink" class="navbar-brand" href="index.php">Deconnexion</a>
        </nav>
  <br> <br>
        <form action="" method="post"> 
         <input type="text" name="Designation" placeholder="Designation"> 
        <input type="number" name="Quantite" placeholder="Qantite "> 
       <input type="number" name="prixunitaire" placeholder="  Prix-unitaire  " > 
        <input type="submit" value="validez modifier" name="ok" id="okk">
       
    </form>
   <br> <br>
    <table  class="table table-bordered table-dark" >
        
        <tr>
        <th>Designation</th>
        <th>Quantite</th>
        <th>Prix unitaire</th>
        <th>Montant</th>
        
        </tr> 
        <?php
  //1 : on ouvre le fichier
 // $monfichier = fopen('tableau.txt','r');

  // 2 : on fera ici nos opérations sur le fichier...

  // 3 : quand on a fini de l'utiliser, on ferme le fichier
//  $texte='bonjour tout le monde';
 // fwrite($monfichier,$texte);
/*  if (isset($_POST['ok'])) { */
   
 
 $monfichier=fopen('tableau.txt','ab+');
 if (isset($_POST['ok'])) {
     while (!feof($monfichier)) {
         $str=trim(fgets($monfichier));
         $l=explode(' ', $str);
         $Designation=$l[0];
         $Quantite=$l[1];
         $prixunitaire=$l[2];
         $Montant=$l[3];

         if (strcasecmp($_POST["Designation"],$Designation)==0){
             $qt=$_POST['Quantite']*$_POST['prixunitaire'];
     
             $ligne=$_POST["Designation"].' '.$_POST['Quantite'].' '.$_POST['prixunitaire'].' '.$qt;
         /*  echo $ligne; */
         } else {
             $ligne= $str;
         }
         $az=$az.$ligne."\n";
     }

     fclose($monfichier);


     $monfichier=fopen('tableau.txt', 'w+');
     fwrite($monfichier, trim($az));
     fclose($monfichier);
     /* } */
     $monfichier=fopen('tableau.txt', 'r');
     while (!feof($monfichier)) {
         //echo $str;
         $str=trim(fgets($monfichier));
         $l=explode(' ', $str);
         //echo $l[0].'<br>'.$l[1].'<br>'.$l[2].'<br>'.$l[3].'<br>';
         $Designation=$l[0];
         $Quantite=$l[1];
         $prixunitaire=$l[2];
         $Montant=$l[3];

         //var_dump ($l);
    
         if ($Quantite<=10) {
             $color="rgb(214, 18, 44)";
         } else {
             $color="";
         }
    
         /*  if($_POST['Designation']==$monfichier[$l[0]]){

          } */ ?>
 
    <tr style='background-color: <?php echo $color; ?>'>
      <td> <?php echo $Designation; ?></td>
      <td> <?php echo $Quantite; ?></td>
      <td> <?php echo $prixunitaire; ?></td>
      <td> <?php echo $Montant; ?></td>
    </tr>
 
<?php
     }
 }
  
?>
 </table>

</div>
<?php 
fclose($monfichier);
/* ini_set("displaye_errors",1); */
?>
</body>
</html>