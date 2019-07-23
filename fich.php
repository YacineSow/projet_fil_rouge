<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <title>Authentification</title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>  
<form method='post' action=''>
                    <input type='text' name='login' placeholder='Entrer votre login' id='login'><br>
                    <input type='password' name='password' placeholder='Entrer votre mot de passe' id='motdepasse'><br>
                    <input type='submit' value='Connexion' id='connexion' name="connecter"><br><br>
            
                <form>
<?php

$login=$_POST['login'];
$password=$_POST['password'];
$auth=fopen('test.txt', 'r') ;

if(isset($_POST['connecter'])){

while(!feof($auth)){
    $affi = trim(fgets($auth));
    $user = explode(",",$affi);
        if($user[5]=="admin" && $login==$user[1] && $password==$user[2]){
            header("location:listeutilisateur.php");
        }
        elseif($user[5]=="user" && $login==$user[1] && $password==$user[2]){
                header ("location:acceuil1.php");
        }
            }

   fclose($auth);
        } 
?>

<script src="css/bootstrap.min.js"></script>
</body>
</html>      