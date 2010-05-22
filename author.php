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

				<h1 class="page-title author"><?php printf( __( 'Author Archives: <span class="vcard">%s</span>', 'theme' ), "<a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?></h1>

<?php rewind_posts(); ?>

<?php get_template_part( 'loop', 'author' ); ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
