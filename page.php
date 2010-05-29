<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<?php get_header(); ?>

		<div id="container">
			<div id="content">

<?php the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
	<?php the_content(); ?>
	<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'theme' ), 'after' => '</div>' ) ); ?>
	<?php edit_post_link( __( 'Edit', 'theme' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->

	<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>