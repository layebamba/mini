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

<body class="body2">
  <div class="container">
    <div class="centre3">

      <form action="" method="post">
        <div class="legende">
          <legend> Connexion</legend>
        </div>


        <div class="form1">
          <input type="text" name="loginadmin" placeholder="login" id="ko"> <br> <br>
          <input type="password" name="passadmin" placeholder="password" id="ko"> <br> <br>
          <input type="submit" name="ok" value="se connecter" id="ok"> <br> <br>
        </div>
    </div>
    </form>
    <div class="spinner-grow" role="status">
      <span class="sr-only">Loading...</span>
      <img src="galsn.png" alt="">
    </div>
    <table class="table table-dark">

      <?php
      $mylog = fopen('listeuser.txt', 'ab+');
      if (isset($_POST['ok'])) {
        while (!feof($mylog)) {
          $log = trim(fgets($mylog));
          $a = explode(' ', $log);

          $login = $a[1];
          $pass = $a[2];

          if ($a[5] == "admin" && $_POST['loginadmin'] == $login && $_POST['passadmin'] == $pass && $a[6] != "bloquer") {
            header("Location:acceadmin.php");
          } elseif ($a[5] == "user" && $_POST['loginadmin'] == $login && $_POST['passadmin'] == $pass && $a[6] != "bloquer") {
            echo header("Location:acueiluser.php");
          }
          ?>

          <?php
          fclose('loginadmin.txt');
        }
      } ?>
    </table>
  </div>
</body>

</html>