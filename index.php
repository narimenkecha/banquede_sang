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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!---css-->
<!--font-->
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
  <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>  Acceuil</a>
  <a href="conecter.php"><i class="fa fa-user-o" aria-hidden="true"></i> connecter</a>
  <a href="Covid19.php"><i class="fa fa-certificate" aria-hidden="true"></i> Covid19 Information </a>
<a href="info.php"><i class="fa fa-info-circle" aria-hidden="true"></i>   A propos</a>
</div>
</header>
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
    <h1 class="title">  Bienvenue sur Mon Banque de Sang</h1>
     <!---banner-->
     <!--definition-->
<p class="definition">Le sang est un liquide qui circule dans notre corps. Il y entretient la vie. Il approvisionne nos cellules en oxygène. Et il les débarrasse de leur gaz carbonique. Il participe à l’entretien et au bon fonctionnement de nos organes.<br>

    Le sang est composé de cellules qui se déplacent dans un liquide. Ce liquide est de couleur jaune. C’est le plasma. Il contient principalement de l’eau (90%). Mais il contient aussi des substances alimentaires et des déchets éliminés par nos organes.<br>
    
    Les cellules du sang sont de trois sortes : les globules blancs, les globules rouges et les plaquettes. Les globules blancs nous défendent contre la maladie : ils détruisent les microbes. Les globules rouges assurent le transport de l’oxygène et l’évacuation du gaz carbonique. Les plaquettes participent à la coagulation du sang.
</p>
  <!--definition-->
 <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="src/js/main.js"></script>
 <!--button-->
 <div class="block4" >
  <div class="block1">
 <a href="recherche2.php"><img src="src/img/search2.jpg"  class="image-lien5"></a>
 <h1 class="title8">Recherche de Don de sang</h1>
 </div>

 <div class="block1">
  <a href="donneur2.php"><img src="src/img/donor.png"  class="image-lien2"></a>
  <h1 class="title8"> S'inscrire  Un Donneur</h1>
  </div>
  <div class="block1">
    <a  href="patient2.php"><img src="src/img/donor5.png"  class="image-lien2"></a>
    <h1 class="title8"> S'inscrire un Patient</h1>
    </div>
  </div>
  
<!--button-->
  <!--annonc-->
  <h1 class="title11"> BESOINS CRITIQUES ACTUELS:</h1>
 
<div class="row">
<div class="col-md-4">

<div class="single-blog4">
<h2 class="title10"> Se souvenir de: </h2>
<br>
<p > <strong>
-Bien manger. 
    <br><br>
   -Buvez beaucoup de liquides avant de faire un don.
    <br><br>
    -Apportez une pièce d'identité avec photo (avec anniversaire )</strong ><p>
 
<p>
  

  </div>
  </div>
  <div class="col-md-4">

<div class="single-blog3">
<img src="src/img/urgent.png">
<p > <strong>
    Nous avons besoin de ces groupes sanguins suivants: 
    <?php
       $dbhost="localhost";
       $dbuser="root";
       $dbpass="";
       $dbname="banque_de_sang";
      $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
      if(!$conn){
        die("Connection failed: " . $conn->connect_error);
      }
      $res=mysqli_query($conn,"SELECT * FROM annonce");
      while($row=mysqli_fetch_array($res)){
        echo $row["groupe_de_sang"];}
      ?>. 
    <br>
    Contactez-nous pour plus d'informations à :
<p>
<a href=""><i class="fa fa-facebook-square" aria-hidden="true">  Pulse de la vie</i></a>
<br><br>

<a href=""><i class="fa fa-envelope" aria-hidden="true"> Pulsedelavie@gmail.com</i></a>

  </div>
  </div>
  </div>
 <!--annonc-->


<!--new-->
<h1 class="title11">Campagnes de sensibilisation aux journées internationales:</h1>

<div class="row">
<div class="col-md-4">
<div class="single-blog">
<p class="blg-meta">  Par Admin <span class="date"> 20 novembre</span> </p>
<img src="src/img/donar2.jpg">
<h2 class="title10"> Journée internationale des enfants</h2>
<p > <strong>Nous espérons que vous serez présent en cette Journée mondiale pour don de sang à notre banque.Contactez-nous pour plus d'informations:</strong ><p>
 
<p>
  <a href="contact-us.php" class="contact-us"> Nous contacter</a>
 
  </p></span>
  

</p>

</div>
</div>


<!--new-->
<!--new-->

<div class="col-md-4">
<div class="single-blog2">
<p class="blg-meta">  Par Admin <span class="date"> 4 février</span> </p>
<img src="src/img/donar2.jpg">
<h2 class="title10">Journée mondiale contre le cancer</h2>
<p > <strong> Nous espérons que vous serez présent en cette Journée mondiale pour don de sang à notre banque.Contactez-nous pour plus d'informations:</strong ><p>
<p>
  <a href="contact-us.php" class="contact-us"> Nous contacter</a>
 </p>

</div>
</div>


<!--new--><!--new-->

<div class="col-md-4">
<div class="single-blog1">
<p class="blg-meta">  Par Admin <span class="date"> 14 Juin</span> </p>
<img src="src/img/donar2.jpg">
<h2 class="title10"> Journée Mondiale des donneurs de sang</h2>
<p > <strong> Nous espérons que vous serez présent en cette Journée mondiale pour don de sang à notre banque.Contactez-nous pour plus d'informations:</strong ><p>

<p>
  <a href="contact-us.php" class="contact-us"> Nous contacter</a>
  
 </p>

</div>
</div>
</div>

<!--new-->

<script type="text/javascript">
  $(".btn").on("click",function(){
$('.header-menu').toggleClass("show");
  });
</script>

<script  type="text/javascript">
var like1=1;
var like2=1;
var like3=1;
function adore(){
document.getElementById("show").innerHTML=like1;
like1=like1+1;

}
function adore2(){
document.getElementById("show1").innerHTML=like2;
like2=like2+1;
}
function adore3(){
document.getElementById("show2").innerHTML=like3;
like3=like3+1;
}
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

<!--body -->

</html>

