<?php
/*
Template Name: Page d’accueil
*/
; ?>

<?php include('head.php'); ?>

<body>
  <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
  <?php include('header-home.php'); ?>
  <?php include('navigation.php'); ?>
  <section class="home__artistes wrap">
    <h2 class="home__artistes-title title-red" aria-level="2" role="heading"><?= __('Quelques artistes','wp'); ?></h2>
  </section>

	<?php include('footer.php'); ?>
