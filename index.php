<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <title>Creation de compte</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form method="post">
            Email <br><input name="email" type="email" /> <br>
            Mot de passe <br> <input name="password" type="password"  pattern="(?=.*[a-z])(?=.*[A-Z]).{5,}"/> <br>
            * Au moins 5 caracteres, une majuscule, et une miniscule<br>
            <button type="submit" method="post">S'enregistrer</button> <br>
            
            
        </form>
        <?php
        if(isset($_POST['email'])&&isset($_POST['password']))
        {
            echo "Vous etes inscrit";
        }
        ?>
    </body>
</html>