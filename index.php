<?php

require_once 'model/database.php';

$liste_logement = getAllLogement ();
require_once'layout/header.php'
 ?>


        <header class="home-banner">
            <h1>Bienvenue chez <strong>Lojeris</strong></h1>
            <p>Votre partenaire de confiance en immobilier</p>
        </header>

        <section class="container">
            <h2>Nos dernières offres</h2>
            <div class="properties">
              <?php foreach ($liste_logement as $logement) : ?>
              <?php include 'include/logement_inc.php'; ?>
              <?php endforeach; ?>


            </div>
        </section>

<?php require_once'layout/footer.php'; ?>
