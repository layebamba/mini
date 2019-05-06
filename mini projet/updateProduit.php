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
<link rel="stylesheet" href="page.css">  
<title>updateProduit</title>
</head>
<body class="body2">
<div class="ac"> 
<a href="https://fr.wikipedia.org/wiki/S%C3%A9n%C3%A9gal" target="_blank" rel="noopener noreferrer"> <img src="sn.png" alt="" id="sn">     </a>
        <a href="https://www.orange.sn/" target="_blank" rel="noopener noreferrer"> <img src="orange.png" alt="" id="or"></a>
        <a href="https://simplonline.co/accueil" target="_blank" rel="noopener noreferrer"> <img src="simp.png" alt="" id="simp"></a>
        <a href="http://apprenantacademy.com/#formation" target="_blank" rel="noopener noreferrer"> <img src="sa.jpeg" alt="" id="sa"></a>
    </div>
<div class="container">

        <button class="b1"><a class="cl" href="listerProduits.php" target="_blank" rel="noopener noreferrer">Lister les Produits</a>  </button>
                 <button class="b1">    <a class="cl" href="rechercherProduits.php" target="_blank" rel="noopener noreferrer"> Rechercher un Produits</a>  </button> 
                 <button class="b1">                    <a class="cl" href="ajouterProduit.php" target="_blank" rel="noopener noreferrer"> Ajouter Produit</a></button> 
                 <button class="b1">                    <a class="cl" href="updateProduit.php" target="_blank" rel="noopener noreferrer">Modifier un Produit</a></button> 
                 <button class="b1">                    <a class="cl" href="supprimerProduit.php" target="_blank" rel="noopener noreferrer"> Supprimer un Produit</a></button> 

  
<h1>Modifier un Produit</h1>

<form action="" method="post"> 
     <input type="text" name="produits" id="" placeholder="Nom du Produit"> 
    <input type="number" name="quantite" id="" placeholder="Qantite"> 
     <input type="number" name="prix_unitaire" id="" placeholder="Prix"> 
    
    
    <input type="submit" class="login" value="validez pour modifier">
    </form>
    <?php 
     
     $produits=array( 
      array("Banane",3,300,15*300), 
     array("Pomme" ,20,700,20*700),
     array("Poire",25,1500,25*1500),
     array("Cerise",7,1300,20*1300),
     array("Fraise",30,1400,30*1400),
     array("Framboise",35,800,35*800),
     array("Aubergine",27,1500,27*1500),
     array("Ananas",40,1250,40*1250),
     array("Avocat",8,2000,28*2000),
     array("Cacao",36,1000,36*1000),
  );

    ?>
    

    <?php 
$lignes=10;
$colonne=4;
$nom=$_POST['produits'];
$quantite=$_POST['quantite'];
$prix_unitaire=$_POST['prix_unitaire'];
$montant=$prix_unitaire*$quantite;
for($indice=0;$indice<=$lignes;$indice++){

    if( strcasecmp($produits[$indice][0],$nom)==0){
        $produits[$indice][1]=$quantite;
        $produits[$indice][2]=$prix_unitaire;
        $produits[$indice][3]=$montant;
    }
}

echo '<table class="table table-striped">
<thead >
  <tr>
    <th scope="col">nom</th>
    <th scope="col">Quantite  </th>
    <th scope="col">prix unitaire</th>
    <th scope="col">montant    </th>
  </tr>
</thead>
<tbody>';


for($i=0;$i<$lignes;$i++){
    echo '<tr>';
    if($produits[$i][1]<10){
        for($j=0;$j<$colonne;$j++){
            echo   '<th class="p-3 mb-2 bg-danger text-white">'.$produits[$i][$j].'</th>';
        }
    }
    else{
        for($j=0;$j<$colonne;$j++){
            echo '<th scope="row ">'  .$produits[$i][$j].  '</th>';

        }
    }
    echo '</tr>';
}





echo '</tbody></table>';
?>

<button class="b1">  <a class="cl" href="accueil.php" target="_blank" rel="noopener noreferrer"> Retour a l'accueil</a></button> 
</div>
</body>
</html>