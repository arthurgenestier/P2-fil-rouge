<?php

// définition des variables nécessaires aux templates
$title = 'Réalisations';
$currentPage = 'realisation';

// Inclusion du fichier de template start.tpl.php
include 'templates/start.tpl.php';
// require 'templates/start.tpl.php';

// différence include / require
// si le fichier n'existe pas
// include génère une erreur, et le script continue
// require génère une erreur, mais le script est arreté
?>

<h1>Réalisations de <?php echo $nom; ?></h1>
<h2>Video Iframe</h2>
<div class="video_wrapper">
<iframe width="100%" height="100%" frameborder='0' marginheight ='0' marginwidth='0' scrolling ='no' 
src='https://player.ina.fr/player/embed/I00002156/1/1b0bd203fbcd702f9bc9b10ac3d0fc21/620/349/1' allow ='fullscreen,autoplay'></iframe>
</div>

<h2>Video html</h2>
<div class="video_wrapper">
<video poster="./assets/img/Capture.PNG" src="./assets/img/Film - 9615.mp4" width="100%" height="100%" controls>
  <p>Votre navigateur ne prend pas en charge les vidéos HTML5 au format MP4 ou WebM</p>
</video>
</div>

<?php

// Inclusion du fichier de template start.tpl.php
include 'templates/end.tpl.php';
?>