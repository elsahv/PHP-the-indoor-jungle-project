

<?php

function scripts()
{
	wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
	wp_enqueue_style('style');

	wp_enqueue_script('jquery');

	wp_register_script('app', get_template_directory_uri() . './dist/app.js', ['jquery'], 1, true);

	wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'scripts');





// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


// EXCERPT LENGTH
function mytheme_custom_excerpt_length($length)
{
	return 20;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);


// Menus
register_nav_menus(

	array(

		'top-menu' => 'Top Menu Location',
		'mobile-menu' => 'Mobile Menu Location',
		// 'footer-menu' => 'Footer Menu Location',

	)

);





// Custom Image Sizes
add_image_size('blog-fullscreen', 1920, 1200, false);
add_image_size('blog-large', 1200, 600, false);
add_image_size('blog-small', 500, 400, true);




// Register Sidebars
function my_sidebars()
{
	register_sidebar(
		array(
			'name' => 'Page Sidebar',
			'id' => 'page-sidebar',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => 'Aside Sidebar',
			'id' => 'aside-sidebar',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	register_sidebar(
		array(
			'name' => 'About Sidebar',
			'id' => 'about-sidebar',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);
}
add_action('widgets_init', 'my_sidebars');








function my_first_post_type()
{

	$args = array(


		'labels' => array(

			'name' => 'Cars',
			'singular_name' => 'Car',
		),
		'hierarchical' => true,                        //FALSE = POST, TRUE = PAGE
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'rewrite' => array('slug' => 'cars'),

	);


	register_post_type('cars', $args);
}
add_action('init', 'my_first_post_type');








function my_first_taxonomy()
{

	$args = array(

		'labels' => array(
			'name' => 'Brands',
			'singular_name' => 'Brand',
		),

		'public' => true,
		'hierarchical' => true,               //TRUE = CATEGORY, FALSE = TAGS

	);


	register_taxonomy('brands', array('cars'), $args);
}
add_action('init', 'my_first_taxonomy');







// add_action('wp_ajax_enquiry', 'enquiry_form');
// add_action('wp_ajax_nopriv_enquiry', 'enquiry_form');
// function enquiry_form()
// {


// 	if(  !wp_verify_nonce( $_POST['nonce'], 'ajax-nonce' )  )
// 	{

// 		wp_send_json_error('Nonce is incorrect', 401);
// 		die();

// 	}



// 	$formdata = [];

// 	wp_parse_str($_POST['enquiry'], $formdata);


// 	// Admin email
// 	$admin_email = get_option('admin_email');


// 	// Email headers
// 	$headers[] = 'Content-Type: text/html; charset=UTF-8';
// 	$headers[] = 'From: My Website <' . $admin_email . '>';
// 	$headers[] = 'Reply-to:' . $formdata['email'];

// 	// Who are we sending the email to?
// 	$send_to = $admin_email;

// 	// Subject
// 	$subject = "Enquiry from " . $formdata['fname'] . ' ' . $formdata['lname']; 

// 	// Message
// 	$message = '';

// 	foreach($formdata as $index => $field)
// 	{
// 		$message .= '<strong>' . $index . '</strong>: ' . $field . '<br />';
// 	}


// 	try {

// 		if( wp_mail($send_to, $subject, $message, $headers) )
// 		{

// 			wp_send_json_success('Email sent');

// 		}
// 		else {


// 			wp_send_json_error('Email error');

// 		}

// 	} catch (Exception $e)
// 	{
// 			wp_send_json_error($e->getMessage());
// 	}


// 	wp_send_json_success( $formdata['fname'] );
// }





// /**
//  * Register Custom Navigation Walker
//  */
// function register_navwalker(){
// 	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// }
// add_action( 'after_setup_theme', 'register_navwalker' );





// add_action('phpmailer_init','custom_mailer');
// function custom_mailer( PHPMailer $phpmailer )
// {

// 	$phpmailer->SetFrom('sean@mrdigital.com.au', 'Sean Freitas');
// 	$phpmailer->Host = 'email-smtp.us-west-2.amazonaws.com';
// 	$phpmailer->Port = 587;
// 	$phpmailer->SMTPAuth = true;
// 	$phpmailer->SMTPSecure = 'tls';
// 	$phpmailer->Username = SMTP_LOGIN;
// 	$phpmailer->Password = SMTP_PASSWORD;
// 	$phpmailer->IsSMTP();

// }



// function my_shortcode($atts, $content = null, $tag = '')
// {

// 	ob_start();

// 	print_r($content);

// 	set_query_var('attributes', $atts);

// 	get_template_part('includes/latest', 'cars');

// 	return ob_get_clean();

// }
// add_shortcode('latest_cars', 'my_shortcode');



// function my_phone()
// {
// 	return '<a href="tel:0400 200 222">0400 200 222</a>';
// }
// add_shortcode('phone', 'my_phone');







// function search_query()
// {

// 	$paged = ( get_query_var('paged')  )  ? get_query_var('paged') : 1; 


// 	$args = [

// 		'paged' => $paged,
// 		'post_type' => 'cars',
// 		'posts_per_page' => 1,
// 		'tax_query' => [],
// 		'meta_query' => [
// 				'relation' => 'AND',
// 		 ],

// 	];

// 	if( isset($_GET['keyword']) )
// 	{

// 			if(!empty($_GET['keyword']))
// 			{
// 					$args['s'] = sanitize_text_field( $_GET['keyword'] );
// 			}

// 	}



// 	if( isset($_GET['brand']) )
// 	{
// 		if(!empty($_GET['brand']))
// 		{
// 			$args['tax_query'][] = [

// 					'taxonomy' => 'brands',
// 					'field' => 'slug',
// 					'terms' => array( sanitize_text_field( $_GET['brand'] ) )

// 			];
// 		}
// 	}


// 	if( isset($_GET['price_above']) )
// 	{
// 		if(!empty($_GET['price_above']))
// 		{
// 				$args['meta_query'][] = array(

// 						'key' => 'price',
// 						'value' => sanitize_text_field( $_GET['price_above']) ,
// 						'type' => 'numeric',
// 						'compare' => '>='
// 				);
// 		}
// 	}




// 	if( isset($_GET['price_below']) )
// 	{
// 		if(!empty($_GET['price_below']))
// 		{
		  

// 			$args['meta_query'][] = array(

// 				'key' => 'price',
// 				'value' => sanitize_text_field( $_GET['price_below']) ,
// 				'type' => 'numeric',
// 				'compare' => '<='
// 		);

// 		}
// 	}


// 	return  new WP_Query($args);



// }
