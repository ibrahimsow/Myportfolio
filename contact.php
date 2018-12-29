<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dosis|Oswald|Oxygen" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis|Major+Mono+Display|Oswald|Oxygen" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Sow-ibrahim</title>
  </head>
  <body>
    <header id="header" class="container-fluid d-flex flex-column justify-content-center align-items-center">
        <a href="#" class="hamburger">
            <div></div>
            <div></div>
        </a>
        <div class="menu">
            <div class="container-fluid showmenu ">
            <a id="button" href="" class="closeBtn">&times;</a>
            <ul class="nav d-flex flex-column">
                <li class="nav-item">
                    <a class="nav-link accueil" href="index.html">ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link projets" href="#projets">PROJETS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link apropos" href="#apropos">A PROPOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link contact" href="contact.php">CONTACT</a>
                </li>
            </ul>
            </div>
        </div>
        <i class="fas fa-desktop"></i>
        <i class="fas fa-tablet-alt"></i>
        <i class="fas fa-mobile-alt"></i>
        <a href="#header"><i class="fas fa-chevron-up"></i></a> 
        <div class="bg-up">
        </div>
        <div class="bg-left-down">
        </div>
        <div class="contact-title d-flex flex-column justify-content-center align-items-center">
            <h1 id="contact" data-aos="fade-right">Contactez moi</h1>
        </div>
        <div class="phone" data-aos="fade-left" data-aos-duration="2000">
        </div>

        
    </header>    
    <section class="section-contact container-fluid d-flex flex-column justify-content-center align-items-center">
          <form id="formulaire" action="#contact" method="POST" class="mt-5" name="vform" onSubmit="return Validate();">
              <div id="username_div">
                 <label>Nom Prénom</label> <br>
                 <div id="name_error"></div>
                 <input id="nom" type="text" name="username" class="textInput">
              </div>
              <div id="email_div">
                 <label>Email</label> <br>
                 <div id="email_error"></div>
                 <input id="email" type="email" name="email" class="textInput">
              </div>
              <div id="message_div">  
                 <label>Ecrivez votre message</label> <br>
                 <div id="message_error"></div>
                 <textarea id="message" name="message" class="messageInput"  rows=4 cols=40> </textarea>   
              </div>
              <div>
                 <button id="button" type="submit" class="btn">Envoyer</button>
              </div>
           </form> 
           <div class="validation text-center mb-5" >
              <?php
              // mettre le empty dans un isset $ post pour ne pas que cela s'affiche dés le chargement de la page
              if (isset($_POST['username'])){
              $username = $_POST["username"];
              }
              if (isset($_POST['email'])){
              $email = $_POST["email"];
              }
              if (isset($_POST['message'])){
              $message = $_POST["message"];
              }
              if(isset($username)&&(isset($email) && isset($message))){
              $info = " Nom et Prénom : " .$username . " email : " . $email . " message : " .$message;
              }
              if (isset($email)){
              $from = "From: ".$email."> \nMime-Version:\n"; 
              }
              $headers = "MIME-Version: 1.0" . "\r\n";
              $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
              if (isset($_POST['username'])){
              $headers  .= "From: ".$email." \r\n";
              }

              
              if (isset($username) && empty($username)) {
                 echo "<h2>* Veuillez remplir votre nom</h2>";
              }
             elseif (isset($email) && empty($email)) {
                    echo "<h2>* Veuillez remplir votre email</h2>";
                 } elseif(isset($message)){
                 if (empty($message) || trim($message) == "") {
                       echo "<h2>* Entrez votre message</h2>";
                 }
              }
                    elseif (isset($info) && isset($headers)){
                    if (mail("ibrahim.s@codeur.online", "formulaire", $info, $headers, $from )) {
                          header("location:index.html");
                    }
                       }elseif (isset($username)&& !empty($email)&& !empty($message)) { 
                       if (!empty($username)&& !empty($email)&& !empty($message)){
                          echo "<h2>Merci de votre message</h2>";
                 }
                }
          
              ?>
           </div> 
    </section>
    <footer class="section-footer container-fluid flex-column d-flex justify-content-center align-items-center" id="footer">
        <h4>Suivez moi sur les réseaux</h4>
        <div class="icone">
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
        </div>
        <p>Tous droits réservés SOW Ibrahim © 2018</p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="app.js"></script>    
  </body>
</html>