<nav class="menu">
    <h2 class="hidden">Menu de navigation</h2>
    <a href="#" class="menu-button">
        <div class="menu-button__wrap"><span class="menu-button__label">Menu</span>
            <div class="nav-icon"><span></span><span></span><span></span><span></span></div>
        </div>
    </a>
    <div class="menu__container">
        <a href="<?= get_home_url(); ?>" class="menu__bloc-link">
            <?php if ( !is_front_page() && !is_home() ): ?>
                <figure>
                    <img src="<?= $images . '/../../images/LogoSiteNom.png';?>" alt="">
                </figure>
            <?php else: ?>
                <figure>
                    <img src="<?= $images . '/../../images/LogoSite.png';?>" alt="">
                </figure>
            <?php endif; ?>
        </a>
	    <?php global $post; $thePostID = $post->ID; ?>
        <div class="flexnav__wrap"><a class="flexnav__link <?php echo $thePostID == 5 ? "active" : ""; ?>" href="<?php echo home_url(); ?>">
                Accueil
            </a>
            <div class="flexnav__dropwrap flexnav__dropwrap1">
                <a href="#" class="flexnav__dropbtn flexnav__dropbtn1 <?php echo $thePostID == 33 || $thePostID == 59 ? "active" : ""; ?> flexnav__dropbtn--arrow" id="test">
                    Présentation
                </a>
                <div class="flexnav__dropcnt flexnav__dropcnt1">
                    <a class="flexnav__dropcnt__link <?php echo $thePostID == 33 ? "active" : ""; ?>" href="<?php echo the_permalink('33'); ?>">
                        A Propos
                    </a>
                    <a class="flexnav__dropcnt__link <?php echo $thePostID == 59 ? "active" : ""; ?>" href="<?php echo the_permalink('59'); ?>">
                        Nos membres
                    </a>
                </div>
            </div>
            <div class="flexnav__dropwrap flexnav__dropwrap2">
                <a href="#" class="flexnav__dropbtn flexnav__dropbtn2 <?php echo $thePostID == 106 || $thePostID == 127 ? "active" : ""; ?> flexnav__dropbtn--arrow">
                    Comprendre
                </a>
                <div class="flexnav__dropcnt flexnav__dropcnt2">
                    <a class="flexnav__dropcnt__link <?php echo $thePostID == 106 ? "active" : ""; ?>" href="<?php the_permalink('106'); ?>">
                        A Propos
                    </a>
                    <a class="flexnav__dropcnt__link <?php echo $thePostID == 127 ? "active" : ""; ?>" href="<?php echo the_permalink('127'); ?>">
                        Nos membres
                    </a>
                </div>
            </div>
            <a class="flexnav__link <?php echo $thePostID == 16 ? "active" : ""; ?>" href="<?php the_permalink('16'); ?>">
                Actualités/Évènements
            </a>
            <a class="flexnav__link <?php echo $thePostID == 178 ? "active" : ""; ?>" href="<?php the_permalink('178'); ?>">
                Partenaires
            </a>
            <a class="flexnav__link <?php echo $thePostID == 267 ? "active" : ""; ?>" href="<?php the_permalink('267'); ?>">
                Contact
            </a>
        </div>
        <a href="#" class="search"><span class="hidden">Recherche</span></a>

    </div>
</nav>