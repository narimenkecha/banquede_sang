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
<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/552902f817.js" crossorigin="anonymous"></script>
<!---font-->
<link rel="shortcut icon" type=" image/png" href="src/img/icon.png"/>
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
     </div>
    </div>
    <h1 class="title">Recherche de Don de sang</h1>
     <!---banner-->
     <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
     <script src="src/js/main.js"></script>
     <!--form-->
        <form class="modal-content2"  method="POST">
         <div class="imagecontent1">
           <img src="src/img/sang5.jpg" alt="user "  class="imagesearch" >  
         </div>
         <div class="container3">
        <strong>Groupe Sanguin:</strong><br>
                    <select name="groupesang" class="myselect1">
                    <option selected hidden value=""> </option>
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
    </select>
    <br></div>
                <div class="container4" > 
                  <button type="submit" name="search" class="btnn btnvalider1">Rechercher</button>
                  <button type="reset"  class="btnn btncanel1">Annuler</button>
              </div>
       </form>
       
     <!--form-->
    
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
if(isset($_POST['search'] )){
$adresse=$_POST['adresse'];
$groupesang=$_POST['groupesang'];
$resulta=mysqli_query($conn,"SELECT * FROM visiteur WHERE Groupe_de_sang='".$groupesang."' and 	adresse='".$adresse."' and 	Type=1");
$nr=mysqli_num_rows($resulta);

if($nr==0){
  echo "<script>alert('le groupe dee sang qui va recherche il existe  pas '); </script>";
}
else{
  echo "<script>alert('le groupe dee sang qui va recherche il existe   '); </script>";
 
}
}







?>