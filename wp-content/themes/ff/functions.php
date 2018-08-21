<?php

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );


function my_scripts_method() {
    // отменяем зарегистрированный jQuery
    // вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
    wp_deregister_script( 'jquery' );
    ////ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',false, null, true);
    wp_enqueue_script( 'jquery' );


	wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css', array(), '1.0.0');
	wp_enqueue_style( 'superfish.min.css', 'https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.7/css/superfish.min.css', array(), '3.2' );
	wp_enqueue_style( 'megafish.min.css', 'https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.7/css/megafish.min.css', array(), '3.2' );
	wp_enqueue_style( 'jquery.mmenu.all.css', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/5.5.3/core/css/jquery.mmenu.all.css', array(), '3.2' );
	wp_enqueue_style( 'font-awesome.min.css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '3.2' );
	wp_enqueue_style( 'magnific-popup.css', get_template_directory_uri() .'/libs/magnific-popup/magnific-popup.css', array(), '3.2' );
	wp_enqueue_style( 'jquery.formstyler.css', get_template_directory_uri() . '/libs/jQueryFormStyler-master/jquery.formstyler.css', array(), '3.2' );
	wp_enqueue_style( 'jquery.formstyler.theme.css', get_template_directory_uri() . '/libs/jQueryFormStyler-master/jquery.formstyler.theme.css', array(), '3.2' );
	
	wp_enqueue_style( 'fonts.css', get_template_directory_uri() . '/css/fonts.css', array(), '3.2' );
	wp_enqueue_style( 'main.css', get_template_directory_uri() . '/css/main.css', array(), '3.2' );
	wp_enqueue_style( 'media.css', get_template_directory_uri() . '/css/media.css', array(), '3.2' );

	wp_enqueue_style( 'stylecss', get_stylesheet_uri() );
	
	
	wp_enqueue_script( 'superfish.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.7/js/superfish.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery.mmenu.min.all.js', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/5.5.3/core/js/jquery.mmenu.min.all.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'jquery.magnific-popup.min.js', get_template_directory_uri() . '/libs/magnific-popup/jquery.magnific-popup.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery.colorbox-min.js', get_template_directory_uri() . '/libs/colorbox/jquery.colorbox-min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery.formstyler.min.js', get_template_directory_uri() . '/libs/jQueryFormStyler-master/jquery.formstyler.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'PageScroll2id.min.js', get_template_directory_uri() . '/libs/scroll2id/PageScroll2id.min.js', array(), '1.0.0', true );

	

	if(is_page(14)) {	
		wp_enqueue_script( 'jquery.accordion.js', get_template_directory_uri() . '/js/jquery.accordion.js', array(), '1.0.0', true );
		wp_enqueue_script( 'jquery.cookie.js', get_template_directory_uri() . '/js/jquery.cookie.js', array(), '1.0.0', true );
		add_action('wp_footer', 'my_action_javascript', 99); // для фронта
	} 

	wp_enqueue_script( 'common.js', get_template_directory_uri() . '/js/common.js', array(), '1.0.0', true );

	wp_localize_script( 'common.js', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	   
}


add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'main_menu' => 'Главное меню',
	) );
});

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'ff' ),
) );
		
add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
    register_sidebar( array(
        'name'          => sprintf(__('Sidebar %d'), $i ),
        'id'            => "sidebar-1",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ) );
}


add_action('wp_ajax_sendform', 'sendform');
add_action('wp_ajax_nopriv_sendform', 'sendform');
function sendform() {
	
	

	// или так
	//if( ! wp_verify_nonce( $_POST['nonce_code'], 'myajax-nonce' ) ) die( 'nonce-Stop!');
	require_once ( get_stylesheet_directory() . '/send/mail.php' );
	
	// выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
	wp_die();
}




function my_action_javascript() {
    ?>
	<script>
	jQuery(document).ready(function($){
		$('.quest').dcAccordion();
	});	
	</script>
    <?php
}


remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

function remheadlink()
{
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action( 'wp_head', 'wp_shortlink_wp_head');
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head');
    remove_action( 'wp_head', 'feed_links_extra', 3);
}


add_action('init', 'remheadlink');

// Отключение rss ленты

function fb_disable_feed() {
    wp_redirect(get_option('siteurl'));
}


add_action('do_feed', 'fb_disable_feed', 1);
add_action('do_feed_rdf', 'fb_disable_feed', 1);
add_action('do_feed_rss', 'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);


//remove_action( 'wp_head', 'feed_links_extra', 3 );

remove_action( 'wp_head', 'feed_links', 2 );

//remove_action( 'wp_head', 'rsd_link' );

/** ЧИСТОТА ШАПКИ САЙТА - уборка в мета rel=dns-prefetch href=//s.w.org **/

remove_action( 'wp_head', 'wp_resource_hints', 2 );

/** ФИН ЧИСТОТА ШАПКИ САЙТА **/

// Отключаем сам REST API

/*add_filter('rest_enabled', '__return_false');*/

// Отключаем фильтры REST API
/*remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid', 'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );*/


// Отключаем события REST API

/*remove_action( 'init', 'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );*/

// Отключаем Embeds связанные с REST API

/*remove_action( 'rest_api_init', 'wp_oembed_register_route');
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);*/
