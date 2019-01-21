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
    <h2 class="who-page__title title-center title__blue" aria-level="2"
        role="heading"><?= __( 'Nos membres', 'wp' ); ?></h2>
	<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
        <div class="members-page__container">
			<?php if ( have_rows( 'membre' ) ): ?>
				<?php while ( have_rows( 'membre' ) ): the_row(); ?>
                    <div class="members-page__bloc">
						<?php $membersImg = get_sub_field( 'membre-img' ); ?>

						<?php if ( $membersImg == '' ): ?>
                            <figure class="members-page__figure">
                                <img src="<?= $images . '/../../images/avatar.png'; ?>" alt="">
                            </figure>
						<?php else: ?>
                            <figure class="members-page__figure">
								<?php if ( ! empty( $membersImg ) ): ?>
									<?php $size = 'thumb-members';
									$thumb      = $membersImg['sizes'][ $size ]; ?>
                                    <img src="<?= $thumb; ?>" width="150" height="150"
                                         alt="<?= $membersImg['alt']; ?>">
								<?php endif; ?>
                            </figure>
						<?php endif; ?>
                        <section class="members-page__infos">
                            <h3 aria-level="3" role="heading"
                                class="members-page__title"><?= the_sub_field( 'membre-fullname' ); ?></h3>
                            <ul class="members-page__list">
                                <li class="members-page__item members-page__item--tel">
									<?= the_sub_field( 'membre-tel' ); ?>
                                </li>
                                <li class="members-page__item members-page__item--email">
									<?= the_sub_field( 'membre-email' ); ?>
                                </li>
                            </ul>
                            <p class="members-page__text-info">
								<?= the_sub_field( 'membre-text' ); ?>
                            </p>
                        </section>
                    </div>
				<?php endwhile; endif; ?>
        </div>
	<?php endwhile; endif; ?>
</section>
<div class="infos infos__white">
    <div class="infos__bg"></div>
    <section class="wrap">
        <h2 class="infos__title" aria-level="2"
            role="heading"><?= __( 'Envie de nous rejoindre ?', 'wp' ); ?></h2>
        <a href="<?php the_permalink(); ?>"
           class="button-yellow button-center"><?= __( 'Rejoignez-nous', 'wp' ); ?></a>
    </section>
</div>


<?php include( 'footer.php' ); ?>