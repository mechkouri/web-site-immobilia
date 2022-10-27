<?php require('connexion.php');
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

  <div id="global">
       <div id="profil">
       <?php 
       session_start();
       echo"Binvenue ".$_SESSION['monlogin']."<br>";

       $req="select * from utilisateurs where login='".$_SESSION['monlogin']."'";
       $resultat=mysqli_query($cnimmobilia,$req);
       $ligne=mysqli_fetch_assoc($resultat);
       ?>
     <img src="<?php echo $ligne['my_photo'];?>">
     <br>
     <a href="deconnecter.php">Deconnexion</a>
       </div>
        <div id="tbbord">
        
        <?php  
        include("Tableu.php");
        ?>        
        
        </div>
  </div>

</body>
</html>