<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Suprimer</title>
</head>
<body>
<form method='post' action=''>
                    <input type='text' name='produit' placeholder='Entrer votre produit' id='nom'><br>
                    <input type='submit' value='supprimer' id='connexion' name="supprimer">
                    <form>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">produits</th>
      <th scope="col">prix</th>
      <th scope="col">quantites</th>
      <th scope="col">montant</th>
    </tr>
  </thead>
  <tbody>
<?php
$newline="";
if(isset($_POST['supprimer'])){
    if(!empty ($_POST['produit'])){
        $fich=fopen('fichier.txt' , 'r');
        $supp=$_POST['produit'];
    while(!feof($fich)){
        $fic=fgets($fich);
        $ingre=explode(',' , $fic);
        if($supp==$ingre[0]){
            $suppri="";
        }
        else{
            $suppri=$fic;
        }
        $newline=$newline.$suppri;
    }
    fclose($fich);
    
    $fich=fopen('fichier.txt','w+');
    fwrite($fich,$newline);
    fclose($fich);
    }
}


    $fich=fopen('fichier.txt', 'r');
   while(!feof($fich)){
        $fic=fgets($fich);
        $ingre=explode(',' , $fic);
        if($ingre[2]<10){
            echo"<tr>
            <td class='bg-danger'>".$ingre[0]."</td>
            <td class='bg-danger'>".$ingre[1]."</td>
            <td class='bg-danger'>".$ingre[2]."</td>
            <td class='bg-danger'>".$ingre[1]*$ingre[2]."</td>
            </tr>";}
            else {
            echo"<tr>
            <td>".$ingre[0]."</td>
            <td>".$ingre[1]."</td>
            <td>".$ingre[2]."</td>
            <td>".$ingre[1]*$ingre[2]."</td>
            </tr>
            ";
            
            }
            
    } 
          
    fclose($fich);
    
?>
 </table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>