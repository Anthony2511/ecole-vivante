<footer class="footer">
    <div class=" footer__main wrap">
        <section class="footer__intro">
            <h2 class="title title__white title__no-margin" aria-level="2"
                role="heading"><?= __( 'La cité - Ecole vivante', 'wp' ); ?></h2>
            <a href="#" class="footer__social"><span><?= __( 'Facebook', 'wp' ); ?></span></a>
        </section>
        <div class="footer__container">
            <section class="footer__bloc">
                <h3 aria-level="3" role="heading" class="footer__title"><?= __( 'Contact', 'wp' ); ?></h3>
                <ul class="footer__contact">
                    <li>Rue des charrons n°116</li>
                    <li>4800 Verviers</li>
                    <li>Belgique</li>
                </ul>
                <ul class="footer__contact">
                    <li class="footer__contact-item footer__contact-item--tel">0478 45 85 96</li>
                    <li class="footer__contact-item footer__contact-item--mail">ecolevivante@gmail.com</li>
                </ul>
            </section>
            <section class="footer__bloc">
                <h3 aria-level="3" role="heading" class="footer__title"><?= __( 'Dernières actualités', 'wp' ); ?></h3>
                <ul class="footer__contact">
					<?php $posts = new WP_Query( [
						'posts_per_page' => 3,
						'post_type'      => 'news',
						'orderby'        => 'post-date',
						'order'          => 'DESC'
					] ); ?>
					<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ): $posts->the_post(); ?>
                        <li class="footer__contact-item">
                            <a href="<?php the_permalink(); ?>"
                               title="Vers l'actualité : <?php the_title(); ?>"><?= the_title(); ?></a>
                        </li>
						<?php wp_reset_postdata(); ?>
					<?php endwhile; endif; ?>
                </ul>
            </section>
            <section class="footer__bloc">
                <h3 aria-level="3" role="heading"
                    class="footer__title"><?= __( 'S\'inscrire à la newsletter', 'wp' ); ?></h3>
                <form action="" method="post">
                    <label for="email" class="hidden"></label>
                    <input type="text" id="email" placeholder="jeandupont@gmail.com" class="footer__newsletter-input">
                    <input type="submit" value="S'inscrire" class="button-yellow">
                </form>
            </section>
        </div>
    </div>
    <div class="footer__partners">
        <div class="wrap">
            <h3 class="footer__partners-title" aria-level="3" role="heading">
				<?= __( 'Nos partenaires', 'wp' ); ?>
            </h3>
			<?php $posts = new WP_Query( [
				'page_id' => 117,
			] ); ?>
			<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ): $posts->the_post(); ?>
                <div class="footer__partners-bloc">
					<?php if ( have_rows( 'partenaires' ) ): ?>
						<?php while ( have_rows( 'partenaires' ) ): the_row(); ?>
                            <a href="<?= the_sub_field( 'partner-url' ); ?>" target="_blank">
								<?php $partnerLogo = get_sub_field( 'partner-img' ); ?>
                                <figure class="footer__partners-figure">
                                    <img src="<?= $partnerLogo['url']; ?>" alt="<?= $partnerLogo['alt']; ?>">
                                </figure>
                            </a>
						<?php endwhile; endif; ?>
                </div>
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="footer__copyright">
        <div class="wrap">
            <span class="footer__copyright-text">
                <?= __( '© La cité - École Vivante - Tous droits réservés. Design by', 'wp' ); ?>
                <a href="#">
                    <?= __('Anthony Beaumecker','wp'); ?>
                </a>
            </span>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script src="<?= $scripts . 'nav.js'; ?>"></script>
<script src="<?= $scripts . 'no-js.js'; ?>"></script>
<script src="<?= $scripts . 'show.js'; ?>"></script>
</body>
</html>
