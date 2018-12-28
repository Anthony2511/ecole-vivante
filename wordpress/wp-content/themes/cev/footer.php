<footer class="footer">
    <div class="wrap">
        <section class="footer__intro">
            <h2 class="title title__white title__no-margin" aria-level="2"
                role="heading"><?= __( 'La cité - Ecole vivante', 'wp' ); ?></h2>
            <a href="#" class="footer__social"><span>Facebook</span></a>
        </section>
        <div class="footer__container">
            <section class="footer__bloc">
                <h3 aria-level="3" role="heading" class="footer__title">Contact</h3>
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
                <h3 aria-level="3" role="heading" class="footer__title">Dernières actualités</h3>
                <ul class="footer__contact">
					<?php $posts = new WP_Query( [
						'posts_per_page' => 3,
						'post_type'      => 'news',
						'orderby'        => 'post-date',
						'order'          => 'DESC'
					] ); ?>
					<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ): $posts->the_post(); ?>
                        <li class="footer__contact-item">
                            <a href="<?php the_permalink(); ?>" title="Vers l'actualité : <?php the_title(); ?>"><?= the_title(); ?></a>
                        </li>
						<?php wp_reset_postdata(); ?>
					<?php endwhile; endif; ?>
                </ul>


            </section>
            <section class="footer__bloc">
                <h3 aria-level="3" role="heading" class="footer__title">S'inscrire à la newsletter</h3>
            </section>
        </div>
    </div>

</footer>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="<?= $scripts . 'nav.js'; ?>"></script>
<script src="<?= $scripts . 'no-js.js'; ?>"></script>


</body>
</html>
