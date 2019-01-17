<?php
/*
Template Name: Page FAQ
*/; ?>

<?php include( 'head.php' ); ?>

	<body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php include( 'navigation.php' ); ?>
<?php get_header(); ?>
<section class="faq-page wrap">
	<h2 class="title-center title__blue" aria-level="2"
	    role="heading"><?= __( 'Foire aux questions', 'wp' ); ?></h2>
	<div class="faq-page__container">
		<p class="faq-page__intro">
			Vous retrouvez ici la plupart des questions qui nous sont habituellement posées. Si vous ne trouvez pas réponse
			à ce que vous cherchez, n'hésitez pas à <a href="<?php the_permalink('62'); ?>">nous contacter.</a>
		</p>
		<div class="faq-page__bloc">
			<section class="faq-page__question">
				<h3 aria-level="3" role="heading" class="faq-page__title button-show">
					Qu'est ce qui rend la cité différente et similaire aux autres écoles secondaires ?
				</h3>
				<p class="faq-page__text effect" style="display: none;">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce gravida pellentesque urna,
					et fermentum metus vehicula imperdiet. Nulla accumsan iaculis iaculis. Nullam lobortis dolor
					id dolor tincidunt fringilla. Nulla facilisi. Curabitur tristique quis lacus ut bibendum.
					Quisque vehicula in lorem eget luctus. Phasellus purus diam, mollis molestie enim eget,
					rutrum sodales erat. Morbi quis ante orci. Mauris vel felis posuere felis iaculis egestas.
					Curabitur pharetra, velit quis aliquet venenatis, turpis justo tristique eros, a sagittis tortor
					eros id orci. In volutpat id ex nec hendrerit. Vestibulum sit amet magna augue. Nam aliquet
					metus nisi, vitae pellentesque ex auctor id. Nullam feugiat tellus auctor porta bibendum.
					Suspendisse laoreet arcu at lorem euismod, in ullamcorper orci suscipit.
				</p>
			</section>
            <section class="faq-page__question">
                <h3 aria-level="3" role="heading" class="faq-page__title button-show">
                    Quelles sont les actualités et les perspectives du projet ?
                </h3>
                <p class="faq-page__text effect" style="display: none;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce gravida pellentesque urna,
                    et fermentum metus vehicula imperdiet. Nulla accumsan iaculis iaculis. Nullam lobortis dolor
                    id dolor tincidunt fringilla. Nulla facilisi. Curabitur tristique quis lacus ut bibendum.
                    Quisque vehicula in lorem eget luctus. Phasellus purus diam, mollis molestie enim eget,
                    rutrum sodales erat. Morbi quis ante orci. Mauris vel felis posuere felis iaculis egestas.
                    Curabitur pharetra, velit quis aliquet venenatis, turpis justo tristique eros, a sagittis tortor
                    eros id orci. In volutpat id ex nec hendrerit. Vestibulum sit amet magna augue. Nam aliquet
                    metus nisi, vitae pellentesque ex auctor id. Nullam feugiat tellus auctor porta bibendum.
                    Suspendisse laoreet arcu at lorem euismod, in ullamcorper orci suscipit.
                </p>
            </section>
            <section class="faq-page__question">
                <h3 aria-level="3" role="heading" class="faq-page__title button-show">
                    Comment s'organisent concrètement les emplois du temps à la cité ?
                </h3>
                <p class="faq-page__text effect" style="display: none;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce gravida pellentesque urna,
                    et fermentum metus vehicula imperdiet. Nulla accumsan iaculis iaculis. Nullam lobortis dolor
                    id dolor tincidunt fringilla. Nulla facilisi. Curabitur tristique quis lacus ut bibendum.
                    Quisque vehicula in lorem eget luctus. Phasellus purus diam, mollis molestie enim eget,
                    rutrum sodales erat. Morbi quis ante orci. Mauris vel felis posuere felis iaculis egestas.
                    Curabitur pharetra, velit quis aliquet venenatis, turpis justo tristique eros, a sagittis tortor
                    eros id orci. In volutpat id ex nec hendrerit. Vestibulum sit amet magna augue. Nam aliquet
                    metus nisi, vitae pellentesque ex auctor id. Nullam feugiat tellus auctor porta bibendum.
                    Suspendisse laoreet arcu at lorem euismod, in ullamcorper orci suscipit.
                </p>
            </section>
		</div>
	</div>
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

<?php include('footer.php'); ?>