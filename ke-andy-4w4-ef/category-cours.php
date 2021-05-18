<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */

get_header();
?>
	<main id="primary" class="site-main">
	<?php if ( have_posts() ) : ?>

<header class="page-header">
	<?php
	the_archive_title( '<h1 class="page-title">', '</h1>' );
	the_archive_description( '<div class="archive-description">', '</div>' );
	?>
</header><!-- .page-header -->
	
	<?php if ( have_posts() ) : ?>
			<section class="session">
			<?php
			//global $tProprieté;
			while ( have_posts() ) :
				the_post();
                convertirTableau($tPropriété);
				//print_r($tPropriété);
				get_template_part( 'template-parts/content', 'cours-gabarit' ); 
				
			endwhile;?>
			</section> <!-- fin section cours -->
		<?php endif; ?>
		<?php endif; ?>
	</main><!-- #main -->

<?php 
// get_sidebar();
get_footer();

function convertirTableau(&$tPropriété)
{
	/*
	$titre = get_the_title(); 
	// 582-1W1 Mise en page Web (75h)
	$sigle = substr($titre, 0, 7);
	$nbHeure = substr($titre,-4,3);
	$titrePartiel =substr($titre,8,-6);
	$session = substr($titre, 4,1);
	// $contenu = get_the_content();
	// $resume = substr($contenu, 0, 200);
	$typeCours = get_field('type_de_cours');
*/

	$tPropriété['titre'] = get_the_title(); 
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
	$tPropriété['nbHeure'] = substr($tPropriété['titre'],-6,6);
	$tPropriété['titrePartiel'] = substr($tPropriété['titre'],8,-6);
	$tPropriété['session'] = substr($tPropriété['titre'], 4,1);
	$tPropriété['typeCours'] = get_field('type_de_cours');
}

