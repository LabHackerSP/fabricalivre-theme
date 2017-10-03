<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fabricalivre
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content item">
		<?php 
                $file = get_field('mob_fotos');
        ?>
        	<a href="<?php echo esc_url( get_permalink() )  ?>">	
        	<div class="container">
				
				<img class="image" src="<?php echo $file; ?>" />
				<div class="middle">
					<div class="text">ver detalhes</div>
				</div>
			</div>
			</a>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
