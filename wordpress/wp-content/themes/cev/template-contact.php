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
        <div class="contact-page__bloc">
            <form action="" class="contact-page__form">
                <legend class="contact-page__form-required">Les champs suivi d'un (*) sont obligatoires</legend>
                <div class="contact-page__form-champ">
                    <label for="firstname" class="contact-page__form-label">Votre prénom</label>
                    <input type="text" id="firstname" class="contact-page__form-input" placeholder="Jean">
                </div>
                <div class="contact-page__form-champ">
                    <label for="lastname" class="contact-page__form-label">Votre nom</label>
                    <input type="text" id="lastname" class="contact-page__form-input" placeholder="Dupont">
                </div>
                <div class="contact-page__form-champ">
                    <label for="email" class="contact-page__form-label">Votre e-mail</label>
                    <input type="email" id="email" class="contact-page__form-input" placeholder="jean.dupont@gmail.com">
                </div>
                <div class="contact-page__form-champ">
                    <label for="tel" class="contact-page__form-label">Votre téléphone</label>
                    <input type="number" id="tel" class="contact-page__form-input" placeholder="0478 98 85 72">
                </div>
                <div class="contact-page__form-champ">
                    <label for="message" class="contact-page__form-label">Votre message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="contact-page__form-input textarea" placeholder="Écrivez votre message..."></textarea>
                </div>
                <input type="submit" value="Envoyez votre message" class="button-yellow">
            </form>
        </div>
    </div>
</section>
<div class="infos infos__white">
    <div class="infos__bg"></div>
    <section class="wrap">
        <h2 class="infos__title" aria-level="2"
            role="heading"><?= __( 'Besoin d\'informations sur L\'école vivante ?', 'wp' ); ?></h2>
        <a href="<?php the_permalink('42'); ?>" class="button-yellow button-center"><?= __( 'En savoir plus', 'wp' ); ?></a>
    </section>
</div>
<?php include( 'footer.php' ); ?>