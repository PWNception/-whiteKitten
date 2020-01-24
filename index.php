<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Super Secret!</title>
    <meta name="author" content="PWNception">
    <style>
    body{
      background-color: #191970;
      background-image: url("./city.jpg") ; /*source: https://pre01.deviantart.net/da1d/th/pre/i/2013/362/b/2/cybercity_knights___cityscape_by_badluckart-d6wv8dn.jpg*/
      background-repeat: no-repeat;
      background-size: cover;
      color: white;
      margin: 0;
      padding: 0;
    }
    form {
      width: 300px;
      margin: 0 auto;
      margin-top: 10%
    }
    </style>
  </head>
  <body>
    <form action="index.php" method="post">
      Login: <input type="text" name="login"></br>
      Passw: <input type="password" name="passw"></br>
      <center><input type="submit" value="Login"></center>
    </form>
    <?php
    if(!empty($_POST['login']) && !empty($_POST['passw'])){
      $login = $_POST['login'];
      $passwd = $_POST['passw'];
      if($login === "secretAdmin" && $passwd === "qsxCDEFgtbzxc312!!!@"){
        //TODO
      }
    }
     ?>
  </body>
</html>
