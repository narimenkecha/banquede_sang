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
     <h1 class="title">Liste Des Utilisateurs</h1>
     
    </div>
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="src/js/main.js"></script>





    
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

$sql="SELECT * from  user WHERE Type=2";
$resulta=mysqli_query($conn,$sql);
$nr=mysqli_num_rows($resulta);

if($nr==0){ 

  echo "<div class='msg'> <p  class='msg1'> il existe  pas des  utilisateurs </p> </div>";
 
}
else{
  echo " <table   style=' width:95% ; text-align:center; border:5px;margin-left:22px;'>\n" ;
 echo"<tr style=' background-color:burlywood; color:brown;height:40px;' >\n";
    echo"<th class='titletabl'>Numéro de Donneur</th>\n";
             echo"  <th   class='titletabl'> email </th>\n";
             echo"  <th class='titletabl'> mot de passe </th>\n";
            
echo"</tr> \n";
while($row = $resulta->fetch_assoc()){
  echo"<tr style=' nth-child(even){background-color:brown;};height:30px; background-color:burlywood; color:brown '>\n";
  echo"<th style=' background-color:brown;color:white;' class='titletabl'>$row[id_user]</th>\n";
           echo"  <th  style=' background-color:brown;color:white;' class='titletabl'> $row[email]</th>\n";
           echo"  <th  style=' background-color:brown; color:white;;' class='titletabl'> $row[mot_de_passe] </th>\n";
         ;
echo"</tr> \n";

}

}



?>





