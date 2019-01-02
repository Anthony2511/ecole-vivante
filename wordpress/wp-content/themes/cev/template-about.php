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
	<div class="who-page__container">
		<p>Test</p>
	</div>
</section>


<?php include( 'footer.php' ); ?>