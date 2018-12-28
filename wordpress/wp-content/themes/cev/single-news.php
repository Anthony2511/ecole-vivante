<?php
/*
Template Name: Page Single News
*/; ?>

<?php include( 'head.php' ); ?>

<body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php get_header(); ?>
<?php include( 'navigation.php' ); ?>
<section class="single-news wrap">
    <a href="<?php the_permalink( 16 ); ?>" class="breadcrumb"><?= __( 'Retourner aux actualités', 'wp' ); ?></a>
    <h2 class="title title__blue title-center" aria-level="2" role="heading"><?php the_title(); ?></h2>
    <div class="single-news__container">
        <time datetime="<?= get_the_date( "d/m/y" ); ?>" class="single-news__date"><?= get_the_date(); ?></time>
        <figure class="single-news__figure">
		    <?php $news = get_field('news-img'); ?>
            <img src="<?= $news['url']; ?>" alt="<?= $news['alt']; ?>">
        </figure>
        <div class="single-news__text">
	        <?= the_field( 'news-text' ); ?>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
