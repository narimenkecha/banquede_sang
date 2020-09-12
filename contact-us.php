<!DOCTYPE html>
<html>
<!----head -->
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width ,initial-scale=1.0">
<title>Pulse de la vie </title>

<!---css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<link rel="stylesheet" href="src/css/main.css">
<!---css-->
<link rel="shortcut icon" type=" image/png" href="src/img/icon.png"/>
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
    <h1 class="title"> Envoyé votre Message  </h1> 
        </div>
        <form class="modal-content3 " method="POST">
         <div class="imagecontent2">
           
            <img src="src/img/user.png" alt="user "  class="imageuser" >  
          </div>
          <div class="login">
         <strong> Nom:  </strong><br>
            <input type="text" placeholder="Entrer votre Nom" name="name" required>
            <br>
          <strong>Prenom:</strong><br>
            <input type="text" placeholder="Entrer votre Prenom" name="prenom" required>
            <br>
            <strong>email:</strong><br>
          <input class="input1"   id="email" type="email" placeholder="Enter votre E-mail" name="email" required>
          <br>
          <strong>Message:</strong><br>
          <textarea placeholder="     Enter votre Message" rows="10"  name="msg" ></textarea>
          <br>
          </div>
          <div class="login" >
   <button type="submit" onclick="return confirm(' êtes-vous sûr '); "  class="btnn btncanel1" name="log" >envoyer</button>
   <button type="reset"  class="btnn btncanel1">Annuler</button>
   </div>
</form>
       
       
       
       
        <!---banner-->
        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="src/js/main.js"></script>
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
if(isset($_POST['name']) || isset($_POST['prenom']) ||   isset($_POST['email'])  || isset($_POST['msg'])  ){
$name=$_POST['name'];
$prenom=$_POST['prenom'];

$email=$_POST['email'];
$msg=$_POST['msg'];

if((!empty($name) )|| (!empty($prenom))|| (!empty($email))||(!empty($msg)))
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

$insert="INSERT INTO 	message (Nom ,Prenom,email,Messag) value (?,?,?,?)";


$stmt=$conn->prepare($insert);
  $stmt->bind_param("ssss",$name,$prenom,$email,$msg);
  $stmt->execute();
  echo "<script>alert('Message Envoyé'); </script>";

$stmt->close();
$conn->close();





 }
}else{
  echo "all field are required ";
  die();
}
}


?>