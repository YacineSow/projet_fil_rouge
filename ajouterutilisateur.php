<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ajouter Utilisateur</title>
</head>
<body>
<form method='post' action=''>
                    <input type='text' name='nom' placeholder='Entrer votre nom' id='nom'><br>
                    <input type='text' name='login' placeholder='Entrer votre login' id='login'><br>
                    <input type='password' name='password' placeholder='Entrer votre mot de passe' id='motdepasse'><br>
                    <input type='text' name='tel' placeholder='Entrer votre numero de telephone' id='telephone'><br>
                    <input type='text' name='adr' placeholder='Entrer votre adresse' id='adresse'><br>
                    <input type='text' name='pro' placeholder='Entrer votre profil' id='profil'><br>
                    <input type='text' name='stat' placeholder='Entrer votre statut' id='statut'><br>
                    <input type='submit' value='ajouter' id='connexion' name="ajouter"><br><br>
            
                <form>
<?php
$nom=$_POST['nom'];
$login=$_POST['login'];
$password=$_POST['password'];
$telephone=$_POST['tel'];
$adresse=$_POST['adr'];
$profil=$_POST['pro'];
$statut=$_POST['stat'];
$ajout=fopen('test.txt' , 'a+');
$aj=fgets($ajout);
$util=explode(',' , $aj );
fwrite($ajout,$nom. ','. $login. ','. $password.','. $telephone.','. $adresse.','.$profil.','.$statut. "\n" );

?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>