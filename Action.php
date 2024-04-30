<?php

/* A ffichage d'erreur 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startups_errorrs', TRUE);

*/


//----------------------------------------------------------------------------

/* On se connecte a la BD */

$host = "localhost"; $dbname = "enterprise_db"; $user = "root"; $pass = "";

$conn = new mysqli($host, $user, $pass, $dbname);

// Verifions la connection

if($conn->connect_error){
    die("Echec de la connexion : " .$conn->connect_error);
}

// Traiter les donnees du formulaire

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nom_prenom = mysqli_real_escape_string($conn, $_POST['nom']);
    $email = mysqli_real_escape_string($conn, $_POST['mail']);
    $telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
    $details = mysqli_real_escape_string($conn, $_POST['details']);

    $sql = "INSERT INTO client (nom, mail, telephone, details) values ('$nom_prenom', '$email', '$telephone', '$details')";

    // Verification de chaque champ du formulaire 

    if (isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['telephone']) && isset($_POST['details'])) {

         if (!empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['telephone']) && !empty($_POST['details'])) {

                if(preg_match('/^\d{9}$/', $telephone)){


            if (filter_var($email, FILTER_VALIDATE_EMAIL)){


                $stmt = $conn->prepare("INSERT INTO client (nom, mail, telephone, details) VALUES (?, ?, ?, ?)");
                $stmt->bind_param($nom_prenom, $email, $telephone, $details);
                if($stmt->execute()){

                      header("Location:Successfuly.html");
                        exit();
                } else {
                    echo "Erreur lors de l'insertion";
                }
                
                } else {
                    echo "Adresse mail invalide.";
                }

                    } else {
                        echo "Le numero de telephone est invalide";
                    }
            
            
            } else {
            echo "Certians champs sont manquants";
                }

} else {

        echo "Veillez remplir tout les champs du formulaire";
    }
}


?>
  