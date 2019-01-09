<?php
/*
Template Name: Page Members
*/; ?>

<?php include( 'head.php' ); ?>

    <body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php include( 'navigation.php' ); ?>
<?php get_header(); ?>
<section class="home-who wrap">
    <h2 class="title-center title__blue" aria-level="2"
        role="heading"><?= __( 'Nos membres', 'wp' ); ?></h2>
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