<?php
/**
 * Image Post Format
 * @package Emphasize
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>      

            <?php the_post_thumbnail(); ?>
  
            <header class="entry-header">
          		<?php get_template_part( 'template-parts/post-header' );?>          
            </header>
            
            <div class="entry-content">
                <?php // Option of content or excerpt					
				$excerptcontentimage = esc_attr(get_theme_mod( 'excerpt_content_image', 'excerpt' ));           
				 switch ($excerptcontentimage) {
					case "content" :
						the_content( esc_html__( 'Read More', 'emphasize') );
					break;
					case "excerpt" : 
						echo '<p>' . the_excerpt() . '</p>' ;
					break;											
				}
				 ?>
            </div>
            
    	<footer class="entry-footer">
			<?php get_template_part( 'template-parts/summary-footer' ); ?> 
        </footer> 
       
</article>