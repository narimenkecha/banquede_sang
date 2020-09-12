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
<a href="interfaceadmin.php"><i class="fa fa-home" aria-hidden="true"></i>  Acceuil</a>
<a href="messages.php"><i class="fa fa-envelope-open" aria-hidden="true"></i>  Voir les messages</a>

  <a href="change-mdpadmin.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Changer mot De Passe</a>
<a href="deconnecter.php"><i class="fa fa-lock" aria-hidden="true"></i>  Déconnecter</a>

</div>
</header>
</div>  <div class="block"> 
<header class="header1">
    <div class="header-menu1">
<a href="Supprimerannonce.php"><i class="fa fa-trash" aria-hidden="true"></i> Supprimer  annonce</a>  
      <a href="Modifierannonce.php"> <i class="fa fa-pencil" aria-hidden="true"></i> Modifier annonce</a>
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
   <a href="ajouteruser.php"><img src="src/img/add.jpg"  class="image-lien1"></a>
   <h1 class="title7">Ajouter utilisateur </h1>
   </div>

   <div class="block1">
    <a href="suprimeruser.php"><img src="src/img/delete.jpg"  class="image-lien1"></a>
    <h1 class="title7">Supprimer utilisateur</h1>
    </div>
    <div class="block1">
      <a  href="modifieruser.php"><img src="src/img/modifier.jpg"  class="image-lien1"></a>
      <h1 class="title7"> Modifier utilisateur</h1>
      </div>
    </div>
  <div class="block4">
        <div class="block1">
          <a href="listeuser.php"><img src="src/img/LISTE.png"  class="image-lien2"></a>
          <h1 class="title8">Liste Des utilisateur</h1>
          </div>

          <div class="block1">
            <a href="ajouteradresse.php"><img src="src/img/add.jpg"  class="image-lien2"></a>
            <h1 class="title8">Ajouter Adresse</h1>
            </div>

            <div class="block1">
              <a href="suprimmeradresse.php" ><img src="src/img/delete.jpg"  class="image-lien2"></a>
              <h1 class="title8">Supprimer Adresse</h1>
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