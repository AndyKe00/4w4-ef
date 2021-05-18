<?php
/**
 * Template part pour afficher les blocs de front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4ed
 */
 
 global $tPropriété;
?>

<article>
	<p><?php echo $tPropriété['typeCours']?></p>
	<a href="<?php echo get_permalink(); ?>"><?php echo $tPropriété['sigle']; ?></a>
	<p><?php echo $tPropriété['nbHeure']; ?></p>
</article>
