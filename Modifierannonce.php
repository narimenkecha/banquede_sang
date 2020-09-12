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
</div>  
<div class="block"> 
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
     <br>
     <h1 class="title">Ajouter un groupe de sang dans un annonce</h1>
     <br>
     <form class="modal-content2" method="POST">
    <div class="imagecontent2">
      <br>
        <img src="src/img/modifier.jpg" alt="user "  class="imageuser" >  
      </div>
     
      <div  class="login">
      <strong> Entrer Groupe de sang: </strong><br>
           <select name="groupedesang" class="myselect1">
           <option selected hidden value=""> select groupe</option>
           <option value="A+" selected="">A+</option>                  
           <option value="A-" selected="">A-</option>
           <option value="O+" selected="">O+</option>                  
           <option value="O-" selected="">O-</option>
           <option value="AB+" selected="">AB+</option>                  
           <option value="AB-" selected="">AB-</option>
           </select>
             <br>
</div>
<div class="login" >
   <button type="submit" onclick="return confirm('êtes-vous sûr? '); "  class="btnn btncanel1" name="log" >Ajouter </button>
   <button type="reset"  class="btnn btncanel1">Annuler</button>
   </div>
    </div>
</form>

    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="src/js/main.js"></script>

    <script type="text/javascript">
   $(".btn").on("click",function(){
 $('.header-menu').toggleClass("show");
   });
 </script>
<a class="liendessus">Copyright © 2020- Banque de sang en ligne Tous droits réservés  </a>
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

if(isset($_POST['groupedesang'])){
    $groupedesang=$_POST['groupedesang'];
    if(!empty($groupedesang) ){
$dbhost="localhost";
 $dbuser="root";
 $dbpass="";
 $dbname="banque_de_sang";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
  die("Connection failed: " . $conn->connect_error);
}

else{

    $insert="INSERT INTO annonce (groupe_de_sang) value (?)";
    $stmt=$conn->prepare($insert);
  $stmt->bind_param("s", $groupedesang);
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

