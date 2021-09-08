<?php

// On crée la variable dans cette template
// ainsi, elle sera disponible dans toutes les pages
// $nom = 'Raphaelle Chave';
$nom = 'Raphaelle Chave';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?> - Intégratrice web</title>
  <meta name="description" content="Curriculum vitæ de <?= $nom ?>, experte en integration web">

  <!-- Code Emmet link:css -->
  <!-- La balise link (Lier en français) permet de relier notre fichier css au fichier html-->
  <link rel="stylesheet" href="./assets/css/style.css">
  <style>
@import url('https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap');
</style> 
</head>

<body>
  <!-- En-tête -->
  <header role="banner">
    <p><?= $nom ?> - Intégratrice web</p>

    <nav role="navigation">
      <ul class="menu">
        <li class="menu-item"><a href="index.php"<?php if ($currentPage == 'home') : ?> aria-current="page"<?php endif; ?>>Accueil</a></li><!-- commentaire HTML pour enlever l'espace indésirable
        --><li class="menu-item"><a href="contact.php"<?php if ($currentPage == 'contact') : ?> aria-current="page"<?php endif; ?>>Contact</a></li><!-- commentaire HTML pour enlever l'espace indésirable
        --><li class="menu-item"><a href="realisations.php"<?php if ($currentPage == 'realisations') : ?> aria-current="page"<?php endif; ?>>Réalisations</a></li><!-- commentaire HTML pour enlever l'espace indésirable
        -->
    </ul>
    </nav>
  </header>

  <!-- Contenu principal -->
  <main role="main">
  <div class=max-content>