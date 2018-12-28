<?php
/*
Template Name: Page News
*/
; ?>

<?php include('head.php'); ?>

	<body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
    <?php include('navigation.php'); ?>
    <?php get_header(); ?>
    <section class="news-page wrap">
        <h2 class="title title__blue title-center" aria-level="2" role="heading"><?= __('Nos actualités/évènements','wp'); ?></h2>
    </section>

<?php include('footer.php'); ?>