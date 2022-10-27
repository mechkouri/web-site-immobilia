<?php 
if(isset($_POST['btIns'])){

$nom=$_POST['txtnom'];
$paswword=$_POST['txtpw'];
$image=$_FILES['photo']['tmp_name'];
$traget="picture/".$image;//$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_photo'],$traget);
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