<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); 
?>

<header class="page-header">
	<h1 class="page-title">
		<?php wp_title(); ?>
	</h1>
</header>



		<div id="primary">
			<div id="content" role="main">
				
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() );?>
				
				<?php endwhile; ?>		

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>