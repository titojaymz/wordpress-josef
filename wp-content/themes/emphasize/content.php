<?php
/**
 * Blog summary post styles
 * @package Emphasize
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">


<?php $blogstyle = get_theme_mod( 'blog_style', 'standardright' );
		
	switch ($blogstyle) {
		
		// Standard summary right sidebar
		case "standardright" :		
				
			 if  (esc_attr(get_theme_mod('move_featured','top')) == 'top' ) :
				echo '<a href="' . get_permalink() . '">';
				the_post_thumbnail( '', array( 'class' => 'image-hover' ) ) ;
				echo '</a>' ;
			endif;
			
			echo '<header class="entry-header text-left style1">';
			get_template_part( 'template-parts/post-header' );
			echo '</header>';
			
			if  (esc_attr(get_theme_mod('move_featured','top')) == 'bottom' ) :
				echo '<a href="' . get_permalink() . '">';
				the_post_thumbnail( '', array( 'class' => 'image-hover featured-bottom' ) ) ;
				echo '</a>' ;
			endif;
			
			echo '<div class="entry-content text-left">';	
		// Option of content or excerpt
			$excerptcontent = esc_attr(get_theme_mod( 'excerpt_content', 'content' ));           
				 switch ($excerptcontent) {
					case "content" :
						the_content( esc_html__( 'Read More', 'emphasize') );
					break;
					case "excerpt" : 
						echo '<p>' . the_excerpt() . '</p>' ;
					break;	
				}	
			echo '</div><footer class="entry-footer">';
			get_template_part( 'template-parts/summary-footer' );
			echo '</footer>';
		break;		

		// Standard summary left sidebar
		case "standardleft" :	

			 if  (esc_attr(get_theme_mod('move_featured','top')) == 'top' ) :
				echo '<a href="' . get_permalink() . '">';
				the_post_thumbnail( '', array( 'class' => 'image-hover' ) ) ;
				echo '</a>' ;
			endif;
			
			echo '<header class="entry-header style2">';
			get_template_part( 'template-parts/post-header' );
			echo '</header>';
			
			if  (esc_attr(get_theme_mod('move_featured','top')) == 'bottom' ) :
				echo '<a href="' . get_permalink() . '">';
				the_post_thumbnail( '', array( 'class' => 'image-hover featured-bottom' ) ) ;
				echo '</a>' ;
			endif;		
			
			echo '<div class="entry-content">';			
		// Option of content or excerpt
			$excerptcontent = esc_attr(get_theme_mod( 'excerpt_content', 'content' ));           
				 switch ($excerptcontent) {
					case "content" :
						the_content( esc_html__( 'Read More', 'emphasize') );
					break;
					case "excerpt" : 
						echo '<p>' . the_excerpt() . '</p>' ;
					break;
				}
			echo '</div><footer class="entry-footer">';
			get_template_part( 'template-parts/summary-footer' );
			echo '</footer>';
		break;
		
		
		// Standard summary centered no left or right sidebar
		case "standardcentered" :

			 if  (esc_attr(get_theme_mod('move_featured','top')) == 'top' ) :
				echo '<a href="' . get_permalink() . '">';
				the_post_thumbnail( '', array( 'class' => 'image-hover style3 featured-top' ) ) ;
				echo '</a>' ;
			endif;
			
			echo '<header class="entry-header text-center style3">';
			get_template_part( 'template-parts/post-header' );
			echo '</header>';
			
			if  (esc_attr(get_theme_mod('move_featured','top')) == 'bottom' ) :
				echo '<a href="' . get_permalink() . '">';
				the_post_thumbnail( '', array( 'class' => 'image-hover style3 featured-bottom' ) ) ;
				echo '</a>' ;
			endif;
			
			echo '<div class="entry-content text-center">';
		// Option of content or excerpt
			$excerptcontent = esc_attr(get_theme_mod( 'excerpt_content', 'content' ));           
				 switch ($excerptcontent) {
					case "content" :
						the_content( esc_html__( 'Read More', 'emphasize') );
					break;
					case "excerpt" : 
						echo '<p>' . the_excerpt() . '</p>' ;
					break;
				}
			echo '</div><footer class="entry-footer text-center">';
			get_template_part( 'template-parts/summary-footer' );
			echo '</footer>';
		break;
		
		// Left featured image with no left or right sidebars
		case "leftfeatured" :
		
			echo '<div class="row">';
			// check for featured image
			if ( has_post_thumbnail() ) {
				echo '<div class="col-md-5"><a href="' . get_permalink() . '">';
					the_post_thumbnail( '', array( 'class' => 'image-hover style6 featured-top' ) ) ;
				echo '</a></div><div class="col-md-7">' ;
			}
			// if no featured image
			else {
				echo '<div class="col-md-12">';
			}			
			echo '<header class="entry-header style6">';
				get_template_part( 'template-parts/post-header' );			
			echo '</header><div class="entry-content">';
				the_excerpt( );			
			echo '</div><footer class="entry-footer">';
				get_template_part( 'template-parts/summary-footer' );
			echo '</footer></div></div>';
		break;
						
	}
?>

   
</article><!-- #post-## -->