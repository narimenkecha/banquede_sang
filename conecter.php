<!DOCTYPE html>
<html>
<!----head -->
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width ,initial-scale=1.0">
<title>Pulse de la vie </title>

<!---css-->
<link rel="shortcut icon" type=" image/png" href="src/img/icon.png"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<link rel="stylesheet" href="src/css/main.css">
<!---css-->
<!--font-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/552902f817.js" crossorigin="anonymous"></script>
<!---font-->




</head>
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
    <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>  Acceuil</a>
    <a href="conecter.php"><i class="fa fa-user-o" aria-hidden="true"></i> connecter</a>
    <a href="Covid19.php"><i class="fa fa-certificate" aria-hidden="true"></i> Covid19 Information </a>
  <a href="info.php"><i class="fa fa-info-circle" aria-hidden="true"></i>   A propos</a>
   </div>
   </header>
   </div>  
   <!--headr-->
     <!---banner-->
   <div class="block">
       <div class="banner">
    <img src="src/img/banner1.jpg" alt="sang "  class="image-banner" > 
    <br>
    <br>
    <h1 class="title"> Connecter sur MOn Banque De Sang </h1> 
        </div>
       
      
        <!---banner-->
  

<!--connecter-->

<form   class="modal-content4 "   method="POST"   >
 
<div class="imagecontent2">
       
       <img src="src/img/user.png" alt="user "  class="imageuser" >  
      
     </div>
    
<div  class="login">
<strong>Utilisateur Ou Administrateur:</strong><br>
<input class="input1"   id="email" type="text"  placeholder="Enter votre E-mail ou  Numéro de tèl" name="txtemail" required>
<br>
  <strong>Mot de Passe:</strong><br>
  <div>
<input  class="input1"  id="mdp" type="password" placeholder="Enter votre Mot de Passe" name="txtmot_de_passe" required>
<div>
<span class="eyes" onclick="myfunction() ">
<i class="fa fa-eye" aria-hidden="true" >  Afficher Mot de Passe</i> 
</span>
</div> </div>
</div>
<div class="login" >
   <button type="submit" onclick="return confirm('bienvennue sur votre compte '); "  class="btnn btncanel1" name="log" >Connecter</button>
   <button type="reset"  class="btnn btncanel1">Annuler</button>
   </div>
</form>

<script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="src/js/main.js"></script>
<!--- script--->
<script>
function myfunction() {
  var x=document.getElementById("mdp");
 
  if(x.type==='password'){
    x.type="text";
}
  else{
    x.type="password";
   }

}
</script>

<!--- script--->

<!--connecter-->
<script type="text/javascript">
   $(".btn").on("click",function(){
 $('.header-menu').toggleClass("show");
   });
 </script>
<footer>
<div class="footer-contnait">
<div class="left-col">
<img src="src/img/logo.png" class="logo">
<br>

<h1> Sauver la vie, Donner et Demander  du sang.  </p>
<br>

<p class="right-text">Copyright © 2020- Banque de sang en ligne Tous droits réservés. </p>
</div>

<div class="right-col">
<h1>Trouve Nous</h1>
<div class="social-media">
  <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"> Pulse de la vie</i></a>
<br>
<a href="#"><i class="fa fa-envelope" aria-hidden="true"> Pulsedelavie@gmail.com</i></a>

<h1>Lien</h1>

<a href="info.php"><i class="fa fa-info-circle" aria-hidden="true"> A propos</i></a>
<br>
<a href="Covid19.php"><i class="fa fa-certificate" aria-hidden="true"> Covid19 Information </i></a>

</div>
</div>
</div>
</footer>


</body>
</html>
<?php

 $dbhost="localhost";
 $dbuser="root";
 $dbpass="";
 $dbname="banque_de_sang";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['txtemail']) ||  isset($_POST['txtmot_de_passe']) ){
$email=$_POST['txtemail'];
$mot_de_passe=$_POST['txtmot_de_passe'];
if($email=='admin@gmail.com'  ){
  $query=mysqli_query($conn,"SELECT * FROM user WHERE email='".$email."' and mot_de_passe='".$mot_de_passe."' and Type=1 ");
  $nr1=mysqli_num_rows($query);
  if($nr1==1){
    header("location: interfaceadmin.php");
  }
}
else{
$query=mysqli_query($conn,"SELECT * FROM user WHERE email='".$email."' and mot_de_passe='".$mot_de_passe."' and Type=2");
$nr=mysqli_num_rows($query);
if($nr==1){
  header("location: inteface-conecter.php");
}
}


}

?>