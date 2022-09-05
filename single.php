<?php get_header(); ?>

<div class="content">
	
	<div id="page-title-sticky">
		<?php get_template_part('inc/page-title'); ?>
	</div>
	
	<?php while ( have_posts() ): the_post(); ?>
	
		<div class="content-wrap">
			<div class="content-wrap-inner group">
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<div class="entry-media">
						<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
					</div>
					<header class="entry-header group">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<div class="entry-meta">
							<span class="entry-date"><i class="far fa-calendar"></i><?php the_time( get_option('date_format') ); ?></span>
							<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
								<span class="entry-comments"><i class="far fa-comment"></i><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></span>
							<?php endif; ?>
							<span class="entry-author"><i class="far fa-user"></i><?php the_author_posts_link(); ?></span>
						</div>
					</header>
					<div class="entry-content">
						<div class="entry themeform">
							<?php the_content(); ?>
							<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','inunity'),'after'=>'</div>')); ?>
							<div class="clear"></div>
						</div><!--/.entry-->
					</div>

					<div class="entry-footer group">

						<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','inunity').'</span> ','','</p>'); ?>
						
						<div class="clear"></div>
						
						<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
							<div class="author-bio">
								<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
								<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
								<p class="bio-desc"><?php the_author_meta('description'); ?></p>
								<div class="clear"></div>
							</div>
						<?php endif; ?>
						
						<?php do_action( 'alx_ext_sharrre_footer' ); ?>
						
						<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
						
						<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>

						<?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
						
					</div>
				
				</article>
			
			</div>
		</div>
		
	<?php endwhile; ?>

</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>