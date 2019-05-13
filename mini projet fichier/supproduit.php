<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    

    <style>
        table{
          border: none;
        }
        table tr{float: left;}
        table td{
          width:277px;
          padding: 12px 8px;
          float:left;
        }
        th{width:277px;}
    </style>
  </head>
  <body class="userac">
  <div class="container"> <br> <br> <br>
  <nav id="colorenav" class="navbar navbar-light bg-light">
  <a id="colorelink" class="navbar-brand" href="liste.php"> Liste des Produit</a>
  <a id="colorelink" class="navbar-brand" href="ajouter.php">Ajoutez Produit</a>
  <a id="colorelink" class="navbar-brand" href="infouser.php">Modifier un Produit</a>
  <a id="colorelink" class="navbar-brand" href="supproduit.php">Supprimer un Produit</a>
  <a id="colorelink" class="navbar-brand" href="infouser.php">Rechercher Un Produit</a>
  <a id="colorelink" class="navbar-brand" href="index.php">Deconnexion</a>
  </nav>


  <h1>supprimer</h1>
    <form action="" method="POST"> 
        Designation <input type="text" name="Designation" id=""> 
        
        <input type="submit" value="validez" name="ok" id="okk">
        <button class="b1">
            <a class="cl" href="accueil.php" target="_blank" rel="noopener noreferrer"> Go out</a>
        </button>
    </form>
  <table   class="table table-bordered table-dark" >
        
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
 $monfichier=fopen('tableau.txt','r');
 while(!feof($monfichier)){
    $str=fgets($monfichier);
    $l=explode(' ',$str);
    $Designation=$l[0];
    $Quantite=$l[1];
    $prixunitaire=$l[2];
    $Montant=$l[3];

    if($Designation==$_POST["Designation"]){
        $ligne="";
    }
    else{
        $ligne= $str;
    }
    $az=$az.$ligne;
 }
 fclose($monfichier);

$monfichier=fopen('tableau.txt','w+');
fwrite($monfichier,$az);
fclose($monfichier); 

  $monfichier=fopen('tableau.txt','r');
  while(!feof($monfichier)){
    //echo $str;
    $str=fgets($monfichier);
    $l=explode(' ',$str);
    //echo $l[0].'<br>'.$l[1].'<br>'.$l[2].'<br>'.$l[3].'<br>';
      $Designation=$l[0];
      $Quantite=$l[1];
      $prixunitaire=$l[2];
      $Montant=$l[3];

    //var_dump ($l);
    
    if($Quantite<=10){$color="rgb(214, 18, 44)";}
    else{
        $color="";
        }
    if(isset($_POST['ok'])){
    if($_POST['Designation']==$monfichier[$l[0]]){
        unset($l[0]);
    }
}
?>
 
    <tr style='background-color: <?php echo $color;?>'>
      <td> <?php echo $Designation;?></td>
      <td> <?php echo $Quantite;?></td>
      <td> <?php echo $prixunitaire;?></td>
      <td> <?php echo $Montant;?></td>
    </tr>
 
<?php
  }
  fclose($monfichier);
?>
 </table>
  
 </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>