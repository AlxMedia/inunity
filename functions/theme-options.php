<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'inunity', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'inunity' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'inunity' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'inunity' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'inunity' ),
	'button_url'  => 'https://wordpress.org/support/theme/inunity/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'inunity' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'inunity' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'inunity' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'inunity' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'inunity' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'inunity' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'inunity' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'inunity' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'inunity' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'inunity' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'inunity' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'inunity' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'inunity' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'inunity' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'inunity' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Heading
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'inunity' ),
	'description'	=> esc_html__( 'Your blog heading', 'inunity' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'inunity' ),
	'description'	=> esc_html__( 'Your blog subheading', 'inunity' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'inunity' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'inunity' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'inunity' ),
	'description'	=> esc_html__( '2 columns of widgets', 'inunity' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'inunity' ),
	'description'	=> esc_html__( '2 columns of widgets', 'inunity' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'inunity' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'inunity' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Titles
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'item-titles',
	'label'			=> esc_html__( 'Item Titles', 'inunity' ),
	'description'	=> esc_html__( 'Show titles on items', 'inunity' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Category
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'item-category',
	'label'			=> esc_html__( 'Item Categories', 'inunity' ),
	'description'	=> esc_html__( 'Show categories below each item', 'inunity' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'inunity' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'inunity' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'inunity' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'inunity' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'inunity' ),
		'categories'=> esc_html__( 'Related by categories', 'inunity' ),
		'tags'		=> esc_html__( 'Related by tags', 'inunity' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'inunity' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'inunity' ),
	'section'		=> 'blog',
	'default'		=> 'sidebar',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'inunity' ),
		'sidebar'	=> esc_html__( 'Sidebar', 'inunity' ),
		'content'	=> esc_html__( 'Below content', 'inunity' ),
	),
) );
// Header: Search
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'inunity' ),
	'description'	=> esc_html__( 'Header search button', 'inunity' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'inunity' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'inunity' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'inunity' ),
	'description'	=> esc_html__( 'Minimum width of 320px', 'inunity' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'inunity' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'inunity' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'inunity' ),
	'description'	=> esc_html__( 'A short description of you', 'inunity' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'inunity' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'inunity' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'inunity' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'inunity' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'inunity' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'inunity' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'inunity' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'inunity' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'inunity' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'inunity' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'inunity' ),
	'description'	=> esc_html__( 'Footer credit text', 'inunity' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'inunity' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'inunity' ),
	'section'		=> 'layout',
	'default'		=> 'col-1c',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'inunity' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'inunity' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'inunity' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'inunity' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'inunity' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'inunity' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'inunity' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'inunity' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'inunity' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'inunity' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'inunity' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'inunity' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'inunity' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'inunity' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function inunity_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'inunity_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'inunity' ),
		'description'	=> esc_html__( '(is_home) Primary', 'inunity' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'inunity' ),
	) );
	Kirki::add_field( 'inunity_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'inunity' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'inunity' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'inunity' ),
	) );
	Kirki::add_field( 'inunity_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'inunity' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'inunity' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'inunity' ),
	) );
	Kirki::add_field( 'inunity_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'inunity' ),
		'description'	=> esc_html__( '(is_category) Primary', 'inunity' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'inunity' ),
	) );
	Kirki::add_field( 'inunity_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'inunity' ),
		'description'	=> esc_html__( '(is_search) Primary', 'inunity' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'inunity' ),
	) );
	Kirki::add_field( 'inunity_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'inunity' ),
		'description'	=> esc_html__( '(is_404) Primary', 'inunity' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'inunity' ),
	) );
	Kirki::add_field( 'inunity_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'inunity' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'inunity' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'inunity' ),
	) );
	
 } 
add_action( 'init', 'inunity_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'inunity' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'inunity' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'inunity' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'inunity' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'inunity' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'inunity' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'inunity' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'inunity' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'inunity' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'inunity' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'inunity' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'inunity' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'inunity' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'inunity' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'inunity' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'inunity' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'inunity' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'inunity' ),
	'description'	=> esc_html__( 'Select font for the theme', 'inunity' ),
	'section'		=> 'styling',
	'default'		=> 'inter',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'inunity' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'inunity' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'inunity' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'inunity' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'inunity' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'inunity' ),
		'inter'					=> esc_html__( 'Inter, Latin', 'inunity' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'inunity' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'inunity' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'inunity' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'inunity' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'inunity' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'inunity' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'inunity' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'inunity' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'inunity' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'inunity' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'inunity' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'inunity' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'inunity' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'inunity' ),
		'arial'					=> esc_html__( 'Arial', 'inunity' ),
		'georgia'				=> esc_html__( 'Georgia', 'inunity' ),
		'verdana'				=> esc_html__( 'Verdana', 'inunity' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'inunity' ),
	),
) );
// Styling: Content Box Max-width
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-box-width',
	'label'			=> esc_html__( 'Content Box Max-width', 'inunity' ),
	'description'	=> esc_html__( 'Max-width of the content box on posts and pages', 'inunity' ),
	'section'		=> 'styling',
	'default'		=> '860',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'inunity' ),
	'description'	=> esc_html__( 'Max-width of the content on posts and pages', 'inunity' ),
	'section'		=> 'styling',
	'default'		=> '700',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Post Format Max-width
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'post-format-width',
	'label'			=> esc_html__( 'Post Format Max-width', 'inunity' ),
	'description'	=> esc_html__( 'Max-width of the post format on single posts. Use default for 100% width.', 'inunity' ),
	'section'		=> 'styling',
	'default'		=> '780',
	'choices'     => array(
		'min'	=> '300',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'inunity' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'inunity' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Dark
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark-theme',
	'label'			=> esc_html__( 'Dark Theme', 'inunity' ),
	'description'	=> esc_html__( 'Use dark instead of light base', 'inunity' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Theme Toggle
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'theme-toggle',
	'label'			=> esc_html__( 'Light/Dark Theme Toggle', 'inunity' ),
	'description'	=> esc_html__( 'Do not use with dark theme enabled', 'inunity' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Invert Dark Logo
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'invert-logo',
	'label'			=> esc_html__( 'Invert Dark Logo Color', 'inunity' ),
	'description'	=> esc_html__( 'Change color for the logo in dark mode', 'inunity' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Box Border Radius
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'box-border-radius',
	'label'			=> esc_html__( 'Box Border Radius', 'inunity' ),
	'description'	=> esc_html__( 'Change radius of the content boxes.', 'inunity' ),
	'section'		=> 'styling',
	'default'		=> '10',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '40',
		'step'	=> '1',
	),
) );
// Styling: Header / Sidebar Color
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header-sidebar',
	'label'			=> esc_html__( 'Header / Sidebar Color', 'inunity' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
// Styling: Background Color
Kirki::add_field( 'inunity_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'inunity' ),
	'section'		=> 'styling',
	'default'		=> '#f4f4f4',
) );
