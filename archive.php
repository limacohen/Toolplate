<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<?php get_header(); ?>

		<div id="primary">
			<div id="content">

<?php the_post(); ?>
				<h2 class="page-title">
<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>', 'theme' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: <span>%s</span>', 'theme' ), get_the_date('F Y') ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: <span>%s</span>', 'theme' ), get_the_date('Y') ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'theme' ); ?>
<?php endif; ?>
				</h2>

<?php rewind_posts(); ?>

<?php get_template_part( 'loop', 'archive' ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
