
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="page.css">
    <title>Document</title>
</head>

<body class="body1">
<div class="container">
<img src="galsn.png" alt="" id="galsn">
<img src="log.png" alt="" id="logoo">
<form class="form1" method="post">


<div class="spinner-grow text-primary" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-secondary" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-success" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-danger" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
  <span class="sr-only">Loading...</span>
</div>   
 <br> <br> <input type="text" name="login" id="log" placeholder="login"> <br> <br>
 <input type="password" name="password" id="log" placeholder="Password "> <br> <br>
    
<input class="login" type="submit" value="connectez vous" class="cone" >

</form>
   
 
<?php

$tete=[ "nom","login","password"];
$user1=["mohamet","mohamet1",123];
$user2=["bamba","bamba1",456];
$user3=["saliou","saliou1",789];
    


 
    if ($_POST['login']==$user1[1] && $_POST['password']==$user1[2] ||
$_POST['login']==$user2[1] && $_POST['password']==$user2[2] ||
 $_POST['login']==$user3[1] && $_POST['password']==$user3[2])
  
   {
   echo header("Location:accueil.php");
    
  } 
  else if ($_POST['login']!=$user1[1] && $_POST['password']!=$user1[2] ||
  $_POST['login']!=$user2[1] && $_POST['password']!=$user2[2] ||
   $_POST['login']!=$user3[1] && $_POST['password']!=$user3[2])
    
     {
     echo '<h5>'.EURREUR.'</h5>';           
      
    } 
  

  
?>

<!-- <table border ="1">
<thead> <tr>
           <th> <?php echo $tete[0] ; ?> </th>
           <th><?php echo $tete[1] ; ?></th>
           <th><?php echo $tete[2] ; ?></th>
        </tr> 
</thead>
<tr>
<td> <?php echo $user1[0] ; ?>  </td>
<td> <?php echo $user1[1] ; ?>  </td>
<td> <?php echo $user1[2] ; ?>  </td>
</tr>
<tr>
<td> <?php echo $user2[0] ; ?>  </td>
<td> <?php echo $user2[1] ; ?>  </td>
<td> <?php echo $user2[2] ; ?>  </td>
</tr>
<tr>
<td> <?php echo $user3[0] ; ?>  </td>
<td> <?php echo $user3[1] ; ?>  </td>
<td> <?php echo $user3[2] ; ?>  </td>
</tr>
</table> -->
  

</body>
</html>


