<?php
/**
 * Footer sidebar at the bottom of the page 
 * @package Emphasize
 * 
 */


if (   ! is_active_sidebar( 'footer'  )	)

		return;
	// If we get this far, we have widgets. Let do this.
?>

<aside id="footer-group" class="widget-area" role="complementary">
    <div class="container">
        <div class="row">
        			
                <div class="col-md-12" role="complementary">
                    <?php dynamic_sidebar( 'footer' ); ?>
                </div>
  
        </div>
	</div>
</aside>
