<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
        
        include('class/EmailController.php');
        include('class/PasswordController.php');
        
        $email = new Email;
        $pdw = new Password;
        
        //pattern="(?=.*[a-z])(?=.*[A-Z]).{5,}" mdp
        //$mdpregex = "#(?=.*[a-z])(?=.*[A-Z]).{5,}#";
       // $emailregex = "#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#";
        if(isset($_POST['email'])||isset($_POST['password']))
        {
            if($email->ensureIsValidEmail($_POST['email'])||$pdw->ensureIsValidPassword($_POST['password']))//&&preg_match(,$_POST['password']))
            {
                echo "Vous etes inscrit";
            }
            else
            {
                echo "Erreur dans l'email ou le mot de passe";
            }
        }
 
        
        
    ?>
    <head>
        
      <title>Creation de compte</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
     <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
      <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    </head>
    <body>
        <form method="post">
            Email <br><input name="email" type="email" /> <br>
            Mot de passe <br> <input name="password" type="password"  /> <br>
            * Au moins 5 caracteres, une majuscule, et une miniscule<br>
            <button>S'enregistrer</button> <br>
            
            
        </form>
    </body>
</html>
