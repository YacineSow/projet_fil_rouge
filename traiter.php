<?php

$login=$_GET['login'];
$vide="";

$utilisateur=fopen('test.txt' , 'r');

while(!feof($utilsateur)){
    $lign=fgets($utilisateur);
    $col=explode(',' ,$lign);

    if($login==$col[1]){
        if($col[6]=="actif"){
            $col[6]="inactif";
        }
        else{
            $col[6]="actif";
        }
        if($col[6]==MmeSow){
            $col[6]="actif"; 
        }
    }
    $rempli=$col[0].','.$col[1].','.$col[2].','.$col[3].','.$col[4].','.$col[5].','.$col[6].','."\n";
    $vide=$vide.$rempli;
}
fclose($utilisateur);
$utilisateur=fopen('test.txt' , 'w+');
fwrite($utilisateur,trim($vide));
fclose($utilisateur);
unlink("test.txt");
rename("test1.txt" , "test.txt");
header("location:listeutilisateur.php");


?>