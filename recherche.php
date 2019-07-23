<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Rechercher</title>
</head>
<body>

<form  method="post" action=""> 
                <input id="form" name="nom" placeholder="Entrer le nom de votre produit"/>
                <input id="form" name="primin" placeholder="Entrer le prix min"/>
                <input id="form" name="primax" placeholder="Entrer le prix max"/>
                <input id="form" name="quant" placeholder="Entrer la quantite du produit"/>
                <input type='submit' value='Rechercher' id='Rechercher' name='recherche'><br><br>

             </form> 
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

$rech=fopen('fichier.txt' , 'r');

while(!feof($rech)){
    $rec=fgets($rech);
    $ter=explode(',' , $rec );

    if(!empty($_POST['primin']) && !empty($_POST['primax']) && !empty($_POST['quant']) && empty($_POST['nom'])){
        if($_POST['primin']<=$ter[1] && $_POST['primax']>=$ter[1] && $_POST['quant']==$ter[2]) {
            if($ter[2]<10){
                echo"<tr>
                <td class='bg-danger'>".$ter[0]."</td>
                <td class='bg-danger'>".$ter[1]."</td>
                <td class='bg-danger'>".$ter[2]."</td>
                <td class='bg-danger'>".$ter[1]*$ter[2]."</td>
                </tr>
                ";
                }else{
                echo"<tr>
                <td>".$ter[0]."</td>
                <td>".$ter[1]."</td>
                <td>".$ter[2]."</td>
                <td>".$ter[1]*$ter[2]."</td>
                </tr>
                ";
                } 

        }
    }

  elseif(!empty($_POST['nom']) && empty($_POST['primin']) && empty($_POST['primax']) && empty($_POST['quant'])){
        if($_POST['nom']==$ter[0]) {
            if($ter[2]<10){
                echo"<tr>
                <td class='bg-danger'>".$ter[0]."</td>
                <td class='bg-danger'>".$pter[1]."</td>
                <td class='bg-danger'>".$ter[2]."</td>
                <td class='bg-danger'>".$ter[1]*$ter[2]."</td>
                </tr>
                ";
                }else{
                echo"<tr>
                <td>".$ter[0]."</td>
                <td>".$ter[1]."</td>
                <td>".$ter[2]."</td>
                <td>".$ter[1]*$ter[2]."</td>
                </tr>
                ";
                } 

        }
    }
    elseif(!empty($_POST['primin'])){
        if($_POST['primin']<=$ter[1]) {
            if($ter[2]<10){
                echo"<tr>
                <td class='bg-danger'>".$ter[0]."</td>
                <td class='bg-danger'>".$ter[1]."</td>
                <td class='bg-danger'>".$ter[2]."</td>
                <td class='bg-danger'>".$ter[1]*$ter[2]."</td>
                </tr>
                ";
                }else{
                echo"<tr>
                <td>".$ter[0]."</td>
                <td>".$ter[1]."</td>
                <td>".$ter[2]."</td>
                <td>".$ter[1]*$ter[2]."</td>
                </tr>
                ";
                } 

        }
    }
    elseif(!empty($_POST['primax'])){
        if($_POST['primax']>=$ter[1]) {
            if($ter[2]<10){
                echo"<tr>
                <td class='bg-danger'>".$ter[0]."</td>
                <td class='bg-danger'>".$ter[1]."</td>
                <td class='bg-danger'>".$ter[2]."</td>
                <td class='bg-danger'>".$ter[1]*$ter[2]."</td>
                </tr>
                ";
                }else{
                echo"<tr>
                <td>".$ter[0]."</td>
                <td>".$ter[1]."</td>
                <td>".$ter[2]."</td>
                <td>".$ter[1]*$ter[2]."</td>
                </tr>
                ";
                } 

        }
    } 
    elseif(!empty($_POST['quant'])){
        if($_POST['quant']==$ter[2]) {
            if($ter[2]<10){
                echo"<tr>
                <td class='bg-danger'>".$ter[0]."</td>
                <td class='bg-danger'>".$pter[1]."</td>
                <td class='bg-danger'>".$ter[2]."</td>
                <td class='bg-danger'>".$ter[1]*$ter[2]."</td>
                </tr>
                ";
                }else{
                echo"<tr>
                <td>".$ter[0]."</td>
                <td>".$ter[1]."</td>
                <td>".$ter[2]."</td>
                <td>".$ter[1]*$ter[2]."</td>
                </tr>
                ";
                } 

        }
    }
    elseif(!empty($_POST['primin']) && !empty($_POST['primax'])){
        if($_POST['primin']<=$ter[1] && $_POST['primax']>=$ter[1]) {
            if($ter[2]<10){
                echo"<tr>
                <td class='bg-danger'>".$ter[0]."</td>
                <td class='bg-danger'>".$pter[1]."</td>
                <td class='bg-danger'>".$ter[2]."</td>
                <td class='bg-danger'>".$ter[1]*$ter[2]."</td>
                </tr>
                ";
                }else{
                echo"<tr>
                <td>".$ter[0]."</td>
                <td>".$ter[1]."</td>
                <td>".$ter[2]."</td>
                <td>".$ter[1]*$ter[2]."</td>
                </tr>
                ";
                } 

        }
    }
}
 fclose($rech);

?>
</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<!--<td class='bg-danger'>".$ter[1]*$ter[2]."</td>
<!--<td>".$ter[1]*$ter[2]."</td>