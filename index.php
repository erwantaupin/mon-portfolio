<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/glider.min.css">
    <link
      rel="shortcut icon"
      href="assets/images/svg/2099120-e91e63.svg"
      type="image/x-icon"
    />
    <script
      src="https://kit.fontawesome.com/aa36982253.js"
      crossorigin="anonymous"
    ></script>
    <title>PortFolio</title>
  </head>
  <body>
    <div class="burger"></div>
    <header>
      <div class="box-profil" id="haut-de-page">
        <video autoplay muted loop id="galaxy">
          <source src="assets/images/galaxy.mp4" type="video/mp4" />
        </video>
        <div class="box-pro-rng">
          <div class="Profil">
            <img src="assets/images/profil.png" id="prolo" />
          </div>
        </div>
      </div>
    </header>
    <div class="box-glider">
      <button class="glider-prev">
        <i class="fas fa-chevron-circle-left"></i>
      </button>
      <div class="glider">
        <div class="card">
          <a href="#"><img src="assets/images/Simplondrivest.png" alt="" /></a>
        </div>
        <div class="card">
          <a href="#"><img src="assets/images/SpawnArenast.png" alt="" /></a>
        </div>
      </div>
      <button class="glider-next">
        <i class="fas fa-chevron-circle-right"></i>
      </button>
    </div>
    <div class="histoire">
      <div class="monvecu">
        <div class="titreh">
          <h3>Mon Vécu</h3>
        </div>
        <div class="liste">
          <ul>
            <li>Apprenti Telecom</li>
            <li>Monteur Cableur F.O</li>
            <li>Apprenant Dev.Web</li>
            <!-- <li>4</li>
            <li>5</li> -->
          </ul>
        </div>
      </div>
      <div class="mescomp">
        <div class="titreh">
            <h3>Mes Competences</h3>
        </div>
        <div class="liste">
          <ul>
            <li>HTML5<br>
            <progress id="1" value="45" max="100"></progress></li>
            <li>CSS<br>
            <progress id="2" value="40" max="100"></progress></li>
            <li>PHP<br>
            <progress id="3" value="30" max="100"></progress></li>
            <li>JS<br>
            <progress id="4" value="30" max="100"></progress></li>
            <li>Python<br>
            <progress id="5" value="30" max="100"></progress></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="formu">
      <form class="formulaire" action="assets/php/traitement.php" method="post">
        <p>Votre nom :<br><input type="text" name="name" placeholder="Votre nom" required id="name"/></p>
        <p>votre entreprise :<br><input type="text" name="entreprise" placeholder="votre entreprise" required id="entreprise"/></p>
        <p>Votre email :<br><input type="email" name="mail" placeholder="votre email" required id="mail"/></p>
        <p>Votre message :<br><textarea id="message" name="message" rows="5" cols="33" placeholder="veuillez écrire votre message ici, merci" id="textearea"></textarea></p>
        <p><input type="submit" value="envoyez" id="subuton"/></p>
      </form>
    </div>
    <footer>
      <div class="btn">
      <img src="assets/images/svg/top.svg" class="icone">
      </div>
      <p>&copy; Copyright 2022 par Apprenant Mr Taupin Erwan</p>
    </footer>
    <script src="assets/js/glider.min.js"></script>
    <script src="assets/js/glider.js"></script>
    <script src="assets/js/btn.js"></script>
    <script src="assets/js/burger.js"></script>
 </body>
</html>
