<?php
/**
 * Custom functions for theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Emphasize
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function emphasize_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'emphasize_body_classes' );


/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
	if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :	
	function emphasize_wp_title( $title, $sep ) {
		if ( is_feed() ) {
			return $title;
		}

		global $page, $paged;

		// Add the blog name
		$title .= get_bloginfo( 'name', 'display' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary:
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= " $sep " . sprintf( __( 'Page %s', 'emphasize' ), max( $paged, $page ) );
		}

		return $title;
	}
	add_filter( 'wp_title', 'emphasize_wp_title', 10, 2 );

	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
	function emphasize_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}
	add_action( 'wp_head', 'emphasize_render_title' );
endif;




/**
 * Special thanks to Justin Tadlock for this quote formatting method
 *
 * @link http://justintadlock.com/archives/2012/08/27/post-formats-quote
 */
add_filter( 'the_content', 'emphasize_quote_content' );
function emphasize_quote_content( $content ) {

	/* Check if we're displaying a 'quote' post. */
	if ( has_post_format( 'quote' ) ) {

		/* Match any <blockquote> elements. */
		preg_match( '/<blockquote.*?>/', $content, $matches );

		/* If no <blockquote> elements were found, wrap the entire content in one. */
		if ( empty( $matches ) )
			$content = "<blockquote>{$content}</blockquote>";
	}

	return $content;
}



/**
 * Move the More Link outside from the contents last summary paragraph tag.
 */
if ( ! function_exists( 'emphasize_move_more_link' ) ) :
	function emphasize_move_more_link($link) {
			$link = '<p class="read-more">'.$link.'</p>';
			return $link;
		}
	add_filter('the_content_more_link', 'emphasize_move_more_link');
endif;



/**
 * Filter the except length to the users option setting.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function emphasize_custom_excerpt_length( $length ) {
	$excerptlength = esc_attr(get_theme_mod( 'excerpt_limit', '50' ));
    return $excerptlength;
}
add_filter( 'excerpt_length', 'emphasize_custom_excerpt_length', 999 );




/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function emphasize_new_excerpt_more( $more ) {
	
    return sprintf( '&hellip;<p class="read-more"><a href="%1$s">%2$s</a></p>',
        get_permalink( get_the_ID() ),
        esc_html__( 'Read More', 'emphasize' )
    );
}
add_filter( 'excerpt_more', 'emphasize_new_excerpt_more' );


/* 
* Prevent page scroll after clicking read more to load the full post.
*/
function emphasize_remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'emphasize_remove_more_link_scroll' );


/**
 * Comment layout
 */
 
if (!function_exists('emphasize_comment')) {
function emphasize_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>

<li>                        
	<div class="comment">
		<div class="image"> <?php echo get_avatar($comment, 100); ?> </div>
		<div class="text">
			<div class="comment_info">
				<h4 class="name"><?php echo get_comment_author_link(); ?></h4>
				<span class="comment_date"><?php comment_time(get_option('date_format')); ?> <?php _e('at', 'emphasize'); ?> <?php comment_time(get_option('time_format')); ?></span>
				<?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']) ) ); ?>
			</div>
			<div class="text_holder" id="comment-<?php echo comment_ID(); ?>">
				<?php comment_text(); ?>
			</div>
		</div>
	</div>                          
                
<?php if ($comment->comment_approved == '0') : ?>
<p><em><?php esc_html_e('Your comment is awaiting moderation.', 'emphasize'); ?></em></p>
<?php endif; ?>
<?php 
}
}


?>
