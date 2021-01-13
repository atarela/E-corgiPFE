<title>Ajouter un livre</title>

<?php

//"images" = subdirectory for images in www directory
$target_dir = "images/";
$uploadOk = 1;
$extension  = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
$namepic = md5(uniqid());
//nom destination
$target_file = $target_dir . $namepic.".".$extension;
//nom futur image 
$nomImage = $namepic .'.'. $extension;


    //identifier votre BDD
$database = "projet_web";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

//file extension in lower case
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 


//adresse

// Vérifier si le fichier image est une image réelle ou une image fausse

 $check = getimagesize($_FILES["photo"]["tmp_name"]);
 if($check !== false) {
 //echo "Le fichier est une image - " . $check["mime"] . ".";
 $uploadOk = 1;
 } else {
 echo "Le fichier n'est pas une image.";
 $uploadOk = 0;
 }

// Vérifier la taille du fichier
if ($_FILES["photo"]["size"] > 500000) {
 echo "<br>" . "Désolé, votre fichier est trop volumineux.";
 $uploadOk = 0;
}
// Autoriser certains formats de fichier
if (($imageFileType == "jpg") || ($imageFileType == "png") || ($imageFileType == "jpeg")
 || ($imageFileType == "gif")) {
 //echo "<br>" . "Fichier autorisé. Format = JPG | JPEG| PNG | GIF.";
 $uploadOk = 1;
} else {
 echo "<br>" . "Désolé. Seuls fichiers en format JPG, JPEG, PNG, GIF sont autorisés.";
 $uploadOk = 0;
}

//recuperer les données venant de la page HTML
//le parametre de $_POST = "name" de <input> de votre page HTML
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$description = isset($_POST["description"])? $_POST["description"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$categorie = 1;
$auteur = isset($_POST["auteur"])? $_POST["auteur"] : "";
$genreliv = isset($_POST["genreliv"])? $_POST["genreliv"] : "";
$editeur = isset($_POST["editeur"])? $_POST["editeur"] : "";
$typeliv = isset($_POST["typeliv"])? $_POST["typeliv"] : "";

$quantite = isset($_POST["quantite"])? $_POST["quantite"] : "";

$erreur = "";
      if($nom == "") {$erreur .= "Le champ Nom est vide. <br>";}
      
      if($prix == "") {$erreur .= "Le champ prix est vide. <br>";}
      
      if($auteur == "") {$erreur .= "Le champ auteur est vide. <br>";}
      if($genreliv == "") {$erreur .= "Le champ genre du livre est vide. <br>";}
      
      if($quantite == "") {$erreur .= "Le champ Quantite est vide. <br>";}
      
      if($uploadOk == 0)
      {$erreur.="Désolé, votre photo n'a pas été téléchargé.";}

      if ($erreur == "") {
       
        echo "Formulaire valide. <br>";
        }
          else 
      {
        echo "Erreur : $erreur";
      }



if (isset($_POST['additem'])) { 
    if ($db_found) {
        
                        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                         //echo "<br>" . "Le fichier ". $nomImage. " a été
                        //téléchargé.";
                         } else {
                         echo "<br>" . "Désolé, une erreur s'est produite lors de l'envoi de votre
                        fichier.";
                         }

                      $sql = "INSERT INTO items(nom, photo, descri, prix,categorie,quantite)
                      VALUES('$nom', '$target_file', '$description', '$prix','$categorie','$quantite')";
                      $result=mysqli_query($db_handle, $sql);
                      
                      

                      /*if(mysqli_query($db_handle,$sql))
                      {
                       $id=mysqli_insert_id($db_handle);   
                         
                      }*/

                      $sql2 = "INSERT INTO livre(id, categorie, genre, auteur,editeur,type)
                      VALUES('$id', '$categorie', '$genreliv', '$auteur','$editeur','$typeliv')";
                      $result2=mysqli_query($db_handle, $sql2);   
                      echo "Add successful." . "<br>";    
                     
                    }
                    
        
     else {
        echo "Database not found";
        }

  }
                              
//fermer la connexion
mysqli_close($db_handle);
   
?>

<p>Votre livre est bien ajoute et votre session est fermee.
<br>Reviner a la page <a href="home-03.php">Accuiel</a> pour voir votre article
</p>