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
    <h2 class="who-page__title title-center title__blue" aria-level="2"
        role="heading"><?= __( '&Aacute; Propos de nous', 'wp' ); ?></h2>
    <div class="home-who__container who-page">
        <section class="home-who__bloc who-page__bloc">
            <h3 aria-level="3" role="heading" class="title title__blue"><?= __( 'Notre histoire', 'wp' ); ?></h3>
            <div class="home-who__bloc-text">
				<?= get_field( 'about-intro-text' ); ?>
            </div>
        </section>
        <div class="home-who__bloc-img">
            <figure>
				<?php $aboutImg = get_field( 'about-img' ); ?>
                <img src="<?= $aboutImg['url']; ?>" alt="<?= $aboutImg['alt']; ?>">
            </figure>
			<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                <section class="who-page__parcours">
                    <h3 aria-level="3" role="heading"
                        class="title-center title__blue"><?= __( 'Notre parcours', 'wp' ); ?></h3>
					<?php if ( have_rows( 'parcours' ) ): ?>
						<?php while ( have_rows( 'parcours' ) ): the_row(); ?>
                            <ul class="who-page__list">
                                <li class="who-page__item">
                                    <time datetime="<?= the_sub_field('date'); ?>"><?= the_sub_field( 'date' ); ?></time>
									<?= the_sub_field( 'texte' ); ?>
                                </li>
                            </ul>
						<?php endwhile; endif; ?>
                </section>
			<?php endwhile; endif; ?>
        </div>
    </div>
</section>
<div class="infos infos__white">
    <div class="infos__bg"></div>
    <section class="wrap">
        <h2 class="infos__title" aria-level="2"
            role="heading"><?= __( 'Besoin de nous contacter ?', 'wp' ); ?></h2>
        <a href="<?php the_permalink('62'); ?>" title="Vers la page Contact" class="button-yellow button-center"><?= __( 'Contactez-nous', 'wp' ); ?></a>
    </section>
</div>


<?php include( 'footer.php' ); ?>