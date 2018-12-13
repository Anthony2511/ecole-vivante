<?php
/*
Template Name: Page d’accueil
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php get_header('home'); ?>
  <?php include('navigation.php'); ?>
  <section class="home-who wrap">
      <h2 class="home-who__title--icon title title__blue" aria-level="2" role="heading"><?= __('Qui sommes-nous ?','wp'); ?></h2>
      <div class="home-who__container">
          <div class="home-who__bloc">
              <div class="home-who__bloc-text">
                  <p>
                      La CiTé – école vivante est un projet collaboratif de création d’un établissement
                      secondaire différent. Il est porté par des enseignants chevronnés, désireux de soutenir
                      le bien-être et l’exigence dans l’éducation des adolescents d’aujourd’hui, adultes de demain ;
                      déjà citoyens.
                  </p>
                  <p>
                      La CiTé – école vivante, s’inspire notamment du fonctionnement organisationnel et pédagogique
                      du Collège-Lycée Expérimental (CLE) de Hérouville-Saint-Clair (Académie de Caen) en Normandie,
                      inauguré en 1982. Comme cet établissement, La CiTé – école vivante ne se revendique d’aucun courant
                      pédagogique, mais il fonde son action sur une principe simple : « Tout est éducatif ». Chaque élève y
                      est considéré comme une personne, chaque adulte contribue à l’éducation et chaque dispositif soutient
                      une intention.
                  </p>
              </div>
              <a href="#" class="button-yellow"><?= __('En savoir plus','wp'); ?></a>
          </div>
          <div class="home-who__bloc-img">
              <figure>
                  <img src="<?= $images . '/../../images/blocImage.png';?>" alt="">
              </figure>
          </div>
      </div>
  </section>

	<?php include('footer.php'); ?>
