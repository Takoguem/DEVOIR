<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | Enterprise</title>

    <!-- Fichiers CSS -->
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="style.css" /> 
    <link rel="stylesheet" href="Action.php" /> 
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css”> <!-- Librairie utile pour afficher les icônes de réseaux sociaux-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>
<body>
<header>
   <!-- Début du Bloc de configuration de la page d'accueil avec animation vidéo-->
   <div class="overlay"></div>
   <video autoplay muted loop>
    <source src="ressources/Barcode - 32643.mp4" type="video/mp4"> </video>


 <!-- Debut creation de la NavBar (barre de navigation)-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><strong>Enterprise</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">A propos</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#services">Nos Services</a>
              </li> 
             
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contacts</a>
              </li>        
            </ul>
          </div>
        </div>
      </nav>
       <!-- Fin creation de la NavBar (barre de navigation)-->  
         
        <!-- Debut Configuration du fond d'écran Caroussel-->   
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="ressources/main.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Intelligence Artificielle</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                              
            </div>
          </div>
          <div class="carousel-item">
            <img src="ressources/internet-gd0477ba56_1920.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Développement web et mobile</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                            
            </div> 
          </div>
          <div class="carousel-item">
            <img src="ressources/cadenas.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Cybersécurité</h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                             
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Suivant</span>
        </button>
      </div>
      <!-- Fin Configuration du fond d'écran Caroussel--> 

      <!-- Configuration des sections -->
            <!-- Section A propos -->
      <section id="about" class="about section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-12">
                      <div class="about-img">
                          <img src="ressources/entrepreneur-1340649_1280.jpg" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                      <div class="about-text">
                            <h2>Nous sommes une entreprise de prestation de services informatiques qui se veut la meilleure<br/>  au Cameroun</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore reiciendis. Assumenda eos quod animi! Soluta nesciunt inventore dolores excepturi provident, culpa beatae tempora, explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda quo aliquam vel, nostrum explicabo ipsum dolor, ipsa perferendis porro doloribus obcaecati placeat natus iste odio est non earum?</p>
                            <a href="#" class="btn btn-warning">En savoir plus</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Fin Section A propos -->
      <!-- Section Services -->
      <section class="services section-padding" id="services">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5">
                          <h2>Nos Services</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-laptop"></i>
                            <h3 class="card-title">Intelligence artificielle</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                            <button class="btn bg-warning text-dark">En savoir plus</button>
                        </div>
                    </div>
                </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                            <i class="bi bi-journal"></i>
                              <h3 class="card-title">Développement web</h3>
                              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                              <button class="btn bg-warning text-dark">En savoir plus</button>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                            <i class="bi bi-intersect"></i>
                              <h3 class="card-title">Cybersécurité</h3>
                              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                              <button class="btn bg-warning text-dark">En savoir plus</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Fin session Services -->

      
      <!-- Debut 'NOUS CONTACTER' -->
      <section id="contact" class="contact section-padding">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Nous contacter</h2>
                        <a href="https://www.facebook.com/dilane.difodjeu.18" ><img src="icone/facebook.png"/></a><a href=" https://whatsapp.com/dl/ " ><img src="icone/whatsapp.png" ></a><a href="https://x.com/Tk8040948885024?t=fO-LUWRNuM04CMMtAxU23A&s=08" ><img src="icone/twitterx.png" ></a><a href="https://www.linkedin.com/in/zack-eba-1a5155286?trk=contact-info"><img src="icone/linkedin.png" > </a>          
        <!-- Ajoutez d'autres réseaux sociaux si nécessaire -->



    <!--Début Configuration du formulaire de soumission d'une demande de service--->
    </section>
      <div class="pimg1">
        
            <!--Nous allons appliquer un style propre à notre formulaire et nous allons le reproduire dans le fichier CSS
              pour que le style puisse être appliqué--->
            <style>
              @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');
          *{
              margin: 0;
              padding: 0;
              box-sizing: border-box;
              
          }
          .contact-wrapper{
              display: flex;
              justify-content: flex-start;
              align-items: center;
              flex-direction: column;
              width: 100%;
              min-height: 100vh;
          }
          .heading{
              padding: 30px 0px;
              font-size: 35px;
          }
          .contact-box{
              display: flex;
              width: 90%;
              min-height: 80vh;
              background-color: rgb(238, 238, 238);
              padding: 20px;
              box-shadow: 15px 15px 15px rgb(211, 208, 208);
              border-radius: 10px;
          }
          .left-contact{
              background-color: #373c56;
              flex: 1;
              position: relative;
              overflow: hidden;
              color: white;
              padding: 50px;
              border-radius: 10px;
          }
         
          
          .right-contact,.form-container{
              flex: 2;
              display: flex;
              justify-content: center;
              align-items: center;
          }
          .input{
              display: flex;
              justify-content: center;
              align-items: flex-start;
              flex-direction: column;
          }
          form{
              display: flex;
              justify-content: center;
              align-items: flex-start;
              flex-direction: column;
              margin: 20px;
          }
          input,textarea{
              width: 450px;
              border: none;
              border-bottom: 2px solid transparent;
              background-color: rgb(190, 187, 187);
              padding: 10px;
              border-radius: 5px;
              font-size: 20px;
              margin: 10px;
          }
          label{
              font-size: 22px;
              padding: 10px 0px;
          }
          select{
              width: 450px;
              border-radius: 5px;
              padding: 10px;
              background-color: rgb(190, 187, 187);
              border: 2px solid transparent;
              font-size: 18px;
              margin: 10px;
          
           }
          button{
              padding: 15px 40px;
              border: none;
              background-color:  #eb77c4;
              font-size: 20px;
              margin: 30px 10px;
              border-radius: 5px;
              color: white;
              transition: .5s all ease-in-out;
              border: 2px solid transparent;
          }
          button:hover{
              background-color: transparent;
              border: 2px solid #eb77c4;
              color: black
              ;
          }
          .social-icons{
              display: flex;
              justify-content: center;
              align-items: flex-start;
              flex-direction: column;
          }
          .lab{
              padding: 20px 100px;
              font-size: 50px;
              color: rebeccapurple;
          }
          
          
          @media screen and (max-width:1350px ) {
              .lab{
                  padding: 20px 20px;
              }
          }
          @media screen and (max-width:1200px ) {
             .contact-box{
                 width: 95%;
             }
          }
          @media screen and (max-width:1100px ) {
             
              input,textarea{
                  width: 350px;
              }
          }
          @media screen and (max-width:950px ) {
              .contact-box{
                  flex-direction: column;
              } 
          }
          @media screen and (max-width:520px ) {
              .form-container{
                  flex-direction: column;
              }  
          }
          @media screen and (max-width:420px ) {
              input,textarea{
                  width: 300px;
              } 
          } /*----Fin Application du style-----*/
        
          </style>   <!-- configuration du formulaire proprement dit-->
              <section class="contact-wrapper">
                  <div class="heading">
                      <h3>Besoin d'un service ? Veuillez remplir le formulaire ci-dessous  </h3>
                  </div>
                  <div class="contact-box">
                      <div class="left-contact">
                      PDG  Enterprise
                        <img src="ressources/copie1.jpg" alt="PDG Enterprise">  
          
                      </div>
                      <div class="right-contact">
                         <div class="form-container">
                             <form method="post" action="Action.php">
                                 <h3><strong> ENTERPRISE </strong></h3>
                              <input type="text" name="nom" placeholder="Nom / Prénom" >
                                 
                                 <input type="email" name="mail" placeholder="Email">
                                 
                                 <input type="tel" name="telephone" placeholder="Numéro de téléphone">
                  
                                 <textarea type="text" name="details" placeholder="Bien vouloir détailler au maximum votre Besoin afin de pouvoir mieux vous aider"
                                   id="" cols="30" rows=""></textarea>

                                 <button type="submit" name="Envoyer">Envoyer</button>
                                 
                              </form>
                          </div>
                      </div>
                  </div>
              </section>
              <p><h5>Enterprise</h5>
              <h6>Tous droits réservés </h6></p>
              <!--Fin configuration du formulaire de soumission d'une demande de service-->
      </div>
     
      <!-- Fin 'NOUS CONTACTER' -->
      </header>
      

    <!-- Liens Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>  <!-- intégration de la bibliothèque JavaScript GSAP (utilisée pour les animations) -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>