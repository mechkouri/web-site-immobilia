<?php require_once('connexion.php');
//error_reporting(0);
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>xxx</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/connexion.css">
  </head>
  <body>


 <div class="login-wrap" >
	<div class="login-html">
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Aouter nouvelle immobilia</label>
		<div class="login-form">

<form name="formADD"  method="post" enctype="multipart/form-data" action="" >
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Categorie</label>
					<input id="user" type="text" class="input" name="txtcategorie"  requird >
				</div>
				<div class="group">
					<label for="pass" class="label">Espace</label>
					<input id="pass" type="text" class="input" name="txtespace" requird>
				</div>
                <div class="group">
					<label for="pass" class="label">Etage</label>
					<input id="pass" type="number" class="input" name="txtetage" requird>
				</div>
                <div class="group">
					<label for="pass" class="label">Adresse</label>
					<input id="pass" type="text" class="input" name="txtadresse" requird>
				</div>
				<div class="group">
					<label for="pass" class="label">Photo</label>
					<input id="pass" type="file" name="txtphoto" placeholder="insirer votre photo" requird class="input" data-type="file">
				</div>
				<div class="group">
					<label for="pass" class="label">Prix</label>
					<input id="pass" type="double" class="input"  name="txtprix" placeholder="Entrez votre Email" requird>
				</div>
				<div class="group">
					<input type="submit" class="button"  name="btadd" value="Ajouter" id="submit" >
				</div>
                <label>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="acceui.php">return !!!</a>
				</div>
			</div>
            <?php 
 
 if(isset($_POST['btadd']))
 {


$categorie=$_POST['txtcategorie'];
$espace=$_POST['txtespace'];
$etage=$_POST['txtetage'];
$adresse=$_POST['txtadresse'];
$prix=$_POST['txtprix'];
$image=$_FILES['txtphoto']['tmp_name'];
$traget="picture/".$_FILES['txtphoto']['name'];
move_uploaded_file($image,$traget);

$reqADD="INSERT INTO description(Photo,Categorie,Espace,Etage,Adresse,Prix)
VALUES('$traget','$categorie','$espace','$etage','$adresse','$prix')";


$resultat=mysqli_query($cnimmobilia,$reqADD);

if($resultat){
    echo"validées";

}
else{
    echo"non validées";
}


 }
 
 ?>
</form>
</div>
	</div>
</div>
 </body>
 </html>