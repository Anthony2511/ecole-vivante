<?php
/*
Template Name: Page Job
*/; ?>

<?php include( 'head.php' ); ?>

	<body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php include( 'navigation.php' ); ?>
<?php get_header(); ?>
<section class="job-page wrap">
	<h2 class="title-center title__blue" aria-level="2"
	    role="heading"><?= __( 'Le métier d\'enseignant', 'wp' ); ?></h2>
	<div class="job-page__container">
		<p class="job-page__intro">
			À la Cité-école vivante, le métier d’enseignant est différent :
			il se vit comme une véritable action collective. <strong>Tout est éducatif…</strong> donc
			tous contribuent à éduquer ! Cette dimension collective et collaborative se
			concrétise notamment par 5 dispositifs.
		</p>
		<ol class="job-page__list">
			<li class="job-page__item">
				Les enseignants s’impliquent dans la gestion des temps de vie hors cours
				(surveillance des couloirs, participation à la même cantine, aide au travail,
				temps d’étude…). Ils participent au « vivre ensemble ».
			</li>
			<li class="job-page__item">
				Ils sont impliqués dans divers cercles de décisions et peuvent y occuper
				fonctions spécifiques, utiles à la collectivité (chargé de direction, coordinateur
				de cycle, responsable des projets pédagogiques, responsable de la communication extérieure
				/intérieure…). Ils participent au « fonctionner ensemble ».
			</li>
			<li class="job-page__item">
				Chaque semaine, les enseignants s’investissent dans un temps de concertation
				de l’équipe éducative. Les élèves ne sont pas là ; les adultes collaborent
				pour concrétiser les projets en cours ou construisent les projets à venir, ils
				se forment et s’informent collectivement, ils débattent et prennent des décisions.
				Ils se créent ainsi une culture commune, un langage et des rituels partagés.
				Ils participent au « construire ensemble».
			</li>
			<li class="job-page__item">
				Et, bien sûr, les enseignants se consacrent aux élèves et à leurs apprentissages.
				Mais pas uniquement dans la forme scolaire ordinaire : une matière - une classe -
				un prof. Ils intègrent leur matière de spécialisation dans des temps de décloisonnement
				disciplinaire, ils animent des ateliers, des mises en œuvre de projets liés à
				leur spécialisation, mais offrant une approche « par les mains » et bien entendu,
				ils enseignement aussi, fondamentalement, les concepts clés de leur spécialisation.
				participent au « apprendre ensemble ».
			</li>
			<li class="job-page__item">
				Les enseignants accompagnent individuellement les élèves d’un groupe de 12 adolescents.
				Chacun devient ainsi un enseignant référent pour un groupe restreint d’apprenants.
				Ils participent au « être ensemble ».
			</li>
		</ol>
		<div class="job-page__conclusion">
			<p>
				Toute cette action collective n’est possible que si on s’en donne les moyens.
				Et pour cela, le temps de travail institutionnel de l’enseignant est modifié.
				Il ne s’agit plus de 20 ou 22 heures de temps à l’école (en face de classes, dans la forme scolaire)
				et de 18 ou 16 heures à domicile (de préparation, de correction...), mais bien d’une fourchette proche
				de 38h de vie à l’école, avec des répartitions du type  :
				15h d’enseignement spécifique – 15h d’accompagnement/d’intégration aux projets / de préparation
				ou d’évaluation – 8h fonctionnement. C’est une valorisation institutionnelle des tâches et compétences réelles
				du métier.
			</p>
			<p>
				Rappelons-le, cette organisation de l’école est inspirée du CLE (Collège-Lycée Expérimental à Caen)
				qui depuis 35 ans accompagne 400 élèves avec environ 40 membres de l’équipe éducative.
				Ensemble ils se développent professionnellement… à l’école de leur école!
			</p>
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


<?php include( 'footer.php' ); ?>