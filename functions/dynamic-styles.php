<?php
/* ------------------------------------------------------------------------- *
 *  Dynamic styles
/* ------------------------------------------------------------------------- */

/*  Convert hexadecimal to rgb
/* ------------------------------------ */
if ( ! function_exists( 'inunity_hex2rgb' ) ) {

	function inunity_hex2rgb( $hex, $array=false ) {
		$hex = str_replace("#", "", $hex);

		if ( strlen($hex) == 3 ) {
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
		} else {
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
		}

		$rgb = array( $r, $g, $b );
		if ( !$array ) { $rgb = implode(",", $rgb); }
		return $rgb;
	}
	
}	


/*  Google fonts
/* ------------------------------------ */
if ( ! function_exists( 'inunity_enqueue_google_fonts' ) ) {

	function inunity_enqueue_google_fonts () {
		if ( get_theme_mod('dynamic-styles', 'on') == 'on' ) {
			if ( get_theme_mod( 'font' ) == 'titillium-web-ext' ) { wp_enqueue_style( 'titillium-web-ext', '//fonts.googleapis.com/css?family=Titillium+Web:400,400italic,300italic,300,600&subset=latin,latin-ext' ); }		
			if ( get_theme_mod( 'font' ) == 'droid-serif' )	{ wp_enqueue_style( 'droid-serif', '//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' ); }				
			if ( get_theme_mod( 'font' ) == 'source-sans-pro' )	{ wp_enqueue_style( 'source-sans-pro', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300italic,300,400italic,600&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'lato' ) { wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700' ); }
			if ( get_theme_mod( 'font' ) == 'raleway' )	{ wp_enqueue_style( 'raleway', '//fonts.googleapis.com/css?family=Raleway:400,300,600' ); }
			/*default*/ if ( ( get_theme_mod( 'font' ) == '' ) || ( get_theme_mod( 'font' ) == 'inter' ) ) { wp_enqueue_style( 'inter', '//fonts.googleapis.com/css?family=Inter:400,300,600,800' ); }
			if ( get_theme_mod( 'font' ) == 'ubuntu' ) { wp_enqueue_style( 'ubuntu', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,300italic,300,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'ubuntu-cyr' ) { wp_enqueue_style( 'ubuntu-cyr', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,300italic,300,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto' ) { wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-cyr' ) { wp_enqueue_style( 'roboto-cyr', '//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-condensed' ) { wp_enqueue_style( 'roboto-condensed', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-condensed-cyr' ) { wp_enqueue_style( 'roboto-condensed-cyr', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-slab' ) { wp_enqueue_style( 'roboto-slab', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-slab-cyr' ) { wp_enqueue_style( 'roboto-slab-cyr', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'playfair-display' ) { wp_enqueue_style( 'playfair-display', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'playfair-display-cyr' ) { wp_enqueue_style( 'playfair-display-cyr', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700&subset=latin,cyrillic' ); }
			if ( get_theme_mod( 'font' ) == 'open-sans' ) { wp_enqueue_style( 'open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'open-sans-cyr' ) { wp_enqueue_style( 'open-sans-cyr', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'pt-serif' ) { wp_enqueue_style( 'pt-serif', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'pt-serif-cyr' ) { wp_enqueue_style( 'pt-serif-cyr', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,cyrillic-ext' ); }
		}
	}	
	
}
add_action( 'wp_enqueue_scripts', 'inunity_enqueue_google_fonts' ); 	


/*  Dynamic css output
/* ------------------------------------ */
if ( ! function_exists( 'inunity_dynamic_css' ) ) {

	function inunity_dynamic_css() {
		if ( get_theme_mod('dynamic-styles', 'on') == 'on' ) {
		
			// rgb values
			$color_1 = get_theme_mod('color-1');
			$color_1_rgb = inunity_hex2rgb($color_1);
			
			// start output
			$styles = '';		
			
			// google fonts
			if ( get_theme_mod( 'font' ) == 'titillium-web-ext' ) { $styles .= 'body { font-family: "Titillium Web", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'droid-serif' ) { $styles .= 'body { font-family: "Droid Serif", serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'source-sans-pro' ) { $styles .= 'body { font-family: "Source Sans Pro", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'lato' ) { $styles .= 'body { font-family: "Lato", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'raleway' ) { $styles .= 'body { font-family: "Raleway", Arial, sans-serif; }'."\n"; }
			/*default*/ if ( ( get_theme_mod( 'font' ) == '' ) || ( get_theme_mod( 'font' ) == 'inter' ) ) { $styles .= 'body { font-family: "Inter", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'ubuntu' ) || ( get_theme_mod( 'font' ) == 'ubuntu-cyr' ) ) { $styles .= 'body { font-family: "Ubuntu", Arial, sans-serif; }'."\n"; }	
			if ( ( get_theme_mod( 'font' ) == 'roboto' ) || ( get_theme_mod( 'font' ) == 'roboto-cyr' ) ) { $styles .= 'body { font-family: "Roboto", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'roboto-condensed' ) || ( get_theme_mod( 'font' ) == 'roboto-condensed-cyr' ) ) { $styles .= 'body { font-family: "Roboto Condensed", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'roboto-slab' ) || ( get_theme_mod( 'font' ) == 'roboto-slab-cyr' ) ) { $styles .= 'body { font-family: "Roboto Slab", Arial, sans-serif; }'."\n"; }			
			if ( ( get_theme_mod( 'font' ) == 'playfair-display' ) || ( get_theme_mod( 'font' ) == 'playfair-display-cyr' ) ) { $styles .= 'body { font-family: "Playfair Display", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'open-sans' ) || ( get_theme_mod( 'font' ) == 'open-sans-cyr' ) )	{ $styles .= 'body { font-family: "Open Sans", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'pt-serif' ) || ( get_theme_mod( 'font' ) == 'pt-serif-cyr' ) ) { $styles .= 'body { font-family: "PT Serif", serif; }'."\n"; }	
			if ( get_theme_mod( 'font' ) == 'arial' ) { $styles .= 'body { font-family: Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'georgia' ) { $styles .= 'body { font-family: Georgia, serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'verdana' ) { $styles .= 'body { font-family: Verdana, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'tahoma' ) { $styles .= 'body { font-family: Tahoma, sans-serif; }'."\n"; }
			
			// container width
			if ( get_theme_mod('container-width','1080') != '1080' ) {			
				if ( get_theme_mod( 'boxed' ) ) { 
					$styles .= '.boxed #wrapper-inner { max-width: '.esc_attr( get_theme_mod('container-width') ).'px; }'."\n";
				}
				else {
					$styles .= '
#wrapper-inner,
#header { max-width: '.esc_attr( get_theme_mod('container-width') ).'px; }
#wrapper-inner { background: #fff; }
				'."\n";
				}
			}
			// content box max-width
			if ( get_theme_mod('content-box-width','860') != '860' ) {
				$styles .= '
.content-wrap { max-width: '.esc_attr( get_theme_mod('content-box-width') ).'px; }
				'."\n";
			}
			// content max-width
			if ( get_theme_mod('content-width','700') != '700' ) {
				$styles .= '
.entry-header,
.entry-footer,
.entry > :not(.alignfull) { max-width: '.esc_attr( get_theme_mod('content-width') ).'px; }
				'."\n";
			}
			// post format max-width
			if ( get_theme_mod('post-format-width','780') != '780' ) {
				$styles .= '
.post-format { max-width: '.esc_attr( get_theme_mod('post-format-width') ).'px; }
				'."\n";
			}
			// box border radius
			if ( get_theme_mod('box-border-radius','10') != '10' ) {
				$styles .= '
.type-portfolio-inner,
.content-wrap-inner { border-radius: '.esc_attr( get_theme_mod('box-border-radius') ).'px; }
				'."\n";
			}
			// header / sidebar color
			if ( get_theme_mod('color-header-sidebar','#ffffff') != '#ffffff' ) {
				$styles .= '
.header-color #header { border-right: 0; }
.header-color #header,
.header-color #header-bottom { background: '.esc_attr( get_theme_mod('color-header-sidebar') ).'; }
.header-color #header-top { border-bottom-color: rgba(255,255,255,0.1); }
.header-color #header-bottom { border-top-color: rgba(255,255,255,0.1); }
.header-color #header-bottom-bottom { background: rgba(0,0,0,0.1); }
.header-color .site-title a { color: #fff; }
.header-color .site-description { color: rgba(255,255,255,0.5); }

.header-color .toggle-search { border-left-color: rgba(255,255,255,0.1); }
.header-color .toggle-search.active { background-color: transparent; }  
.header-color .toggle-search .svg-icon { fill: rgba(255,255,255,0.8); }
.header-color .toggle-search.active #svg-close { fill: rgba(255,255,255,0.8); }
.header-color .toggle-search:focus #svg-search { fill: rgba(255,255,255,0.5); }
.header-color .toggle-search:focus #svg-close { fill: rgba(255,255,255,0.5); }
.header-color .search-expand { background-color: transparent; }
.header-color #header .themeform.searchform div input { background: '.esc_attr( get_theme_mod('color-header-sidebar') ).';  color: rgba(255,255,255,0.7); border: 1px solid rgba(255,255,255,0.08); }

@media only screen and (max-width: 719px) {
	.header-color #header .themeform.searchform div input { border-top: 1px solid rgba(255,255,255,0.1); }
}

.header-color .social-links .social-tooltip { color: rgba(255,255,255,0.8); }
.header-color .social-links .social-tooltip:hover { color: #fff; }
.header-color #theme-toggle i { color: rgba(255,255,255,0.4); }
.header-color #theme-toggle-btn { background-color: rgba(0,0,0,0.1); }
.header-color #theme-toggle-btn:before { background: '.esc_attr( get_theme_mod('color-header-sidebar') ).'; }
body.dark.header-color #theme-toggle i { color: rgba(255,255,255,0.4); }
body.dark.header-color #theme-toggle-btn { background-color: rgba(0,0,0,0.1); box-shadow: none; }
body.dark.header-color #theme-toggle-btn:before { background: '.esc_attr( get_theme_mod('color-header-sidebar') ).'; border-color: #fff; }

.header-color .menu-toggle-icon span { background: #fff; }
.header-color .nav-menu.mobile button:focus,
.header-color .menu-toggle:focus { background: rgba(255,255,255,0.06); }
.header-color .nav-menu a { color: #fff; }
.header-color .nav-menu .svg-icon { fill: #fff; }

.header-color .nav-menu:not(.mobile) > div > ul > li > span > a { color: rgba(255,255,255,0.6); }
.header-color .nav-menu:not(.mobile) > div > ul > li > span > a:hover { color: #fff; }
.header-color .nav-menu:not(.mobile) > div > ul > li > span > button { color: #666; }
.header-color .nav-menu:not(.mobile) > div > ul > li > span > button.active { background: rgba(255,255,255,0.15); color: rgba(255,255,255,0.6); }
.header-color .nav-menu:not(.mobile) > div > ul > li > span > button .svg-icon { fill: rgba(255,255,255,0.7); }

.header-color .nav-menu:not(.mobile) li.current_page_item > span > a, 
.header-color .nav-menu:not(.mobile) li.current-menu-item > span > a, 
.header-color .nav-menu:not(.mobile) li.current-menu-ancestor > span > a, 
.header-color .nav-menu:not(.mobile) li.current-post-parent > span > a { color: #fff; }
.header-color .nav-menu:not(.mobile) ul ul li.current_page_item > span > a, 
.header-color .nav-menu:not(.mobile) ul ul li.current-menu-item > span > a, 
.header-color .nav-menu:not(.mobile) ul ul li.current-menu-ancestor > span > a, 
.header-color .nav-menu:not(.mobile) ul ul li.current-post-parent > span > a { color: #777; }

.header-color .nav-menu.mobile {  }
.header-color .nav-menu.mobile button.active .svg-icon { fill: #fff; }
.header-color .nav-menu.mobile ul ul { background: rgba(0,0,0,0.08); }
.header-color .nav-menu.mobile ul li .menu-item-wrapper,
.header-color .nav-menu.mobile ul ul li .menu-item-wrapper { border-bottom: 1px solid rgba(255,255,255,0.07); }
.header-color .nav-menu.mobile ul li a { color: #fff; }
.header-color .nav-menu.mobile ul button,
.header-color .nav-menu.mobile ul ul button { border-left: 1px solid rgba(255,255,255,0.07); }
.header-color .nav-menu.mobile > div > ul { border-top: 1px solid rgba(255,255,255,0.07); }

@media only screen and (min-width: 1024px) {
	.header-color .nav-menu:not(.mobile) button { background: rgba(0,0,0,0.1); }
	.header-color .nav-menu:not(.mobile) ul ul button { background: transparent; color: rgba(255,255,255,0.5); }
}

@media only screen and (max-width: 719px) {
	.header-color .toggle-search .svg-icon,
	.header-color .toggle-search.active #svg-close { fill: #fff; }
	.header-color .toggle-search:focus #svg-search,
	.header-color .toggle-search:focus #svg-close { fill: rgba(255,255,255,0.6); }
}

				'."\n";
			}
			// background color
			if ( get_theme_mod('color-background','#f4f4f4') != '#f4f4f4' ) {
				$styles .= '
body { background: '.esc_attr( get_theme_mod('color-background') ).'!important; }
				'."\n";
			}
			// header logo max-height
			if ( get_theme_mod('logo-max-height','60') != '60' ) {
				$styles .= '.site-title a img { max-height: '.esc_attr( get_theme_mod('logo-max-height') ).'px; }'."\n";
			}
			// header text color
			if ( get_theme_mod( 'header_textcolor' ) != '' ) {
				$styles .= '.site-title a, .site-description { color: #'.esc_attr( get_theme_mod( 'header_textcolor' ) ).'; }'."\n";
			}
			if ( get_theme_mod('dark','off') == 'on' ) { 
				wp_add_inline_style( 'inunity-dark', $styles );
			} else {
				wp_add_inline_style( 'inunity-style', $styles );
			}
		}
	}
	
}
add_action( 'wp_enqueue_scripts', 'inunity_dynamic_css' );
