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
    <h2 class="contact-page__title-icon title-center title__blue" aria-level="2"
        role="heading"><?= __( 'Contact', 'wp' ); ?></h2>
    <div class="contact-page__container">
        <div class="contact-page__bloc">
            <div class="contact-page__bloc-flex">
                <div class="contact-page__flex" itemscope itemtype="http://schema.org/Organization">
                    <figure class="contact-page__logo">
                        <img src="<?= $images . '/../../images/LogoSiteNom.png'; ?>"  itemprop="logo" alt="Logo du site">
                    </figure>
                    <ul class="contact-page__list" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <li class="contact-page__item" itemprop="streetAddress">
							<?= the_field( 'contact-street' ); ?>
                        </li>
                        <li class="contact-page__item" itemprop="postalCode">
							<?= the_field( 'contact-localite' ); ?>
                        </li>
                        <li class="contact-page__item" itemprop="addressLocality">
							<?= the_field( 'contact-country' ); ?>
                        </li>
                    </ul>
                    <ul class="contact-page__list">
                        <li class="contact-page__item contact-page__item--tel" itemprop="telephone">
							<?= the_field( 'contact-tel' ); ?>
                        </li>
                        <li class="contact-page__item contact-page__item--mail">
                            <a href="mailto:<?= the_field( 'contact-email' ); ?>" itemprop="email">
								<?= the_field( 'contact-email' ); ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <section class="contact-page__faq">
                    <h3 aria-level="3" role="heading"
                        class="contact-page__faq-title"><?= __( 'Besoin de réponses ?', 'wp' ); ?></h3>
                    <p class="contact-page__faq-text"><?= __( 'Vérifiez d\'abord si la question n\'a pas déja été posée sur notre
                        page', 'wp' ); ?>
                        <a href="<?php the_permalink( '127' ); ?>"><?= __( 'FAQ', 'wp' ); ?></a>
                    </p>
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
            role="heading"><?= __( 'D\'informations sur L\'école vivante ?', 'wp' ); ?></h2>
        <a href="<?php the_permalink( '42' ); ?>"
           class="button-yellow button-center"><?= __( 'En savoir plus', 'wp' ); ?></a>
    </section>
</div>
<?php include( 'footer.php' ); ?>