<?php get_header(); ?>


<div class="content">

	<?php if ( get_theme_mod('profile-image') || get_theme_mod('profile-name') || get_theme_mod('profile-description') ): ?>
		<div id="profile" class="group">
			<div id="profile-inner" class="group">
				<?php if ( get_theme_mod('profile-image') ): ?>
					<div id="profile-image"><img src="<?php echo esc_html( get_theme_mod('profile-image') ); ?>" alt="" /></div>
				<?php endif; ?>
				<?php if ( get_theme_mod('profile-name') ): ?>
					<div id="profile-name"><?php echo esc_html( get_theme_mod('profile-name') ); ?></div>
				<?php endif; ?>
				<?php if ( get_theme_mod('profile-description') ): ?>
					<div id="profile-description"><?php echo wp_kses_post( get_theme_mod('profile-description') ); ?></div>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>
	
	<?php if ( get_theme_mod('heading-enable','on') == 'on' ) : ?>
		<div id="page-title-sticky">
			<?php get_template_part('inc/page-title'); ?>
		</div>
	<?php endif; ?>
	
	<?php get_template_part('inc/front-widgets-top'); ?>
	
	<?php if ( have_posts() ) : ?>
		
		<div class="magic-grid-wrap">	
			<div class="magic-grid">
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php endwhile; ?>
			</div>
		</div>
		
		<?php get_template_part('inc/front-widgets-bottom'); ?>
		<?php get_template_part('inc/pagination'); ?>
		
	<?php endif; ?>
	
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>