<?php
/*
Template Name: Page Time
*/; ?>

<?php include( 'head.php' ); ?>

	<body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php include( 'navigation.php' ); ?>
<?php get_header(); ?>
<section class="time-page wrap">
	<h2 class="title-center title__blue" aria-level="2"
	    role="heading"><?= __( 'Nos horaires', 'wp' ); ?></h2>
	<div class="time-page__container">

	</div>
</section>
<div class="infos infos__white">
	<div class="infos__bg"></div>
	<section class="wrap">
		<h2 class="infos__title" aria-level="2"
		    role="heading"><?= __( 'Envie d\' en savoir plus ?', 'wp' ); ?></h2>
		<a href="<?php the_permalink('42'); ?>"
		   class="button-yellow button-center"><?= __( 'En savoir plus', 'wp' ); ?></a>
	</section>
</div>

<?php include( 'footer.php' ); ?>