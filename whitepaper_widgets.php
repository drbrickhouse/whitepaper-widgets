<?php
/*
* Plugin Name: WhitePaper Widgets
* Plugin Description: Provides all widgets for the WhitePaper theme
* Version: 1.0
* Author: Dillon Brickhouse
* Author URI: drbrickhouse.com
*/

/************* PHP Code ***********************/
class WhitePaper_PHP_Code extends WP_Widget {

	function whitepaper_php_code() {
		// Instantiate the parent object
		parent::__construct( false, "PHP Code Widget" );
	}

	function widget( $args, $instance ) {
		// Widget output
    extract( $args );
    $title = apply_filters( 'widget_title', $instance['title']);
		$php_content = apply_filters( 'widget_text', $instance['php_content'] );

		require( 'whitepaper_widgets_php_code_front_end.php' );
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
		$instance['php_content'] = ($new_instance['php_content']);

    return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form
    $title = esc_attr( $instance['title'] );
		$php_content = esc_attr( $instance['php_content'] );

		require( 'whitepaper_widgets_php_code_fields.php' );
	}
}

/************* Logo ***********************/
class WhitePaper_Logo extends WP_Widget {

	function whitepaper_logo() {
		// Instantiate the parent object
		parent::__construct( false, "Logo" );
	}

	function widget( $args, $instance ) {
		// Widget output
    extract( $args );
		$title = apply_filters( 'widget_title', $instance['title']);
		$logo_path = $instance['logo_path'];
		$logo_class = $instance['logo_class'];

		require( 'whitepaper_widgets_logo_front_end.php' );
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
		$instance['logo_path'] = strip_tags($new_instance['logo_path']);
		$instance['logo_class'] = strip_tags($new_instance['logo_class']);

    return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form
    $title = esc_attr( $instance['title'] );
		$logo_path = esc_attr( $instance['logo_path'] );
		$logo_class = esc_attr( $instance['logo_class'] );

		require( 'whitepaper_widgets_logo_fields.php' );
	}
}

/************* Bootstrap Menu ***********************/
class WhitePaper_Bootstrap_Menu extends WP_Widget {

	function whitepaper_bootstrap_menu() {
		// Instantiate the parent object
		parent::__construct( false, "Bootstrap Menu" );
	}

	function widget( $args, $instance ) {
		// Widget output
    extract( $args );
    $title = apply_filters( 'widget_title', $instance['title']);
		$nav_class = $instance['nav_class'];
		$list_class = $instance['list_class'];

		require( 'whitepaper_widgets_bootstrap_menu_front_end.php' );
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
		$instance['nav_class'] = strip_tags($new_instance['nav_class']);
		$instance['list_class'] = strip_tags($new_instance['list_class']);

    return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form
    $title = esc_attr( $instance['title'] );
		$nav_class = esc_attr( $instance['nav_class'] );
		$list_class = esc_attr( $instance['list_class'] );

		require( 'whitepaper_widgets_bootstrap_menu_fields.php' );
	}
}


/************* Bootstrap Menu Toggle ***********************/
class WhitePaper_Bootstrap_Menu_Toggle extends WP_Widget {

	function whitepaper_bootstrap_menu_toggle() {
		// Instantiate the parent object
		parent::__construct( false, "Bootstrap Menu Toggle Button" );
	}

	function widget( $args, $instance ) {
		// Widget output
    extract( $args );
    $title = apply_filters( 'widget_title', $instance['title']);
		$toggle_class = $instance['toggle_class'];

		require( 'whitepaper_widgets_bootstrap_menu_toggle_front_end.php' );
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
		$instance['toggle_class'] = strip_tags($new_instance['toggle_class']);

    return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form
    $title = esc_attr( $instance['title'] );
		$toggle_class = esc_attr( $instance['toggle_class'] );

		require( 'whitepaper_widgets_bootstrap_menu_toggle_fields.php' );
	}
}

/************* Loop ***********************/
class WhitePaper_Loop extends WP_Widget {

	function whitepaper_loop() {
		// Instantiate the parent object
		parent::__construct( false, "Loop" );
	}

