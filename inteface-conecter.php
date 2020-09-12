<!DOCTYPE html>
<html>
<!----head -->
<head>
<meta charset="utf-8"> 
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
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="src/js/main.js"></script>
    <!--button-->
    <div class="block4">
    <div class="block1">
   <a href="recherche.php"><img src="src/img/search2.jpg"  class="image-lien1"></a>
   <h1 class="title7">Recherche de Don de sang</h1>
   </div>

   <div class="block1">
    <a href="donneur.php"><img src="src/img/donor.png"  class="image-lien1"></a>
    <h1 class="title7">Ajouter un don de sang</h1>
    </div>
    <div class="block1">
          <a href="listedonneur.php"><img src="src/img/LISTE.png"  class="image-lien1"></a>
          <h1 class="title13">  Liste  des  dons</h1>
          </div>
   
    </div>
  <div class="block5">
  <div class="block2">
   <a href="recherche3.php"><img src="src/img/search2.jpg"  class="image-lien6"></a>
   <h1 class="title12">Recherche de demande de sang</h1>
   </div>
   <div class="block2">
      <a  href="patient.php"><img src="src/img/donor5.png"  class="image-lien2"></a>
      <h1 class="title12">Ajouter une demande de sang</h1>
      </div>

          <div class="block2">
            <a href="listpatieent.php"><img src="src/img/LISTE.png"  class="image-lien4"></a>
            <h1 class="title12">Liste des demandes</h1>
            </div>

         
          </div>





 <!--button-->


 <script type="text/javascript">
  $(".btn").on("click",function(){
$('.header-menu').toggleClass("show");
  });
</script>
 <a class="liendessus">Copyright © 2020- Banque de sang en ligne Tous droits réservés  </a>





    </body>
    </html>