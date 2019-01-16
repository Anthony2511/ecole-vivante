<nav class="nav">
    <h2 class="hidden"><?= __( 'Menu de navigation', 'wp' ); ?></h2>
    <div class="nav__button">
        <div class="nav__button-wrap">
            <div class="nav__icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="nav__container">
        <a href="<?= get_home_url(); ?>" class="nav__bloc-link">
			<?php if ( ! is_front_page() && ! is_home() ): ?>
                <figure>
                    <img src="<?= $images . '/../../images/LogoSiteNom.png'; ?>" alt="">
                </figure>
			<?php else: ?>
                <figure>
                    <img src="<?= $images . '/../../images/LogoSite.png'; ?>" alt="">
                </figure>
			<?php endif; ?>
        </a>

		<?php global $post;
		$thePostID = $post->ID; ?>
        <ul class="menu">
            <li class="menu__item <?php echo $thePostID == 6 ? "menu__active" : ""; ?>">
                <a href="<?php echo home_url(); ?>" class="menu__link">
					<?= __( 'Accueil', 'wp' ); ?>
                </a>
            </li>
            <li class="menu__item-dropdown">
                <a href="#" class="menu__item-link">
					<?= __( 'Présentation', 'wp' ); ?>
                </a>
                <ul class="subnav">
                    <li class="subnav__li">
                        <a href="<?php the_permalink( '42' ); ?>">
							<?= __( '&Aacute; Propos', 'wp' ); ?>
                        </a>
                    </li>
                    <li class="subnav__li">
                        <a href="<?php the_permalink( '67' ); ?>">
							<?= __( 'Nos membres', 'wp' ); ?>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu__item-dropdown">
                <a href="#" class="menu__item-link">
					<?= __( 'Comprendre', 'wp' ); ?>
                </a>
                <ul class="subnav">
                    <li class="subnav__li"><a href="<?php the_permalink( '85' ); ?>">
							<?= __( 'Temps d\'apprentissage', 'wp' ); ?>
                        </a>
                    </li>
                    <li class="subnav__li"><a href="<?php the_permalink( '104' ); ?>">
							<?= __( 'Métier d\'enseignant', 'wp' ); ?>
                        </a>
                    </li>
                    <li class="subnav__li"><a href="<?php the_permalink(); ?>">
							<?= __( 'Nos valeurs', 'wp' ); ?>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu__item-dropdown">
                <a href="#" class="menu__item-link">
					<?= __( 'Infos pratiques', 'wp' ); ?>
                </a>
                <ul class="subnav">
                    <li class="subnav__li">
                        <a href="<?php the_permalink( '127' ); ?>">
							<?= __( 'FAQ', 'wp' ); ?>
                        </a>
                    </li>
                    <li class="subnav__li">
                        <a href="<?php the_permalink(); ?>">
							<?= __( 'Horaires', 'wp' ); ?>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu__item <?php echo $thePostID == 16 ? "menu__active" : ""; ?>">
                <a href="<?php the_permalink( '16' ); ?>" class="menu__link">
					<?= __( 'Actualités/Évènements', 'wp' ); ?>
                </a>
            </li>
            <li class="menu__item <?php echo $thePostID == 62 ? "menu__active" : ""; ?>">
                <a href="<?php the_permalink( '62' ); ?>" class="menu__link">
					<?= __( 'Contact', 'wp' ); ?>
                </a>
            </li>
        </ul>
        <a href="#" class="search"><span class="hidden">Recherche</span></a>
    </div>
</nav>