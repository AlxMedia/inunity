<?php get_header(); ?>

<div class="content">
	
	<div id="page-title-sticky">
		<?php get_template_part('inc/page-title'); ?>
	</div>
	
	<?php if ( have_posts() ) : ?>
		
		<div class="magic-grid-wrap">	
			<div class="magic-grid">
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php endwhile; ?>
			</div>
		</div>
		
		<?php get_template_part('inc/pagination'); ?>
		
	<?php endif; ?>
		
</div><!--/.content-->

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>