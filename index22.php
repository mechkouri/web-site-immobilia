<?php require_once('connexion.php');
//error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="immo.css" />
    <title> Innonce</title> 




</head>
<body> 
    <div id="entet">

     <a href="connectez.php" class="connexion">Connectez </a>

        <p class="noisite"></P>
         <div id="form">
             <form name="formulaire" method="POST" action="">
                 <input type="text" name="motcle" placeholder="Recherrche votre choix par catégorie" />
                 <input type="submit" name="btsubmit" value="recherche" />
            </form>
        </div>
     </div>
<div>
 <?php
       if(isset($_POST['btsubmit'])){

         $sm=$_POST['motcle'];
         $reqSelect="select * from description where Categorie like '%$sm%'";
         
        }
   else{

    $reqSelect = "select * from description";
   }
   $resultat= mysqli_query($cnimmobilia,$reqSelect);
   while($ligne= mysqli_fetch_assoc($resultat))
   {

   ?>

<div id="auto">
    <img src="<?php echo $ligne['Photo'] ?>" /><br>
    <?php echo $ligne['Categorie']; ?><br>
    <?php echo $ligne['Espace']; ?><br>
    <?php echo $ligne['Etage']; ?><br>
    <?php echo $ligne['Adresse']; ?><br>
    <?php echo $ligne['Prix']; ?>

   </div>

<?php } 
?>
</div>
</body>
</html>


