<?php
/*
Template Name: Page d’accueil
*/


include( 'head.php' ); ?>

<body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php get_header( 'home' ); ?>
<?php include( 'navigation.php' ); ?>
<section class="home-who wrap">
    <h2 class="home-who__title--icon title title__blue" aria-level="2"
        role="heading"><?= __( 'Qui sommes-nous ?', 'wp' ); ?></h2>
    <div class="home-who__container">
		<?php $posts = new WP_Query( [
			'page_id' => 42,
		] ); ?>
		<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ): $posts->the_post(); ?>
            <div class="home-who__bloc">
                <div class="home-who__bloc-text">
					<?= wp_trim_words( get_field( 'about-intro-text' ), 114, '...' ); ?>
                </div>
                <a href="<?php the_permalink( '42' ); ?>" title="Vers la page A Propos" class="button-yellow"><?= __( 'En savoir plus', 'wp' ); ?></a>
            </div>
            <div class="home-who__bloc-img">
                <figure>
					<?php $aboutImg = get_field( 'about-img' ); ?>
                    <img src="<?= $aboutImg['url']; ?>" alt="<?= $aboutImg['alt']; ?>">
                </figure>
            </div>
			<?php wp_reset_postdata(); ?>
		<?php endwhile; endif; ?>
    </div>
</section>
<div class="home-news__background">
    <section class="home-news wrap">
        <h2 class="home-news__title home-news__title--icon title-center title__white" aria-level="2"
            role="heading"><?= __( 'Nos dernières actualités/évènements', 'wp' ); ?></h2>
        <div class="home-news__container">
			<?php $posts = new WP_Query( [
				'posts_per_page' => 3,
				'post_type'      => 'news',
				'orderby'        => 'post-date',
				'order'          => 'DESC'
			] ); ?>
			<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ): $posts->the_post(); ?>
                <div class="home-news__bloc" id="post-<?php the_ID(); ?>">
					<?php $homeNews = get_field( 'news-img' ); ?>
                    <figure class="home-news__figure">
						<?php if ( ! empty( $homeNews ) ): ?>
							<?php $size = 'thumb-home-news';
							$thumb      = $homeNews['sizes'][ $size ]; ?>
                            <img class="home-news__img" src="<?= $thumb; ?>" width="336" height="215"
                                 alt="<?= $homeNews['alt']; ?>">
						<?php endif; ?>
                    </figure>
                    <section class="home-news__infos">
						<?php $newsID = $post->ID; ?>
						<?php if ( wp_get_taxonomies( $newsID, 'category' ) ): ?>
                            <span class="home-news__category"><?= wp_get_taxonomies( $newsID, 'category' ); ?></span>
						<?php endif; ?>

                        <h3 class="home-news__bloc-title"><?= the_title(); ?></h3>
                        <time class="home-news__bloc-date"
                              datetime="<?= get_the_date( "d/m/y" ); ?>"><?= get_the_date(); ?></time>
                        <p class="home-news__bloc-text">
							<?= wp_trim_words( get_field( 'news-text' ), 25, '...' ); ?>
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
        <a href="<?= the_permalink( 16 ); ?>"
           class="button-yellow button-center"><?= __( 'Voir plus d\'actualités', 'wp' ); ?></a>
    </section>
</div>
<section class="under-home wrap">
    <h2 class="under-home__title-icon title title__blue" aria-level="2"
        role="heading"><?= __( 'Mieux comprendre', 'wp' ); ?></h2>
    <div class="under-home__container">
        <div class="under-home__bloc">
            <p class="under-home__text">
				<?= the_field( 'comprendre-text' ); ?>
            </p>
            <ul class="under-home__list">
                <li class="under-home__item">
                    <a href="<?php the_permalink( '85' ); ?>" class="under-home__link"
                       title="Vers la page : Le temps d'apprentissage">
						<?= __( 'Le temps d\'apprentissage', 'wp' ); ?>
                    </a>
                </li>
                <li class="under-home__item">
                    <a href="<?php the_permalink( '104' ); ?>" class="under-home__link"
                       title="Vers la page : Le métier d'enseignant">
						<?= __( 'Le métier d\'enseignant', 'wp' ); ?>
                    </a>
                </li>
                <li class="under-home__item">
                    <a href="<?php the_permalink(); ?>" class="under-home__link" title="Vers la page : Nos valeurs">
						<?= __( 'Nos valeurs', 'wp' ); ?>
                    </a>
                </li>
            </ul>
        </div>
        <figure class="under-home__figure">
			<?php $understandImg = get_field( 'comprendre-img' ); ?>
            <img src="<?= $understandImg['url']; ?>" alt="<?= $understandImg['alt']; ?>">
        </figure>
    </div>
</section>
<?php include('footer.php'); ?>
