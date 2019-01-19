<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php WP_Advanced_Search(); ?>.

	</main><!-- .site-main -->
</section><!-- .content-area -->

<?php get_footer(); ?>
