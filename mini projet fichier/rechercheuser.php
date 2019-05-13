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
            <a id="colorelink" class="navbar-brand" href="liste.php"> Liste des Produit</a>
            <a id="colorelink" class="navbar-brand" href="ajouter.php">Ajoutez Produit</a>
            <a id="colorelink" class="navbar-brand" href="modifuser.php">Modifier un Produit</a>
            <a id="colorelink" class="navbar-brand" href="supuser.php">Supprimer un Produit</a>
            <a id="colorelink" class="navbar-brand" href="rechercheuser.php">Rechercher Un Produit</a>
            <a id="colorelink" class="navbar-brand" href="index.php">Deconnexion</a>
        </nav>
<br>
        <form action="rechercheuser.php" method="POST">
            <input type="text" name="quantite" placeholder="quantite">
            <input type="text" name="pmin" placeholder="pmin">
            <input type="text" name="pmax" placeholder="pmax">
            <input type="submit" value="rechercher" name="ok" id="okk">
        </form>
        <br>
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

    </div>
</body>

</html>