<?php
/**
 * Template Name: Wide
 */

get_header(); ?>

<header class="page-header<?php echo themedd_page_header_classes(); ?>">
	<h1 class="page-title"><?php echo get_the_title( get_the_ID() ); ?></h1>
</header>

<div class="wrapper wide<?php echo themedd_wrapper_classes(); ?>">

	<div id="primary" class="content-area<?php echo themedd_primary_classes(); ?>">
		<main id="main" class="site-main" role="main">
		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'page' );

			endwhile;
		?>
		</main>
	</div>

</div>
<?php
get_footer();
