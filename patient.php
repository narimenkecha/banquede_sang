<!DOCTYPE html>
<html>
<!----head -->
<head>
<meta charset="utf-8"> 
<title>Pulse de la vie </title>

<!---css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<link rel="stylesheet" href="src/css/main.css">
<!---css-->
<!--font-->
<link rel="shortcut icon" type=" image/png" href="src/img/icon.png"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/552902f817.js" crossorigin="anonymous"></script>
<!---font-->
</head>
<!----head -->

<!---body-->
<body>

    <!---headr-->
<div class="block"> 
<header class="header">
    
<a href="#"  class="header-logo"><img src="src/img/logo.png" class="image-lien"></a>
<a class="btn" href="#">
  <span></span>
  <span></span>
  <span></span>
  </a>
<div class="header-menu">
  <a href="inteface-conecter.php"><i class="fa fa-home" aria-hidden="true"></i>  Acceuil</a>
  <a href="change-mdp.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Changer mot De Passe</a>
  <a href="deconnecter.php"><i class="fa fa-lock" aria-hidden="true"></i>  Déconnecter</a>
</div>
</header>
</div>  
<div class="block"> 
<header class="header1">
    <div class="header-menu1">
<a href="suprimmer.php"><i class="fa fa-trash" aria-hidden="true"></i> Supprimer don/demande</a>  
      </div>
</header>
</div> 
<!--headr-->
 <!---banner-->
 <div class="block">
    <div class="banner">
 <img src="src/img/banner1.jpg" alt="sang "  class="image-banner" >  
     </div>
    </div>
    <h1 class="title"> Ajouter une demande de sang </h1>
     <!---banner-->
     <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
     <script src="src/js/main.js"></script>
<!--form-->

<form class="modal-content3 "   method="POST"   >
    <div class="imagecontent2">
      
       <img src="src/img/user.png" alt="user "  class="imageuser" >  
     </div>
     <div class="container4">
    <strong> Nom:  </strong><br>
       <input type="text" placeholder="Entrer votre Nom" name="name" required>
       <br>
     <strong>Prenom:</strong><br>
       <input type="text" placeholder="Entrer votre Prenom" name="prenom" required>
       <br>
      <strong>  Age: </strong><br>
      <input type="number" placeholder="Entrer votre Age " name="age" required> <br>
    <strong>Sexe:</strong><br>
      <select name="sexe" class="myselect2">
<option selected hidden value=""> select sexe</option>
<option value="Homme" selected="">Homme</option>                  
           <option value="Femme" selected="">Femme</option>
      </select>
      <br>
     <strong>Groupe Sanguin: </strong><br>
      <select name="groupesang" class="myselect1">
      <option selected hidden value=""> select groupe</option>
      <option value="A+" selected="">A+</option>                  
      <option value="A-" selected="">A-</option>
      <option value="O+" selected="">O+</option>                  
      <option value="O-" selected="">O-</option>
      <option value="AB+" selected="">AB+</option>                  
      <option value="AB-" selected="">AB-</option>
      <option value="B+" selected="">B+</option>                  
      <option value="B-" selected="">B-</option>
      </select>
      <br>
      <strong>établissement:</strong><br>
       <input type="text" placeholder="Entrer votre date de donné" name="établissement" required>
       <br>
   <strong>numéro de téléphone:</strong><br>
       <input type="number" placeholder="Entrer votre numéro de téléphone" name="number" required> <br>
   <strong> E-mail: </strong><br>
          <input type="email" placeholder="Entrer votre  E-mail" name="email" required> <br>
       <strong> Zone:</strong><br>
       <select name="adresse" class="myselect1">
       <?php
       $dbhost="localhost";
       $dbuser="root";
       $dbpass="";
       $dbname="banque_de_sang";
      $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
      if(!$conn){
        die("Connection failed: " . $conn->connect_error);
      }
       $res=mysqli_query($conn,"SELECT * FROM adresse");
       while($row=mysqli_fetch_array($res)){
?>
<option> <?php   echo $row["wilaya"];?> </option>
       <?php } ?>
    </select>
         <br>
      </div>
      <div class="container4" > 
          <button type="submit" class="btnn btnvalider1" value="submit">Valider</button>
          <button type="reset" class="btnn btncanel1">Annuler </button>
      </div>
</form>
<!--form-->

<script type="text/javascript">
  $(".btn").on("click",function(){
$('.header-menu').toggleClass("show");
  });
</script>
<a class="liendessus">Copyright © 2020- Banque de sang en ligne Tous droits réservés  </a>
</body>
</html>

<?php
if(isset($_POST['name']) || isset($_POST['prenom']) || isset($_POST['age'])  || isset($_POST['sexe'])  || isset($_POST['groupesang'])  || isset($_POST['établissement'])  || isset($_POST['number'])|| isset($_POST['email'])  || isset($_POST['adresse'])  ){
$name=$_POST['name'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
$sexe=$_POST['sexe'];
$groupesang=$_POST['groupesang'];
$établissement=$_POST['établissement'];
$number=$_POST['number'];
$email=$_POST['email'];
$adresse=$_POST['adresse'];

if((!empty($name) )|| (!empty($prenom))||(!empty($age)) ||(!empty($sexe)) ||(!empty($groupesang))||(!empty($établissement))|| (!empty($number)) ||(!empty($email))||(!empty($adresse)))
{
  $dbhost="localhost";
  $dbuser="root";
  $dbpass="";
  $dbname="banque_de_sang";
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 if(!$conn){
   die("Connection failed: " . $conn->connect_error);
 }
 else{

  $insert="INSERT INTO visiteur (Nom ,Prenom,Age,Sexe,Groupe_de_sang,établissement,	Numero,email,adresse,Type) value (?,?,?,?,?,?,?,?,?,2)";


$stmt=$conn->prepare($insert);
  $stmt->bind_param("ssisssiss",$name,$prenom,$age,$sexe,$groupesang,$établissement,$number,$email,$adresse);
  $stmt->execute();
  echo "<script>alert('ajoute avec succès'); </script>";

$stmt->close();
$conn->close();





 }
}else{
  echo "all field are required ";
  die();
}

}


?>