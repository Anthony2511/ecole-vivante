<?php
/*
Template Name: Page Job
*/; ?>

<?php include( 'head.php' ); ?>

    <body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php include( 'navigation.php' ); ?>
<?php get_header(); ?>
<section class="job-page wrap">
    <h2 class="job-page__title-icon title-center title__blue" aria-level="2"
        role="heading"><?= __( 'Le métier d\'enseignant', 'wp' ); ?></h2>
    <div class="job-page__container">
        <div class="job-page__intro">
			<?= the_field( 'job-intro' ); ?>
        </div>
		<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
			<?php if ( have_rows( 'job-list' ) ): ?>
				<?php while ( have_rows( 'job-list' ) ): the_row(); ?>
                    <ol class="job-page__list">
                        <li class="job-page__item">
                            <span class="job-page__span"><?= the_sub_field('job-subtitle'); ?></span>
                            <?= the_sub_field('job-text'); ?>
                        </li>
                    </ol>
				<?php endwhile; endif; ?>
		<?php endwhile; endif; ?>
        <div class="job-page__conclusion">
            <?= the_field('job-conclusion'); ?>
        </div>
    </div>
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