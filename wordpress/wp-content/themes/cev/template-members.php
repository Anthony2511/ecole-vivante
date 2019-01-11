<?php
/*
Template Name: Page Members
*/; ?>

<?php include( 'head.php' ); ?>

    <body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php include( 'navigation.php' ); ?>
<?php get_header(); ?>
<section class="members-page wrap">
    <h2 class="title-center title__blue" aria-level="2"
        role="heading"><?= __( 'Nos membres', 'wp' ); ?></h2>
    <div class="members-page__container">
        <div class="members-page__bloc">
            <figure class="members-page__figure">
                <img src="<?= $images . '/../../images/comprendre.png'; ?>" alt="">
            </figure>
            <section class="members-page__infos">
                <h3 aria-level="3" role="heading" class="members-page__title">Virginie Jamsin</h3>
                <ul class="members-page__list">
                    <li class="members-page__item members-page__item--tel">0478 85 95 96</li>
                    <li class="members-page__item members-page__item--email">virginie.jamsin@gmail.com</li>
                </ul>
                <p class="members-page__text-info">
                    Centrée sur l’apprentissage et, plus généralement, sur la formation tout au long de la vie,
                    Virginie dispose aujourd’hui d’une maitrise en sciences de l’éducation en finalité formation
                    des adultes et travaille comme assistante et chercheuse à l’université de Liège.
                </p>
            </section>
        </div>
        <div class="members-page__bloc">
            <figure class="members-page__figure">
                <img src="<?= $images . '/../../images/comprendre.png'; ?>" alt="">
            </figure>
            <section class="members-page__infos">
                <h3 aria-level="3" role="heading" class="members-page__title">Virginie Jamsin</h3>
                <ul>
                    <li>0478 85 95 96</li>
                    <li>virginie.jamsin@gmail.com</li>
                </ul>
            </section>
        </div>
        <div class="members-page__bloc">
            <figure class="members-page__figure">
                <img src="<?= $images . '/../../images/comprendre.png'; ?>" alt="">
            </figure>
            <section class="members-page__infos">
                <h3 aria-level="3" role="heading" class="members-page__title">Virginie Jamsin</h3>
                <ul>
                    <li>0478 85 95 96</li>
                    <li>virginie.jamsin@gmail.com</li>
                </ul>
            </section>
        </div>
        <div class="members-page__bloc">
            <figure class="members-page__figure">
                <img src="<?= $images . '/../../images/comprendre.png'; ?>" alt="">
            </figure>
            <section class="members-page__infos">
                <h3 aria-level="3" role="heading" class="members-page__title">Virginie Jamsin</h3>
                <ul>
                    <li>0478 85 95 96</li>
                    <li>virginie.jamsin@gmail.com</li>
                </ul>
            </section>
        </div>
        <div class="members-page__bloc">
            <figure class="members-page__figure">
                <img src="<?= $images . '/../../images/comprendre.png'; ?>" alt="">
            </figure>
            <section class="members-page__infos">
                <h3 aria-level="3" role="heading" class="members-page__title">Virginie Jamsin</h3>
                <ul>
                    <li>0478 85 95 96</li>
                    <li>virginie.jamsin@gmail.com</li>
                </ul>
            </section>
        </div>
        <div class="members-page__bloc">
            <figure class="members-page__figure">
                <img src="<?= $images . '/../../images/comprendre.png'; ?>" alt="">
            </figure>
            <section class="members-page__infos">
                <h3 aria-level="3" role="heading" class="members-page__title">Virginie Jamsin</h3>
                <ul>
                    <li>0478 85 95 96</li>
                    <li>virginie.jamsin@gmail.com</li>
                </ul>
            </section>
        </div>
    </div>
</section>
<div class="infos infos__white">
    <div class="infos__bg"></div>
    <section class="wrap">
        <h2 class="infos__title" aria-level="2"
            role="heading"><?= __( 'Envie de nous rejoindre ?', 'wp' ); ?></h2>
        <a href="<?php the_permalink(  ); ?>"
           class="button-yellow button-center"><?= __( 'Rejoignez-nous', 'wp' ); ?></a>
    </section>
</div>


<?php include( 'footer.php' ); ?>