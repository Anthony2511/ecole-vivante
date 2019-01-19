<?php
/*
Template Name: Page News
*/; ?>

<?php include( 'head.php' ); ?>

    <body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php include( 'navigation.php' ); ?>
<?php get_header(); ?>
<section class="home-news wrap news-page">
    <h2 class="home-news__title home-news__title--icon title-center title__blue" aria-level="2"
        role="heading"><?= __( 'Nos dernières actualités/évènements', 'wp' ); ?></h2>
	<?php include( 'parts/switcher-news.php' ); ?>
    <div class="home-news__container">
		<?php $posts = new WP_Query( [
			'posts_per_page' => - 1,
			'post_type'      => 'news',
			'orderby'        => 'post-date',
			'order'          => 'DESC'
		] ); ?>
		<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ): $posts->the_post(); ?>
            <div class="home-news__bloc news-page__bloc <?= wp_display_taxonomy_terms( $post->ID, 'category', 'slug' ); ?>"
                 id="post-<?php the_ID(); ?>">
				<?php $homeNews = get_field( 'news-img' ); ?>
                <figure class="home-news__figure">
					<?php if ( ! empty( $homeNews ) ): ?>
						<?php $size = 'thumb-home-news';
						$thumb      = $homeNews['sizes'][ $size ]; ?>
                        <img class="home-news__img" src="<?= $thumb; ?>" width="336" height="215"
                             alt="<?= $homeNews['alt']; ?>">
					<?php endif; ?>
                </figure>
                <section class="news-page__infos">
					<?php $newsID = $post->ID; ?>
					<?php if ( wp_get_taxonomies( $newsID, 'category' ) ): ?>
                        <span class="home-news__category news-page__category"><?= wp_get_taxonomies( $newsID, 'category' ); ?></span>
					<?php endif; ?>

                    <h3 class="home-news__bloc-title"><?= the_title(); ?></h3>
                    <time class="home-news__bloc-date"
                          datetime="<?= get_the_date( "d/m/y" ); ?>"><?= get_the_date(); ?></time>
                    <p class="home-news__bloc-text">
						<?= wp_trim_words( get_field( 'news-text' ), 29, '...' ); ?>
                    </p>
                    <a href="<?= the_permalink(); ?>" class="button-white"
                       title="Vers l'article : <?= the_title(); ?>"><?= __( 'En savoir plus', 'wp' ); ?></a>
                </section>
                <a href="<?= the_permalink(); ?>" class="home-news__bloc-link"
                   title="Vers l'article : <?= the_title(); ?>"></a>
            </div>
			<?php wp_reset_postdata(); ?>
		<?php endwhile; endif; ?>
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