<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Modifier</title>
    </head>
    <title>Update</title>
    <body >
        <strong><h3 align="center">Modifier Produit</h3></strong>
        <form  method="post" action="updatenew.php"> 
				
                    <input id="form" name="prod" placeholder="Entrer le nom du produit"/>
                    <input id="form" name="pri" placeholder="Entrer le prix du produit"/>
                    <input id="form" name="quant" placeholder="Entrer la quantite du produit"/>
                    <input type='submit' value='Modifier' id='Modifier' name='modi'><br><br>

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
  

  if(isset($_POST['modi'])){
    if(!empty($_POST['prod']) && !empty($_POST['pri']) && !empty($_POST['quant'])){
      $produit=$_POST['prod'];
      $prix=$_POST['pri'];
      $quantite=$_POST['quant'];
      

      $modif=fopen('fichier.txt' , 'r');
      while(!feof($modif)){
        $mod=fgets($modif);
        $prod=explode(',' , $mod); 
        
        if($produit==$prod[0]){
          $produit=$prod[0];
          $prod[1]=$prix;
          $prod[2]=$quantite;
          $nline=$prod[0].",".$prod[1].",".$prod[2].",".$prod[3];
        }
        else{
          $nline=$mod;
        }


        $nmod=$nmod.$nline;
      }
      fclose($modif);

      $modif=fopen('fichier.txt' , 'w+');
      fwrite($modif, $nmod);
      fclose($modif);
    }
  }

  $modif=fopen('fichier.txt' , 'a+');
  while(!feof($modif)){
  $mod=fgets($modif);
  $prod=explode(',' , $mod );

  if($prod[2]<10){
  echo"<tr>
  <td class='bg-danger'>".$prod[0]."</td>
  <td class='bg-danger'>".$prod[1]."</td>
  <td class='bg-danger'>".$prod[2]."</td>
  <td class='bg-danger'>".$prod[1]*$prod[2]."</td>
  </tr>
  ";
  }else{
  echo"<tr>
  <td>".$prod[0]."</td>
  <td>".$prod[1]."</td>
  <td>".$prod[2]."</td>
  <td>".$prod[1]*$prod[2]."</td>
  </tr>";
  
  }
  
  } 
fclose($modif);
?>




</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>