	function widget( $args, $instance ) {
		// Widget output
    extract( $args );
    $title = apply_filters( 'widget_title', $instance['title']);
		$num_posts = $instance['num_posts'];
		$post_type = $instance['post_type'];
		$post_class = $instance['post_class'];
		$before_widget_layout = apply_filters( 'widget_text', $instance['before_widget_layout'] );
		$post_layout = apply_filters( 'widget_text', $instance['post_layout'] );
		$after_widget_layout = apply_filters( 'widget_text', $instance['after_widget_layout'] );

		require( 'whitepaper_widgets_loop_front_end.php' );
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
		$instance['num_posts'] = strip_tags($new_instance['num_posts']);
		$instance['post_type'] = strip_tags($new_instance['post_type']);
		$instance['post_class'] = strip_tags($new_instance['post_class']);
		$instance['before_widget_layout'] = $new_instance['before_widget_layout'];
		$instance['post_layout'] = $new_instance['post_layout'];
		$instance['after_widget_layout'] = $new_instance['after_widget_layout'];

    return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form
    $title = esc_attr( $instance['title'] );
		$num_posts = esc_attr( $instance['num_posts'] );
		$post_type = esc_attr( $instance['post_type'] );
		$post_class = esc_attr( $instance['post_class'] );
		$before_widget_layout = esc_attr( $instance['before_widget_layout'] );
		$post_layout = esc_attr( $instance['post_layout'] );
		$after_widget_layout = esc_attr( $instance['after_widget_layout'] );

		require( 'whitepaper_widgets_loop_fields.php' );
	}
}

/************* Single Post ***********************/
class WhitePaper_Single_Post extends WP_Widget {

	function whitepaper_single_post() {
		// Instantiate the parent object
		parent::__construct( false, "Single Post" );
	}

	function widget( $args, $instance ) {
		// Widget output
    extract( $args );
    $title = apply_filters( 'widget_title', $instance['title']);
		$post_type = $instance['post_type'];
		$post_id = $instance['post_id'];
		$single_class = $instance['single_class'];
		$before_widget_layout = apply_filters( 'widget_text', $instance['before_widget_layout'] );
		$single_layout = apply_filters( 'widget_text', $instance['single_layout'] );
		$after_widget_layout = apply_filters( 'widget_text', $instance['after_widget_layout'] );

		require( 'whitepaper_widgets_single_post_front_end.php' );
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
		$instance['post_type'] = strip_tags($new_instance['post_type']);
		$instance['post_id'] = strip_tags($new_instance['post_id']);
		$instance['single_class'] = strip_tags($new_instance['single_class']);
		$instance['before_widget_layout'] = $new_instance['before_widget_layout'];
		$instance['single_layout'] = $new_instance['single_layout'];
		$instance['after_widget_layout'] = $new_instance['after_widget_layout'];

    return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form
    $title = esc_attr( $instance['title'] );
		$post_type = esc_attr( $instance['post_type'] );
		$post_id = esc_attr( $instance['post_id'] );
		$single_class = esc_attr( $instance['single_class'] );
		$before_widget_layout = esc_attr( $instance['before_widget_layout'] );
		$single_layout = esc_attr( $instance['single_layout'] );
		$after_widget_layout = esc_attr( $instance['after_widget_layout'] );

		require( 'whitepaper_widgets_single_post_fields.php' );
	}
}

/************* CTA's ***********************/
class WhitePaper_CTAs extends WP_Widget {

	function whitepaper_ctas() {
		// Instantiate the parent object
		parent::__construct( false, "CTA's" );
	}

	function widget( $args, $instance ) {
		// Widget output
    extract( $args );
    $title = apply_filters( 'widget_title', $instance['title']);
		$num_ctas = $instance['num_ctas'];
		$cta_class = $instance['cta_class'];
		$cta_layout = apply_filters( 'widget_text', $instance['cta_layout'] );

		require( 'whitepaper_widgets_ctas_front_end.php' );
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
		$instance['num_ctas'] = strip_tags($new_instance['num_ctas']);
		$instance['cta_class'] = strip_tags($new_instance['cta_class']);
		$instance['cta_layout'] = $new_instance['cta_layout'];

    return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form
    $title = esc_attr( $instance['title'] );
		$num_ctas = esc_attr( $instance['num_ctas'] );
		$cta_class = esc_attr( $instance['cta_class'] );
		$cta_layout = esc_attr( $instance['cta_layout'] );

		require( 'whitepaper_widgets_ctas_fields.php' );
	}
}


/*************** Hero Image ***************/
class WhitePaper_Hero_Image extends WP_Widget {

	function whitepaper_hero_image() {
		// Instantiate the parent object
		parent::__construct( false, "Hero Image" );
	}

