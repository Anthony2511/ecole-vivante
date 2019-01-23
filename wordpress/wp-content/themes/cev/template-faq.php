<?php
/*
Template Name: Page FAQ
*/; ?>

<?php include( 'head.php' ); ?>

    <body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php include( 'navigation.php' ); ?>
<?php get_header(); ?>
<section class="faq-page wrap">
    <h2 class="faq-page__title-icon title-center title__blue" aria-level="2"
        role="heading"><?= __( 'Foire aux questions', 'wp' ); ?></h2>
    <div class="faq-page__container">
        <div class="faq-page__intro">
            <?= the_field('faq-intro'); ?>
        </div>
		<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <div class="faq-page__bloc">
				<?php if ( have_rows( 'faq' ) ): ?>
					<?php while ( have_rows( 'faq' ) ): the_row(); ?>
                        <section class="faq-page__question">
                            <h3 aria-level="3" role="heading" class="faq-page__title button-show">
                                <?= the_sub_field('question'); ?>
                            </h3>
                            <div class="faq-page__text effect" style="display: none;">
                                <?= the_sub_field('reponse'); ?>
                            </div>
                        </section>
					<?php endwhile; endif; ?>
            </div>
		<?php endwhile; endif; ?>
    </div>
</section>
<div class="infos infos__white">
    <div class="infos__bg"></div>
    <section class="wrap">
        <h2 class="infos__title" aria-level="2"
            role="heading"><?= __( 'D\'autres questions ?', 'wp' ); ?></h2>
        <a href="<?php the_permalink('62'); ?>"
           title="Vers la page Contact"
           class="button-yellow button-center"><?= __( 'Contactez-nous', 'wp' ); ?></a>
    </section>
</div>

<?php include( 'footer.php' ); ?>