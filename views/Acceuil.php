<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Cabinet</title>
    <link rel="stylesheet" href="Contenu/style.css">
    
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
              <!--Liste de liens : Accueil, À propos, Services, Actualités, Contact, Connexion.-->
              <li><a href="Acceuil.php">Accueil</a></li>
              <li><a href="a_propos.php">À propos</a></li>
              <li><a href="Service.php">Services</a></li>              
              <li><a href="actualite.php">Actualités</a></li>
              <li><a href="#contact">Contactez-nous</a></li>
              <li><a  href="../index.php?action=login">Connexion</a></li>
             <!-- <li><a  name="action" href="../index1.php">Connexion</a></li-->              

            </ul>
          </div> 
        
    </nav>
    <br><h1>Bienvenue au Cabinet du docteur Dupont</h1>

    <p>
        <?php
            $date = date("d-m-Y");
            $heure = date("H:i");
            Print("Nous sommes le $date et il est $heure");
            
         ?>
         </p>
                        

    <main>

    <section  id="galerie" >
      <br><div class=" container text-center "><br>
        <br><div class = "color2">Notre galerie    </div> <br>
             <div class = "taille  ">Cabinet dentaire Dr. Dupont .</div> <br>     
           
                  <div class="slide"> <img src="images/cabinet-medical-1.jpg" alt="image 1"></div>
                  <div class="slide"> <img src="images/cabinet-medical-2.jpg" alt="image 2"></div>
                  <div class="slide"> <img src="images/cabinet-medical-3.jpg" alt="image 3"></div>         
                  
      </div>        
    </section>  
    
        <section class="team-member">
            <h2>Presentation du Dr. Dupont </h2>
            <p>diplômée de la Faculté de de chirurgie dentaire de Strasbourg (France) Titulaire d'état en chirurgie dentaire.</p>
        </section>.
        <section>
            <h2>Cabinet dentaire Dr. Dupont </h2>
            <p>Le cabinet dentaire du Dr. Dupont et toute son équipe vous souhaitent la bienvenue sur leur site internet et sont à votre service pour vous offrir des soins dentaires de haute qualité ainsi que le meilleur accueil possible..</p>
        </section>

        

        <section class="nav-link">
            <h2>Rendez-vous</h2>
            <p>Prenez rendez-vous en ligne dès maintenant :</p>
           <a href="../index.php?action=ajouter">            
           
              <div class="col-20  col-sm-100" >                     
             <!--   <button href="index1.php" type="submit" name="action" class="bouton-rdv" value="lister">CALL TO ACTION</button-->  
                <button  type="submit"  class="bouton-rdv"  >Prendre rendez-vous</button> 
                            
               </div>
                
            
       </a> 
        </section>

         <section class="nav-link" id="contact">
            <h2 classe="contact">Nous contacter</h2>
            <p>Vous pouvez nous contacter par téléphone au +33 6 00 00 00 00 </p>
            <p>  ou par email au :  contact@cabinetdentaire-lyon.fr .</p><br><br><br>
           
        </section>
    </main>

    
</body>
<footer>
        <p>&copy; <?php echo date("Y"); ?> Cabinet. Tous droits réservés.</p>
    </footer>
</html>