<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fabricalivre
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php
				if ( has_post_thumbnail() ) {
    				$banner = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
					}
				?>
				
				<div class="home-banner" style="background-image:url('<?php echo $banner[0]; ?>'">
					<div class="home-content">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<?php
							the_content();
						?>
					</div><!-- .entry-content -->
				</div>
				<div class="home-passoapasso">
				</div>
				
			</article><!-- #post-<?php the_ID(); ?> -->

			<?php
				endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
