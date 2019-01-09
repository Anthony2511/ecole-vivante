<nav class="nav">
    <h2 class="hidden">Menu de navigation</h2>
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
            <li class="menu__item <?php echo $thePostID == 6 ? "menu__active" : "" ;?>">
                <a href="<?php echo home_url(); ?>" class="menu__link">Accueil</a>
            </li>
            <li class="menu__item-dropdown <?php echo $thePostID == 42 || $thePostID == 59 ? "menu__active" : "" ;?>">
                <a href="#" class="menu__item-link">Présentation</a>
                <ul class="subnav">
                    <li class="subnav__li"><a href="<?php the_permalink('42'); ?>">&Aacute; Propos</a></li>
                    <li class="subnav__li"><a href="<?php the_permalink(); ?>">Nos membres</a></li>
                </ul>
            </li>
            <li class="menu__item-dropdown">
                <a href="#" class="menu__item-link">Comprendre</a>
                <ul class="subnav">
                    <li class="subnav__li"><a href="<?php the_permalink( '16' ); ?>">Temps d'apprentissage</a></li>
                    <li class="subnav__li"><a href="<?php the_permalink(); ?>">Métier d'enseignant</a></li>
                    <li class="subnav__li"><a href="<?php the_permalink(); ?>">Nos valeurs</a></li>
                </ul>
            </li>
            <li class="menu__item-dropdown">
                <a href="#" class="menu__item-link">Infos pratiques</a>
                <ul class="subnav">
                    <li class="subnav__li"><a href="<?php the_permalink( '16' ); ?>">FAQ</a></li>
                    <li class="subnav__li"><a href="<?php the_permalink(); ?>">Horaires</a></li>
                </ul>
            </li>
            <li class="menu__item <?php echo $thePostID == 16 ? "menu__active" : "" ;?>">
                <a href="<?php the_permalink( '16' ); ?>" class="menu__link">Actualités/Évènements</a>
            </li>
            <li class="menu__item <?php echo $thePostID == 62 ? "menu__active" : "" ;?>">
                <a href="<?php the_permalink('62'); ?>" class="menu__link">Contact</a>
            </li>
        </ul>
        <a href="#" class="search"><span class="hidden">Recherche</span></a>
    </div>
</nav>