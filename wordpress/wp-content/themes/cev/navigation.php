<nav class="nav">
    <h2 class="hidden">Menu de navigation</h2>
    <a href="#" class="menu-button">
        <div class="menu-button__wrap"><span class="menu-button__label">Menu</span>
            <div class="nav-icon"><span></span><span></span><span></span><span></span></div>
        </div>
    </a>
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
            <li class="menu__item">
                <a href="<?php echo home_url(); ?>" class="menu__link">Accueil</a>
            </li>
            <li class="menu__item menu__item-dropdown">
                <a href="?movie">Présentation</a>
                <div class="subnav">
                    <ul class="subnav__group">
                        <li><a href="?movie&genre=0">&aacute; Propos</a></li>
                        <li><a href="?movie&genre=2">Nos membres</a></li>
                    </ul>
                </div>
            </li>
            <li class="menu__item menu__item-dropdown">
                <a href="?tv">Comprendre</a>
                <div class="subnav">
                    <ul class="subnav__group">
                        <li><a href="?tv&genre=20">Temps d'apprentissage</a></li>
                        <li><a href="?tv&genre=21">Métier d'enseigant</a></li>
                        <li><a href="?tv&genre=21">Nos valeurs</a></li>
                    </ul>
                </div>
            </li>
            <li class="menu__item">
                <a href="<?php the_permalink( '16' ); ?>" class="menu__link">Actualités/Évènements</a>
            </li>
            <li class="menu__item">
                <a href="<?php the_permalink(); ?>" class="menu__link">Partenaires</a>
            </li>
            <li class="menu__item">
                <a href="<?php the_permalink(); ?>" class="menu__link">Contact</a>
            </li>
        </ul>
        <a href="#" class="search"><span class="hidden">Recherche</span></a>
    </div>
</nav>