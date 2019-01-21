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
    <h2 class="time-page__title-icon title-center title__blue" aria-level="2"
        role="heading"><?= __( 'Nos horaires', 'wp' ); ?></h2>
    <div class="time-page__container">
        <div class="time-page__intro">
		    <?= the_field('horaire-intro'); ?>
        </div>
		<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <div class="time-page__bloc">
				<?php if ( have_rows( 'horaire' ) ): ?>
					<?php while ( have_rows( 'horaire' ) ): the_row(); ?>
                        <a href="<?= the_sub_field( 'time-pdf' ); ?>"
                           target="_blank" class="time-page__link"
                           title="Vers le fichier : <?= the_sub_field( 'time-name' ); ?>">
							<?= the_sub_field( 'time-name' ); ?>
                        </a>
					<?php endwhile; endif; ?>
            </div>
		<?php endwhile; endif; ?>

    </div>
</section>
<div class="infos infos__white">
    <div class="infos__bg"></div>
    <section class="wrap">
        <h2 class="infos__title" aria-level="2"
            role="heading"><?= __( 'Besoin d\'informations sur L\'école vivante ?', 'wp' ); ?></h2>
        <a href="<?php the_permalink( '42' ); ?>"
           class="button-yellow button-center"><?= __( 'En savoir plus', 'wp' ); ?></a>
    </section>
</div>

<?php include( 'footer.php' ); ?>