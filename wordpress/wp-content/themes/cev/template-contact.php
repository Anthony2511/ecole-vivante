<?php
/*
Template Name: Page Contact
*/; ?>

<?php include( 'head.php' ); ?>
    <body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php include( 'navigation.php' ); ?>
<?php get_header(); ?>
<section class="contact-page wrap">
    <h2 class="title-center title__blue" aria-level="2"
        role="heading"><?= __( 'Contact', 'wp' ); ?></h2>
    <div class="contact-page__container">
        <div class="contact-page__bloc">
            <div class="contact-page__bloc-flex">
                <div class="contact-page__flex">
                    <figure class="contact-page__logo">
                        <img src="<?= $images . '/../../images/LogoSiteNom.png'; ?>" alt="">
                    </figure>
                    <ul class="contact-page__list">
                        <li class="contact-page__item">Rue des charrons n°116</li>
                        <li class="contact-page__item">4800 Verviers</li>
                        <li class="contact-page__item">Belgique</li>
                    </ul>
                    <ul class="contact-page__list">
                        <li class="contact-page__item contact-page__item--tel">0478 45 85 96</li>
                        <li class="contact-page__item contact-page__item--mail">ecolevivante@gmail.com</li>
                    </ul>
                </div>
                <section class="contact-page__faq">
                    <h3 aria-level="3" role="heading"
                        class="contact-page__faq-title"><?= __( 'Besoin de réponses ?', 'wp' ); ?></h3>
                    <p class="contact-page__faq-text">Vérifiez d'abord si la question n'a pas déja été posée sur notre
                        page
                        <a href="<?php the_permalink(); ?>">FAQ</a></p>
                </section>
            </div>
        </div>
        <div class="contact-page__bloc">
			<?= do_shortcode( '[contact-form-7 id="64" title="Contact form 1"]' ); ?>
        </div>
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