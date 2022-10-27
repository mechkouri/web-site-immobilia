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
<div>
<form method="post" action="" enctype="mutipart/form-data">
<h2>     mettre ajour une bien             </h2>
<label> categorie</label>
<input type="text" name="txtcategorie" calsse="zonetext" value="<?php echo $_GET['mod'] ?>" readonly />
  <br><br>
  <label>Espace</label>
  <input type="number" name="txtespace" placeholder="Entrez votre nom" requird calsse="zonetext"/>
  <br><br>
  <label>Etage</label>
  <input type="number" name="txtetage" placeholder="Entrez votre nom" requird calsse="zonetext"/>
  <br><br>
  <label>Adresse</label>
  <input type="text" name="txtadresse" placeholder="Entrez votre nom" requird calsse="zonetext"/>
  <br><br>
  <label>Prix</label>
  <input type="double" name="txtprix" placeholder="Entrez votre nom" requird calsse="zonetext"/>
  <br><br>
  <label>Photo</label>
  <input type="file" name="txtphoto" placeholder="Entrez votre nom" requird calsse="zonetext"/>
  <br><br>
<input type="submit" name="btmod" value="Modifier" id="submit">
<p><a href="acceui.php">tab</a></p>
<label>
<?php 

if(isset($_POST['btmod']))
{

    $categorie=$_POST['txtcategorie'];
    $espace=$_POST['txtespace'];
    $etage=$_POST['txtetage'];
    $adresse=$_POST['txtadresse'];
    $prix=$_POST['txtprix'];
    $modifier=$_GET['mod'];
    
    $image=$_FILES['txtphoto']['tmp_name'];
    
    $traget="images/".$_FILES['txtphoto']['name'];


$requpdate="UPDATE description SET  Espace='$espace',
   Etage='$etage', Adresse='$adresse', Prix='$prix', Photo='$traget' where Categorie='$modifier'"; 

$resultat=mysqli_query($cnimmobilia,$requpdate);

if($resultat){
    echo"saha";
}
else{
    echo"ma sahach";
}
}
?>
</label>
</form>
</div>
</body>
</html>