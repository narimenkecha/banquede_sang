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
    <h1 class="title">Liste Des dons</h1>
   
     <!---banner-->
     <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
     <script src="src/js/main.js"></script>
     <!--lListe-->

<!--lListe-->


     </body></html>
     <?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="banque_de_sang";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
 die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * from visiteur WHERE Type=1";
$resulta=mysqli_query($conn,$sql);
$nr=mysqli_num_rows($resulta);

if($nr==0){ 
 
  echo "<div class='msg'> <p  class='msg1'> il existe  pas des  Donneurs</p> </div>";
}
else{
  echo " <table   style=' width:95% ; text-align:center; border:1px;margin-left:22px;height:90px;'>\n" ;
 echo"<tr style=' background-color:burlywood; color:brown;height:40px;' >\n";
    echo"<th class='titletabl'>Numéro de Donneur</th>\n";
             echo"  <th   class='titletabl'> Nom </th>\n";
             echo"  <th class='titletabl'> Prenom </th>\n";
             echo"  <th class='titletabl'>Age</th>\n";
             echo"  <th class='titletabl'> Sexe </th>\n";
             echo"  <th class='titletabl'> Groupe Sanguin </th>\n";
             echo"  <th class='titletabl'>  Date de dernier don</th>\n";
             echo"  <th class='titletabl'>numéro de téléphone</th>\n";
             echo"  <th class='titletabl'>email</th>\n";
             echo"  <th class='titletabl'>Zone</th>\n";
echo"</tr> \n";
while($row = $resulta->fetch_assoc()){
  echo"<tr style=' background-color:burlywood; color:brown;height:30px;' >\n";
  echo"<th style=' background-color:brown;color:white;' class='titletabl'>$row[id_visiteur]</th>\n";
           echo"  <th  style=' background-color:brown;color:white;' class='titletabl'> $row[Nom]</th>\n";
           echo"  <th  style=' background-color:brown; color:white;;' class='titletabl'> $row[Prenom] </th>\n";
           echo"  <th style=' background-color:brown;color:white;' class='titletabl'>$row[Age]</th>\n";
           echo"  <th  style=' background-color:brown;color:white;' class='titletabl'>$row[Sexe] </th>\n";
           echo"  <th style=' background-color:brown;color:white;' class='titletabl'> $row[Groupe_de_sang] </th>\n";
           echo"  <th style=' background-color:brown;color:white;' class='titletabl'>$row[Date_de_donne]</th>\n";
           echo"  <th style=' background-color:brown;color:white;' class='titletabl'>$row[Numero]</th>\n";
           echo"  <th  style=' background-color:brown;color:white;' class='titletabl'> $row[email] </th>\n";
           echo"  <th style=' background-color:brown;color:white;' class='titletabl'> $row[adresse] </th>\n";
echo"</tr> \n";

}

}



?>