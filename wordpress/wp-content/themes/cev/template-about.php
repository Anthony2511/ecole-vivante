<?php
/*
Template Name: Page About
*/; ?>

<?php include( 'head.php' ); ?>

	<body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php include( 'navigation.php' ); ?>
<?php get_header(); ?>
<section class="home-who wrap">
	<h2 class="title-center title__blue" aria-level="2"
	    role="heading"><?= __( '&Aacute; Propos de nous', 'wp' ); ?></h2>
	<div class="home-who__container who-page">
		<div class="home-who__bloc">
			<h3 aria-level="3" role="heading" class="title title__blue"><?= __('Notre histoire','wp'); ?></h3>
			<div class="home-who__bloc-text">
				<?= get_field('about-intro-text'); ?>
			</div>
		</div>
		<div class="home-who__bloc-img">
			<figure>
				<?php $aboutImg = get_field('about-img'); ?>
				<img src="<?= $aboutImg['url']; ?>" alt="<?= $aboutImg['alt']; ?>">
			</figure>
			<div class="who-page__parcours">
				<h3 aria-level="3" role="heading" class="title-center title__blue"><?= __('Notre parcours','wp'); ?></h3>
				<ul class="who-page__list">
					<li class="who-page__item"><span>2016-2017</span>constitution d'un groupe de réflexion et définition des axes du projets </li>
					<li class="who-page__item"><span>2017-06-27</span>lancement de la page Facebook de la CiTé.</li>
					<li class="who-page__item"><span>2017-09-21</span>l'UAFA de l'ULiège rejoint l'équipe de la CiTé ! Bienvenue !</li>
					<li class="who-page__item"><span>2017-10-03</span>première rencontre citoyenne "L'Apéro de la CiTé" où est notamment dévoilé notre nouveau logo</li>
				</ul>
			</div>
		</div>
</section>
<div class="infos infos__white">
	<div class="infos__bg"></div>
	<section class="wrap">
		<h2 class="infos__title" aria-level="2"
		    role="heading"><?= __( 'Besoin de nous contacter ?', 'wp' ); ?></h2>
		<a href="<?php the_permalink(); ?>" class="button-yellow button-center"><?= __( 'Contactez-nous', 'wp' ); ?></a>
	</section>
</div>


<?php include( 'footer.php' ); ?>