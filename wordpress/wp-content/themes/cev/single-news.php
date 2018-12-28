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
			<?php $news = get_field( 'news-img' ); ?>
            <img src="<?= $news['url']; ?>" alt="<?= $news['alt']; ?>">
        </figure>
        <div class="single-news__text">
			<?= the_field( 'news-text' ); ?>
        </div>
    </div>
</section>
<div class="infos">
    <section class="wrap">
        <h2 class="infos__title" aria-level="2"
            role="heading"><?= __( 'Autres actualités', 'wp' ); ?></h2>
        <div class="home-news__container">
			<?php $currentID = $post->ID;
			$posts           = new WP_Query( [
				'posts_per_page' => 2,
				'post_type'      => 'news',
				'orderby'        => 'post-date',
				'order'          => 'DESC',
				'post__not_in'   => array( $currentID ),
			] ); ?>
			<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ): $posts->the_post(); ?>
                <div class="home-news__bloc single-news__bloc" id="post-<?php the_ID(); ?>">
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
							<?= wp_trim_words( get_field( 'news-text' ), 30, '...' ); ?>
                        </p>
                        <a href="<?= the_permalink(); ?>" class="button-white"><?= __( 'En savoir plus', 'wp' ); ?></a>
                    </section>
                    <a href="<?= the_permalink(); ?>" class="home-news__bloc-link"></a>
                </div>
				<?php wp_reset_postdata(); ?>
			<?php endwhile; endif; ?>
        </div>
    </section>
</div>

<?php include( 'footer.php' ); ?>
