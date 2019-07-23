<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Liste Des Produits</title>
</head>
<body>

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
$list=fopen('fichier.txt' , 'r');
while(!feof($list)){
$affiche=fgets($list);
$prod=explode(',' , $affiche );
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
  </tr>
  ";
  
  }
  
  } 

fclose($list);
?>




</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>