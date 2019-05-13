

    <?php

    /*
recuperer la valeur login envoyer via le lien
ouvrir le fichier
crere une boucle while
recuperer les lignes
crere le tableau
crere une condition comparais ce qu on a recupere vial le lien et l indice du login du tableau($l[0])


*/
    $login = $_GET['login'];
    $myfile = fopen('listeuser.txt', 'r');
    while (!feof($myfile)) {
        $str = fgets($myfile);
        $l = explode(' ', $str);

        if ($l[1] == $login) {
           if ($l[6]=="actif\n" && $l[1]!=="dmgaye")
            $ligne=$l[0].' '.$l[1].' '.$l[2].' '.$l[3].' '.$l[4].' '.$l[5].' bloquer'."\n";
            else
            $ligne=$l[0].' '.$l[1].' '.$l[2].' '.$l[3].' '.$l[4].' '.$l[5].' actif'."\n";
         } 
         else{
        $ligne=$str;
         }

         $modif=$modif.$ligne;
    }
    fclose($myfile);
    
    $myfile = fopen('listeuser.txt', 'w+');
    fwrite($myfile,trim($modif));
    fclose($myfile);
    header("location:infouser.php");

   /*  $myfile = fopen('listeuser.txt', 'r');
    while (!feof($myfile)) {
        $str = fgets($myfile);
        $l = explode(' ', $str);
        fclose($myfile);
    } */

    ?>
