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
		</div>
</section>


<?php include( 'footer.php' ); ?>