	function widget( $args, $instance ) {
		// Widget output
    extract( $args );
    $title = apply_filters( 'widget_title', $instance['title']);
		$img_path = $instance['img_path'];
		$hero_class = $instance['hero_class'];
		$text_overlay = apply_filters( 'widget_text', $instance['text_overlay']);
		$hero_layout = apply_filters( 'widget_text', $instance['hero_layout'] );

		require( 'whitepaper_widgets_hero_front_end.php' );
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
		$instance['img_path'] = strip_tags($new_instance['img_path']);
		$instance['hero_class'] = strip_tags($new_instance['hero_class']);
		$instance['text_overlay'] = $new_instance['text_overlay'];
		$instance['hero_layout'] = $new_instance['hero_layout'];

    return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form
    $title = esc_attr( $instance['title'] );
		$img_path = esc_attr( $instance['img_path'] );
		$hero_class = esc_attr( $instance['hero_class'] );
		$text_overlay = esc_attr( $instance['text_overlay'] );
		$hero_layout = esc_attr( $instance['hero_layout'] );

		require( 'whitepaper_widgets_hero_fields.php' );
	}
}

/************************ Twitter Widget **********************************/
class WhitePaper_Twitter_Carousel extends WP_Widget {

	function whitepaper_twitter_carousel() {
		// Instantiate the parent object
		parent::__construct( false, "Twitter Carousel" );
	}

	function widget( $args, $instance ) {
		// Widget output
    extract( $args );
    $title = apply_filters( 'widget_title', $instance['title']);
		$twitter_handle = $instance['twitter_handle'];
		$num_tweets = $instance['num_tweets'];
		$tweet_class = $instance['tweet_class'];
		$twitter_layout = apply_filters( 'widget_text', $instance['twitter_layout'] );

		require( 'whitepaper_widgets_twitter_front_end.php' );
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
		$instance['twitter_handle'] = strip_tags($new_instance['twitter_handle']);
		$instance['num_tweets'] = strip_tags($new_instance['num_tweets']);
		$instance['tweet_class'] = strip_tags($new_instance['tweet_class']);
		$instance['twitter_layout'] = $new_instance['twitter_layout'];

    return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form
    $title = esc_attr( $instance['title'] );
		$twitter_handle = esc_attr( $instance['twitter_handle'] );
		$num_tweets = esc_attr( $instance['num_tweets'] );
		$tweet_class = esc_attr( $instance['tweet_class'] );
		$twitter_layout = esc_attr( $instance['twitter_layout'] );

		require( 'whitepaper_widgets_twitter_fields.php' );
	}
}

/************* Related Content ***********************/
class WhitePaper_Related_Content extends WP_Widget {

	function whitepaper_related_content() {
		// Instantiate the parent object
		parent::__construct( false, "Related Content" );
	}

	function widget( $args, $instance ) {
		// Widget output
    extract( $args );
		$title = apply_filters( 'widget_title', $instance['title']);
		$content_class = esc_attr( $instance['content_class'] );
		$related_content_layout = apply_filters( 'widget_text', $instance['related_content_layout'] );

		require( 'whitepaper_widgets_related_content_front_end.php' );
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
		$instance['content_class'] = strip_tags($new_instance['content_class']);
		$instance['related_content_layout'] = $new_instance['related_content_layout'];

    return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form
    $title = esc_attr( $instance['title'] );
		$content_class = esc_attr( $instance['content_class'] );
		$related_content_layout = apply_filters( 'widget_text', $instance['related_content_layout'] );

		require( 'whitepaper_widgets_related_content_fields.php' );
	}
}

/************************ Register Widgets Function ***********************/
function whitepaper_register_widgets() {
	register_widget( 'WhitePaper_PHP_Code' );
	register_widget( 'WhitePaper_Logo' );
	register_widget( 'WhitePaper_Bootstrap_Menu' );
	register_widget( 'WhitePaper_Bootstrap_Menu_Toggle' );
	register_widget( 'WhitePaper_Loop' );
	register_widget( 'WhitePaper_Single_Post' );
	register_widget( 'WhitePaper_CTAs' );
	register_widget( 'WhitePaper_Hero_Image' );
	register_widget( 'WhitePaper_Twitter_Carousel' );
	register_widget( 'WhitePaper_Related_Content' );
}

/************ Hook Into Widgits Init to Register the Widgets ******************/
add_action( 'widgets_init', 'whitepaper_register_widgets' );

?>
