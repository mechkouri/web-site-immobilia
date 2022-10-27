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
  
<br>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">connectez</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
        <form  name="formulaire" method="POST"> 
			<div class="sign-in-htm" >
				<div class="group">
					<label for="user" class="label">Nom d'utilisateur</label>
					<input id="user" type="text" class="input" name="txtlogin" placeholder="Entrez votre nom"  calsse="zonetext">
				</div>
				<div class="group">
					<label for="pass" class="label">Mot de passe</label>
					<input id="pass" type="password" class="input" data-type="password"  name="txtpw" placeholder="Entrez votre nom"  calsse="zonetext">
				</div>
				
				<div class="group">
                    <input type="submit" class="button" name="btlogin" value="login" id="submit">
				</div>
                <?php 
   if(isset($_POST['btlogin']))
   {
       $req=" select * from utilisateurs where login='".$_POST['txtlogin']."' and
       motepasse='".$_POST['txtpw']."'";
       if($resultat=mysqli_query($cnimmobilia,$req))
        {

            $ligne=mysqli_fetch_assoc($resultat);
            if($ligne!=0){ 
             session_start();
             $_SESSION['monlogin']=$_POST['txtlogin'];
             header("location:acceui.php");


            }
            else{
                echo"<font color='red'> login ou mote de passe invalide</font>";
            }

        }


   }
   ?>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="index.php">return à la page d'acceuil</a>
				</div>
			</div>
</form>
<form name="formulaire" method="post" action="" enctype="multipart/form-data">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Nom d'utilisateur</label>
					<input id="user" type="text" class="input" name="txtnom" placeholder="Entrez votre nom" requird >
				</div>
				<div class="group">
					<label for="pass" class="label">Mot de passe</label>
					<input id="pass" type="password" class="input" data-type="password" name="txtpw" placeholder="Entrez votre mot de pass" requird>
				</div>
				<div class="group">
					<label for="pass" class="label">Photo</label>
					<input id="pass" type="file" name="txtphoto" placeholder="insirer votre photo" requird class="input" data-type="file">
				</div>
				<div class="group">
					<label for="pass" class="label">Email</label>
					<input id="pass" type="text" class="input"  name="txtmail" placeholder="Entrez votre Email" requird>
				</div>
				<div class="group">
					<input type="submit" class="button" name="btIns" value="Inscrire" id="submit">
				</div>
                <label>
<?php 
if(isset($_POST['btIns'])){

$nom=$_POST['txtnom'];
$paswword=$_POST['txtpw'];
$image=$_FILES['txtphoto']['tmp_name'];
$traget="picture/".$_FILES['txtphoto']['name'];

move_uploaded_file($image,$traget);

$req="INSERT INTO utilisateurs(login,motepasse,my_photo) VALUES('$nom','$paswword','$traget')";
$resultat= mysqli_query($cnimmobilia,$req);
if($resultat){
    echo"validées";

}
else{
    echo"non validées";
}
}

?>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
</form>
</div>
	</div>
</div>
  </body>
</html>