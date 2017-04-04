<?php

/* add top banner ad widget */
	if ( function_exists('register_sidebar') ){
		// Banner Ad
		 register_sidebar(array(
			'name' => 'Top Banner ',
			'id' => 'topbanner',
			'description' => 'Widget in the banner.',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)); 
	} //function_exists('register_sidebar')	


	add_action('after_setup_theme', ea_setup);
	/**  ea_setup
	*  init stuff that we have to init after the main theme is setup.
	* 
	*/
	function ea_setup() {
	 /* do stuff ehre. */
	}


	/*****  change the login screen logo ****/
	function my_login_logo() { ?>
		<style type="text/css">
			body.login div#login h1 a {
				background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/rb.png);
				padding-bottom: 30px;
				background-size: cover;
				margin-left: 0px;
				margin-bottom: 0px;
				margin-right: 0px;
				height: 165px;
				width: 100%;
			}
		</style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );
	/*****  end custom login screen logo ****/
		/* add favicons for admin */
	add_action('login_head', 'add_favicon');
	add_action('admin_head', 'add_favicon');
	
	function add_favicon() {
		$favicon_url = get_stylesheet_directory_uri() . '/images/admin-favicon.ico';
		echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
	} 
	/***** end admin favicon *****/
?>