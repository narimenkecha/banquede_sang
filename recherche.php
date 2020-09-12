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
    <h1 class="title">Recherche de Don de sang</h1>
     <!---banner-->
     <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
     <script src="src/js/main.js"></script>
     <!--form-->
        <form class="modal-content2" method="POST" action="listederecherche.php">
         <div class="imagecontent1">
           <img src="src/img/sang5.jpg" alt="user "  class="imagesearch" >  
         </div>
         <div class="container3">
        <strong>Groupe Sanguin: </strong><br>
                    <select name="groupesang" class="myselect1">
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
    <br>
    </div>
                <div class="container4" > 
                  <button type="submit"  name="search" value="submit" class="btnn btnvalider1">Rechercher</button>
                  <button type="reset"  class="btnn btncanel1">Annuler</button>
              </div>
       </form>
       
     <!--form-->
    
     <a class="liendessus">Copyright © 2020- Banque de sang en ligne Tous droits réservés  </a>

     <script type="text/javascript">
      $(".btn").on("click",function(){
    $('.header-menu').toggleClass("show");
      });
    </script>


</body>
</html>





