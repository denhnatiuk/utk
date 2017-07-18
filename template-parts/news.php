      <div id="news" class="section news container-fluid">
            [wp_posts_carousel ]
        
        	<?php
			if ( have_posts() ) :
                        echo "<h2 class=\"section_header\">News</h2>";
				/* Start the Loop */
				while ( have_posts() ) : the_post();
				
				      

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

      </div>