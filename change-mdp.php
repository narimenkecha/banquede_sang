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
  <a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Changer mot De Passe</a>
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
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="src/js/main.js"></script> 

<!---interface-->
<h1 class="title"> Changer  De Mot De Passe</h1>
<form class="modal-content4 animate3"  method="POST" >
   <div class="imagecontent2"> 
        <img src="src/img/modifier.jpg" alt="user "  class="imagemdp" >  
       
    </div>
    <br>
<div  class="login">
<strong> Entrer  Votre ID  :</strong><br>
             <input type="text" placeholder="Entrer votre ID "name="id" required>
             <br>
  <strong>Nouveau Mot de Passe:</strong><br>
<input  class="input1" type="text" placeholder="Enter votre Nouveau  Mot de Passe" name="txtmot_de_passe" required>
<br>

<strong> Retapez Le Nouveau Mot de Passe:</strong><br>
<input  class="input1" type="text" placeholder="Enter votre Nouveau  Mot de Passe" name="txtmot_de_passenew" required>
<br>

</div>
<div class="login" >
   <button type="submit" name="log" class="btnn btncanel1" >Enregistrer  </button>
   <button type="reset"  class="btnn btncanel1">Annuler </button>
</div>
</form>



<!---interface-->

    </body>
    </html>
    <!--php--->
    <?php session_start();
 $dbhost="localhost";
 $dbuser="root";
 $dbpass="";
 $dbname="banque_de_sang";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['log'])){
  $msg='';$msg2='';
$mot_de_passe=$_POST['txtmot_de_passe'];
$mot_de_passenew=$_POST['txtmot_de_passenew'];
$id=$_POST['id'];
if(empty($mot_de_passe)){
 
  echo "<script>alert('Veuillez saisir le nouveau mot de passe '); </script>";
}
else if(strlen($mot_de_passe)<5){
  
  echo "<script>alert('Le mot de passe doit comporter plus de 5 caractères'); </script>";
} else
if(empty($mot_de_passenew)){
 
  echo "<script>alert('Veuillez saisir le nouveau  mot de passe'); </script>";
}
else if($mot_de_passenew!=$mot_de_passe){

  echo "<script>alert(' les deux  mots de passe  sont différent '); </script>";
}
else{

  mysqli_query($conn,"UPDATE user SET mot_de_passe='".$mot_de_passenew."' where 	id_user='".$id."' and Type=2 ");
  echo "<script>alert('Mettre à jour avec succès'); </script>";

}
}




    ?>
     <!--php--->