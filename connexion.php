<?php
    $host = 'localhost' ;
    $dbname = 'Enterprise_db' ; 
    $username = 'root' ; 
    $password = '' ; 
    $telephone = telephone ;
    $detail = 'detail';
        
        // Établir la connexion à la base de données
       /* $servername = "localhost";
        $username = "utilisateur";
        $password = "motdepasse";
        $dbname = "mabase";
        */
        
        // Créer la connexion
        $conn = new mysqli($servername, $username, $password, $dbname, $telephone, $detail);
        
        // Vérifier la connexion
        if ($conn->connect_error) {
          die("Échec de la connexion : " . $conn->connect_error);
        }
        
        // Traiter les données du formulaire
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

          // Récupérer les données du formulaire
          $nom = mysqli_real_escape_string($conn, $_POST['nom']);
          $email = mysqli_real_escape_string($conn, $_POST['email']);
          
          // $password = mysqli_real_escape_string($conn, $_POST['password']);
        
          //  $telephone = intval ($_POST['telephone']);

          $telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
          $detail = mysqli_real_escape_string($conn, $_POST['detail']);
        
          // Préparer la requête SQL
          $sql = "INSERT INTO client (nom, email, telephone, detail) VALUES ('$nom', '$email', '$telephone', '$detail')";
        
          // Exécuter la requête
          if ($conn->query($sql) === TRUE) {
            echo "Données enregistrées avec succès !";
          } else {
            echo "Erreur lors de l'enregistrement : " . $conn->error;
          }
        }
        
        // Fermer la connexion
        $conn->close();


    $dsn = "pgsql : host = $host ; port = 5432 , dbname = $dbname ; user = $username ; password = $password; " ; 

    try {
        $conn = new PDO($dsn) ; 
        if($conn)
        {
            echo " Connexion à la base de données $dbname réussie avec succès ! " ; 
        }
    } 
    catch (PDOException $e) {
        echo $e->getMessage() ; 
        
    }
?> 