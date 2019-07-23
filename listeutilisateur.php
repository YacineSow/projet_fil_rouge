<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Liste Utilisateurs</title>
</head>
<body>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Login</th>
      <th scope="col">Password</th>
      <th scope="col">Telephone</th>
      <th scope="col">Adresse</th>
      <th scope="col">Profil</th>
      <th scope="col">Statut</th>
    </tr>
  </thead>
  <tbody>
  <?php
$utili=fopen('test.txt' , 'r');
while(!feof($utili)){
$ache=fgets($utili);
$util=explode(',' , $ache );

  
  echo"<tr>
  <td>".$util[0]."</td>
  <td>".$util[1]."</td>
  <td>".$util[2]."</td>
  <td>".$util[3]."</td>
  <td>".$util[4]."</td>
  <td>".$util[5]."</td>
  <td>
    <a href='traiter.php?login=$util[1]'><button name='bouton' id='bouton'>$util[6]</button></a>
  </td>
  </tr>
  ";
  
  }

fclose($utili);

?>




</table>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>