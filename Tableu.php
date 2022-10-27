<?php require_once('connexion.php');
//error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="immo.css" />
    <title> Innonce</title> 
</head>
<body> 
<p><h1><b>l'immobilière</b></h1>

<?php 

 $reqselect="select * from  description";
 $resultat=mysqli_query($cnimmobilia,$reqselect);

 $nbr=mysqli_num_rows($resultat);
 echo "Total ".$nbr." immobilière.....";
  

?>
</p>
<p><a href="Ajou.php"><img src="mariano.jpg"></a></p>
<table width="100%">

<tr>
   <th>	Categorie</th>
   <th> Espace</th>
   <th>	Etage</th>
   <th>	Adresse</th>
   <th>	Prix</th>
   <th>	Photo</th>
   <th>	Supprimer</th>
   <th>	Moddifier</th>
</tr>
<?php 

while($ligne=mysqli_fetch_assoc($resultat)){

?>
<tr>

  <td><?php echo$ligne['Categorie'];?></td>
  <td><?php echo$ligne['Espace'];?></td>
  <td><?php echo$ligne['Etage'];?></td>
  <td><?php echo$ligne['Adresse'];?></td>
  <td><?php echo$ligne['Prix'];?></td>
  <td><img src=' <?php echo $ligne['Photo'];?>' ></td>
  <td><a href="suprimer.php?supImmo=<?php echo $ligne['Categorie'];?>"><img src="mariano.jpg" witdh="50%" height="50%"> </a></td>
  <td><a href="modifier.php?mod=<?php echo $ligne['Categorie'];?>"><img src="mariano.jpg" witdh="50%" height="50%"> </a></td>

</tr>




<?php }





?>
</table>
</body>
</html>