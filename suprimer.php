<?php require_once('connexion.php');
//error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="immo.css" />
    <title> Postez votre innonce</title> 
</head>
<body> 


<div>
<form name="formdelet">

 <p><a href="acceui.php">tab</a></p>
<?php 



if(isset($_GET['supImmo']))
{
$sup=$_GET['supImmo'];
$reqDelete="DELETE FROM description where Categorie='$sup'";
$resultat=mysqli_query($cnimmobilia,$reqDelete);
}
if($resultat){
    echo"<label style='text-align:center; color:red;'> la supp coreectemet </label>";

}
else{
    echo"<label style='text-align:center; color:red;'>non </label>";
}



?>
</form> 
</div>
</body>
</html>