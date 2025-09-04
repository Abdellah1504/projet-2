<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Cabinet</title>
    <link rel="stylesheet" href="Contenu\style.css">
</head>
<body>


     <nav class="navbar ">
          <div class="logo">Cabinet medical <br> <span>Dr. Dupont</span></div>
          <div class="burger" id="burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="menu" id="menu">
            <ul>
              <li><a href="index.html">Accueil</a></li>
              <li><a href="#Teams">À propos</a></li>
              <li><a href="#Service">Services</a></li>              
              <li><a href="Actualité.html">Actualités</a></li>
              <li><a href="#contact">Contactez-nous</a></li>
            </ul>
          </div> 
        
    </nav>
    <br><h1>Bienvenue au Cabinet du docteur Dupont</h1>
        <?php
            $date = date("d-m-Y");
            $heure = date("H:i");
            Print("Nous sommes le $date et il est $heure");
            
         ?>
       
        <p  class = "taille">Nous sommes le "$date" .</p> <br>  
           

    <main>

    <section  id="galerie" >
      <br><div class=" container text-center "><br>
        <br><div class = "color2">Notre galerie    </div> <br>
             <div class = "taille  ">Cabinet medical Dr. Dupont .</div> <br>     
           
                  <div class="slide"> <img src="images/cabinet-medical-1.jpg" alt="image 1"></div>
                  <div class="slide"> <img src="images/cabinet-medical-2.jpg" alt="image 2"></div>
                  <div class="slide"> <img src="images/cabinet-medical-3.jpg" alt="image 3"></div>         
                  
      </div>        
    </section>  
    
        <section class="team-member">
            <h2>Presentation du Dr. Dupont </h2>
            <p>diplômée de la Faculté de médecine de Marseille (France) Titulaire du Diplôme spécialisé en médecine générale.</p>
        </section>.
        <section>
            <h2>Cabinet medical Dr. Dupont </h2>
            <p>Répond à l’ensemble des besoins en matière de Médecine Générale tant aux niveaux de l’adulte que de l’enfant.</p>
        </section>

        

        <section class="nav-link">
            <h2>Rendez-vous</h2>
            <p>Prenez rendez-vous en ligne dès maintenant :</p>
            <a  href="rendezvous.php">
              <div class="col-20  col-sm-100" >                     
                <button href="rendezvous.php" type="submit" class="bouton-rdv">CALL TO ACTION</button>                  
               </div>
                
            
        </a>
        </section>

         <section class="nav-link">
            <h2 classe="contact">Nous contacter</h2>
            <p>Vous pouvez nous contacter par téléphone ou par email.</p>
            <a  href="contact.php">Page de contact</a>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cabinet. Tous droits réservés.</p>
    </footer>
</body>
</html>