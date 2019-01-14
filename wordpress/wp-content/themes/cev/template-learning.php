<?php
/*
Template Name: Page Learning
*/; ?>

<?php include( 'head.php' ); ?>

    <body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php include( 'navigation.php' ); ?>
<?php get_header(); ?>
<section class="learning-page wrap">
    <h2 class="title-center title__blue" aria-level="2"
        role="heading"><?= __( 'Le temps d\'apprentissage', 'wp' ); ?></h2>
	<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
        <div class="learning-page__container">
			<?php if ( have_rows( 'apprentissage' ) ): ?>
				<?php while ( have_rows( 'apprentissage' ) ): the_row(); ?>
                    <div class="learning-page__bloc">
                        <section class="learning-page__infos">
                            <h3 class="learning-page__title" aria-level="3" role="heading">
                                <?= the_sub_field('apprentissage-title'); ?>
                            </h3>
                            <p class="learning-page__text">
	                            <?= the_sub_field('apprentissage-text'); ?>
                            </p>
                        </section>
                        <figure class="learning-page__figure">
	                        <?php $learningImg= get_sub_field( 'apprentissage-img' ); ?>
                            <img src="<?= $learningImg['url']; ?>" alt="<?= $learningImg['alt']; ?>">
                        </figure>
                    </div>
				<?php endwhile; endif; ?>
        </div>
	<?php endwhile; endif; ?>
</section>
<div class="infos infos__white">
    <div class="infos__bg"></div>
    <section class="wrap">
        <h2 class="infos__title" aria-level="2"
            role="heading"><?= __( 'Envie de nous rejoindre ?', 'wp' ); ?></h2>
        <a href="<?php the_permalink(); ?>"
           class="button-yellow button-center"><?= __( 'Rejoignez-nous', 'wp' ); ?></a>
    </section>
</div>


<?php include( 'footer.php' ); ?>