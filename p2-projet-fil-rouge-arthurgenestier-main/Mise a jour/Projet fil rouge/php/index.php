<?php

// définition des variables nécessaires aux templates
$title = 'Accueil';
$currentPage = 'home';

// Inclusion du fichier de template start.tpl.php
include 'templates/start.tpl.php';
// require 'templates/start.tpl.php';

// différence include / require
// si le fichier n'existe pas
// include génère une erreur, et le script continue
// require génère une erreur, mais le script est arreté
?>

<h1>CV de <?php echo $nom; ?> - Intégratrice web</h1>

    <div class="container">
        <img class="photo" src="./assets/img/photo-raphaelle-chave.jpg" alt="" width="300" height="300">

        <p>
        Je suis <strong>intégratrice web</strong> depuis 3 ans sur <strong>Toulouse</strong>.<br />
        Je maîtrise le HTML et le CSS en m'assurant de fournir une parfaite sémantique pour rendre le contenu accessible et favoriser le référencement pour les moteurs de recherche.
        </p>
        <p>L'Accessibilité web est le point centre de mes attentions lorsque je développe un site, je m'assure également de la compatibilité entre les navigateurs et du responsive.</p>
    </div>

    <blockquote id="citation-2" class="impair">
      <p>Le web est un espace recueillant d'innombrables riches informations, ne gâchons pas cette chance que nous avons.</p>
      <cite>Auteur ou autrice inconnue</cite>
    </blockquote>

    <blockquote class="pair">
      <p>Internet est une auberge espagnole. Vous allez y chercher la confirmation de ce qui séduit votre esprit.</p>
      <cite><a href="https://citations.ouest-france.fr/citation-gerald-bronner/internet-auberge-espagnole-allez-chercher-130181.html">Gérald Bronner</a></cite>
    </blockquote>

    <div class=section-container>    
    <section id="experiences">
      <h2>Expériences</h2>

      <h3><span>Depuis 2021</span> : Intégratice web - Nouvelle Entreprise</h3>
      <p>Nouvelle Entreprise est une agence de communication spécialisé dans l'immobilier depuis 2010.</p>
      <ul>
        <li>Intégration web de plusieurs sites</li>
        <li class="liste-2">Référente accessibilité</li>
        <li>Former les clients à l'utilisation de leurs sites</li>
      </ul>

      <h3><span>2019 - 2020</span> : Intégratice web - Ancienne Entreprise</h3>
      <p>Ancienne Entreprise est une société de vente de produits bio local dans un magasin physique basé à Toulouse.</p>
      <ul>
        <li>Intégration web et maintenance du site de l'entreprise</li>
        <li class="liste-2">Création de landing pages pour les campagnes marketing</li>
        <li>Relation client</li>
      </ul>
    </section>

    <section id="formations">
      <h2>Formations</h2>

      <h3><span>2021</span> - Intégra11y</h3>
      <p>Formation pour devenir intégrateur, intégratrice web qui connaît l'accessibilité.</p>
      <ul>
        <li>HTML Sémantique</li>
        <li class="liste-2">Hiérarchie de contenu</li>
        <li>Accessibilité</li>
      </ul>
    </section>

    <section id="competences">
      <h2>Compétences</h2>

      <ul>
        <li>HTML et CSS</li>
        <li class="liste-2">Markdown</li>
        <li>Maîtrise des outils d'assistance</li>
        <li>Git, Github</li>
      </ul>
    </section>

    <section id="interet">
      <h2>Centres d’intérêt</h2>

      <ul>
        <li>Peinture</li>
        <li class="liste-2">Jouer de la batterie</li>
        <li>Voyage</li>
      </ul>
    </section>
    </div>
    

    <?php

// Inclusion du fichier de template start.tpl.php
include 'templates/end.tpl.php';
?>