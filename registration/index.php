<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>


<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="style2.css"/>
 
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"> <img src="adsgame copy.png" width="30" height="30" > </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <img src="profil.png"><a class="btn btn-primaryy" href="index.php" role="button">Mon compte</a>
        </li>
        </li>
        <li class="nav-item">
        </li>
      </ul>
      <a class="btn btn-primaryy" href="logout.php" role="button">Déconnexion</a>
    </div>
  </div>
</nav>
<br>
<br>
    <div class="sucess">
    <h3>Bienvenue chez <br> adsgame <br> <?php echo $_SESSION['username']; ?> !</h3>
    </div>



<div class="div-link">
         <a href="">
         <img alt="civ6" src="../photo/civ6.jpg" class="image"
         width="350" height="120"></a>


         <a href="">
         <img alt="civ6" src="../photo/b4b.jpg" class="image"
         width="350" height="123"></a>

         <a href="">
         <img alt="civ6" src="../photo/fifa.jpg" class="image"
         width="350" height="123"></a>

         <a href="">
         <img alt="civ6" src="../photo/halo.jpg" class="image"
         width="350" height="122"></a>

         <a href="">
         <img alt="civ6" src="../photo/cuphead.jpg" class="image"
         width="350" height="122"></a>

         <div id="test"></div>
          <button id="launcher" type="button"><img src="triangle.png" width="250px" height="200px" alt="Submit"></button>

        <table border="2" id="table" cellpadding="13">
        <thead id="thead">
        <tr align="center"><th>Pseudo</th><th>Gains</th></tr>
        </thead>
        <tbody>
          <tr align="center" height="25%"><td width="10%">LeGameur</td><td width="10%">à gagné 0.4€</td></tr> </br>
          <tr align="center"><td >Warryks</td><td>a gagné 0.2€</td></tr> </br>
          <tr align="center"><td>Thepoulet</td><td >à gagné 0.3€</td></tr> </br>
          <tr align="center"><td>edy</td><td>a gagné 1.2€</td></tr></br>
          <tr align="center"><td>Grosradis</td><td>à gagné 0.2€</td></tr></br>
          <tr align="center"><td>Bot#0110</td><td>à gagné 0.1€</td></tr></br>
          <tr align="center"><td>Thewitcher</td><td>à gagné 0.2€</td></tr></br>
          <tr align="center"><td>hugodu60</td><td>à gagné 0.7€</td></tr></br>
          <tr align="center"><td>LEBG</td><td >à gagné 0.2€</td></tr></br>
          <tr align="center"><td >thomas75</td><td>à gagné 0.7€</td></tr></br>
          </tbody>
        </table>

        <img alt="parfum" src="../photo/pub1.jpg" class="pub" height="154.5" width="320">
        <img alt="voiture" src="../photo/pub2.jpg" class="pub2" height="154.5" width="320">
        <img alt="coca" src="../photo/pub3.jpg" class="pub3" height="154.5" width="154.5">
         
</div>



<script>

var videos = ["../pub/pub4.mp4","../pub/pub5.mp4","../pub/pub6.mp4","../pub/pub7.mp4"];

input = document.getElementById('launcher');

function video() {
    input.style.display = 'none';

    var playerDiv = document.getElementById("test");
    var player = document.createElement("IFRAME");
    var randomVideo = videos[Math.floor(Math.random() * videos.length)];

    player.classList.add("videoplayer")
    player.setAttribute('width', '800');
    player.setAttribute('height', '451');
    player.setAttribute('src', randomVideo);

    playerDiv.appendChild(player);
};

function sleep() {
  timeoutID = window.setTimeout(reset, 11000);
}

function reset() {
//   alert("TEST : La page reset");
  location.reload();
}

var launcher = document.querySelector('#launcher')
launcher.addEventListener('click', function(event) {
  event.preventDefault()
  video()
  sleep()
})


</script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

