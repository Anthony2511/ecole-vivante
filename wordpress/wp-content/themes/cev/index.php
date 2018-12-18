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
  <div class="home-news__background">
      <section class="home-news wrap">
          <h2 class="home-news__title home-news__title--icon title-center title__white" aria-level="2" role="heading"><?= __('Nos dernières actualités/évènements','wp'); ?></h2>
          <div class="home-news__container">
	          <?php $posts = new WP_Query( ['posts_per_page' => 3, 'post_type' => 'news', 'orderby' => 'post-date', 'order' => 'ASC'] ); ?>
	          <?php if($posts->have_posts()) : while($posts->have_posts()): $posts->the_post();?>
                  <div class="home-news__bloc">
	                  <?php $homeNews = get_field('news-img'); ?>
                      <figure class="home-news__figure">
	                      <?php if( !empty($homeNews) ): ?>
		                      <?php $size = 'thumb-home-news';
		                      $thumb = $homeNews['sizes'][ $size ]; ?>
                              <img class="home-news__img" src="<?= $thumb; ?>" width="336" height="215" alt="<?= $homeNews['alt']; ?>">
	                      <?php endif; ?>
                      </figure>
                      <section class="home-news__infos">
	                      <?php $newsID = $post->ID; ?>
	                      <?php if(wp_get_taxonomies($newsID, 'category')): ?>
                              <span class="home-news__category"><?= wp_get_taxonomies($newsID, 'category'); ?></span>
	                      <?php endif; ?>

                          <h3 class="home-news__bloc-title"><?= the_title(); ?></h3>
                          <time class="home-news__bloc-date"><?= get_the_date(); ?></time>
                          <p class="home-news__bloc-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non turpis in nulla dignissim
                              hendrerit. Phasellus gravida diam vitae lacus egestas, a ultricies libero rutrum.
                          </p>
                          <a href="<?= the_permalink(); ?>" class="button-white"><?= __('En savoir plus','wp'); ?></a>
                      </section>
                      <a href="<?= the_permalink(); ?>" class="home-news__bloc-link"></a>
                  </div>
                  <?php wp_reset_postdata(); ?>
	          <?php endwhile; endif; ?>
          </div>
          <a href="<?= the_permalink(16); ?>" class="button-yellow button-center"><?= __('Voir plus d\'actualités','wp'); ?></a>
      </section>
  </div>
  	  <?php include('footer.php'); ?>
